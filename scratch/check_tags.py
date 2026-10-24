from html.parser import HTMLParser

class TagChecker(HTMLParser):
    def __init__(self):
        super().__init__()
        self.stack = []
        self.void_tags = {'area', 'base', 'br', 'col', 'embed', 'hr', 'img', 'input', 'link', 'meta', 'param', 'source', 'track', 'wbr'}

    def handle_starttag(self, tag, attrs):
        if tag.lower() not in self.void_tags:
            self.stack.append((tag.lower(), self.getpos()))

    def handle_endtag(self, tag):
        tag_l = tag.lower()
        if tag_l in self.void_tags:
            return
        if not self.stack:
            print(f"Unexpected closing tag </{tag}> at line {self.getpos()[0]}")
            return
        last_tag, pos = self.stack[-1]
        if last_tag == tag_l:
            self.stack.pop()
        else:
            # find if it matches an earlier tag
            found = False
            for i in range(len(self.stack) - 1, -1, -1):
                if self.stack[i][0] == tag_l:
                    found = True
                    break
            if found:
                while self.stack and self.stack[-1][0] != tag_l:
                    unclosed, unclosed_pos = self.stack.pop()
                    print(f"Unclosed tag <{unclosed}> from line {unclosed_pos[0]}, closed by </{tag}> at line {self.getpos()[0]}")
                if self.stack:
                    self.stack.pop()
            else:
                print(f"Mismatched closing tag </{tag}> at line {self.getpos()[0]} (expected </{last_tag}> from line {pos[0]})")

with open('scratch/kolkata_phusro_dump.html', 'r', encoding='utf-8', errors='ignore') as f:
    content = f.read()

checker = TagChecker()
checker.feed(content)
print(f"Remaining unclosed tags: {len(checker.stack)}")
for t, pos in checker.stack:
    print(f"  <{t}> from line {pos[0]}")
