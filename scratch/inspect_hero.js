const http = require('http');
const { spawn } = require('child_process');

const edgePath = 'C:\\Program Files (x86)\\Microsoft\\Edge\\Application\\msedge.exe';

const edge = spawn(edgePath, [
  '--headless=new',
  '--remote-debugging-port=9222',
  '--disable-gpu',
  '--no-first-run',
  '--no-default-browser-check',
  '--window-size=382,642',
  'http://127.0.0.1:8000/kolkata-to-phusro-packers-and-movers'
]);

setTimeout(async () => {
  try {
    const listRes = await fetch('http://127.0.0.1:9222/json');
    const pages = await listRes.json();
    const page = pages.find(p => p.type === 'page' && p.url.includes('kolkata-to-phusro'));
    const ws = new WebSocket(page.webSocketDebuggerUrl);

    let id = 1;
    function send(method, params = {}) {
      return new Promise((resolve) => {
        const msgId = id++;
        const handler = (event) => {
          const resp = JSON.parse(event.data);
          if (resp.id === msgId) {
            ws.removeEventListener('message', handler);
            resolve(resp.result);
          }
        };
        ws.addEventListener('message', handler);
        ws.send(JSON.stringify({ id: msgId, method, params }));
      });
    }

    ws.onopen = async () => {
      await send('Emulation.setDeviceMetricsOverride', {
        width: 382,
        height: 642,
        deviceScaleFactor: 2,
        mobile: true
      });

      await new Promise(r => setTimeout(r, 1000));

      const evalRes = await send('Runtime.evaluate', {
        expression: `(() => {
          const w = window.innerWidth;
          const hero = document.querySelector('.route-hero');
          const heroElements = [];
          if (hero) {
            for (const el of hero.querySelectorAll('*')) {
              const r = el.getBoundingClientRect();
              heroElements.push({
                tag: el.tagName,
                class: el.className,
                rectLeft: Math.round(r.left),
                rectRight: Math.round(r.right),
                rectWidth: Math.round(r.width),
                scrollWidth: el.scrollWidth,
                text: el.innerText ? el.innerText.slice(0, 40) : ''
              });
            }
          }

          return {
            windowInnerWidth: window.innerWidth,
            documentElementClientWidth: document.documentElement.clientWidth,
            documentElementScrollWidth: document.documentElement.scrollWidth,
            bodyClientWidth: document.body.clientWidth,
            bodyScrollWidth: document.body.scrollWidth,
            heroRect: hero ? hero.getBoundingClientRect() : null,
            heroElements: heroElements.filter(e => e.rectRight > 380)
          };
        })()`,
        returnByValue: true
      });

      console.log('HERO OVERFLOW RESULT:');
      console.log(JSON.stringify(evalRes.result.value, null, 2));

      ws.close();
      edge.kill();
    };
  } catch (e) {
    console.error('Error:', e);
    edge.kill();
  }
}, 2000);
