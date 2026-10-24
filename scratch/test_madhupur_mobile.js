const { spawn } = require('child_process');

const edgePath = 'C:\\Program Files (x86)\\Microsoft\\Edge\\Application\\msedge.exe';

const urls = [
  'http://127.0.0.1:8000/madhupur-to-ranchi-packers-and-movers',
  'http://127.0.0.1:8000/madhupur-to-deoghar-packers-and-movers',
  'http://127.0.0.1:8000/ranchi-to-madhupur-packers-and-movers',
  'http://127.0.0.1:8000/madhupur-to-kolkata-packers-and-movers',
  'http://127.0.0.1:8000/delhi-to-madhupur-packers-and-movers',
  'http://127.0.0.1:8000/packers-and-movers-in-madhupur'
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
      console.log('Testing Madhupur pages on Mobile (382px) & Desktop (1200px)...');
      let allPass = true;
      for (const u of urls) {
        await send('Page.navigate', { url: u });
        await new Promise(r => setTimeout(r, 800));

        // Mobile check (382px)
        await send('Emulation.setDeviceMetricsOverride', { width: 382, height: 642, deviceScaleFactor: 2, mobile: true });
        await new Promise(r => setTimeout(r, 400));
        const mb = await send('Runtime.evaluate', {
          expression: `(() => ({
            scrollWidth: document.documentElement.scrollWidth,
            bodyScrollWidth: document.body.scrollWidth
          }))()`,
          returnByValue: true
        });

        // Desktop check (1200px)
        await send('Emulation.setDeviceMetricsOverride', { width: 1200, height: 900, deviceScaleFactor: 1, mobile: false });
        await new Promise(r => setTimeout(r, 400));
        const dt = await send('Runtime.evaluate', {
          expression: `(() => ({
            title: document.title,
            h1Text: document.querySelector('h1') ? document.querySelector('h1').innerText.substring(0, 45) : 'NO H1',
            bodyWidth: document.body.scrollWidth
          }))()`,
          returnByValue: true
        });

        const slug = u.split('/').pop();
        const mbWidth = mb.result.value.bodyScrollWidth;
        const mbPass = mbWidth <= 382;
        if (!mbPass) allPass = false;

        console.log(`[${mbPass ? 'PASS' : 'FAIL'}] ${slug}`);
        console.log(`       Mobile bodyScrollWidth: ${mbWidth}px | Desktop: ${dt.result.value.bodyWidth}px | H1: ${dt.result.value.h1Text}`);
      }

      console.log('\nMobile verification result:', allPass ? 'ALL TESTS PASSED (Zero horizontal overflow)' : 'TESTS FAILED');
      ws.close();
      edge.kill();
    };
  } catch (err) {
    console.error('Browser testing error:', err);
    edge.kill();
  }
}

run();
