# Deploy — giovannimelfi.it (VPS / CloudPanel)

Sito PHP "statico" (PHP usato solo per i template/include `includes/nav.php` e
`includes/footer.php`). Nessun database, nessun form backend. Serve solo
**nginx + PHP-FPM**, che CloudPanel configura per te.

Pagine:
- `/` → versione clienti (`index.php`)
- `/developer` → profilo tecnico (`developer/index.php`)

---

## 1. Crea il sito in CloudPanel

1. **Sites → Add Site → Create a PHP Site**
2. Domain Name: `giovannimelfi.it`
3. PHP Version: **8.2** (o superiore — il codice è compatibile con 8.x)
4. Site User / password: come preferisci (es. `giovannimelfi`)
5. Application Vhost Template: **Generic / PHP** (va bene il default)

CloudPanel crea la document root in:

```
/home/<site-user>/htdocs/giovannimelfi.it
```

## 2. Porta il codice nella document root (git)

Via SSH sulla VPS:

```bash
su - <site-user>            # passa all'utente del sito
cd ~/htdocs/giovannimelfi.it
rm -f index.html            # rimuovi il placeholder di CloudPanel

# repo vuoto: clona dentro la cartella corrente
git clone https://github.com/theMelfix/giovannimelfi.it.git .
# (oppure SSH: git@github.com:theMelfix/giovannimelfi.it.git)
```

> Se la cartella non è vuota: `git init && git remote add origin <url> && git fetch && git reset --hard origin/main`.

### Aggiornamenti successivi

**Opzione A — a mano via SSH:**
```bash
cd ~/htdocs/giovannimelfi.it && ./deploy.sh
```

**Opzione B — Deployment di CloudPanel:**
Site → **Deployment** → incolla il contenuto di `deploy.sh` come *Deployment Script*
(o richiama `bash deploy.sh`) e lancialo dal pannello a ogni rilascio.

## 3. Direttive nginx aggiuntive (hardening + SEO)

Site → **Vhost** → incolla il blocco da `deploy/nginx-cloudpanel.conf` dentro
`server { ... }`, prima della `location /`. Salva: CloudPanel valida e ricarica nginx.

Fa tre cose: security headers, blocco accesso diretto a `includes/`–`tools/`–dotfiles,
download pulito del CV. Il caching degli asset statici è già nel template di CloudPanel.

## 4. HTTPS (Let's Encrypt)

Il DNS punta già alla VPS, quindi:

1. Site → **SSL/TLS → Actions → New Let's Encrypt Certificate**
2. Domini: `giovannimelfi.it` **e** `www.giovannimelfi.it`
3. CloudPanel imposta il redirect HTTP → HTTPS in automatico.
4. **Dopo** aver verificato che HTTPS funzioni, decommenta la riga `Strict-Transport-Security`
   in `deploy/nginx-cloudpanel.conf` e ri-salva il Vhost.

> Assicurati che esista anche il record DNS per `www` (A o CNAME) se vuoi il certificato su www.

## 5. Verifica post-deploy

```bash
curl -I https://giovannimelfi.it/                 # 200, server nginx
curl -I https://giovannimelfi.it/developer         # 301 -> /developer/ poi 200
curl -I https://giovannimelfi.it/og-image.png      # 200 image/png
curl -I https://giovannimelfi.it/includes/footer.php   # 404 (bloccato, corretto)
curl     https://giovannimelfi.it/robots.txt        # sitemap presente
curl     https://giovannimelfi.it/sitemap.xml       # XML valido
```

## 6. Google: indicizzazione, analytics, scheda locale

La configurazione completa di **Search Console**, **Google Analytics 4** e
**Profilo dell'attività** è in **[GOOGLE.md](GOOGLE.md)**. In sintesi:

1. Search Console → verifica via DNS TXT → invia `sitemap.xml` → richiedi
   indicizzazione di `/` e `/developer`.
2. GA4 → crea la proprietà, copia il Measurement ID in `includes/config.php`
   (`$GA4_ID`) → deploy. Consent Mode v2 e banner Accetto/Rifiuta sono già pronti.
3. Verifica l'anteprima social con [opengraph.xyz](https://www.opengraph.xyz/)
   (l'immagine è `og-image.png`).
4. Aggiorna le date `<lastmod>` in `sitemap.xml` quando cambi i contenuti.

---

### Note

- `robots.txt` blocca l'indicizzazione del PDF del CV (resta scaricabile dal sito, ma
  fuori dai risultati di ricerca): voluto.
- L'immagine social `og-image.png` si rigenera con `php tools/generate-og.php`
  (richiede l'estensione GD e i font DejaVu).
