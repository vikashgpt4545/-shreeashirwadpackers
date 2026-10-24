const fs = require('fs');
const path = require('path');

const pagesDir = 'pages';
const files = fs.readdirSync(pagesDir).filter(f => f.endsWith('.php'));

const groups = {
  routeHero: [],
  pageHero: [],
  other: []
};

for (const file of files) {
  const content = fs.readFileSync(path.join(pagesDir, file), 'utf8');
  if (content.includes('.route-hero')) {
    groups.routeHero.push(file);
  } else if (content.includes('.page-hero')) {
    groups.pageHero.push(file);
  } else {
    groups.other.push(file);
  }
}

console.log('routeHero sample (5):', groups.routeHero.slice(0, 5));
console.log('pageHero sample (5):', groups.pageHero.slice(0, 5));
console.log('other sample (5):', groups.other.slice(0, 5));

// Check if any pages in pageHero or other have overflow issues at 382px
