<?php
// includes/footer.php
// simply include this at the bottom of a page after the main content
?>

<!-- ===== FOOTER ===== -->
<footer class="footer bg-dark-navy text-white pt-5 pb-3" role="contentinfo">
  <div class="container">
    <div class="row g-4 mb-4">
      <div class="col-lg-4 col-md-6">
        <a class="navbar-brand mb-3 d-inline-block" href="<?= BASE_URL ?>index.php">
          <span class="brand-icon"><i class="bi bi-droplet-fill"></i></span>
          <span class="brand-text">CHROMA<span class="brand-accent">SHIELD</span></span>
        </a>
        <p class="text-secondary small">A trusted industrial paint and coatings manufacturer delivering high-performance solutions for over 25 years.</p>
        <div class="d-flex gap-3 mt-3">
          <a href="#" aria-label="LinkedIn" class="social-link"><i class="bi bi-linkedin"></i></a>
          <a href="#" aria-label="Facebook" class="social-link"><i class="bi bi-facebook"></i></a>
          <a href="#" aria-label="YouTube" class="social-link"><i class="bi bi-youtube"></i></a>
          <a href="#" aria-label="Twitter" class="social-link"><i class="bi bi-twitter-x"></i></a>
        </div>
      </div>
      <div class="col-lg-2 col-md-6">
        <h5 class="footer-heading">Company</h5>
        <ul class="footer-links">
          <li><a href="<?= BASE_URL ?>about.php">About Us</a></li>
          <li><a href="<?= BASE_URL ?>manufacturing.php">Manufacturing</a></li>
          <li><a href="<?= BASE_URL ?>white-label.php">White Label</a></li>
          <li><a href="<?= BASE_URL ?>careers.php">Careers</a></li>
          <li><a href="<?= BASE_URL ?>contact.php">Contact</a></li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-6">
        <h5 class="footer-heading">Products</h5>
        <ul class="footer-links">
          <li><a href="<?= BASE_URL ?>products.php#industrial">Industrial Coatings</a></li>
          <!-- <li><a href="<?= BASE_URL ?>products.php#decorative">Decorative Paints</a></li> -->
          <li><a href="<?= BASE_URL ?>products.php#protective">Protective Coatings</a></li>
          <li><a href="<?= BASE_URL ?>products.php#waterproofing">Waterproofing Solutions</a></li>
          <li><a href="<?= BASE_URL ?>products.php#primers">Primers</a></li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-6">
        <h5 class="footer-heading">Contact</h5>
        <ul class="footer-contact">
          <li><i class="bi bi-geo-alt-fill"></i><span>Plot 42, Industrial Area, Phase 2, Mumbai – 400703</span></li>
          <li><i class="bi bi-telephone-fill"></i><a href="tel:+911234567890">+91 123 456 7890</a></li>
          <li><i class="bi bi-envelope-fill"></i><a href="mailto:info@chromashield.com">info@chromashield.com</a></li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-6">
        <h5 class="footer-heading">Shareholders & Partners</h5>
        <select class="form-select form-select-sm mt-2" aria-label="Shareholder/partner names">
          <option selected>Select shareholder/partner</option>
          <option value="1">Hemant Valvi</option>
          <option value="2">Akshay Nair</option>
          <option value="3">Rohit Chourpagar</option>
          <option value="4">Vishal Patra</option>
          <option value="5">Chhgan Onkar</option>
        </select>
      </div>
    </div>
    <hr class="footer-divider" />
    <div class="row align-items-center">
      <div class="col-md-6">
        <p class="text-secondary small mb-0">&copy; <?= date('Y') ?> <?= SITE_NAME ?>. All rights reserved.</p>
      </div>
      <div class="col-md-6 text-md-end">
        <a href="#" class="text-secondary small me-3">Privacy Policy</a>
        <a href="#" class="text-secondary small">Terms of Use</a>
      </div>
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= BASE_URL ?>assets/js/main.js"></script>
</body>
</html>
