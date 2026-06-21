<?php
$page_type = 'developer';
$email = 'info@giovannimelfi.it';
$email_display = '<a href="mailto:' . $email . '">' . $email . '</a>';
?>
<!DOCTYPE html>
<html lang="it">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- PRIMARY SEO -->
<title>Giovanni Melfi — Software Engineer | PHP, Java, Docker, DevOps</title>
<meta name="description" content="Dott. Giovanni Melfi, Software Engineer e IT Consultant. Backend development, API design, DevOps, database migration. PHP Laravel, Java Spring Boot, Docker, PostgreSQL.">
<meta name="keywords" content="Giovanni Melfi, Software Engineer, backend developer, PHP Laravel, Java Spring Boot, Docker, DevOps, REST API, database migration, MySQL, PostgreSQL, freelance developer Italy">
<meta name="author" content="Dott. Giovanni Melfi">
<meta name="robots" content="index, follow">
<meta name="theme-color" content="#0c0818">
<link rel="icon" type="image/svg+xml" href="/favicon.svg">
<link rel="apple-touch-icon" href="/favicon.svg">
<link rel="canonical" href="https://giovannimelfi.it/developer">

<!-- OPEN GRAPH -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://giovannimelfi.it/developer">
<meta property="og:title" content="Giovanni Melfi — Software Engineer">
<meta property="og:description" content="Backend development, API design, DevOps. PHP Laravel, Java Spring Boot, Docker, PostgreSQL.">
<meta property="og:image" content="https://giovannimelfi.it/og-image.png">
<meta property="og:locale" content="it_IT">
<meta property="og:site_name" content="Giovanni Melfi">

<!-- TWITTER CARD -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Giovanni Melfi — Software Engineer">
<meta name="twitter:description" content="Backend development, API design, DevOps.">
<meta name="twitter:image" content="https://giovannimelfi.it/og-image.png">

<!-- STRUCTURED DATA -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Person",
  "name": "Giovanni Melfi",
  "honorificPrefix": "Dott.",
  "jobTitle": "Software Engineer & IT Consultant",
  "url": "https://giovannimelfi.it/developer",
  "sameAs": [
    "https://www.linkedin.com/in/giovanni-melfi/",
    "https://instagram.com/dott_melfix",
    "https://github.com/theMelfix"
  ],
  "knowsAbout": [
    "Software Engineering", "Backend Development", "PHP", "Laravel",
    "Java", "Spring Boot", "Python", "Docker", "DevOps",
    "MySQL", "MariaDB", "PostgreSQL", "REST API", "IT Consulting",
    "Database Migration", "ICT Training", "CI/CD", "Linux", "Cloud"
  ],
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Vittoria",
    "addressRegion": "Ragusa",
    "addressCountry": "IT"
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

