document.addEventListener('DOMContentLoaded', () => {
  const header = document.getElementById('header');
  const hamburger = document.getElementById('hamburger');
  const navMenu = document.querySelector('.nav__menu');
  // hero slider removed: using static hero media and content

  // Sticky header
  const onScroll = () => header.classList.toggle('sticky', window.scrollY > 60);
  window.addEventListener('scroll', onScroll);
  onScroll();

  // Mobile menu toggle + keyboard focus trap
  if(hamburger && navMenu){
    let lastFocused = null;
    const focusableSelector = 'a, button, input, [tabindex]:not([tabindex="-1"])';
    const getFocusable = () => [...navMenu.querySelectorAll(focusableSelector)].filter(el => !el.hasAttribute('disabled'));

    const trap = (e) => {
      if(!navMenu.classList.contains('active')) return;
      const focusables = getFocusable();
      if(!focusables.length) return;
      const first = focusables[0];
      const last = focusables[focusables.length-1];
      if(e.key === 'Tab'){
        if(e.shiftKey && document.activeElement === first){ e.preventDefault(); last.focus(); }
        else if(!e.shiftKey && document.activeElement === last){ e.preventDefault(); first.focus(); }
      }
      if(e.key === 'Escape'){ closeMenu(); }
    };

    const openMenu = () => {
      lastFocused = document.activeElement;
      hamburger.setAttribute('aria-expanded','true');
      navMenu.classList.add('active');
      const focusables = getFocusable();
      if(focusables.length) focusables[0].focus();
      document.addEventListener('keydown', trap);
    };

    const closeMenu = () => {
      hamburger.setAttribute('aria-expanded','false');
      navMenu.classList.remove('active');
      document.removeEventListener('keydown', trap);
      if(lastFocused) lastFocused.focus();
    };

    hamburger.addEventListener('click', () => {
      if(navMenu.classList.contains('active')) closeMenu(); else openMenu();
    });

    // Close menu on link click
    navMenu.querySelectorAll('a').forEach(a => a.addEventListener('click', () => { closeMenu(); }));
  }

  // Dropdown / Mega menu toggle for touch / mobile
  document.querySelectorAll('.nav__item--mega > a, .nav__item--has-dropdown > a').forEach(toggle => {
    toggle.setAttribute('aria-expanded','false');
    toggle.addEventListener('click', (e) => {
      // only intercept for small screens
      if(window.matchMedia('(max-width:900px)').matches){
        e.preventDefault();
        const li = toggle.parentElement;
        const menu = li.querySelector('.mega-menu');
        const expanded = toggle.getAttribute('aria-expanded') === 'true';
        toggle.setAttribute('aria-expanded', String(!expanded));
        if(menu){ menu.style.display = expanded ? '' : 'block'; }
      }
    });
  });

  // Close any open dropdown when clicking outside
  document.addEventListener('click', (e) => {
    if(window.matchMedia('(max-width:900px)').matches){
      const open = document.querySelectorAll('.nav__item--mega [style*="display: block"]');
      open.forEach(m => { if(!m.contains(e.target)) m.style.display=''; });
    }
  });

  // Smooth scroll for internal anchors
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e){
      const target = document.querySelector(this.getAttribute('href'));
      if(target){ e.preventDefault(); target.scrollIntoView({ behavior: 'smooth', block: 'start' }); }
    });
  });

  // static hero: no slider or autoplay

  // Intersection observer for reveal animations and counters
  const io = new IntersectionObserver((entries, obs) => {
    entries.forEach(entry => {
      if(entry.isIntersecting){
        entry.target.classList.add('active');
        // counters
        if(entry.target.classList.contains('counter')) runCounter(entry.target);
      }
    });
  }, {threshold: 0.45});

  document.querySelectorAll('.reveal, .counter').forEach(el => io.observe(el));

  // Animated counters
  function runCounter(el){
    if(el.dataset.run) return; // run once
    const target = +el.dataset.target || 0;
    const duration = 2000;
    const start = 0;
    const startTime = performance.now();
    el.dataset.run = 'true';
    const step = (now) => {
      const progress = Math.min((now - startTime) / duration, 1);
      const value = Math.floor(progress * (target - start) + start);
      el.innerText = value.toLocaleString();
      if(progress < 1) requestAnimationFrame(step);
      else el.innerText = target.toLocaleString();
    };
    requestAnimationFrame(step);
  }

  // Active nav highlighting
  const sections = [...document.querySelectorAll('main section[id]')];
  const navLinks = [...document.querySelectorAll('.nav__menu a')];
  if(sections.length){
    const navIo = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if(entry.isIntersecting){
          const id = entry.target.id;
          navLinks.forEach(a => a.classList.toggle('active', a.getAttribute('href') && a.getAttribute('href').includes(id)));
        }
      });
    }, {threshold:0.45});
    sections.forEach(s => navIo.observe(s));
  }

  // Lazy load images with data-src
  const lazyImgs = document.querySelectorAll('img[data-src]');
  const imgIo = new IntersectionObserver((entries, obs) => {
    entries.forEach(entry => {
      if(entry.isIntersecting){
        const img = entry.target;
        img.src = img.dataset.src;
        img.removeAttribute('data-src');
        obs.unobserve(img);
      }
    });
  }, {threshold:0.2});
  lazyImgs.forEach(i => imgIo.observe(i));

  // Parallax for fullpage hero (scroll + mouse)
  const hero = document.querySelector('.hero--fullpage');
  if(hero){
    const media = hero.querySelector('.hero__media');
    const img = media ? media.querySelector('.hero__img') : null;
    let tX = 0, tY = 0, x = 0, y = 0, rafId = null;

    const clamp = (v, a, b) => Math.max(a, Math.min(b, v));
    const onFrame = () => {
      x += (tX - x) * 0.08;
      y += (tY - y) * 0.08;
      // clamp to avoid exposing background
      const cx = clamp(x, -40, 40);
      const cy = clamp(y, -80, 80);
      if(img) img.style.transform = `translate3d(${cx}px, ${cy}px, 0) scale(1.18)`;
      rafId = requestAnimationFrame(onFrame);
    };

    const onScrollParallax = () => {
      const rect = hero.getBoundingClientRect();
      const pct = Math.min(Math.max(-rect.top / rect.height, -1), 1);
      // vertical parallax: move image slower than scroll
      tY = pct * 30; // max 30px
      if(!rafId) onFrame();
    };

    const onMouseMove = (e) => {
      const w = window.innerWidth, h = window.innerHeight;
      const dx = (e.clientX - w/2) / (w/2); // -1..1
      const dy = (e.clientY - h/2) / (h/2);
      tX = dx * 12; // subtle left/right
      tY = (dy * 8) + tY; // combine with scroll influence
      if(!rafId) onFrame();
    };

    window.addEventListener('scroll', onScrollParallax, {passive:true});
    window.addEventListener('mousemove', onMouseMove);
    // initial call
    onScrollParallax();
  }

});

// CTA form handling (simple client-side feedback)
document.addEventListener('DOMContentLoaded', () => {
  const ctaForm = document.getElementById('ctaForm');
  const ctaSuccess = document.getElementById('ctaSuccess');
  const ctaClear = document.getElementById('ctaClear');
  if(ctaForm){
    ctaForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const email = ctaForm.querySelector('#email');
      if(email && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value)){
        email.focus();
        email.setAttribute('aria-invalid','true');
        return;
      }
      // Show success message and clear form inputs
      ctaSuccess.style.display = 'block';
      ctaForm.querySelectorAll('input,textarea,button').forEach(i=>{ if(i.type!=='submit') i.disabled = true; });
      // In a real app, replace with AJAX call to backend endpoint
    });
    if(ctaClear){ ctaClear.addEventListener('click', ()=> ctaForm.reset()); }
  }
});