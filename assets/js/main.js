// Custom cursor
const cursor = document.getElementById('cursor');
const ring = document.getElementById('cursorRing');
let mx = 0, my = 0, rx = 0, ry = 0;

document.addEventListener('mousemove', e => {
  mx = e.clientX; my = e.clientY;
  cursor.style.left = mx + 'px';
  cursor.style.top  = my + 'px';
});

function animRing() {
  rx += (mx - rx) * 0.12;
  ry += (my - ry) * 0.12;
  ring.style.left = rx + 'px';
  ring.style.top  = ry + 'px';
  requestAnimationFrame(animRing);
}
animRing();

document.querySelectorAll('a, button').forEach(el => {
  el.addEventListener('mouseenter', () => {
    cursor.style.width = '16px';
    cursor.style.height = '16px';
    ring.style.width = '48px';
    ring.style.height = '48px';
  });
  el.addEventListener('mouseleave', () => {
    cursor.style.width = '8px';
    cursor.style.height = '8px';
    ring.style.width = '32px';
    ring.style.height = '32px';
  });
});

// Nav scroll
const nav = document.getElementById('nav');
window.addEventListener('scroll', () => {
  nav.classList.toggle('scrolled', window.scrollY > 60);
});

// Reveal on scroll
const reveals = document.querySelectorAll('.reveal');
const obs = new IntersectionObserver((entries) => {
  entries.forEach(e => {
    if (e.isIntersecting) {
      e.target.classList.add('visible');
      obs.unobserve(e.target);
    }
  });
}, { threshold: 0.1 });
reveals.forEach(el => obs.observe(el));

// FAQ toggle
function toggleFaq(btn) {
  const panel = btn.nextElementSibling;
  const icon = btn.querySelector('.faq-icon');
  const isOpen = panel.style.maxHeight && panel.style.maxHeight !== '0px';
  document.querySelectorAll('.faq-panel').forEach(p => p.style.maxHeight = '0px');
  document.querySelectorAll('.faq-icon').forEach(i => {
    i.style.transform = 'rotate(0deg)'; i.textContent = '+';
  });
  if (!isOpen) {
    panel.style.maxHeight = panel.scrollHeight + 'px';
    icon.style.transform = 'rotate(45deg)';
  }
}

// Cookie banner + Google Consent Mode
const banner = document.getElementById('cookie-banner');
function showBanner() { banner.style.transform = 'translateY(0)'; }
function hideBanner() { banner.style.transform = 'translateY(100%)'; }

// Mostra il banner solo se l'utente non ha ancora scelto
if (!localStorage.getItem('cookie-consent')) {
  setTimeout(showBanner, 800);
}

function updateConsent(state) {
  // state: 'granted' | 'denied'
  localStorage.setItem('cookie-consent', state);
  if (typeof gtag === 'function') {
    gtag('consent', 'update', { analytics_storage: state });
  }
  hideBanner();
}
function acceptCookies() { updateConsent('granted'); }
function rejectCookies() { updateConsent('denied'); }

// Riapre il banner per modificare/revocare il consenso
function manageCookies(e) {
  if (e) e.preventDefault();
  if (typeof closePrivacy === 'function') closePrivacy();
  showBanner();
}

// Privacy modal
const modal = document.getElementById('privacy-modal');
function showPrivacy(e) {
  if (e) e.preventDefault();
  modal.style.display = 'flex';
  document.body.style.overflow = 'hidden';
}
function closePrivacy() {
  modal.style.display = 'none';
  document.body.style.overflow = '';
}
modal.addEventListener('click', e => { if (e.target === modal) closePrivacy(); });
