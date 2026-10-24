const http = require('http');
const { spawn } = require('child_process');
const fs = require('fs');

const edgePath = 'C:\\Program Files (x86)\\Microsoft\\Edge\\Application\\msedge.exe';

const edge = spawn(edgePath, [
  '--headless=new',
  '--remote-debugging-port=9223',
  '--disable-gpu',
  '--no-first-run',
  '--no-default-browser-check',
  '--window-size=1200,900',
  'http://127.0.0.1:8000/packers-and-movers-in-greater-noida'
]);

setTimeout(async () => {
  try {
    const listRes = await fetch('http://127.0.0.1:9223/json');
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

    await new Promise(r => ws.onopen = r);
    // Find heading with text "Our Proven 5-Step Relocation Methodology" and scroll to it
    await send('Runtime.evaluate', { 
      expression: `
        Array.from(document.querySelectorAll('h2')).find(h => h.textContent.includes('Our Proven 5-Step Relocation Methodology'))?.scrollIntoView({behavior: 'instant', block: 'center'});
      `
    });
    await new Promise(r => setTimeout(r, 600));

    const shot = await send('Page.captureScreenshot', {});
    fs.writeFileSync('scratch/gn_debug.png', Buffer.from(shot.data, 'base64'));
    console.log('Saved scratch/gn_debug.png');
    edge.kill();
    process.exit(0);
  } catch (err) {
    console.error(err);
    edge.kill();
    process.exit(1);
  }
}, 2000);