<?php include dirname(__DIR__) . '/includes/nav.php'; ?>

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
    <div class="hero-tag">Software Engineer · Freelance dal 2024</div>
    <span class="hero-dott">Dott.</span>
    <h1 class="hero-name">Giovanni<br>Melfi</h1>
    <p class="hero-role">Backend · API · DevOps · Consulenza IT</p>
    <p class="hero-desc">
      Ingegnere Informatico con background in sistemi bancari internazionali. Oggi porto lo stesso rigore tecnico come freelance — backend solidi, API pulite, infrastruttura che regge.
    </p>
    <div class="hero-cta">
      <a href="/old-cv-giovanni-melfi.pdf" download class="btn-primary" style="gap:8px;">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
        Scarica CV
      </a>
      <a href="#stack" class="btn-secondary">Stack & competenze</a>
      <a href="#contact" class="btn-secondary">Contattami</a>
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
        A 10 anni formattavo il PC da solo, reinstallavo programmi e giocavo con gli emulatori. Non era un hobby — era già una vocazione. Alle medie sapevo già che volevo fare l'<strong>ingegnere informatico</strong>, e mi sono iscritto alla Ragioneria Programmatore proprio per unire la mia passione per l'informatica alla comprensione dell'economia aziendale.
      </p>
      <p>
        Dopo la laurea in <strong>Ingegneria Informatica L-8</strong> (2019), ho lavorato su <strong>progetti bancari internazionali</strong> in collaborazione con Imola Informatica, poi in CGM Xdent, Profesia Srl (gruppo Lynx) e infine in <strong>Alten SpA come Vice Team Lead sul progetto Aruba S.p.A.</strong>, coordinando un team backend di 3 persone. In ogni esperienza non ho mai smesso di imparare e di costruire competenze trasversali.
      </p>
      <p>
        Oggi lavoro come <strong>freelance</strong> perché voglio portare nelle piccole e medie imprese quel know-how che di solito rimane riservato alle grandi aziende. Conosco i processi, conosco i numeri e so come la tecnologia può fare davvero la differenza.
      </p>
    </div>

    <div class="about-stats reveal" style="transition-delay: 0.15s">
      <div class="stat-card">
        <div class="stat-num">2002</div>
        <div class="stat-label">Prima formattazione a 10 anni</div>
      </div>
      <div class="stat-card">
        <div class="stat-num">2019</div>
        <div class="stat-label">Laurea Ing. Informatica L-8</div>
      </div>
      <div class="stat-card">
        <div class="stat-num">PMI</div>
        <div class="stat-label">Focus su piccole e medie imprese</div>
      </div>
      <div class="stat-card">
        <div class="stat-num">∞</div>
        <div class="stat-label">Voglia di imparare</div>
      </div>
    </div>
  </div>
</section>

<!-- STACK -->
<section id="stack">
  <div class="section-header reveal">
    <span class="section-num">02</span>
    <h2 class="section-title">Stack & Tecnologie</h2>
    <div class="section-line"></div>
  </div>

  <div class="stack-grid reveal">
    <div class="stack-item"><span class="stack-emoji">🐘</span> PHP</div>
    <div class="stack-item"><span class="stack-emoji">⚡</span> Laravel</div>
    <div class="stack-item"><span class="stack-emoji">☕</span> Java</div>
    <div class="stack-item"><span class="stack-emoji">🍃</span> Spring Boot</div>
    <div class="stack-item"><span class="stack-emoji">🐍</span> Python</div>
    <div class="stack-item"><span class="stack-emoji">🐳</span> Docker</div>
    <div class="stack-item"><span class="stack-emoji">🗄️</span> MySQL</div>
    <div class="stack-item"><span class="stack-emoji">🐬</span> MariaDB</div>
    <div class="stack-item"><span class="stack-emoji">🐘</span> PostgreSQL</div>
    <div class="stack-item"><span class="stack-emoji">🔗</span> REST API</div>
    <div class="stack-item"><span class="stack-emoji">⚙️</span> CI/CD</div>
    <div class="stack-item"><span class="stack-emoji">🐧</span> Linux</div>
    <div class="stack-item"><span class="stack-emoji">🔧</span> Git</div>
    <div class="stack-item"><span class="stack-emoji">☁️</span> Cloud</div>
    <div class="stack-item"><span class="stack-emoji">📨</span> Kafka</div>
    <div class="stack-item"><span class="stack-emoji">🔄</span> Camunda</div>
    <div class="stack-item"><span class="stack-emoji">🔌</span> Webhook</div>
    <div class="stack-item"><span class="stack-emoji">📊</span> SaaS Integration</div>
  </div>
</section>

