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
          const tc = document.querySelector('.pricing-table-container');
          const t = document.querySelector('.pricing-table');
          return {
            containerRect: tc ? tc.getBoundingClientRect() : null,
            containerScrollWidth: tc ? tc.scrollWidth : null,
            containerClientWidth: tc ? tc.clientWidth : null,
            tableRect: t ? t.getBoundingClientRect() : null,
          };
        })()`,
        returnByValue: true
      });

      console.log('TABLE RESULT:');
      console.log(JSON.stringify(evalRes.result.value, null, 2));

      ws.close();
      edge.kill();
    };
  } catch (e) {
    console.error('Error:', e);
    edge.kill();
  }
}, 2000);
