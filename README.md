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

Vedi **[DEPLOY.md](DEPLOY.md)** (VPS con CloudPanel: nginx + PHP-FPM, deploy via git, HTTPS Let's Encrypt).

## Asset social

`og-image.png` (anteprima social) si rigenera con:

```bash
php tools/generate-og.php
```
