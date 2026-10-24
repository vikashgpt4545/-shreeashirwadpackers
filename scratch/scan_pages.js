const fs = require('fs');
const path = require('path');

const pagesDir = 'pages';
const files = fs.readdirSync(pagesDir).filter(f => f.endsWith('.php'));
console.log('Total PHP files in pages/:', files.length);

let routeHeroCount = 0;
let pageHeroCount = 0;
let otherCount = 0;
const routeHeroFiles = [];

for (const file of files) {
  const content = fs.readFileSync(path.join(pagesDir, file), 'utf8');
  if (content.includes('.route-hero')) {
    routeHeroCount++;
    routeHeroFiles.push(file);
  } else if (content.includes('.page-hero') || content.includes('hero-section')) {
    pageHeroCount++;
  } else {
    otherCount++;
  }
}

console.log('Files with .route-hero:', routeHeroCount);
console.log('Files with .page-hero / hero-section:', pageHeroCount);
console.log('Other files:', otherCount);
fs.writeFileSync('scratch/route_hero_files.json', JSON.stringify(routeHeroFiles, null, 2));
