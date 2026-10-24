const { spawn } = require('child_process');

const edgePath = 'C:\\Program Files (x86)\\Microsoft\\Edge\\Application\\msedge.exe';

const urls = [
  'http://127.0.0.1:8000/ormanjhi-to-hazaribagh-packers-and-movers',
  'http://127.0.0.1:8000/ormanjhi-to-ranchi-packers-and-movers',
  'http://127.0.0.1:8000/ormanjhi-to-bokaro-packers-and-movers',
  'http://127.0.0.1:8000/ranchi-to-ormanjhi-packers-and-movers',
  'http://127.0.0.1:8000/asansol-to-phusro-packers-and-movers',
  'http://127.0.0.1:8000/packers-and-movers-in-chas',
  'http://127.0.0.1:8000/jamtara-to-patna-packers-and-movers',
  'http://127.0.0.1:8000/kundahit-to-ranchi-packers-and-movers',
  'http://127.0.0.1:8000/kolkata-to-phusro-packers-and-movers',
  'http://127.0.0.1:8000/ranchi-to-deoghar-packers-and-movers'
];

async function run() {
  const edge = spawn(edgePath, [
    '--headless=new',
    '--remote-debugging-port=9222',
    '--disable-gpu',
    '--no-first-run',
    '--no-default-browser-check',
    '--window-size=1200,900',
    'about:blank'
  ]);

  await new Promise(r => setTimeout(r, 2000));

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
      console.log('Testing diverse pages on both Desktop (1200px) & Mobile (382px)...');
      for (const u of urls) {
        await send('Page.navigate', { url: u });
        await new Promise(r => setTimeout(r, 1000));

        // Desktop check
        await send('Emulation.setDeviceMetricsOverride', { width: 1200, height: 900, deviceScaleFactor: 1, mobile: false });
        await new Promise(r => setTimeout(r, 500));
        const dt = await send('Runtime.evaluate', {
          expression: `(() => ({
            title: document.title,
            hasBreadcrumb: !!document.querySelector('.breadcrumb, .breadcrumbs, .breadcrumb-container, nav[aria-label="breadcrumb"]'),
            h1Text: document.querySelector('h1') ? document.querySelector('h1').innerText.substring(0, 40) : 'NO H1',
            bodyWidth: document.body.scrollWidth
          }))()`,
          returnByValue: true
        });

        // Mobile check
        await send('Emulation.setDeviceMetricsOverride', { width: 382, height: 642, deviceScaleFactor: 2, mobile: true });
        await new Promise(r => setTimeout(r, 500));
        const mb = await send('Runtime.evaluate', {
          expression: `(() => ({
            scrollWidth: document.documentElement.scrollWidth,
            bodyScrollWidth: document.body.scrollWidth
          }))()`,
          returnByValue: true
        });

        const slug = u.split('/').pop();
        const mbPass = mb.result.value.bodyScrollWidth <= 382;
        console.log(`[${mbPass ? 'PASS' : 'FAIL'}] ${slug}`);
        console.log(`       H1: ${dt.result.value.h1Text}... | Breadcrumb: ${dt.result.value.hasBreadcrumb} | Mobile bodyScrollWidth: ${mb.result.value.bodyScrollWidth}`);
      }

      ws.close();
      edge.kill();
    };
  } catch (err) {
    console.error(err);
    edge.kill();
  }
}

run();
