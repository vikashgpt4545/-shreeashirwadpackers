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
  'http://127.0.0.1:8000/ranchi-to-deoghar-packers-and-movers'
]);

setTimeout(async () => {
  try {
    const listRes = await fetch('http://127.0.0.1:9222/json');
    const pages = await listRes.json();
    const page = pages.find(p => p.type === 'page');
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
          const overflowing = [];
          for (const el of document.querySelectorAll('*')) {
            const r = el.getBoundingClientRect();
            if (r.right > w + 2) {
              overflowing.push({
                tag: el.tagName,
                class: el.className,
                left: Math.round(r.left),
                right: Math.round(r.right),
                width: Math.round(r.width),
                htmlSnippet: el.outerHTML.slice(0, 100)
              });
            }
          }
          return {
            totalOverflowing: overflowing.length,
            top10: overflowing.slice(0, 10)
          };
        })()`,
        returnByValue: true
      });

      console.log('TOP 10 OVERFLOWING IN RANCHI-TO-DEOGHAR:');
      console.log(JSON.stringify(evalRes.result.value, null, 2));

      ws.close();
      edge.kill();
    };
  } catch (e) {
    console.error('Error:', e);
    edge.kill();
  }
}, 2000);
