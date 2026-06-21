<?php $is_client = ($page_type === 'client'); ?>
<div class="cursor" id="cursor"></div>
<div class="cursor-ring" id="cursorRing"></div>

<nav id="nav">
  <a href="<?= $is_client ? '/' : '/developer' ?>#hero" class="nav-logo">
    <div class="nav-hex">
      <svg viewBox="0 0 36 36" fill="none">
        <defs>
          <linearGradient id="nhg" x1="0" y1="0" x2="36" y2="36" gradientUnits="userSpaceOnUse">
            <stop offset="0%" stop-color="#c084fc" stop-opacity="0.9"/>
            <stop offset="100%" stop-color="#e63946" stop-opacity="0.7"/>
          </linearGradient>
        </defs>
        <polygon points="18,2 32,10 32,26 18,34 4,26 4,10" fill="none" stroke="url(#nhg)" stroke-width="1.2"/>
        <polygon points="18,6 28,12 28,24 18,30 8,24 8,12" fill="none" stroke="rgba(192,132,252,0.2)" stroke-width="0.8"/>
      </svg>
      <span class="nav-gm">GM</span>
    </div>
    <span class="nav-name">Giovanni Melfi</span>
  </a>
  <ul class="nav-links">
    <?php if ($is_client): ?>
    <li><a href="#about">Chi sono</a></li>
    <li><a href="#services">Cosa faccio</a></li>
    <li><a href="#portfolio">Progetti</a></li>
    <li><a href="#contact">Contatti</a></li>
    <li><a href="/developer" class="nav-switch">Profilo tecnico</a></li>
    <?php else: ?>
    <li><a href="#about">Chi sono</a></li>
    <li><a href="#stack">Stack</a></li>
    <li><a href="#services">Servizi</a></li>
    <li><a href="#portfolio">Portfolio</a></li>
    <li><a href="#contact">Contatti</a></li>
    <li><a href="/" class="nav-switch">Per i clienti</a></li>
    <?php endif; ?>
  </ul>
  <a href="#contact" class="nav-badge">
    <span class="nav-badge-dot"></span>
    Parzialmente disponibile
  </a>
</nav>
