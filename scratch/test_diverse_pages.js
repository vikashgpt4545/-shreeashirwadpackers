const http = require('http');
const { spawn } = require('child_process');

const edgePath = 'C:\\Program Files (x86)\\Microsoft\\Edge\\Application\\msedge.exe';

const testUrls = [
  'http://127.0.0.1:8000/packers-and-movers-in-ichak',
  'http://127.0.0.1:8000/packers-and-movers-in-ranchi',
  'http://127.0.0.1:8000/packers-and-movers-in-dhanbad',
  'http://127.0.0.1:8000/ranchi-to-deoghar-packers-and-movers',
  'http://127.0.0.1:8000/about',
  'http://127.0.0.1:8000/contact',
  'http://127.0.0.1:8000/residential-shifting/'
];

const edge = spawn(edgePath, [
  '--headless=new',
  '--remote-debugging-port=9222',
  '--disable-gpu',
  '--no-first-run',
  '--no-default-browser-check',
  '--window-size=382,642',
  'about:blank'
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

      for (const u of testUrls) {
        await send('Page.navigate', { url: u });
        await new Promise(r => setTimeout(r, 1200));

        const evalRes = await send('Runtime.evaluate', {
          expression: `(() => {
            return {
              url: window.location.pathname,
              innerWidth: window.innerWidth,
              scrollWidthDoc: document.documentElement.scrollWidth,
              scrollWidthBody: document.body.scrollWidth,
              hasHorizontalOverflow: document.body.scrollWidth > window.innerWidth || document.documentElement.scrollWidth > window.innerWidth
            };
          })()`,
          returnByValue: true
        });

        console.log(JSON.stringify(evalRes.result.value));
      }

      ws.close();
      edge.kill();
    };
  } catch (e) {
    console.error('Error:', e);
    edge.kill();
  }
}, 2000);
