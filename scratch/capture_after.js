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
            if (resp.error) {
              console.error(`CDP Error on ${method}:`, resp.error);
              resolve(null);
            } else {
              resolve(resp.result);
            }
          }
        };
        ws.addEventListener('message', handler);
        ws.send(JSON.stringify({ id: msgId, method, params }));
      });
    }

    ws.onopen = async () => {
      // 1. Desktop full screenshot
      await send('Emulation.setDeviceMetricsOverride', {
        width: 1200,
        height: 900,
        deviceScaleFactor: 1,
        mobile: false
      });
      await new Promise(r => setTimeout(r, 1200));

      const fullShot = await send('Page.captureScreenshot', { format: 'png', captureBeyondViewport: true });
      if (fullShot && fullShot.data) {
        fs.writeFileSync('scratch/after_fix_ormanjhi_full.png', Buffer.from(fullShot.data, 'base64'));
        console.log('Saved scratch/after_fix_ormanjhi_full.png');
      }

      // Top viewport shot (hero, breadcrumb, form)
      const topShot = await send('Page.captureScreenshot', { format: 'png' });
      if (topShot && topShot.data) {
        fs.writeFileSync('scratch/after_fix_ormanjhi_top.png', Buffer.from(topShot.data, 'base64'));
        console.log('Saved scratch/after_fix_ormanjhi_top.png');
      }

      // 2. Mobile viewport (382px)
      await send('Emulation.setDeviceMetricsOverride', {
        width: 382,
        height: 642,
        deviceScaleFactor: 2,
        mobile: true
      });
      await new Promise(r => setTimeout(r, 1200));

      const mobileTopShot = await send('Page.captureScreenshot', { format: 'png' });
      if (mobileTopShot && mobileTopShot.data) {
        fs.writeFileSync('scratch/after_fix_ormanjhi_mobile_top.png', Buffer.from(mobileTopShot.data, 'base64'));
        console.log('Saved scratch/after_fix_ormanjhi_mobile_top.png');
      }

      // Check mobile scrollWidth
      const scrollCheck = await send('Runtime.evaluate', {
        expression: `(() => ({
          innerWidth: window.innerWidth,
          scrollWidth: document.documentElement.scrollWidth,
          bodyScrollWidth: document.body.scrollWidth,
          hasOverflow: document.documentElement.scrollWidth > window.innerWidth || document.body.scrollWidth > window.innerWidth
        }))()`,
        returnByValue: true
      });
      console.log('Mobile scroll check:', scrollCheck.result.value);

      ws.close();
      edge.kill();
    };
  } catch (err) {
    console.error('Error:', err);
    edge.kill();
  }
}, 2000);
