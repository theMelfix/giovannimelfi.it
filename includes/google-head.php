<?php
/**
 * Tag Google da inserire nell'<head> (Search Console + GA4 con Consent Mode v2).
 * Richiede che $GA4_ID e $GSC_VERIFICATION siano definiti (includes/config.php).
 * Va incluso il più in alto possibile nell'<head>.
 */
$GA4_ID = $GA4_ID ?? '';
$GSC_VERIFICATION = $GSC_VERIFICATION ?? '';
?>
<?php if ($GSC_VERIFICATION !== ''): ?>
<meta name="google-site-verification" content="<?= htmlspecialchars($GSC_VERIFICATION) ?>">
<?php endif; ?>
<?php if ($GA4_ID !== ''): ?>
<!-- Google Consent Mode v2 — di default TUTTO negato finché l'utente non acconsente -->
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('consent', 'default', {
    'ad_storage': 'denied',
    'ad_user_data': 'denied',
    'ad_personalization': 'denied',
    'analytics_storage': 'denied',
    'wait_for_update': 500
  });
  // Ripristina il consenso dato in una visita precedente
  try {
    if (localStorage.getItem('cookie-consent') === 'granted') {
      gtag('consent', 'update', { 'analytics_storage': 'granted' });
    }
  } catch (e) {}
</script>
<!-- Google Analytics 4 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=<?= htmlspecialchars($GA4_ID) ?>"></script>
<script>
  gtag('js', new Date());
  gtag('config', '<?= htmlspecialchars($GA4_ID) ?>', { 'anonymize_ip': true });
</script>
<?php endif; ?>
