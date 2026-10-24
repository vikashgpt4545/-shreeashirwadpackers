const http = require('http');
const { spawn } = require('child_process');
const fs = require('fs');

const edgePath = 'C:\\Program Files (x86)\\Microsoft\\Edge\\Application\\msedge.exe';

const testCss = fs.readFileSync('scratch/test_css.txt', 'utf8');

const targets = [
  { url: 'http://127.0.0.1:8000/kolkata-to-phusro-packers-and-movers', name: 'kolkata_phusro' },
  { url: 'http://127.0.0.1:8000/ranchi-to-deoghar-packers-and-movers', name: 'ranchi_deoghar' },
  { url: 'http://127.0.0.1:8000/packers-and-movers-in-dhanbad', name: 'dhanbad_hub' }
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

      for (const t of targets) {
        await send('Page.navigate', { url: t.url });
        await new Promise(r => setTimeout(r, 600));

        await send('Runtime.evaluate', {
          expression: `(() => {
            const s = document.createElement('style');
            s.id = 'responsive-guard';
            s.textContent = \`${testCss}\`;
            document.head.appendChild(s);
          })()`
        });

        await new Promise(r => setTimeout(r, 400));

        const shot = await send('Page.captureScreenshot', { format: 'png' });
        fs.writeFileSync(`scratch/${t.name}_fixed.png`, Buffer.from(shot.data, 'base64'));
        console.log(`Saved scratch/${t.name}_fixed.png`);
      }

      ws.close();
      edge.kill();
    };
  } catch (e) {
    console.error('Error:', e);
    edge.kill();
  }
}, 2000);