<!-- SERVIZI -->
<section id="services" class="bg-alt">
  <div class="section-header reveal">
    <span class="section-num">03</span>
    <h2 class="section-title">Servizi</h2>
    <div class="section-line"></div>
  </div>

  <div class="services-grid">

    <div class="service-card reveal">
      <svg class="service-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2">
        <polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/>
      </svg>
      <div class="service-title">Sviluppo Backend</div>
      <div class="service-desc">Backend solido e scalabile — il cuore di ogni applicazione. Ho lavorato su sistemi bancari complessi, so cosa significa costruire qualcosa che regga sotto carico.</div>
      <div class="service-tags">
        <span class="tag">PHP / Laravel</span>
        <span class="tag">Java / Spring Boot</span>
        <span class="tag">Python</span>
        <span class="tag">REST API</span>
      </div>
    </div>

    <div class="service-card reveal" style="transition-delay: 0.1s">
      <svg class="service-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2">
        <rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/>
      </svg>
      <div class="service-title">DevOps & Containerizzazione</div>
      <div class="service-desc">Ambienti Docker, pipeline CI/CD e deploy ripetibili. Ogni cosa che costruisco deve essere manutenibile anche tra cinque anni, da chiunque.</div>
      <div class="service-tags">
        <span class="tag">Docker</span>
        <span class="tag">CI/CD</span>
        <span class="tag">Linux</span>
        <span class="tag">Cloud</span>
      </div>
    </div>

    <div class="service-card reveal" style="transition-delay: 0.2s">
      <svg class="service-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2">
        <ellipse cx="12" cy="5" rx="9" ry="3"/><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"/><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"/>
      </svg>
      <div class="service-title">Migrazioni Database</div>
      <div class="service-desc">Ho risolto problemi di compatibilità in migrazioni di database di produzione. Quando qualcosa smette di funzionare dopo un aggiornamento, è il momento in cui serve esperienza reale.</div>
      <div class="service-tags">
        <span class="tag">MySQL</span>
        <span class="tag">MariaDB</span>
        <span class="tag">PostgreSQL</span>
        <span class="tag">Ottimizzazione</span>
      </div>
    </div>

    <div class="service-card reveal" style="transition-delay: 0.1s">
      <svg class="service-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2">
        <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/>
      </svg>
      <div class="service-title">Consulenza IT</div>
      <div class="service-desc">Vengo dalla Ragioneria Programmatore: capisco sia i processi aziendali che la tecnologia. Affianco le PMI nel digitalizzare i flussi interni con un approccio pratico.</div>
      <div class="service-tags">
        <span class="tag">Analisi processi</span>
        <span class="tag">Formazione ICT</span>
        <span class="tag">Digital transformation</span>
      </div>
    </div>

    <div class="service-card reveal" style="transition-delay: 0.2s">
      <svg class="service-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2">
        <circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 014 10 15.3 15.3 0 01-4 10 15.3 15.3 0 01-4-10 15.3 15.3 0 014-10z"/>
      </svg>
      <div class="service-title">Integrazioni & API</div>
      <div class="service-desc">I sistemi aziendali raramente parlano tra loro. Mi occupo di farli comunicare — webhook, middleware, integrazioni con piattaforme SaaS.</div>
      <div class="service-tags">
        <span class="tag">Webhook</span>
        <span class="tag">Middleware</span>
        <span class="tag">SaaS integration</span>
      </div>
    </div>

    <div class="service-card reveal" style="transition-delay: 0.3s">
      <svg class="service-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2">
        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
      </svg>
      <div class="service-title">Brand & Identità Digitale</div>
      <div class="service-desc">Per i progetti di identità digitale collaboro con professionisti del settore creativo. Dal logo al sito, coordino il team per garantire un risultato coerente.</div>
      <div class="service-tags">
        <span class="tag">Logo design</span>
        <span class="tag">Brand identity</span>
        <span class="tag">Web design</span>
      </div>
    </div>

  </div>
</section>

