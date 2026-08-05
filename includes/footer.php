<?php $is_client = ($page_type === 'client'); ?>

<footer>
  <div class="footer-copy">
    © <?= date('Y') ?> Dott. Giovanni Melfi &nbsp;·&nbsp; P.IVA IT01809180886 &nbsp;·&nbsp;
    <a href="/privacy-settings/">Privacy Policy</a>
  </div>
  <div class="footer-links">
    <a href="#hero">Top</a>
    <a href="#about">Chi sono</a>
    <?php if ($is_client): ?>
    <a href="#services">Cosa faccio</a>
    <?php else: ?>
    <a href="#services">Servizi</a>
    <?php endif; ?>
    <a href="#contact">Contatti</a>
    &nbsp;·&nbsp;
    <?php if ($is_client): ?>
    <a href="/developer/" class="footer-switch">Profilo tecnico →</a>
    <?php else: ?>
    <a href="/" class="footer-switch">← Versione clienti</a>
    <?php endif; ?>
  </div>
</footer>

<?php $analytics_on = !empty($GA4_ID); ?>
<!-- Cookie Banner -->
<div id="cookie-banner">
  <?php if ($analytics_on): ?>
  <p>Usiamo cookie tecnici necessari al funzionamento e, solo con il tuo consenso, cookie analitici (Google Analytics) per capire come viene usato il sito. Puoi accettare o rifiutare.
    <a href="/privacy-settings/">Privacy Policy</a>
  </p>
  <div class="cookie-actions">
    <button class="cookie-reject" onclick="rejectCookies()">Rifiuta</button>
    <button class="cookie-accept" onclick="acceptCookies()">Accetto</button>
  </div>
  <?php else: ?>
  <p>Questo sito utilizza solo cookie tecnici necessari al funzionamento. Nessun cookie di profilazione o di terze parti.
    <a href="/privacy-settings/">Privacy Policy</a>
  </p>
  <div class="cookie-actions">
    <button class="cookie-accept" onclick="acceptCookies()">Accetto</button>
  </div>
  <?php endif; ?>
</div>

<script src="/assets/js/main.js"></script>
