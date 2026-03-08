<?php
require_once __DIR__ . '/includes/config.php';
$pageTitle = 'Manufacturing Facility | ChromaShield Coatings';
$pageDescription = 'Explore ChromaShield's state-of-the-art paint manufacturing facility — production capacity, machinery, quality testing lab, and safety certifications.';
$activePage = 'manufacturing';
include __DIR__ . '/includes/header.php';
?>




<!-- PAGE HEADER -->
<section class="page-header">
  <div class="container">
    <nav aria-label="breadcrumb"><ol class="breadcrumb"><li class="breadcrumb-item"><a href="index.php">Home</a></li><li class="breadcrumb-item active">Manufacturing</li></ol></nav>
    <h1 class="page-title">Manufacturing Facility</h1>
    <p class="page-subtitle">State-of-the-art production infrastructure engineered for scale and precision</p>
  </div>
</section>

<!-- FACILITY OVERVIEW -->
<section class="py-section bg-white" aria-labelledby="facility-heading">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-6">
        <span class="section-label">Our Infrastructure</span>
        <h2 id="facility-heading" class="section-title">Built for Scale, Designed for Quality</h2>
        <p class="text-secondary">Our 12-acre integrated manufacturing complex in Mumbai houses multiple dedicated production lines for water-based, solvent-based, and specialty coating systems — with a combined annual capacity exceeding 10 million litres.</p>
        <p class="text-secondary">Every production bay is designed to ISO standards with climate-controlled mixing, milling, and filling zones to ensure batch-to-batch consistency.</p>
        <div class="row g-3 mt-3">
          <div class="col-6"><div class="mini-stat"><span class="stat-num">12 Acres</span><span class="stat-label">Plant Area</span></div></div>
          <div class="col-6"><div class="mini-stat"><span class="stat-num">10M+ L</span><span class="stat-label">Annual Capacity</span></div></div>
          <div class="col-6"><div class="mini-stat"><span class="stat-num">6</span><span class="stat-label">Production Lines</span></div></div>
          <div class="col-6"><div class="mini-stat"><span class="stat-num">24×7</span><span class="stat-label">Operations</span></div></div>
        </div>
      </div>
      <div class="col-lg-6">
        <img src="https://images.unsplash.com/photo-1587293852726-70cdb56c2866?w=700&q=80" alt="ChromaShield paint manufacturing plant exterior" class="img-fluid rounded-2 shadow" />
      </div>
    </div>
  </div>
</section>

<!-- MACHINERY -->
<section class="py-section bg-light" aria-labelledby="machinery-heading">
  <div class="container">
    <div class="text-center mb-5">
      <span class="section-label">Equipment & Technology</span>
      <h2 id="machinery-heading" class="section-title">Production Machinery</h2>
    </div>
    <div class="row g-4">
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 p-4 service-card">
          <i class="bi bi-gear-wide-connected service-icon"></i>
          <h3 class="h5 mt-3">High-Speed Dispersers</h3>
          <p class="text-secondary small">Variable-speed Cowles dispersers (500L – 10,000L capacity) for efficient pigment dispersion in both aqueous and solvent systems.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 p-4 service-card">
          <i class="bi bi-circle-half service-icon"></i>
          <h3 class="h5 mt-3">Bead & Sand Mills</h3>
          <p class="text-secondary small">Continuous horizontal bead mills for micronized pigment grinding to &lt;10 microns fineness across all formulation types.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 p-4 service-card">
          <i class="bi bi-arrows-angle-expand service-icon"></i>
          <h3 class="h5 mt-3">Automated Tinting Systems</h3>
          <p class="text-secondary small">Computerized dispensing and tinting machines for precise colour matching across thousands of shades reproducibly.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 p-4 service-card">
          <i class="bi bi-funnel-fill service-icon"></i>
          <h3 class="h5 mt-3">Automated Filling Lines</h3>
          <p class="text-secondary small">Fully automated piston-filling lines for 1L to 200L containers with induction sealing and labelling systems.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 p-4 service-card">
          <i class="bi bi-thermometer-sun service-icon"></i>
          <h3 class="h5 mt-3">Climate-Controlled Storage</h3>
          <p class="text-secondary small">Temperature and humidity-regulated raw material and finished goods warehouses ensuring product stability and shelf life.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 p-4 service-card">
          <i class="bi bi-recycle service-icon"></i>
          <h3 class="h5 mt-3">ETP / Waste Management</h3>
          <p class="text-secondary small">Dedicated effluent treatment plant and VOC emission control systems compliant with CPCB norms and ISO 14001 standards.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- QUALITY LAB -->
