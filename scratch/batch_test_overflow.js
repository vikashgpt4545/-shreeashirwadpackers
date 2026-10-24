const http = require('http');
const { spawn } = require('child_process');
const fs = require('fs');
const path = require('path');

const edgePath = 'C:\\Program Files (x86)\\Microsoft\\Edge\\Application\\msedge.exe';

const allFiles = fs.readdirSync('pages').filter(f => f.endsWith('.php'));
// Test a wide sample of 30 pages from different groups
const testFiles = [
  // 10 route-hero pages from different corridors
  'kolkata-to-phusro-packers-and-movers.php',
  'kundahit-to-ranchi-packers-and-movers.php',
  'kathikund-to-ranchi-packers-and-movers.php',
  'lesliganj-to-ranchi-packers-and-movers.php',
  'chandil-to-ranchi-packers-and-movers.php',
  'kurdeg-to-ranchi-packers-and-movers.php',
  'senha-to-ranchi-packers-and-movers.php',
  'markacho-to-ranchi-packers-and-movers.php',
  'ormanjhi-to-ranchi-packers-and-movers.php',
  'phusro-to-ranchi-packers-and-movers.php',
  // 10 earlier route pages
  'ranchi-to-deoghar-packers-and-movers.php',
  'ranchi-to-dumka-packers-and-movers.php',
  'bokaro-to-dhanbad-packers-and-movers.php',
  'deoghar-to-ranchi-packers-and-movers.php',
  'hazaribagh-to-ranchi-packers-and-movers.php',
  'jamtara-to-ranchi-packers-and-movers.php',
  'dhanbad-to-ranchi-packers-and-movers.php',
  'jamshedpur-to-ranchi-packers-and-movers.php',
  'giridih-to-ranchi-packers-and-movers.php',
  'ramgarh-to-ranchi-packers-and-movers.php',
  // 10 district hubs & services
  'packers-and-movers-in-ranchi.php',
  'packers-and-movers-in-dhanbad.php',
  'packers-and-movers-in-bokaro.php',
  'packers-and-movers-in-deoghar.php',
  'packers-and-movers-in-hazaribagh.php',
  'packers-and-movers-in-jamshedpur.php',
  'packers-and-movers-in-giridih.php',
  'about.php',
  'contact.php',
  'pay-online.php'
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

      const results = [];
      for (const f of testFiles) {
        const slug = f.replace('.php', '');
        const url = `http://127.0.0.1:8000/${slug}`;
        await send('Page.navigate', { url });
        await new Promise(r => setTimeout(r, 600));

        const evalRes = await send('Runtime.evaluate', {
          expression: `(() => {
            const w = window.innerWidth;
            const sw = document.body ? document.body.scrollWidth : 0;
            const overflowing = [];
            if (document.body) {
              for (const el of document.querySelectorAll('*')) {
                const r = el.getBoundingClientRect();
                if (r.right > w + 2) {
                  overflowing.push(el.tagName + (el.className ? '.' + el.className.split(' ')[0] : ''));
                }
              }
            }
            return {
              slug: '${slug}',
              scrollWidth: sw,
              overflow: sw > w,
              overflowCount: overflowing.length,
              sampleOverflow: overflowing.slice(0, 3)
            };
          })()`,
          returnByValue: true
        });

        results.push(evalRes.result.value);
        console.log(`${slug}: scrollWidth=${evalRes.result.value.scrollWidth}, overflow=${evalRes.result.value.overflow}`);
      }

      fs.writeFileSync('scratch/batch_overflow_results.json', JSON.stringify(results, null, 2));
      ws.close();
      edge.kill();
    };
  } catch (e) {
    console.error('Error:', e);
    edge.kill();
  }
}, 2000);