<!-- PORTFOLIO -->
<section id="portfolio">
  <div class="section-header reveal">
    <span class="section-num">04</span>
    <h2 class="section-title">Portfolio</h2>
    <div class="section-line"></div>
  </div>

  <div class="portfolio-grid">

    <div class="project-card featured reveal">
      <div>
        <div class="project-num">001 — FEATURED</div>
        <div class="project-title">Aruba S.p.A. — Vice Team Lead Backend</div>
        <div class="project-desc">Vice Team Lead di un team backend di 3 persone presso Alten SpA sul progetto Aruba. Responsabile di API design, logiche di business, strategie di migrazione e coesistenza tra sistemi legacy e nuovi, gestione rilasci in produzione e configurazione di flussi dati event-driven.</div>
        <div class="project-tech">
          <span class="tag">Java</span>
          <span class="tag">Spring Boot</span>
          <span class="tag">Kafka</span>
          <span class="tag">Camunda</span>
          <span class="tag">Spring Cloud Data Flow</span>
          <span class="tag">REST API</span>
        </div>
      </div>
      <div class="project-visual featured-visual">
        <span>ENTERPRISE / ARUBA S.P.A.</span>
      </div>
    </div>

    <div class="project-card reveal" style="transition-delay: 0.1s">
      <div class="project-num">002</div>
      <div class="project-title">Corso ICT MedGroup Srl</div>
      <div class="project-desc">Sviluppo di un corso di formazione ICT da 130 ore per un'azienda manifatturiera del settore serre e strutture metalliche. Focus sull'ottimizzazione dei processi digitali interni.</div>
      <div class="project-tech">
        <span class="tag">Formazione ICT</span>
        <span class="tag">130 ore</span>
        <span class="tag">Change management</span>
      </div>
    </div>

    <div class="project-card reveal" style="transition-delay: 0.2s">
      <div class="project-num">003</div>
      <div class="project-title">Gestionali D&C Architettura e Ingegneria</div>
      <div class="project-desc">Sviluppo di software gestionali su misura per uno studio di architettura e ingegneria. Soluzioni per la gestione interna di progetti, risorse e flussi operativi.</div>
      <div class="project-tech">
        <span class="tag">Sviluppo custom</span>
        <span class="tag">Gestionale</span>
        <span class="tag">Backend</span>
      </div>
    </div>

    <div class="project-card reveal" style="transition-delay: 0.3s">
      <div class="project-num">004</div>
      <div class="project-title">Migrazione DB MariaDB → MySQL</div>
      <div class="project-desc">Risoluzione di problematiche di compatibilità durante la migrazione di un database di produzione da ambiente MariaDB a MySQL.</div>
      <div class="project-tech">
        <span class="tag">MySQL</span>
        <span class="tag">MariaDB</span>
        <span class="tag">Database</span>
      </div>
    </div>

  </div>
</section>

<!-- TESTIMONIALS -->
<section id="testimonials" class="bg-alt">
  <div class="section-header reveal">
    <span class="section-num">05</span>
    <h2 class="section-title">Cosa dicono</h2>
    <div class="section-line"></div>
  </div>

  <div class="testimonials-grid">
    <div class="testimonial-card reveal">
      <div class="testimonial-quote">"</div>
      <p class="testimonial-text">Giovanni ha saputo tradurre le nostre esigenze operative in soluzioni concrete. La formazione ICT ha cambiato il modo in cui lavoriamo internamente.</p>
      <div class="testimonial-author">
        <div class="testimonial-name">MedGroup Srl</div>
        <div class="testimonial-role">Cliente — Formazione ICT</div>
      </div>
    </div>

    <div class="testimonial-card reveal" style="transition-delay: 0.1s">
      <div class="testimonial-quote">"</div>
      <p class="testimonial-text">Competente, puntuale e con una visione che va oltre il tecnico. Sa capire il problema prima ancora che tu finisca di spiegarlo.</p>
      <div class="testimonial-author">
        <div class="testimonial-name">D&C Architettura e Ingegneria</div>
        <div class="testimonial-role">Cliente — Sviluppo Gestionale</div>
      </div>
    </div>

    <div class="testimonial-card reveal" style="transition-delay: 0.2s">
      <div class="testimonial-quote">"</div>
      <p class="testimonial-text">Ha gestito la migrazione del nostro database senza interruzioni di servizio. Professionalità e attenzione ai dettagli fuori dal comune.</p>
      <div class="testimonial-author">
        <div class="testimonial-name">Cliente riservato</div>
        <div class="testimonial-role">Cliente — Migrazione Database</div>
      </div>
    </div>
  </div>
  <p class="testimonial-note">* I testimonial sono indicativi — verranno sostituiti con le recensioni reali dei clienti</p>
