const http = require('http');
const { spawn } = require('child_process');

const edgePath = 'C:\\Program Files (x86)\\Microsoft\\Edge\\Application\\msedge.exe';

const testUrls = [
  'http://127.0.0.1:8000/kolkata-to-phusro-packers-and-movers',
  'http://127.0.0.1:8000/ranchi-to-deoghar-packers-and-movers',
  'http://127.0.0.1:8000/ranchi-to-dumka-packers-and-movers',
  'http://127.0.0.1:8000/packers-and-movers-in-dhanbad',
  'http://127.0.0.1:8000/kundahit-to-ranchi-packers-and-movers',
  'http://127.0.0.1:8000/kathikund-to-ranchi-packers-and-movers'
];

const testCss = `
html, body {
  overflow-x: hidden !important;
  max-width: 100% !important;
  width: 100% !important;
}
*, *::before, *::after {
  box-sizing: border-box;
}
img, video, iframe, canvas, svg {
  max-width: 100% !important;
  height: auto;
}
[class*="img-showcase"] img,
.img-showcase img {
  max-width: 100% !important;
  height: auto !important;
}

/* Universal Table Wrapper Protection */
[class*="table-"][class*="-wrapper"],
[class*="-table-wrapper"],
[class*="-table-container"],
.table-responsive,
.pricing-table-container,
.pricing-table-wrapper,
.comparison-table-wrapper,
[style*="overflow-x:auto"],
[style*="overflow-x: auto"] {
  display: block !important;
  width: 100% !important;
  max-width: 100% !important;
  box-sizing: border-box !important;
  overflow-x: auto !important;
  -webkit-overflow-scrolling: touch !important;
}

/* Universal Route Container & Content Safety */
main,
[class*="route-"][class*="-container"],
.route-main-content,
.route-dumka-container,
.article-content {
  width: 100% !important;
  max-width: 100% !important;
  box-sizing: border-box !important;
  overflow-x: hidden !important;
}

/* Decorative Glow Elements Containment */
.hero-glow,
.hero-glow-1,
.hero-glow-2,
[class*="hero-glow"] {
  max-width: 100vw !important;
  overflow: hidden !important;
  pointer-events: none !important;
}

.hero-section,
.page-hero,
.route-hero,
[class*="hero-"][class*="-section"],
[class*="-hero"] {
  overflow: hidden !important;
  position: relative !important;
}

/* Fix grid auto-fit minmax containers that cause mobile overflow */
@media (max-width: 768px) {
  [style*="minmax(320px"],
  [style*="minmax(300px"],
  [style*="minmax(280px"],
  [style*="minmax(260px"],
  [style*="minmax(250px"],
  .grid-cards,
  .steps-container,
  .cluster-grid-deoghar,
  .feature-box-grid,
  [class*="cluster-grid"],
  [class*="grid-cards"],
  [class*="steps-container"] {
    grid-template-columns: 1fr !important;
  }
}

/* Tablet & Mobile Breakpoint (<= 991px) */
@media (max-width: 991px) {
  .route-hero .container {
    display: grid !important;
    grid-template-columns: minmax(0, 1fr) !important;
    gap: 30px !important;
    width: 100% !important;
    max-width: 100% !important;
    padding-left: 16px !important;
    padding-right: 16px !important;
    box-sizing: border-box !important;
  }
  .hero-content {
    min-width: 0 !important;
    width: 100% !important;
    max-width: 100% !important;
  }
  .hero-content h1 {
    font-size: 2.1rem !important;
    line-height: 1.25 !important;
    overflow-wrap: break-word !important;
    word-break: normal !important;
  }
  .hero-form-card {
    min-width: 0 !important;
    width: 100% !important;
    max-width: 100% !important;
    box-sizing: border-box !important;
  }
}

/* Smartphone Breakpoint (<= 768px) */
@media (max-width: 768px) {
  .route-hero {
    padding: 40px 0 35px !important;
  }
  .route-hero .container {
    grid-template-columns: minmax(0, 1fr) !important;
    padding-left: 15px !important;
    padding-right: 15px !important;
    gap: 25px !important;
  }
  .hero-content h1 {
    font-size: 1.75rem !important;
    line-height: 1.25 !important;
    margin-bottom: 14px !important;
    overflow-wrap: break-word !important;
    word-break: normal !important;
  }
  .hero-lead {
    font-size: 0.95rem !important;
    line-height: 1.55 !important;
    margin-bottom: 20px !important;
    overflow-wrap: break-word !important;
  }
  .hero-badges {
    display: flex !important;
    flex-wrap: wrap !important;
    gap: 8px !important;
    margin-bottom: 16px !important;
  }
  .badge-item {
    font-size: 0.78rem !important;
    padding: 5px 11px !important;
    max-width: 100% !important;
    box-sizing: border-box !important;
    white-space: normal !important;
  }
  .hero-cta-group {
    display: flex !important;
    flex-direction: column !important;
    gap: 10px !important;
    width: 100% !important;
  }
  .hero-cta-group a,
  .btn-primary-hero,
  .btn-call-hero {
    width: 100% !important;
    text-align: center !important;
    justify-content: center !important;
    box-sizing: border-box !important;
    padding: 12px 18px !important;
    font-size: 0.95rem !important;
  }
  .hero-form-card {
    padding: 22px 16px !important;
  }
  .hero-form-card h3 {
    font-size: 1.25rem !important;
  }
  .hero-form-card .form-row {
    flex-direction: column !important;
    gap: 0 !important;
  }
  .hero-form-card .form-group {
    width: 100% !important;
    max-width: 100% !important;
    margin-bottom: 10px !important;
    box-sizing: border-box !important;
  }
  .hero-form-card input,
  .hero-form-card select {
    width: 100% !important;
    max-width: 100% !important;
    box-sizing: border-box !important;
    font-size: 0.92rem !important;
  }
  .hero-form-card .form-submit-btn {
    width: 100% !important;
    box-sizing: border-box !important;
    font-size: 0.95rem !important;
    padding: 12px 16px !important;
  }
  .route-main-content,
  .route-dumka-container {
    padding: 30px 15px 50px !important;
    font-size: 0.98rem !important;
  }
  .route-main-content h2,
  .section-dumka-title {
    font-size: 1.5rem !important;
    margin: 30px 0 14px !important;
  }
  .route-main-content h3 {
    font-size: 1.2rem !important;
  }
  .cta-banner {
    padding: 28px 16px !important;
    margin: 30px 0 !important;
  }
  .cta-banner h3 {
    font-size: 1.35rem !important;
  }
  .cta-btn-amber {
    width: 100% !important;
    text-align: center !important;
    box-sizing: border-box !important;
  }
  .cluster-box-deoghar {
    padding: 18px 14px !important;
  }
}

/* Small Smartphone Breakpoint (<= 480px) */
@media (max-width: 480px) {
  .hero-content h1 {
    font-size: 1.55rem !important;
    line-height: 1.25 !important;
  }
  .badge-item {
    font-size: 0.74rem !important;
    padding: 4px 9px !important;
  }
  .route-hero {
    padding: 32px 0 28px !important;
  }
}
`;

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

      for (const u of testUrls) {
        await send('Page.navigate', { url: u });
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

        console.log(JSON.stringify(evalRes.result.value));
      }

      ws.close();
      edge.kill();
    };
  } catch (e) {
    console.error('Error:', e);
    edge.kill();
  }
}, 2000);
