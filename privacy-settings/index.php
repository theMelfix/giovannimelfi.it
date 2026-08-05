<?php
require dirname(__DIR__) . '/includes/config.php';
$page_type = 'client';
$email = 'info@giovannimelfi.it';
$email_display = '<a href="mailto:' . $email . '">' . $email . '</a>';
?>
<!DOCTYPE html>
<html lang="it">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php include dirname(__DIR__) . '/includes/google-head.php'; ?>

<!-- PRIMARY SEO -->
<title>Privacy Policy & Impostazioni Privacy — Giovanni Melfi</title>
<meta name="description" content="Informativa privacy e gestione del consenso ai cookie del sito giovannimelfi.it. Titolare del trattamento, dati raccolti, cookie, diritti dell'interessato.">
<meta name="robots" content="index, follow">
<meta name="theme-color" content="#0c0818">
<link rel="icon" type="image/svg+xml" href="/favicon.svg">
<link rel="apple-touch-icon" href="/favicon.svg">
<link rel="canonical" href="https://giovannimelfi.it/privacy-settings/">

<!-- OPEN GRAPH -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://giovannimelfi.it/privacy-settings/">
<meta property="og:title" content="Privacy Policy & Impostazioni Privacy — Giovanni Melfi">
<meta property="og:description" content="Informativa privacy e gestione del consenso ai cookie del sito giovannimelfi.it.">
<meta property="og:image" content="https://giovannimelfi.it/og-image.png">
<meta property="og:locale" content="it_IT">
<meta property="og:site_name" content="Giovanni Melfi">

<!-- PERFORMANCE -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Syne:wght@300;400;700;800&family=Space+Mono:wght@400;700&family=Outfit:wght@200;300;400;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>

<?php include dirname(__DIR__) . '/includes/nav.php'; ?>

<section id="privacy" style="padding-top: 140px;">
  <div class="section-header reveal">
    <span class="section-num">·</span>
    <h2 class="section-title">Privacy</h2>
    <div class="section-line"></div>
  </div>

  <?php if (!empty($GA4_ID)): ?>
  <!-- GESTIONE CONSENSO COOKIE -->
  <div class="privacy-body reveal" style="max-width: 700px; margin-bottom: 56px;">
    <h3 style="margin-top:0;">Le tue preferenze sui cookie</h3>
    <p>Stato attuale del consenso ai cookie analitici (Google Analytics):
      <strong id="consent-state">—</strong>.
    </p>
    <div style="display:flex; gap:12px; flex-wrap:wrap; margin-top:20px;">
      <button class="btn-primary" onclick="acceptCookies(); refreshConsentState();">Accetta i cookie analitici</button>
      <button class="btn-secondary" onclick="rejectCookies(); refreshConsentState();">Rifiuta i cookie analitici</button>
    </div>
  </div>
  <?php endif; ?>

  <!-- INFORMATIVA -->
  <div class="privacy-body reveal" style="max-width: 700px;">
    <?php include dirname(__DIR__) . '/includes/privacy-content.php'; ?>
  </div>
</section>

<?php include dirname(__DIR__) . '/includes/footer.php'; ?>

<?php if (!empty($GA4_ID)): ?>
<script>
  function refreshConsentState() {
    var el = document.getElementById('consent-state');
    if (!el) return;
    var v = null;
    try { v = localStorage.getItem('cookie-consent'); } catch (e) {}
    if (v === 'granted') { el.textContent = 'accettati'; }
    else if (v === 'denied') { el.textContent = 'rifiutati'; }
    else { el.textContent = 'non ancora scelto'; }
  }
  refreshConsentState();
</script>
<?php endif; ?>

</body>
</html>
