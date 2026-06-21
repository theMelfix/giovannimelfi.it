<?php
$page_type = 'client';
$email = 'info@giovannimelfi.it';
$email_display = '<a href="mailto:' . $email . '">' . $email . '</a>';
?>
<!DOCTYPE html>
<html lang="it">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- PRIMARY SEO -->
<title>Giovanni Melfi — Consulente IT per PMI | Soluzioni digitali su misura</title>
<meta name="description" content="Ti aiuto a semplificare i processi aziendali con la tecnologia giusta. Software su misura, automazione, consulenza IT e formazione per piccole e medie imprese in tutta Italia.">
<meta name="keywords" content="Giovanni Melfi, consulente IT, soluzioni digitali PMI, software su misura, automazione processi aziendali, consulenza informatica, formazione digitale, Sicilia, Italia">
<meta name="author" content="Dott. Giovanni Melfi">
<meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
<meta name="theme-color" content="#0c0818">
<link rel="icon" type="image/svg+xml" href="/favicon.svg">
<link rel="apple-touch-icon" href="/favicon.svg">
<link rel="canonical" href="https://giovannimelfi.it/">
<link rel="sitemap" type="application/xml" href="/sitemap.xml">

<!-- OPEN GRAPH -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://giovannimelfi.it/">
<meta property="og:title" content="Giovanni Melfi — Consulente IT per PMI">
<meta property="og:description" content="Soluzioni digitali su misura per la tua impresa. Software, automazione, consulenza e formazione.">
<meta property="og:image" content="https://giovannimelfi.it/og-image.png">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:locale" content="it_IT">
<meta property="og:site_name" content="Giovanni Melfi">

<!-- TWITTER CARD -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Giovanni Melfi — Consulente IT per PMI">
<meta name="twitter:description" content="Soluzioni digitali su misura per la tua impresa.">
<meta name="twitter:image" content="https://giovannimelfi.it/og-image.png">

<!-- GEO -->
<meta name="geo.region" content="IT-RG">
<meta name="geo.placename" content="Vittoria, Ragusa, Sicilia">

