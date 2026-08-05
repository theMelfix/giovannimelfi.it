<?php
/**
 * Contenuto dell'informativa privacy (single source of truth).
 * Usato dalla pagina dedicata /privacy-settings/ e da qualsiasi altro punto
 * che debba mostrare la policy. Richiede $email_display; $GA4_ID è opzionale.
 */
$email_display = $email_display ?? '<a href="mailto:info@giovannimelfi.it">info@giovannimelfi.it</a>';
$analytics_on  = !empty($GA4_ID);
// Data dell'ultima revisione effettiva dell'informativa (aggiornare a mano quando cambia il testo).
$privacy_last_updated = 'Agosto 2026';
?>
<p><strong>Ultimo aggiornamento:</strong> <?= $privacy_last_updated ?></p>

<h3>1. Titolare del trattamento</h3>
<p>Dott. Giovanni Melfi — <?= $email_display ?> — giovannimelfi.it</p>

<h3>2. Dati raccolti</h3>
<p>Questo sito non raccoglie dati personali in modo automatico. I dati vengono trattati esclusivamente quando l'utente contatta volontariamente il titolare tramite i recapiti indicati (email, LinkedIn, Instagram).</p>

<h3>3. Cookie</h3>
<p>Il sito utilizza <strong>cookie tecnici</strong> necessari al funzionamento (es. memorizzazione delle preferenze sul consenso), che non richiedono consenso.</p>
<?php if ($analytics_on): ?>
<p>Previo tuo <strong>consenso</strong>, il sito utilizza inoltre <strong>cookie analitici</strong> di <strong>Google Analytics 4</strong> (Google Ireland Ltd.) per raccogliere statistiche aggregate sull'utilizzo del sito. Google Analytics 4 <strong>non registra né conserva gli indirizzi IP</strong> degli utenti. Fino al rilascio del consenso è attivo il <em>Google Consent Mode</em>, che impedisce la scrittura di cookie di tracciamento. Non vengono utilizzati cookie per finalità pubblicitarie o di profilazione commerciale.</p>
<p>Puoi modificare o revocare in qualsiasi momento la tua scelta:
  <a href="#" onclick="manageCookies(event)">gestisci il consenso ai cookie</a>.
  Per maggiori informazioni sul trattamento da parte di Google consulta la
  <a href="https://policies.google.com/privacy" target="_blank" rel="noopener">privacy policy di Google</a>.</p>

<h3>4. Trasferimento dei dati verso Paesi terzi</h3>
<p>I dati raccolti tramite Google Analytics possono essere trasferiti negli <strong>Stati Uniti</strong>. Google LLC aderisce all'<strong>EU-US Data Privacy Framework</strong>, che assicura un livello di protezione adeguato ai sensi dell'art. 45 GDPR per i trasferimenti di dati personali dall'Unione Europea agli Stati Uniti.</p>
<?php else: ?>
<p>Non vengono utilizzati cookie di profilazione, tracciamento o di terze parti.</p>
<?php endif; ?>

<h3>5. Finalità del trattamento</h3>
<p>I dati eventualmente comunicati dall'utente sono trattati al solo fine di rispondere alle richieste ricevute, senza cessione a terzi né utilizzo per finalità di marketing.</p>

<h3>6. Base giuridica</h3>
<p>Il trattamento si basa sul consenso dell'interessato (Art. 6(1)(a) GDPR) e sul legittimo interesse del titolare nel rispondere alle comunicazioni ricevute (Art. 6(1)(f) GDPR).</p>

<h3>7. Conservazione</h3>
<p>I dati sono conservati per il tempo strettamente necessario alla gestione della richiesta e comunque non oltre 24 mesi dalla raccolta.</p>

<h3>8. Diritti dell'interessato</h3>
<p>Ai sensi del GDPR (Reg. UE 2016/679) hai diritto di accesso, rettifica, cancellazione, limitazione, portabilità e opposizione al trattamento. Puoi esercitare tali diritti scrivendo a <?= $email_display ?>.</p>

<h3>9. Autorità di controllo</h3>
<p>Hai il diritto di proporre reclamo al Garante per la Protezione dei Dati Personali: <a href="https://www.garanteprivacy.it" target="_blank" rel="noopener">garanteprivacy.it</a></p>
