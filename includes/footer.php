<?php $is_client = ($page_type === 'client'); ?>

<footer>
  <div class="footer-copy">
    © <?= date('Y') ?> Dott. Giovanni Melfi &nbsp;·&nbsp; P.IVA IT01809180886 &nbsp;·&nbsp;
    <a href="#" onclick="showPrivacy(event)">Privacy Policy</a>
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
    <a href="#" onclick="showPrivacy(event)">Privacy Policy</a>
  </p>
  <div class="cookie-actions">
    <button class="cookie-reject" onclick="rejectCookies()">Rifiuta</button>
    <button class="cookie-accept" onclick="acceptCookies()">Accetto</button>
  </div>
  <?php else: ?>
  <p>Questo sito utilizza solo cookie tecnici necessari al funzionamento. Nessun cookie di profilazione o di terze parti.
    <a href="#" onclick="showPrivacy(event)">Privacy Policy</a>
  </p>
  <div class="cookie-actions">
    <button class="cookie-accept" onclick="acceptCookies()">Accetto</button>
  </div>
  <?php endif; ?>
</div>

<!-- Privacy Modal -->
<div id="privacy-modal">
  <div class="privacy-box">
    <div class="privacy-header">
      <h2 class="privacy-title">Privacy Policy</h2>
      <button class="privacy-close" onclick="closePrivacy()">✕</button>
    </div>
    <div class="privacy-body">
      <p><strong>Ultimo aggiornamento:</strong> Giugno 2026</p>

      <h3>1. Titolare del trattamento</h3>
      <p>Dott. Giovanni Melfi — <?= $email_display ?> — giovannimelfi.it</p>

      <h3>2. Dati raccolti</h3>
      <p>Questo sito non raccoglie dati personali in modo automatico. I dati vengono trattati esclusivamente quando l'utente contatta volontariamente il titolare tramite i recapiti indicati (email, LinkedIn, Instagram).</p>

      <h3>3. Cookie</h3>
      <p>Il sito utilizza <strong>cookie tecnici</strong> necessari al funzionamento (es. memorizzazione delle preferenze sul consenso), che non richiedono consenso.</p>
      <?php if (!empty($GA4_ID)): ?>
      <p>Previo tuo <strong>consenso</strong>, il sito utilizza inoltre <strong>cookie analitici</strong> di <strong>Google Analytics 4</strong> (Google Ireland Ltd.) per raccogliere statistiche aggregate sull'utilizzo del sito. L'indirizzo IP è anonimizzato e, fino al rilascio del consenso, è attivo il <em>Google Consent Mode</em> che impedisce la scrittura di cookie di tracciamento. Non vengono utilizzati cookie per finalità pubblicitarie o di profilazione commerciale.</p>
      <p>Puoi modificare o revocare in qualsiasi momento la tua scelta:
        <a href="#" onclick="manageCookies(event)">gestisci il consenso ai cookie</a>.
        Per maggiori informazioni sul trattamento da parte di Google consulta la
        <a href="https://policies.google.com/privacy" target="_blank" rel="noopener">privacy policy di Google</a>.</p>
      <?php else: ?>
      <p>Non vengono utilizzati cookie di profilazione, tracciamento o di terze parti.</p>
      <?php endif; ?>

      <h3>4. Finalità del trattamento</h3>
      <p>I dati eventualmente comunicati dall'utente sono trattati al solo fine di rispondere alle richieste ricevute, senza cessione a terzi né utilizzo per finalità di marketing.</p>

      <h3>5. Base giuridica</h3>
      <p>Il trattamento si basa sul consenso dell'interessato (Art. 6(1)(a) GDPR) e sul legittimo interesse del titolare nel rispondere alle comunicazioni ricevute (Art. 6(1)(f) GDPR).</p>

      <h3>6. Conservazione</h3>
      <p>I dati sono conservati per il tempo strettamente necessario alla gestione della richiesta e comunque non oltre 24 mesi dalla raccolta.</p>

      <h3>7. Diritti dell'interessato</h3>
      <p>Ai sensi del GDPR (Reg. UE 2016/679) hai diritto di accesso, rettifica, cancellazione, limitazione, portabilità e opposizione al trattamento. Puoi esercitare tali diritti scrivendo a <?= $email_display ?>.</p>

      <h3>8. Autorità di controllo</h3>
      <p>Hai il diritto di proporre reclamo al Garante per la Protezione dei Dati Personali: <a href="https://www.garanteprivacy.it" target="_blank">garanteprivacy.it</a></p>
    </div>
    <div style="margin-top:32px; text-align:right;">
      <button class="btn-primary" onclick="closePrivacy()">Chiudi</button>
    </div>
  </div>
</div>

<script src="/assets/js/main.js"></script>
