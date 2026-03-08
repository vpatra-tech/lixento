<?php
// index.php - homepage
require_once __DIR__ . '/includes/config.php';

$pageTitle = 'ChromaShield Coatings | Industrial Paint & Coatings Manufacturer';
$pageDescription = 'ChromaShield Coatings – Leading manufacturer of industrial paints, protective coatings, waterproofing solutions, and white-label paint manufacturing. ISO certified.';
$activePage  = 'home';

include __DIR__ . '/includes/header.php';
?>

<!-- ===== HERO ===== -->
<header class="hero-section" role="banner">
  <div class="hero-overlay"></div>
  <div class="container position-relative z-1">
    <div class="row align-items-center min-vh-80">
      <div class="col-lg-7">
        <span class="hero-badge">ISO 9001:2015 Certified Manufacturer</span>
        <h1 class="hero-title">Engineering Coatings That <span class="text-accent">Last Decades</span></h1>
        <p class="hero-sub">Industrial paints, protective coatings, and white-label manufacturing solutions trusted by 500+ brands across 30+ countries.</p>
        <div class="d-flex flex-wrap gap-3 mt-4">
          <a href="contact.php#quote" class="btn btn-accent btn-lg">Request a Quote</a>
          <a href="products.php" class="btn btn-outline-light btn-lg">View Products</a>
        </div>
        <div class="hero-stats row mt-5 g-3">
          <div class="col-4">
            <div class="stat-item">
              <span class="stat-num">25+</span>
              <span class="stat-label">Years Experience</span>
            </div>
          </div>
          <div class="col-4">
            <div class="stat-item">
              <span class="stat-num">500+</span>
              <span class="stat-label">Brand Partners</span>
            </div>
          </div>
          <div class="col-4">
            <div class="stat-item">
              <span class="stat-num">10M+</span>
              <span class="stat-label">Litres/Year</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- ===== ABOUT BRIEF ===== -->
<section class="py-section bg-white" aria-labelledby="about-heading">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-6">
        <div class="img-block">
          <img src="https://images.unsplash.com/photo-1581092580497-e0d23cbdf1dc?w=700&q=80" alt="ChromaShield manufacturing facility interior" class="img-fluid rounded-2 shadow" />
          <div class="img-badge">
            <i class="bi bi-award-fill text-accent fs-3"></i>
            <div>
              <strong>ISO 9001:2015</strong><br>
              <small>Quality Certified</small>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <span class="section-label">Who We Are</span>
        <h2 id="about-heading" class="section-title">A Trusted Name in Industrial Coatings Manufacturing</h2>
        <p class="text-secondary">ChromaShield Coatings is a vertically integrated paint and coatings manufacturer with over 25 years of expertise in formulating high-performance solvent-based, water-based, and specialty coating systems.</p>
        <p class="text-secondary">Our state-of-the-art facility produces over 10 million litres annually — serving OEM partners, industrial clients, contractors, and white-label brands globally.</p>
        <ul class="feature-list mt-4">
          <li><i class="bi bi-check-circle-fill text-accent"></i> Fully equipped R&D and quality control laboratory</li>
          <li><i class="bi bi-check-circle-fill text-accent"></i> Compliant with national and international standards</li>
          <li><i class="bi bi-check-circle-fill text-accent"></i> End-to-end white-label & private label solutions</li>
          <li><i class="bi bi-check-circle-fill text-accent"></i> Bulk and retail supply with flexible MOQ</li>
        </ul>
        <a href="about.php" class="btn btn-primary mt-4">Learn About Us</a>
      </div>
    </div>
  </div>
</section>

