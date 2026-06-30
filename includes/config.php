<?php
/**
 * Configurazione servizi Google.
 *
 * Compila questi valori dopo aver creato gli account (vedi GOOGLE.md).
 * Lascia la stringa VUOTA per disattivare il relativo servizio:
 * il sito continua a funzionare senza tracciamento.
 */

// Google Analytics 4 — Measurement ID (formato: G-XXXXXXXXXX).
// Lo trovi in GA4 → Amministrazione → Flussi di dati → il tuo flusso web.
$GA4_ID = 'G-MNRN7ZQQG6';

// Google Search Console — token di verifica via tag HTML (solo il valore
// dell'attributo content, NON il tag intero). Consigliata invece la verifica
// via DNS TXT (vedi GOOGLE.md): in quel caso lascia vuoto.
$GSC_VERIFICATION = '';
