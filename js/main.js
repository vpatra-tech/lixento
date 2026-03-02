/**
 * ColorTech Coatings - Main JavaScript
 * Clean, minimal code for essential interactions only
 */

document.addEventListener('DOMContentLoaded', function() {
  // Initialize Bootstrap tooltips and popovers if needed
  initializeTooltips();

  // Smooth scroll for anchor links
  setupSmoothScroll();

  // Form validation
  setupFormValidation();

  // Auto-close mobile menu on link click
  setupMobileMenuClose();
});

/**
 * Initialize Bootstrap tooltips
 */
function initializeTooltips() {
  const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
  tooltipTriggerList.forEach(function(tooltipTriggerEl) {
    new bootstrap.Tooltip(tooltipTriggerEl);
  });
}

/**
 * Smooth scroll for anchor links
 */
function setupSmoothScroll() {
  document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
    anchor.addEventListener('click', function(e) {
      const href = this.getAttribute('href');

      // Skip if it's just '#' or if it's for Bootstrap components
      if (href === '#' || this.getAttribute('data-bs-toggle')) return;

      const target = document.querySelector(href);
      if (target) {
        e.preventDefault();
        target.scrollIntoView({
          behavior: 'smooth',
          block: 'start'
        });
      }
    });
  });
}

/**
 * Form validation (Bootstrap 5 pattern)
 */
function setupFormValidation() {
  const forms = document.querySelectorAll('form.needs-validation');

  forms.forEach(function(form) {
    form.addEventListener('submit', function(e) {
      if (!form.checkValidity()) {
        e.preventDefault();
        e.stopPropagation();
      }
      form.classList.add('was-validated');
    });
  });
}

/**
 * Auto-close mobile menu when a link is clicked
 */
function setupMobileMenuClose() {
  const navbarToggler = document.querySelector('.navbar-toggler');
  const navbarCollapse = document.querySelector('.navbar-collapse');

  if (navbarToggler && navbarCollapse) {
    document.querySelectorAll('.navbar-collapse a').forEach(function(link) {
      link.addEventListener('click', function() {
        // Check if menu is open on mobile
        if (window.innerWidth < 992) {
          navbarToggler.click();
        }
      });
    });
  }
}

/**
 * Utility: Add active class to current navigation link
 */
function highlightCurrentPage() {
  const currentLocation = location.pathname + location.search;
  const navLinks = document.querySelectorAll('nav a.nav-link');

  navLinks.forEach(function(link) {
    if (link.getAttribute('href') === currentLocation) {
      link.classList.add('active');
    } else {
      link.classList.remove('active');
    }
  });
}

/**
 * Utility: Debounce function for performance
 */
function debounce(func, delay) {
  let timeoutId;
  return function(...args) {
    clearTimeout(timeoutId);
    timeoutId = setTimeout(function() {
      func.apply(this, args);
    }, delay);
  };
}

/**
 * Utility: Check if element is in viewport
 */
function isInViewport(element) {
  const rect = element.getBoundingClientRect();
  return (
    rect.top >= 0 &&
    rect.left >= 0 &&
    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
  );
}

/**
 * Utility: Lazy load images (if needed in future)
 */
function setupLazyLoading() {
  if ('IntersectionObserver' in window) {
    const imageObserver = new IntersectionObserver((entries, observer) => {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          const img = entry.target;
          if (img.dataset.src) {
            img.src = img.dataset.src;
            img.removeAttribute('data-src');
          }
          observer.unobserve(img);
        }
      });
    });

    document.querySelectorAll('img[data-src]').forEach(img => imageObserver.observe(img));
  }
}

/**
 * Log that the site loaded successfully (for debugging)
 */
console.log('ColorTech Coatings - Website loaded successfully');
