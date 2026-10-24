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
    if (!page) {
      console.error('Target page not found');
      edge.kill();
      return;
    }

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
          const sw = document.documentElement.scrollWidth;
          const bw = document.body.scrollWidth;
          const cw = document.documentElement.clientWidth;

          const overflowing = [];
          const all = document.querySelectorAll('*');
          for (const el of all) {
            const rect = el.getBoundingClientRect();
            // check elements that extend past viewport width
            if (rect.right > w + 2) {
              overflowing.push({
                tag: el.tagName,
                id: el.id,
                className: el.className,
                rectRight: Math.round(rect.right),
                rectWidth: Math.round(rect.width),
                scrollWidth: el.scrollWidth,
                clientWidth: el.clientWidth,
                outerHTML: el.outerHTML.slice(0, 100)
              });
            }
          }

          return {
            innerWidth: w,
            clientWidth: cw,
            scrollWidthDoc: sw,
            scrollWidthBody: bw,
            overflowingCount: overflowing.length,
            overflowing: overflowing
          };
        })()`,
        returnByValue: true
      });

      console.log('EVAL RESULT:', JSON.stringify(evalRes, null, 2));

      ws.close();
      edge.kill();
    };

  } catch (e) {
    console.error('Error:', e);
    edge.kill();
  }
}, 2000);
