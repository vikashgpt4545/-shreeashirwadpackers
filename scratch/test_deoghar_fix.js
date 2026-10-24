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

      await new Promise(r => setTimeout(r, 600));

      const testCss = `
        html, body {
          overflow-x: hidden !important;
          max-width: 100% !important;
          width: 100% !important;
        }
        .route-main-content {
          width: 100% !important;
          max-width: 100% !important;
          box-sizing: border-box !important;
          overflow-x: hidden !important;
          padding-left: 15px !important;
          padding-right: 15px !important;
        }
        .table-responsive {
          width: 100% !important;
          max-width: 100% !important;
          box-sizing: border-box !important;
          overflow-x: auto !important;
          -webkit-overflow-scrolling: touch !important;
          display: block !important;
        }
        .table-responsive table {
          min-width: 500px;
        }
        .img-showcase img {
          max-width: 100% !important;
          width: 100% !important;
          height: auto !important;
        }
        .cluster-grid-deoghar {
          grid-template-columns: 1fr !important;
        }
        .grid-cards {
          grid-template-columns: 1fr !important;
        }
        .steps-container {
          grid-template-columns: 1fr !important;
        }
      `;

      await send('Runtime.evaluate', {
        expression: `(() => {
          const style = document.createElement('style');
          style.textContent = \`${testCss}\`;
          document.head.appendChild(style);
        })()`
      });

      await new Promise(r => setTimeout(r, 800));

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
                right: Math.round(r.right),
                width: Math.round(r.width)
              });
            }
          }
          return {
            innerWidth: w,
            bodyScrollWidth: document.body.scrollWidth,
            overflowingCount: overflowing.length,
            overflowing: overflowing
          };
        })()`,
        returnByValue: true
      });

      console.log('DEOGHAR AFTER FIX:');
      console.log(JSON.stringify(evalRes.result.value, null, 2));

      ws.close();
      edge.kill();
    };
  } catch (e) {
    console.error('Error:', e);
    edge.kill();
  }
}, 2000);
