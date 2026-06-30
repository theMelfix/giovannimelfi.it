# Configurazione Google — giovannimelfi.it

Tre servizi, in ordine di priorità per essere "ricercabile online":

1. **Search Console** — indicizzazione (nessun cookie, nessun consenso)
2. **Google Analytics 4** — statistiche (richiede consenso cookie, già gestito)
3. **Profilo dell'attività** (Google Business Profile) — scheda locale su Maps/Search

Gli ID si impostano in **`includes/config.php`**. Dopo averli compilati:
`git commit` + `git push` + `./deploy.sh` sulla VPS.

---

## 1. Google Search Console (indicizzazione)

1. Vai su <https://search.google.com/search-console> e accedi.
2. **Aggiungi proprietà → Dominio** → inserisci `giovannimelfi.it`.
3. Google ti dà un record **DNS TXT**. Aggiungilo nel pannello DNS del dominio
   (lo stesso dove hai puntato la VPS) e premi **Verifica**.
   - Metodo consigliato: copre `https`, `www` e tutti i sottodomini in un colpo.
   - In alternativa (verifica via tag HTML): copia il valore `content="..."` del
     meta nel campo `$GSC_VERIFICATION` di `config.php`, fai deploy, poi verifica.
4. Verificata la proprietà → menu **Sitemap** → invia:
   ```
   sitemap.xml
   ```
   (URL completo: `https://giovannimelfi.it/sitemap.xml`)
5. **Controllo URL** in alto → incolla `https://giovannimelfi.it/` → **Richiedi
   indicizzazione**. Ripeti per `https://giovannimelfi.it/developer`.

> I risultati di ricerca compaiono in genere in pochi giorni. Torna su Search
> Console per vedere query, impression e posizioni.

## 2. Google Analytics 4 (statistiche)

Il sito è **già predisposto**: Consent Mode v2, banner Accetto/Rifiuta e privacy
aggiornata. Manca solo l'ID.

1. Vai su <https://analytics.google.com> → **Amministrazione** (ingranaggio).
2. **Crea → Proprietà**: nome `giovannimelfi.it`, fuso *Italia*, valuta *EUR*.
3. **Crea un flusso di dati → Web**: URL `https://giovannimelfi.it`, nome a piacere.
4. Copia il **Measurement ID** (formato `G-XXXXXXXXXX`).
5. Incollalo in `includes/config.php`:
   ```php
   $GA4_ID = 'G-XXXXXXXXXX';
   ```
6. `git commit -am "Attiva GA4"` → `git push` → `./deploy.sh` sulla VPS.

### Come verificare che funzioni
- Apri il sito, **accetta** i cookie nel banner.
- In GA4 → **Report → Tempo reale**: dovresti vederti come utente attivo.
- Se **rifiuti**, GA non scrive cookie e non traccia (Consent Mode resta "denied").

### Note privacy (importante)
- Senza consenso, nessun cookie analitico viene scritto: è conforme al Garante.
- L'IP è anonimizzato.
- L'utente può **revocare** il consenso dal link "gestisci il consenso ai cookie"
  nella Privacy Policy.
- Disattivare GA4 = rimettere `$GA4_ID = ''` e fare deploy: il banner torna alla
  versione "solo cookie tecnici" e i tag spariscono.

## 3. Profilo dell'attività (Google Business Profile)

Tutto fuori dal sito — ottimo per un consulente locale (Vittoria / Ragusa) perché
fa comparire una scheda su Google Maps e nella ricerca per nome/zona.

1. Vai su <https://business.google.com> e accedi.
2. **Aggiungi attività** → nome `Giovanni Melfi — Consulente IT`.
3. Categoria: *Consulente informatico* / *Servizio di consulenza IT*.
4. Area servita: se non ricevi clienti a un indirizzo fisico, scegli
   **"Consegno beni e servizi ai clienti"** e indica le zone (es. Ragusa, Sicilia,
   Italia) invece di un indirizzo pubblico.
5. Contatti: telefono + sito `https://giovannimelfi.it`.
6. **Verifica** (Google invia un codice via telefono/email/cartolina).
7. Completa la scheda: descrizione, orari, foto/logo, servizi. Più è completa,
   meglio si posiziona.

### Collegamenti utili
- Nei dati strutturati del sito (`index.php`, blocco `ProfessionalService`) puoi
  aggiungere, una volta creata, l'URL della scheda Maps dentro `sameAs`.
- Chiedi recensioni ai clienti soddisfatti: pesano molto sul ranking locale.

---

## Riepilogo file coinvolti

| File | Ruolo |
|------|-------|
| `includes/config.php` | ID di GA4 e (opzionale) token Search Console |
| `includes/google-head.php` | Tag GSC + GA4 con Consent Mode, incluso nell'`<head>` |
| `includes/footer.php` | Banner cookie Accetto/Rifiuta + privacy policy |
| `assets/js/main.js` | Logica consenso (accetta / rifiuta / gestisci) |