</section>

<!-- FAQ -->
<section id="faq">
  <div class="section-header reveal">
    <span class="section-num">06</span>
    <h2 class="section-title">FAQ</h2>
    <div class="section-line"></div>
  </div>

  <div class="faq-container">
    <div class="faq-item reveal">
      <button class="faq-button" onclick="toggleFaq(this)">
        Lavori da remoto?
        <span class="faq-icon">+</span>
      </button>
      <div class="faq-panel">
        <p class="faq-text">Sì, lavoro prevalentemente da remoto. Per i clienti locali in Sicilia sono disponibile anche di persona quando necessario.</p>
      </div>
    </div>
    <div class="faq-item reveal">
      <button class="faq-button" onclick="toggleFaq(this)">
        Accetti progetti a lungo termine?
        <span class="faq-icon">+</span>
      </button>
      <div class="faq-panel">
        <p class="faq-text">Dipende dal progetto. Valuto sia collaborazioni continuative che incarichi puntuali. Scrivimi con i dettagli e troviamo la formula giusta.</p>
      </div>
    </div>
    <div class="faq-item reveal">
      <button class="faq-button" onclick="toggleFaq(this)">
        Quali settori conosci meglio?
        <span class="faq-icon">+</span>
      </button>
      <div class="faq-panel">
        <p class="faq-text">Ho lavorato su progetti bancari e finanziari, manifatturiero, architettura e ingegneria. La mia formazione ibrida — tecnica ed economica — mi permette di adattarmi rapidamente a qualsiasi realtà aziendale.</p>
      </div>
    </div>
    <div class="faq-item reveal">
      <button class="faq-button" onclick="toggleFaq(this)">
        Lavori solo o hai un team?
        <span class="faq-icon">+</span>
      </button>
      <div class="faq-panel">
        <p class="faq-text">Per lo sviluppo backend e la consulenza IT lavoro in autonomia. Per i progetti che richiedono design e identità visiva collaboro con professionisti del settore creativo.</p>
      </div>
    </div>
    <div class="faq-item reveal">
      <button class="faq-button" onclick="toggleFaq(this)">
        Come funziona il processo di lavoro?
        <span class="faq-icon">+</span>
      </button>
      <div class="faq-panel">
        <p class="faq-text">Prima di tutto una chiamata conoscitiva gratuita per capire le esigenze. Poi una proposta dettagliata con tempi e costi. Nessuna sorpresa.</p>
      </div>
    </div>
    <div class="faq-item reveal">
      <button class="faq-button" onclick="toggleFaq(this)">
        Hai una Partita IVA?
        <span class="faq-icon">+</span>
      </button>
      <div class="faq-panel">
        <p class="faq-text">Sì, opero come libero professionista con regolare Partita IVA e rilascio fattura per tutti i servizi.</p>
      </div>
    </div>
  </div>
</section>

<!-- CONTATTI -->
<section id="contact">
  <div class="section-header reveal" style="justify-content: center; text-align: center;">
    <span class="section-num">07</span>
    <h2 class="section-title">Contatti</h2>
  </div>

  <p class="contact-intro reveal">
    Hai un progetto, un problema tecnico o vuoi semplicemente capire se posso esserti utile? Scrivimi — rispondo sempre, di persona.
  </p>

  <div class="contact-grid cols-4 reveal">
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
    <a class="contact-card" href="https://github.com/theMelfix" target="_blank">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 00-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0020 4.77 5.07 5.07 0 0019.91 1S18.73.65 16 2.48a13.38 13.38 0 00-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 005 4.77a5.44 5.44 0 00-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 009 18.13V22"/></svg>
      <span class="contact-card-label">GitHub</span>
      <span class="contact-card-value">theMelfix</span>
    </a>
  </div>
</section>

<?php include dirname(__DIR__) . '/includes/footer.php'; ?>

</body>
</html>
