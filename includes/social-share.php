<?php
/**
 * Lightweight Native Social Share Bar Component
 * Shree Ashirwad Packers and Movers
 */

$share_url = isset($canonical_url) ? $canonical_url : (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$share_title = isset($page_title) ? $page_title : 'Shree Ashirwad Packers and Movers - Relocation Specialists';

$encoded_url = urlencode($share_url);
$encoded_title = urlencode($share_title);
$wa_text = urlencode("Check out this helpful relocation guide: " . $share_title . " - " . $share_url);
?>
<div class="social-share-bar" style="margin: 28px 0; padding: 18px 22px; background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 14px;">
  <div style="display: flex; align-items: center; gap: 8px;">
    <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="#ff6a28" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
      <circle cx="18" cy="5" r="3"></circle>
      <circle cx="6" cy="12" r="3"></circle>
      <circle cx="18" cy="19" r="3"></circle>
      <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line>
      <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line>
    </svg>
    <span style="font-size: 0.92rem; font-weight: 700; color: #0f223d;">Share this Guide:</span>
  </div>

  <div style="display: flex; align-items: center; gap: 8px; flex-wrap: wrap;">
    <!-- WhatsApp -->
    <a href="https://api.whatsapp.com/send?text=<?php echo $wa_text; ?>" target="_blank" rel="noopener noreferrer" title="Share on WhatsApp" style="display: inline-flex; align-items: center; gap: 6px; background: #25D366; color: #ffffff; padding: 7px 14px; border-radius: 8px; font-size: 0.82rem; font-weight: 700; text-decoration: none; transition: opacity 0.2s;">
      <svg viewBox="0 0 24 24" width="15" height="15" fill="currentColor"><path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766 0-3.18-2.587-5.771-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.007c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86.173.086.275.072.376-.044.101-.116.433-.506.549-.68.116-.173.231-.145.39-.086s1.011.477 1.184.564.289.13.332.202c.045.072.045.419-.099.824z"/></svg>
      <span>WhatsApp</span>
    </a>

    <!-- Facebook -->
    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $encoded_url; ?>" target="_blank" rel="noopener noreferrer" title="Share on Facebook" style="display: inline-flex; align-items: center; gap: 6px; background: #1877F2; color: #ffffff; padding: 7px 14px; border-radius: 8px; font-size: 0.82rem; font-weight: 700; text-decoration: none;">
      <svg viewBox="0 0 24 24" width="15" height="15" fill="currentColor"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg>
      <span>Facebook</span>
    </a>

    <!-- Twitter / X -->
    <a href="https://twitter.com/intent/tweet?text=<?php echo $encoded_title; ?>&url=<?php echo $encoded_url; ?>" target="_blank" rel="noopener noreferrer" title="Share on Twitter" style="display: inline-flex; align-items: center; gap: 6px; background: #000000; color: #ffffff; padding: 7px 14px; border-radius: 8px; font-size: 0.82rem; font-weight: 700; text-decoration: none;">
      <svg viewBox="0 0 24 24" width="13" height="13" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
      <span>Post</span>
    </a>

    <!-- Copy Link -->
    <button type="button" onclick="copyShareLink(this, '<?php echo $share_url; ?>')" title="Copy Guide Link" style="display: inline-flex; align-items: center; gap: 6px; background: #ffffff; color: #334155; border: 1px solid #cbd5e1; padding: 7px 14px; border-radius: 8px; font-size: 0.82rem; font-weight: 700; cursor: pointer; transition: all 0.2s;">
      <svg viewBox="0 0 24 24" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path></svg>
      <span class="copy-btn-text">Copy Link</span>
    </button>
  </div>
</div>
<script>
function copyShareLink(btn, url) {
  navigator.clipboard.writeText(url).then(function() {
    var txt = btn.querySelector('.copy-btn-text');
    var oldText = txt.textContent;
    txt.textContent = 'Copied!';
    btn.style.background = '#22c55e';
    btn.style.color = '#ffffff';
    btn.style.borderColor = '#22c55e';
    setTimeout(function() {
      txt.textContent = oldText;
      btn.style.background = '#ffffff';
      btn.style.color = '#334155';
      btn.style.borderColor = '#cbd5e1';
    }, 2200);
  });
}
</script>
