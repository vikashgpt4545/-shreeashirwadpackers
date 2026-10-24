const http = require('http');
const { spawn } = require('child_process');

// Path to Edge
const edgePath = 'C:\\Program Files (x86)\\Microsoft\\Edge\\Application\\msedge.exe';

console.log('Starting Edge headless...');
const edge = spawn(edgePath, [
  '--headless=new',
  '--remote-debugging-port=9222',
  '--disable-gpu',
  '--no-first-run',
  '--no-default-browser-check',
  '--window-size=382,642',
  'http://127.0.0.1:8000/kolkata-to-phusro-packers-and-movers'
]);

edge.on('error', (err) => {
  console.error('Failed to start Edge:', err);
});

setTimeout(() => {
  http.get('http://127.0.0.1:9222/json', (res) => {
    let data = '';
    res.on('data', chunk => data += chunk);
    res.on('end', () => {
      console.log('Edge CDP response:', data);
      edge.kill();
    });
  }).on('error', (err) => {
    console.error('CDP connect error:', err);
    edge.kill();
  });
}, 2000);