<!-- ===== PRODUCT CATEGORIES ===== -->
<section class="py-section bg-light" aria-labelledby="products-heading">
  <div class="container">
    <div class="text-center mb-5">
      <span class="section-label">Our Product Range</span>
      <h2 id="products-heading" class="section-title">Coatings for Every Application</h2>
      <p class="text-secondary col-lg-6 mx-auto">From heavy-duty industrial coatings to decorative wall paints — we manufacture a comprehensive range to meet every project requirement.</p>
    </div>
    <div class="row g-4">
      <!-- Product Cards -->
      <div class="col-sm-6 col-lg-4">
        <a href="products.php#industrial" class="product-card card h-100 text-decoration-none">
          <div class="card-body p-4">
            <div class="product-icon"><i class="bi bi-gear-fill"></i></div>
            <h3 class="card-title h5 mt-3">Industrial Coatings</h3>
            <p class="card-text text-secondary small">High-performance epoxy, polyurethane, and alkyd systems for machinery, steel structures, and plant facilities.</p>
            <span class="link-more">Explore <i class="bi bi-arrow-right"></i></span>
          </div>
        </a>
      </div>
      <div class="col-sm-6 col-lg-4">
        <a href="products.php#decorative" class="product-card card h-100 text-decoration-none">
          <div class="card-body p-4">
            <div class="product-icon"><i class="bi bi-house-fill"></i></div>
            <h3 class="card-title h5 mt-3">Decorative Paints</h3>
            <p class="card-text text-secondary small">Interior and exterior emulsions, enamels, and texture finishes for residential and commercial projects.</p>
            <span class="link-more">Explore <i class="bi bi-arrow-right"></i></span>
          </div>
        </a>
      </div>
      <div class="col-sm-6 col-lg-4">
        <a href="products.php#protective" class="product-card card h-100 text-decoration-none">
          <div class="card-body p-4">
            <div class="product-icon"><i class="bi bi-shield-fill-check"></i></div>
            <h3 class="card-title h5 mt-3">Protective Coatings</h3>
            <p class="card-text text-secondary small">Anti-corrosion, fire-retardant, and chemical-resistant coatings for critical infrastructure and marine environments.</p>
            <span class="link-more">Explore <i class="bi bi-arrow-right"></i></span>
          </div>
        </a>
      </div>
      <div class="col-sm-6 col-lg-4">
        <a href="products.php#waterproofing" class="product-card card h-100 text-decoration-none">
          <div class="card-body p-4">
            <div class="product-icon"><i class="bi bi-water"></i></div>
            <h3 class="card-title h5 mt-3">Waterproofing Solutions</h3>
            <p class="card-text text-secondary small">Acrylic, polyurethane, and cementitious waterproofing systems for roofs, basements, and wet areas.</p>
            <span class="link-more">Explore <i class="bi bi-arrow-right"></i></span>
          </div>
        </a>
      </div>
      <div class="col-sm-6 col-lg-4">
        <a href="products.php#primers" class="product-card card h-100 text-decoration-none">
          <div class="card-body p-4">
            <div class="product-icon"><i class="bi bi-layers-fill"></i></div>
            <h3 class="card-title h5 mt-3">Primers & Undercoats</h3>
            <p class="card-text text-secondary small">Metal, wood, and masonry primers that deliver superior adhesion and long-term surface protection.</p>
            <span class="link-more">Explore <i class="bi bi-arrow-right"></i></span>
          </div>
        </a>
      </div>
      <div class="col-sm-6 col-lg-4">
        <a href="white-label.php" class="product-card card h-100 text-decoration-none card-accent">
          <div class="card-body p-4">
            <div class="product-icon"><i class="bi bi-tag-fill"></i></div>
            <h3 class="card-title h5 mt-3">White Label Manufacturing</h3>
            <p class="card-text text-secondary small">Build your own paint brand. We manufacture, you brand. Complete OEM/ODM solutions with custom packaging.</p>
            <span class="link-more">Learn More <i class="bi bi-arrow-right"></i></span>
          </div>
        </a>
      </div>
    </div>
    <div class="text-center mt-5">
      <a href="products.php" class="btn btn-primary btn-lg">View All Products</a>
    </div>
  </div>
</section>

<!-- other homepage sections would go here... -->

<?php include __DIR__ . '/includes/footer.php';
