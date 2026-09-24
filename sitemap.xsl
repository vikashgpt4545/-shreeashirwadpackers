<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="2.0" 
    xmlns:html="http://www.w3.org/TR/REC-html40"
    xmlns:sitemap="http://www.sitemaps.org/schemas/sitemap/0.9"
    xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
  <xsl:output method="html" version="1.0" encoding="UTF-8" indent="yes"/>
  <xsl:template match="/">
    <html lang="en">
      <head>
        <title>XML Sitemap | Shree Ashirwad Packers and Movers</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <style>
          * { box-sizing: border-box; margin: 0; padding: 0; }
          body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            background: #f8fafc;
            color: #1e293b;
            padding: 30px 20px;
          }
          .container {
            max-width: 1100px;
            margin: 0 auto;
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.06);
            overflow: hidden;
            border: 1px solid #e2e8f0;
          }
          .header {
            background: linear-gradient(135deg, #0f223d 0%, #1a365d 100%);
            color: #ffffff;
            padding: 32px 30px;
          }
          .header h1 {
            font-size: 1.75rem;
            font-weight: 700;
            margin-bottom: 8px;
          }
          .header p {
            color: #cbd5e1;
            font-size: 0.95rem;
          }
          .stats {
            display: flex;
            gap: 20px;
            margin-top: 18px;
          }
          .stat-badge {
            background: rgba(255,255,255,0.12);
            padding: 6px 14px;
            border-radius: 9999px;
            font-size: 0.85rem;
            font-weight: 600;
            color: #ff9800;
          }
          .table-wrapper {
            overflow-x: auto;
            padding: 20px 30px 40px;
          }
          table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.9rem;
          }
          th {
            background: #f1f5f9;
            color: #475569;
            font-weight: 700;
            text-align: left;
            padding: 12px 14px;
            border-bottom: 2px solid #cbd5e1;
          }
          td {
            padding: 12px 14px;
            border-bottom: 1px solid #f1f5f9;
            vertical-align: middle;
          }
          tr:hover td {
            background: #f8fafc;
          }
          a {
            color: #2563eb;
            text-decoration: none;
            word-break: break-all;
          }
          a:hover {
            text-decoration: underline;
            color: #1d4ed8;
          }
          .priority-pill {
            display: inline-block;
            background: #e0f2fe;
            color: #0369a1;
            padding: 2px 8px;
            border-radius: 6px;
            font-weight: 600;
            font-size: 0.8rem;
          }
          .footer {
            text-align: center;
            padding: 20px;
            font-size: 0.85rem;
            color: #94a3b8;
            border-top: 1px solid #f1f5f9;
          }
        </style>
      </head>
      <body>
        <div class="container">
          <div class="header">
            <h1>XML Sitemap</h1>
            <p>Generated for Search Engines (Google, Bing, Yahoo) and AI indexers</p>
            <div class="stats">
              <span class="stat-badge">Total URLs: <xsl:value-of select="count(sitemap:urlset/sitemap:url)"/></span>
              <span class="stat-badge">Shree Ashirwad Packers and Movers</span>
            </div>
          </div>
          <div class="table-wrapper">
            <table>
              <thead>
                <tr>
                  <th style="width: 50px;">#</th>
                  <th>URL (Location)</th>
                  <th style="width: 120px;">Priority</th>
                  <th style="width: 130px;">Change Freq</th>
                  <th style="width: 150px;">Last Modified</th>
                </tr>
              </thead>
              <tbody>
                <xsl:for-each select="sitemap:urlset/sitemap:url">
                  <tr>
                    <td><xsl:value-of select="position()"/></td>
                    <td>
                      <a href="{sitemap:loc}" target="_blank">
                        <xsl:value-of select="sitemap:loc"/>
                      </a>
                    </td>
                    <td>
                      <span class="priority-pill"><xsl:value-of select="sitemap:priority"/></span>
                    </td>
                    <td><xsl:value-of select="sitemap:changefreq"/></td>
                    <td><xsl:value-of select="substring(sitemap:lastmod, 0, 11)"/></td>
                  </tr>
                </xsl:for-each>
              </tbody>
            </table>
          </div>
          <div class="footer">
            Shree Ashirwad Packers and Movers &amp;bull; Jharkhand's Trusted Relocation Partner
          </div>
        </div>
      </body>
    </html>
  </xsl:template>
</xsl:stylesheet>