<section class="py-section bg-white" aria-labelledby="lab-heading">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-6 order-lg-2">
        <span class="section-label">Quality Assurance</span>
        <h2 id="lab-heading" class="section-title">Quality Testing Laboratory</h2>
        <p class="text-secondary">Our fully equipped analytical laboratory conducts comprehensive in-process and final product testing ensuring every batch meets stringent quality benchmarks before dispatch.</p>
        <ul class="feature-list mt-3">
          <li><i class="bi bi-check-circle-fill text-accent"></i> Spectrophotometric colour measurement & matching</li>
          <li><i class="bi bi-check-circle-fill text-accent"></i> Salt spray testing (ASTM B117) — up to 3000 hours</li>
          <li><i class="bi bi-check-circle-fill text-accent"></i> UV accelerated weathering (QUV) chamber</li>
          <li><i class="bi bi-check-circle-fill text-accent"></i> Adhesion, flexibility, impact & hardness testing</li>
          <li><i class="bi bi-check-circle-fill text-accent"></i> Viscosity, density, and fineness of grind analysis</li>
          <li><i class="bi bi-check-circle-fill text-accent"></i> VOC content analysis per EU Directive 2004/42/EC</li>
          <li><i class="bi bi-check-circle-fill text-accent"></i> Chemical resistance immersion testing</li>
        </ul>
      </div>
      <div class="col-lg-6 order-lg-1">
        <img src="https://images.unsplash.com/photo-1532187863486-abf9dbad1b69?w=700&q=80" alt="Quality control laboratory with testing equipment" class="img-fluid rounded-2 shadow" />
      </div>
    </div>
  </div>
</section>

<!-- CERTIFICATIONS & SAFETY -->
<section class="py-section bg-dark-navy text-white" aria-labelledby="certs-safety-heading">
  <div class="container">
    <div class="text-center mb-5">
      <span class="section-label text-accent">Standards & Safety</span>
      <h2 id="certs-safety-heading" class="section-title text-white">Certifications & Safety Standards</h2>
    </div>
    <div class="row g-4">
      <div class="col-sm-6 col-lg-3">
        <div class="why-card text-center p-4">
          <i class="bi bi-award-fill why-icon"></i>
          <h3 class="h6 mt-3 fw-600">ISO 9001:2015</h3>
          <p class="text-secondary small">Quality Management System — all processes from raw material to dispatch.</p>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3">
        <div class="why-card text-center p-4">
          <i class="bi bi-leaf-fill why-icon"></i>
          <h3 class="h6 mt-3 fw-600">ISO 14001:2015</h3>
          <p class="text-secondary small">Environmental Management — minimizing ecological footprint of manufacturing.</p>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3">
        <div class="why-card text-center p-4">
          <i class="bi bi-person-check-fill why-icon"></i>
          <h3 class="h6 mt-3 fw-600">ISO 45001:2018</h3>
          <p class="text-secondary small">Occupational Health & Safety — zero-accident culture with regular audits.</p>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3">
        <div class="why-card text-center p-4">
          <i class="bi bi-fire why-icon"></i>
          <h3 class="h6 mt-3 fw-600">ATEX Compliant</h3>
          <p class="text-secondary small">Explosion-proof zones for solvent-based production lines with ATEX-rated equipment.</p>
        </div>
      </div>
    </div>
  </div>
</section>



<?php include __DIR__ . '/includes/footer.php';
