const fs = require('fs');
const path = require('path');

const files = JSON.parse(fs.readFileSync('scratch/route_hero_files.json', 'utf8'));
console.log('Total files with .route-hero:', files.length);

let hasMedia991 = 0;
let hasMedia768 = 0;
let hasMedia640 = 0;
let hasMedia480 = 0;

for (const f of files) {
  const content = fs.readFileSync(path.join('pages', f), 'utf8');
  if (content.includes('@media (max-width: 991px)')) hasMedia991++;
  if (content.includes('@media (max-width: 768px)')) hasMedia768++;
  if (content.includes('@media (max-width: 640px)')) hasMedia640++;
  if (content.includes('@media (max-width: 480px)')) hasMedia480++;
}

console.log('hasMedia991:', hasMedia991);
console.log('hasMedia768:', hasMedia768);
console.log('hasMedia640:', hasMedia640);
console.log('hasMedia480:', hasMedia480);
