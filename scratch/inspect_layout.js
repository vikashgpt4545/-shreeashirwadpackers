const { spawn } = require('child_process');
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
      const res = await send('Runtime.evaluate', {
        expression: `(() => {
          const breadcrumb = document.querySelector('.breadcrumb-container');
          const hero = document.querySelector('.route-hero');
          const quote = document.querySelector('#quote-form');
          const h1 = document.querySelector('h1');
          return {
            breadcrumbRect: breadcrumb ? breadcrumb.getBoundingClientRect() : null,
            heroRect: hero ? hero.getBoundingClientRect() : null,
            quoteRect: quote ? quote.getBoundingClientRect() : null,
            h1Rect: h1 ? h1.getBoundingClientRect() : null,
            bodyChildren: Array.from(document.body.children).map(c => ({
              tag: c.tagName,
              class: c.className,
              rect: c.getBoundingClientRect()
            }))
          };
        })()`,
        returnByValue: true
      });
      console.log('DOM layout:', JSON.stringify(res.result.value, null, 2));
      ws.close();
      edge.kill();
    };
  } catch (err) {
    console.error(err);
    edge.kill();
  }
}, 2000);
