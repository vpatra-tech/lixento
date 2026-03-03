/* ChromaShield Coatings — main.js */
'use strict';

// Navbar scroll shadow
const nav = document.getElementById('mainNav');
if (nav) {
  window.addEventListener('scroll', () => {
    nav.classList.toggle('scrolled', window.scrollY > 50);
  }, { passive: true });
}

// Smooth scroll for anchor links
document.querySelectorAll('a[href^="#"]').forEach(a => {
  a.addEventListener('click', e => {
    const target = document.querySelector(a.getAttribute('href'));
    if (target) {
      e.preventDefault();
      const offset = 80;
      const top = target.getBoundingClientRect().top + window.scrollY - offset;
      window.scrollTo({ top, behavior: 'smooth' });
    }
  });
});

// Quote form demo submit handler
const quoteForm = document.getElementById('quoteForm');
if (quoteForm) {
  quoteForm.addEventListener('submit', e => {
    e.preventDefault();
    if (!quoteForm.checkValidity()) {
      quoteForm.classList.add('was-validated');
      return;
    }
    const successMsg = document.getElementById('formSuccess');
    if (successMsg) {
      successMsg.classList.remove('d-none');
      quoteForm.reset();
      quoteForm.classList.remove('was-validated');
      successMsg.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    }
  });
}

// Generic form validation bootstrap style
document.querySelectorAll('form[novalidate]').forEach(form => {
  form.addEventListener('submit', e => {
    if (!form.checkValidity()) {
      e.preventDefault();
      e.stopPropagation();
    }
    form.classList.add('was-validated');
  });
});
