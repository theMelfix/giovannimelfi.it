# giovannimelfi.it

Sito personale di Giovanni Melfi — consulente IT e software engineer.

Due versioni:
- `/` — landing per i clienti (`index.php`)
- `/developer` — profilo tecnico (`developer/index.php`)

PHP usato solo per i template/include (`includes/`). Nessun database né form backend.

## Sviluppo locale

```bash
php -S 127.0.0.1:8000
# http://127.0.0.1:8000/  e  http://127.0.0.1:8000/developer/
```

## Deploy

VPS con CloudPanel (nginx + PHP-FPM). Il rilascio avviene tramite la funzione
**Deployment** di CloudPanel collegata a questo repo (branch `main`, git-based):
CloudPanel aggiorna la document root a ogni push.

Le direttive nginx aggiuntive (security headers, blocco di `includes/`, download
del CV) vanno incollate nel Vhost del sito da CloudPanel.

## Google

Gli ID dei servizi Google (GA4, Search Console) si impostano in
`includes/config.php`. GA4 è predisposto con Consent Mode v2 e banner cookie;
lasciando un ID vuoto il relativo servizio resta disattivato.
