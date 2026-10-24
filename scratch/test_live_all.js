const http = require('http');
const { spawn } = require('child_process');
const fs = require('fs');

const edgePath = 'C:\\Program Files (x86)\\Microsoft\\Edge\\Application\\msedge.exe';

const testUrls = [
  'http://127.0.0.1:8000/kolkata-to-phusro-packers-and-movers',
  'http://127.0.0.1:8000/ranchi-to-deoghar-packers-and-movers',
  'http://127.0.0.1:8000/ranchi-to-dumka-packers-and-movers',
  'http://127.0.0.1:8000/packers-and-movers-in-dhanbad',
  'http://127.0.0.1:8000/kundahit-to-ranchi-packers-and-movers',
  'http://127.0.0.1:8000/kathikund-to-ranchi-packers-and-movers',
  'http://127.0.0.1:8000/lesliganj-to-ranchi-packers-and-movers',
  'http://127.0.0.1:8000/chandil-to-ranchi-packers-and-movers',
  'http://127.0.0.1:8000/kurdeg-to-ranchi-packers-and-movers',
  'http://127.0.0.1:8000/senha-to-ranchi-packers-and-movers',
  'http://127.0.0.1:8000/markacho-to-ranchi-packers-and-movers',
  'http://127.0.0.1:8000/ormanjhi-to-ranchi-packers-and-movers',
  'http://127.0.0.1:8000/phusro-to-ranchi-packers-and-movers',
  'http://127.0.0.1:8000/packers-and-movers-in-ranchi',
  'http://127.0.0.1:8000/about',
  'http://127.0.0.1:8000/contact'
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

      console.log('Testing live pages with style.css:');
      let allPassed = true;

      for (const u of testUrls) {
        await send('Page.navigate', { url: u });
        await new Promise(r => setTimeout(r, 600));

        const evalRes = await send('Runtime.evaluate', {
          expression: `(() => {
            const w = window.innerWidth;
            const sw = document.body ? document.body.scrollWidth : 0;
            return {
              url: window.location.pathname,
              bodyScrollWidth: sw,
              overflow: sw > w
            };
          })()`,
          returnByValue: true
        });

        const r = evalRes.result.value;
        if (r.overflow) {
          allPassed = false;
          console.log('FAIL:', JSON.stringify(r));
        } else {
          console.log('PASS:', r.url, 'sw=' + r.bodyScrollWidth);
        }
      }

      // Capture final real live screenshot of kolkata-to-phusro
      await send('Page.navigate', { url: 'http://127.0.0.1:8000/kolkata-to-phusro-packers-and-movers' });
      await new Promise(r => setTimeout(r, 600));
      const shot = await send('Page.captureScreenshot', { format: 'png' });
      fs.writeFileSync('scratch/final_live_kolkata_phusro.png', Buffer.from(shot.data, 'base64'));
      console.log('Saved scratch/final_live_kolkata_phusro.png');

      console.log('ALL LIVE TESTS PASSED:', allPassed);
      ws.close();
      edge.kill();
    };
  } catch (e) {
    console.error('Error:', e);
    edge.kill();
  }
}, 2000);
