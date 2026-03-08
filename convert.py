import re, os, textwrap

root = r"c:\Users\visha\OneDrive\Desktop\demo1"
html_pages = ["about.html","products.html","manufacturing.html","careers.html","contact.html","white-label.html"]

for html in html_pages:
    path = os.path.join(root, html)
    php = os.path.splitext(path)[0] + ".php"
    content = open(path, 'r', encoding='utf-8').read()
    # split body
    body = re.split(r'<body[^>]*>', content, flags=re.I)[1]
    # remove navbar
    body = re.sub(r'<!-- NAVBAR -->.*?</nav>', '', body, flags=re.S)
    # strip footer
    body = re.split(r'<!-- ===== FOOTER ===== -->', body)[0]
    # convert links
    body = re.sub(r'href="([^"]+?)\.html', r'href="\1.php', body)
    body = re.sub(r"href='([^']+?)\.html", r"href='\1.php", body)
    # prepare header
    title = re.search(r'<title>(.*?)</title>', content, flags=re.I)
    desc = re.search(r'<meta name="description" content="(.*?)"', content, flags=re.I)
    pageTitle = title.group(1) if title else ''
    pageDesc = desc.group(1) if desc else ''
    active = os.path.splitext(html)[0]
    php_content = f"""<?php
require_once __DIR__ . '/includes/config.php';
$pageTitle = '{pageTitle}';
$pageDescription = '{pageDesc}';
$activePage = '{active}';
include __DIR__ . '/includes/header.php';
?>
{body}
<?php include __DIR__ . '/includes/footer.php';
"""
    with open(php, 'w', encoding='utf-8') as f:
        f.write(php_content)
    print('created', php)