<!-- STRUCTURED DATA -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ProfessionalService",
  "name": "Giovanni Melfi — Consulente IT",
  "url": "https://giovannimelfi.it",
  "description": "Soluzioni digitali su misura per piccole e medie imprese. Software, automazione, consulenza IT e formazione.",
  "areaServed": "IT",
  "priceRange": "€€",
  "founder": {
    "@type": "Person",
    "name": "Giovanni Melfi",
    "honorificPrefix": "Dott.",
    "jobTitle": "Consulente IT & Software Engineer",
    "url": "https://giovannimelfi.it",
    "sameAs": [
      "https://www.linkedin.com/in/giovanni-melfi/",
      "https://instagram.com/dott_melfix",
      "https://github.com/theMelfix"
    ]
  },
  "hasOfferCatalog": {
    "@type": "OfferCatalog",
    "name": "Servizi IT",
    "itemListElement": [
      { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Software su misura" } },
      { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Automazione processi aziendali" } },
      { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Integrazione sistemi" } },
      { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Consulenza IT e formazione" } }
    ]
  }
}
</script>

<!-- PERFORMANCE -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Syne:wght@300;400;700;800&family=Space+Mono:wght@400;700&family=Outfit:wght@200;300;400;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>

<?php include __DIR__ . '/includes/nav.php'; ?>

<!-- HERO -->
<section id="hero">
  <div class="hero-bg"></div>

  <svg class="hero-hex-deco" viewBox="0 0 600 600" fill="none">
    <defs>
      <linearGradient id="hhg" x1="0" y1="0" x2="600" y2="600" gradientUnits="userSpaceOnUse">
        <stop offset="0%" stop-color="#c084fc"/>
        <stop offset="100%" stop-color="#e63946"/>
      </linearGradient>
    </defs>
    <polygon points="300,30 540,165 540,435 300,570 60,435 60,165" fill="none" stroke="url(#hhg)" stroke-width="1.5"/>
    <polygon points="300,68 504,183 504,417 300,532 96,417 96,183" fill="none" stroke="rgba(192,132,252,0.4)" stroke-width="1"/>
    <polygon points="300,106 468,201 468,399 300,494 132,399 132,201" fill="none" stroke="rgba(192,132,252,0.15)" stroke-width="0.8"/>
  </svg>

  <svg class="hero-hex-deco2" viewBox="0 0 300 300" fill="none">
    <polygon points="150,15 270,82 270,218 150,285 30,218 30,82" fill="none" stroke="rgba(192,132,252,0.6)" stroke-width="1.5"/>
    <polygon points="150,40 245,95 245,205 150,260 55,205 55,95" fill="none" stroke="rgba(192,132,252,0.25)" stroke-width="1"/>
  </svg>

  <div class="hero-content">
    <div class="hero-tag">Consulente IT · Freelance</div>
    <span class="hero-dott">Dott.</span>
    <h1 class="hero-name">Giovanni<br>Melfi</h1>
    <p class="hero-subtitle">Rendo la tecnologia semplice<br>per la tua impresa</p>
    <p class="hero-desc">
      Non ti serve un tecnico che parla difficile. Ti serve qualcuno che capisca il tuo lavoro e costruisca la soluzione giusta — con la concretezza di chi conosce anche i numeri e la realtà aziendale.
    </p>
    <div class="hero-cta">
      <a href="#contact" class="btn-primary">Parliamo del tuo progetto</a>
      <a href="#services" class="btn-secondary">Cosa posso fare per te</a>
    </div>
  </div>

  <div class="hero-scroll">
    <div class="scroll-line"></div>
    scroll
  </div>
</section>

<!-- CHI SONO -->
<section id="about" class="bg-alt">
  <div class="section-header reveal">
    <span class="section-num">01</span>
    <h2 class="section-title">Chi sono</h2>
    <div class="section-line"></div>
  </div>

  <div class="about-grid">
    <div class="about-text reveal">
      <p>
        Mi chiamo Giovanni Melfi e faccio una cosa semplice: <strong>aiuto le imprese a lavorare meglio grazie alla tecnologia</strong>. Non quella complicata, non quella che serve solo ai grandi. Quella giusta per te.
      </p>
      <p>
        Ho studiato <strong>sia informatica che economia aziendale</strong>, e questa combinazione mi permette di parlare la tua lingua. Non ti sommergo di termini tecnici — ascolto il tuo problema e ti propongo una soluzione concreta, con tempi e costi chiari.
      </p>
      <p>
        Prima di mettermi in proprio ho lavorato su <strong>progetti complessi per grandi aziende</strong> — da sistemi bancari internazionali alla gestione dell'infrastruttura di Aruba S.p.A., coordinando un team dedicato. Oggi porto la stessa serietà e competenza alle piccole e medie imprese — perché meritate lo stesso livello di attenzione.
      </p>
    </div>

    <div class="about-stats reveal" style="transition-delay: 0.15s">
      <div class="stat-card">
        <div class="stat-num">7+</div>
        <div class="stat-label">Anni nel settore</div>
      </div>
      <div class="stat-card">
        <div class="stat-num">PMI</div>
        <div class="stat-label">Il mio focus</div>
      </div>
      <div class="stat-card">
        <div class="stat-num">100%</div>
        <div class="stat-label">Soluzioni su misura</div>
      </div>
      <div class="stat-card">
        <div class="stat-num">0</div>
        <div class="stat-label">Gergo tecnico inutile</div>
      </div>
    </div>
  </div>
</section>

<!-- COME LAVORO -->
<section id="process">
  <div class="section-header reveal">
    <span class="section-num">02</span>
    <h2 class="section-title">Come lavoro</h2>
    <div class="section-line"></div>
  </div>

  <div class="process-grid">
    <div class="process-step reveal">
      <div class="step-num">01</div>
      <div class="step-title">Ascolto</div>
      <div class="step-desc">Mi racconti il tuo problema o la tua idea. Nessun impegno, nessun costo — una chiacchierata per capire se posso esserti utile.</div>
    </div>
    <div class="process-step reveal" style="transition-delay: 0.1s">
      <div class="step-num">02</div>
      <div class="step-title">Proposta</div>
      <div class="step-desc">Ti presento una soluzione chiara, con tempi e costi definiti. Niente sorprese, niente preventivi gonfiati.</div>
    </div>
    <div class="process-step reveal" style="transition-delay: 0.2s">
      <div class="step-num">03</div>
      <div class="step-title">Realizzo</div>
      <div class="step-desc">Costruisco la soluzione tenendoti aggiornato passo dopo passo. Niente scatole nere — sai sempre a che punto siamo.</div>
    </div>
    <div class="process-step reveal" style="transition-delay: 0.3s">
      <div class="step-num">04</div>
      <div class="step-title">Consegna</div>
      <div class="step-desc">Ti consegno tutto funzionante, con documentazione chiara. E resto disponibile anche dopo — non sparisco a progetto finito.</div>
    </div>
  </div>
</section>

<!-- SERVIZI -->
<section id="services" class="bg-alt">
  <div class="section-header reveal">
    <span class="section-num">03</span>
    <h2 class="section-title">Cosa posso fare per te</h2>
    <div class="section-line"></div>
  </div>

  <div class="services-grid">

    <div class="service-card reveal">
      <svg class="service-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2">
        <polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/>
      </svg>
      <div class="service-title">Software su misura</div>
      <div class="service-desc">Creo applicazioni che si adattano al modo in cui lavori, non il contrario. Gestionali, portali interni, strumenti operativi — costruiti sulle tue reali necessità.</div>
      <div class="service-tags">
        <span class="tag">Gestionali</span>
        <span class="tag">Portali web</span>
        <span class="tag">App interne</span>
      </div>
    </div>

    <div class="service-card reveal" style="transition-delay: 0.1s">
      <svg class="service-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2">
        <circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/>
      </svg>
      <div class="service-title">Automazione dei processi</div>
      <div class="service-desc">Quei passaggi ripetitivi che ti fanno perdere tempo? Li automatizzo. Report, notifiche, aggiornamenti — tutto quello che oggi fai a mano, domani lo fa il sistema.</div>
      <div class="service-tags">
        <span class="tag">Meno lavoro manuale</span>
        <span class="tag">Zero errori</span>
        <span class="tag">Più efficienza</span>
      </div>
    </div>

    <div class="service-card reveal" style="transition-delay: 0.2s">
      <svg class="service-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2">
        <circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/>
      </svg>
      <div class="service-title">Sistemi che parlano tra loro</div>
      <div class="service-desc">Il gestionale non si collega al magazzino? L'e-commerce non aggiorna le fatture? Faccio comunicare i tuoi strumenti — senza cambiare tutto da zero.</div>
      <div class="service-tags">
        <span class="tag">Integrazioni</span>
        <span class="tag">Sincronizzazione</span>
        <span class="tag">Flussi automatici</span>
      </div>
    </div>

    <div class="service-card reveal" style="transition-delay: 0.1s">
      <svg class="service-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2">
        <ellipse cx="12" cy="5" rx="9" ry="3"/><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"/><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"/>
      </svg>
      <div class="service-title">Messa in sicurezza dei dati</div>
      <div class="service-desc">Aggiorno, migro e metto in sicurezza i tuoi archivi digitali. I tuoi dati sono il bene più prezioso — vanno protetti e resi accessibili nel modo giusto.</div>
      <div class="service-tags">
        <span class="tag">Migrazione dati</span>
        <span class="tag">Backup</span>
        <span class="tag">Ottimizzazione</span>
      </div>
    </div>

    <div class="service-card reveal" style="transition-delay: 0.2s">
      <svg class="service-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2">
        <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/>
      </svg>
      <div class="service-title">Consulenza e formazione</div>
      <div class="service-desc">Ti aiuto a capire quale tecnologia ti serve davvero — senza venderti cose inutili. E se serve, formo il tuo team per renderlo autonomo.</div>
      <div class="service-tags">
        <span class="tag">Analisi esigenze</span>
        <span class="tag">Formazione team</span>
        <span class="tag">Affiancamento</span>
      </div>
    </div>

    <div class="service-card reveal" style="transition-delay: 0.3s">
      <svg class="service-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2">
        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
      </svg>
      <div class="service-title">Immagine digitale</div>
      <div class="service-desc">Dal logo al sito web, coordino un team di professionisti per darti una presenza online che ti rappresenti. Perché la prima impressione conta — anche in digitale.</div>
      <div class="service-tags">
        <span class="tag">Siti web</span>
        <span class="tag">Logo & brand</span>
        <span class="tag">Identità visiva</span>
      </div>
    </div>

  </div>
</section>

<!-- PORTFOLIO -->
<section id="portfolio">
  <div class="section-header reveal">
    <span class="section-num">04</span>
    <h2 class="section-title">Progetti recenti</h2>
    <div class="section-line"></div>
  </div>

  <div class="portfolio-grid">

    <div class="project-card featured reveal">
      <div>
        <div class="project-num">001 — IN EVIDENZA</div>
        <div class="project-title">Sistemi backend per Aruba S.p.A.</div>
        <div class="project-desc">Ho coordinato un team di 3 persone per uno dei più grandi provider IT italiani, occupandomi dei sistemi che gestiscono i servizi dietro le quinte. Migrazione di piattaforme, rilasci in produzione e gestione dei flussi di dati — tutto senza interruzioni per i clienti finali.</div>
        <div class="project-tech">
          <span class="tag">Coordinamento team</span>
          <span class="tag">Sistemi enterprise</span>
          <span class="tag">Zero interruzioni</span>
        </div>
      </div>
      <div class="project-visual featured-visual">
        <span>ENTERPRISE / ARUBA</span>
      </div>
    </div>

    <div class="project-card reveal" style="transition-delay: 0.1s">
      <div class="project-num">002</div>
      <div class="project-title">Formazione digitale per azienda manifatturiera</div>
      <div class="project-desc">Un'azienda del settore serre aveva bisogno di digitalizzare i processi interni. Ho progettato e tenuto un corso di 130 ore per tutto il personale. Risultato: team autonomo, processi più snelli.</div>
      <div class="project-tech">
        <span class="tag">130 ore di formazione</span>
        <span class="tag">Tutto il personale</span>
        <span class="tag">Processi digitalizzati</span>
      </div>
    </div>

    <div class="project-card reveal" style="transition-delay: 0.2s">
      <div class="project-num">003</div>
      <div class="project-title">Gestionale su misura per studio tecnico</div>
      <div class="project-desc">Uno studio di architettura e ingegneria gestiva tutto con fogli di calcolo. Ho costruito un software su misura per gestire progetti, risorse e scadenze da un'unica piattaforma.</div>
      <div class="project-tech">
        <span class="tag">Software su misura</span>
        <span class="tag">Gestione progetti</span>
        <span class="tag">Flusso di lavoro</span>
      </div>
    </div>

    <div class="project-card reveal" style="transition-delay: 0.3s">
      <div class="project-num">004</div>
      <div class="project-title">Migrazione dati senza interruzioni</div>
      <div class="project-desc">Dopo un aggiornamento, il database di un cliente aveva smesso di funzionare correttamente. Ho migrato tutto al nuovo sistema senza un minuto di fermo — l'attività non si è mai fermata.</div>
      <div class="project-tech">
        <span class="tag">Zero downtime</span>
        <span class="tag">Dati al sicuro</span>
        <span class="tag">Problema risolto</span>
      </div>
    </div>

  </div>
</section>

<!-- TESTIMONIALS -->
<section id="testimonials" class="bg-alt">
  <div class="section-header reveal">
    <span class="section-num">05</span>
    <h2 class="section-title">Cosa dicono di me</h2>
    <div class="section-line"></div>
  </div>

  <div class="testimonials-grid">
    <div class="testimonial-card reveal">
      <div class="testimonial-quote">"</div>
      <p class="testimonial-text">Giovanni ha saputo tradurre le nostre esigenze operative in soluzioni concrete. La formazione ICT ha cambiato il modo in cui lavoriamo internamente.</p>
      <div class="testimonial-author">
        <div class="testimonial-name">MedGroup Srl</div>
        <div class="testimonial-role">Cliente — Formazione digitale</div>
      </div>
    </div>

    <div class="testimonial-card reveal" style="transition-delay: 0.1s">
      <div class="testimonial-quote">"</div>
      <p class="testimonial-text">Competente, puntuale e con una visione che va oltre il tecnico. Sa capire il problema prima ancora che tu finisca di spiegarlo.</p>
      <div class="testimonial-author">
        <div class="testimonial-name">D&C Architettura e Ingegneria</div>
        <div class="testimonial-role">Cliente — Software gestionale</div>
      </div>
    </div>

    <div class="testimonial-card reveal" style="transition-delay: 0.2s">
      <div class="testimonial-quote">"</div>
      <p class="testimonial-text">Ha gestito la migrazione dei nostri dati senza interruzioni di servizio. Professionalità e attenzione ai dettagli fuori dal comune.</p>
      <div class="testimonial-author">
        <div class="testimonial-name">Cliente riservato</div>
        <div class="testimonial-role">Cliente — Migrazione dati</div>
      </div>
    </div>
  </div>
  <p class="testimonial-note">* I testimonial sono indicativi — verranno sostituiti con le recensioni reali dei clienti</p>
</section>

<!-- FAQ -->
<section id="faq">
  <div class="section-header reveal">
    <span class="section-num">06</span>
    <h2 class="section-title">Domande frequenti</h2>
    <div class="section-line"></div>
  </div>

  <div class="faq-container">
    <div class="faq-item reveal">
      <button class="faq-button" onclick="toggleFaq(this)">
        Quanto costa un progetto?
        <span class="faq-icon">+</span>
      </button>
      <div class="faq-panel">
        <p class="faq-text">Dipende da cosa serve. Dopo la prima chiacchierata ti mando una proposta con costi chiari e senza sorprese. Non lavoro "a ore infinite" — definiamo tutto prima di partire.</p>
      </div>
    </div>
    <div class="faq-item reveal">
      <button class="faq-button" onclick="toggleFaq(this)">
        Lavori da remoto?
        <span class="faq-icon">+</span>
      </button>
      <div class="faq-panel">
        <p class="faq-text">Sì, lavoro prevalentemente da remoto. Per i clienti in Sicilia sono disponibile anche di persona quando necessario.</p>
      </div>
    </div>
    <div class="faq-item reveal">
      <button class="faq-button" onclick="toggleFaq(this)">
        Non capisco niente di tecnologia. È un problema?
        <span class="faq-icon">+</span>
      </button>
      <div class="faq-panel">
        <p class="faq-text">Assolutamente no, anzi. Il mio lavoro è proprio questo: tu mi spieghi cosa ti serve, io penso alla parte tecnica. Ti tengo aggiornato in modo chiaro, senza gergo incomprensibile.</p>
      </div>
    </div>
    <div class="faq-item reveal">
      <button class="faq-button" onclick="toggleFaq(this)">
        Dopo la consegna, se ho un problema?
        <span class="faq-icon">+</span>
      </button>
      <div class="faq-panel">
        <p class="faq-text">Non sparisco a progetto finito. Resto disponibile per assistenza e aggiornamenti. Possiamo anche concordare un supporto continuativo se preferisci.</p>
      </div>
    </div>
    <div class="faq-item reveal">
      <button class="faq-button" onclick="toggleFaq(this)">
        Hai la Partita IVA? Posso detrarre?
        <span class="faq-icon">+</span>
      </button>
      <div class="faq-panel">
        <p class="faq-text">Sì, opero come libero professionista con regolare Partita IVA e rilascio fattura per tutti i servizi.</p>
      </div>
    </div>
    <div class="faq-item reveal">
      <button class="faq-button" onclick="toggleFaq(this)">
        Come funziona il primo contatto?
        <span class="faq-icon">+</span>
      </button>
      <div class="faq-panel">
        <p class="faq-text">Scrivimi una mail o un messaggio su LinkedIn. Ti rispondo entro 24 ore e organizziamo una chiamata conoscitiva gratuita — senza impegno.</p>
      </div>
    </div>
  </div>
</section>

<!-- CONTATTI -->
<section id="contact" class="bg-alt">
  <div class="section-header reveal" style="justify-content: center; text-align: center;">
    <span class="section-num">07</span>
    <h2 class="section-title">Parliamone</h2>
  </div>

  <p class="contact-intro reveal">
    Hai un progetto, un problema o semplicemente una domanda? Scrivimi — rispondo sempre, di persona.
  </p>

  <div class="contact-grid reveal">
    <a class="contact-card" href="mailto:<?= $email ?>">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
      <span class="contact-card-label">Email</span>
      <span class="contact-card-value"><?= $email ?></span>
    </a>
    <a class="contact-card" href="https://www.linkedin.com/in/giovanni-melfi/" target="_blank">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>
      <span class="contact-card-label">LinkedIn</span>
      <span class="contact-card-value">/in/giovanni-melfi</span>
    </a>
    <a class="contact-card" href="https://instagram.com/dott_melfix" target="_blank">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
      <span class="contact-card-label">Instagram</span>
      <span class="contact-card-value">dott_melfix</span>
    </a>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>

</body>
</html>
