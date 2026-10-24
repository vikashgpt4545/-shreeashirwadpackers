const { spawn } = require('child_process');
const fs = require('fs');

const edgePath = 'C:\\Program Files (x86)\\Microsoft\\Edge\\Application\\msedge.exe';

const edge = spawn(edgePath, [
  '--headless=new',
  '--remote-debugging-port=9222',
  '--disable-gpu',
  '--no-first-run',
  '--no-default-browser-check',
  '--window-size=1200,900',
  'http://127.0.0.1:8000/ormanjhi-to-hazaribagh-packers-and-movers'
]);

setTimeout(async () => {
  try {
    const listRes = await fetch('http://127.0.0.1:9222/json');
    const pages = await listRes.json();
    const page = pages.find(p => p.type === 'page' && p.url.includes('ormanjhi-to-hazaribagh'));
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
        width: 1200,
        height: 900,
        deviceScaleFactor: 1,
        mobile: false
      });
      await new Promise(r => setTimeout(r, 1200));

      const shot = await send('Page.captureScreenshot', { format: 'png' });
      fs.writeFileSync('scratch/before_fix_ormanjhi.png', Buffer.from(shot.data, 'base64'));
      console.log('Successfully saved scratch/before_fix_ormanjhi.png');

      // Also capture full page
      const fullShot = await send('Page.captureScreenshot', { format: 'png', captureBeyondViewport: true });
      fs.writeFileSync('scratch/before_fix_ormanjhi_full.png', Buffer.from(fullShot.data, 'base64'));
      console.log('Successfully saved scratch/before_fix_ormanjhi_full.png');

      ws.close();
      edge.kill();
    };
  } catch (err) {
    console.error('Error:', err);
    edge.kill();
  }
}, 2000);
