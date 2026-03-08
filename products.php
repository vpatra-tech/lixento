<?php
require_once __DIR__ . '/includes/config.php';
$pageTitle = 'Products | ChromaShield Coatings';
$pageDescription = 'Browse ChromaShield's full range of industrial coatings, decorative paints, protective coatings, waterproofing solutions, and primers.';
$activePage = 'products';
include __DIR__ . '/includes/header.php';
?>




<!-- PAGE HEADER -->
<section class="page-header">
  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Products</li>
      </ol>
    </nav>
    <h1 class="page-title">Our Product Portfolio</h1>
    <p class="page-subtitle">High-performance coatings engineered for every surface and application</p>
  </div>
</section>

<!-- PRODUCT NAV PILLS -->
<div class="bg-white border-bottom sticky-product-nav py-3">
  <div class="container">
    <div class="d-flex gap-2 overflow-auto flex-nowrap">
      <a href="#industrial" class="btn btn-sm btn-outline-primary">Industrial</a>
      <!-- <a href="#decorative" class="btn btn-sm btn-outline-primary">Decorative</a> -->
      <a href="#protective" class="btn btn-sm btn-outline-primary">Protective</a>
      <a href="#waterproofing" class="btn btn-sm btn-outline-primary">Waterproofing</a>
      <a href="#primers" class="btn btn-sm btn-outline-primary">Primers</a>
      <a href="white-label.php" class="btn btn-sm btn-accent">White Label</a>
    </div>
  </div>
</div>

<!-- ===== INDUSTRIAL COATINGS ===== -->
<section id="industrial" class="py-section bg-white" aria-labelledby="industrial-heading">
  <div class="container">
    <div class="row align-items-center g-5 mb-5">
      <div class="col-lg-6">
        <span class="section-label">Category 01</span>
        <h2 id="industrial-heading" class="section-title">Industrial Coatings</h2>
        <p class="text-secondary">Our industrial coating range is engineered for demanding environments including manufacturing plants, steel structures, process equipment, pipelines, and heavy machinery. Available in solvent-based and water-based formulations.</p>
        <div class="d-flex gap-3 mt-4 flex-wrap">
          <a href="contact.php#quote" class="btn btn-primary">Request Quote</a>
          <a href="#" class="btn btn-outline-secondary"><i class="bi bi-download me-2"></i>Download TDS</a>
        </div>
      </div>
      <div class="col-lg-6">
        <img src="https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?w=700&q=80" alt="Industrial coating application on steel structure" class="img-fluid rounded-2 shadow" />
      </div>
    </div>

    <!-- Products Grid -->
    <div class="row g-4 mb-1">
      <div class="col-md-6 col-lg-4">
        <div class="product-detail-card card h-100">
          <div class="product-badge">Bestseller</div>
          <div class="card-body p-4">
            <div class="product-icon"><i class="bi bi-gear-fill"></i></div>
            <h3 class="h5 mt-3">Epoxy Floor Coating</h3>
            <p class="text-secondary small">Two-component high-build epoxy for concrete floors in factories, warehouses, and food processing units.</p>
            <hr />
            <h4 class="h6 text-primary">Key Features</h4>
            <ul class="spec-list small">
              <li>Excellent chemical & abrasion resistance</li>
              <li>High gloss finish with anti-slip options</li>
              <li>VOC compliant formulation</li>
              <li>Coverage: 8–10 m²/L at 100 microns DFT</li>
            </ul>
            <h4 class="h6 text-primary mt-3">Applications</h4>
            <div class="d-flex flex-wrap gap-1 mt-2">
              <span class="tag-pill">Factories</span><span class="tag-pill">Warehouses</span><span class="tag-pill">Pharma</span><span class="tag-pill">Food Plants</span>
            </div>
          </div>
          <div class="card-footer bg-transparent border-top p-3">
            <div class="d-flex gap-2">
              <a href="contact.php#quote" class="btn btn-primary btn-sm flex-fill">Enquire</a>
              <a href="#" class="btn btn-outline-secondary btn-sm"><i class="bi bi-download"></i> TDS</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="product-detail-card card h-100">
          <div class="card-body p-4">
            <div class="product-icon"><i class="bi bi-gear-fill"></i></div>
            <h3 class="h5 mt-3">Epoxy Anticorrosive Primer</h3>
            <p class="text-secondary small">Zinc phosphate-based epoxy primer for superior corrosion protection on steel and iron substrates.</p>
            <hr />
            <h4 class="h6 text-primary">Key Features</h4>
            <ul class="spec-list small">
              <li>Exceptional adhesion to metal surfaces</li>
              <li>500+ hours salt spray resistance</li>
              <li>Compatible with all topcoat systems</li>
              <li>Available: 4 L & 20 L packs</li>
            </ul>
            <h4 class="h6 text-primary mt-3">Applications</h4>
            <div class="d-flex flex-wrap gap-1 mt-2">
              <span class="tag-pill">Steel Structures</span><span class="tag-pill">Pipelines</span><span class="tag-pill">Bridges</span>
            </div>
          </div>
          <div class="card-footer bg-transparent border-top p-3">
            <div class="d-flex gap-2">
              <a href="contact.php#quote" class="btn btn-primary btn-sm flex-fill">Enquire</a>
              <a href="#" class="btn btn-outline-secondary btn-sm"><i class="bi bi-download"></i> TDS</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="product-detail-card card h-100">
          <div class="card-body p-4">
            <div class="product-icon"><i class="bi bi-gear-fill"></i></div>
            <h3 class="h5 mt-3">PU High Gloss Topcoat</h3>
            <p class="text-secondary small">Two-pack polyurethane finish for industrial machinery, storage tanks, and plant equipment requiring a premium appearance.</p>
            <hr />
            <h4 class="h6 text-primary">Key Features</h4>
            <ul class="spec-list small">
              <li>UV stable, non-yellowing</li>
              <li>Excellent gloss retention</li>
              <li>Chemical & solvent resistance</li>
              <li>50+ colour shades available</li>
            </ul>
            <h4 class="h6 text-primary mt-3">Applications</h4>
            <div class="d-flex flex-wrap gap-1 mt-2">
              <span class="tag-pill">Machinery</span><span class="tag-pill">Storage Tanks</span><span class="tag-pill">Equipment</span>
            </div>
          </div>
          <div class="card-footer bg-transparent border-top p-3">
            <div class="d-flex gap-2">
              <a href="contact.php#quote" class="btn btn-primary btn-sm flex-fill">Enquire</a>
              <a href="#" class="btn btn-outline-secondary btn-sm"><i class="bi bi-download"></i> TDS</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Technical Specs Table -->
    <!-- <div class="specs-table-block">
      <h3 class="h5 mb-3 fw-bold">Technical Specifications — Epoxy Floor Coating</h3>
      <div class="table-responsive">
        <table class="table table-bordered table-hover" aria-label="Epoxy Floor Coating Technical Specifications">
          <thead class="table-dark">
            <tr>
              <th>Parameter</th><th>Value</th>
            </tr>
          </thead>
          <tbody>
            <tr><td>Base</td><td>Two-component Epoxy</td></tr>
            <tr><td>Finish</td><td>High Gloss / Matt available</td></tr>
            <tr><td>Dry Film Thickness (DFT)</td><td>100–150 microns per coat</td></tr>
            <tr><td>Spreading Rate</td><td>8–10 m²/L</td></tr>
            <tr><td>Pot Life (25°C)</td><td>2–3 hours</td></tr>
            <tr><td>Touch Dry</td><td>4–6 hours at 25°C</td></tr>
            <tr><td>Full Cure</td><td>7 days at 25°C</td></tr>
            <tr><td>Mix Ratio</td><td>4:1 by volume (Base:Hardener)</td></tr>
            <tr><td>VOC</td><td>&lt;100 g/L</td></tr>
            <tr><td>Shelf Life</td><td>12 months from date of manufacture</td></tr>
          </tbody>
        </table>
      </div>
    </div> -->
  </div>
</section>

<!-- ===== DECORATIVE PAINTS ===== -->
<!--  <section id="decorative" class="py-section bg-light" aria-labelledby="decorative-heading">
  <div class="container">
    <div class="row align-items-center g-5 mb-5">
      <div class="col-lg-6 order-lg-2">
        <span class="section-label">Category 02</span>
        <h2 id="decorative-heading" class="section-title">Decorative Paints</h2>
        <p class="text-secondary">Our decorative range offers interior and exterior emulsions, enamels, and texture finishes for residential complexes, commercial spaces, and hospitality projects. Formulated for easy application and lasting finish.</p>
        <div class="d-flex gap-3 mt-4 flex-wrap">
          <a href="contact.php#quote" class="btn btn-primary">Request Quote</a>
          <a href="#" class="btn btn-outline-secondary"><i class="bi bi-download me-2"></i>Download TDS</a>
        </div>
      </div>
      <div class="col-lg-6 order-lg-1">
        <img src="https://images.unsplash.com/photo-1562259949-e8e7689d7828?w=700&q=80" alt="Decorative paint colour swatches and application" class="img-fluid rounded-2 shadow" />
      </div>
    </div>
    <div class="row g-4">
      <div class="col-md-6 col-lg-4">
        <div class="product-detail-card card h-100">
          <div class="card-body p-4">
            <div class="product-icon"><i class="bi bi-house-fill"></i></div>
            <h3 class="h5 mt-3">Premium Interior Emulsion</h3>
            <p class="text-secondary small">Smooth, washable, and low-odour water-based wall paint for interiors. Available in 1500+ shades.</p>
            <hr />
            <ul class="spec-list small">
              <li>Washable & scrubbable finish</li>
              <li>Low VOC, safe for homes</li>
              <li>Anti-fungal additives</li>
              <li>Coverage: 12–14 m²/L</li>
            </ul>
            <div class="d-flex flex-wrap gap-1 mt-3">
              <span class="tag-pill">Residential</span><span class="tag-pill">Offices</span><span class="tag-pill">Hospitality</span>
            </div>
          </div>
          <div class="card-footer bg-transparent border-top p-3">
            <div class="d-flex gap-2">
              <a href="contact.php#quote" class="btn btn-primary btn-sm flex-fill">Enquire</a>
              <a href="#" class="btn btn-outline-secondary btn-sm"><i class="bi bi-download"></i> TDS</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="product-detail-card card h-100">
          <div class="card-body p-4">
            <div class="product-icon"><i class="bi bi-house-fill"></i></div>
            <h3 class="h5 mt-3">Exterior Weather Shield</h3>
            <p class="text-secondary small">Elastomeric exterior acrylic with UV resistance and waterproofing properties for outdoor facades.</p>
            <hr />
            <ul class="spec-list small">
              <li>10-year exterior durability warranty</li>
              <li>Crack-bridging properties</li>
              <li>Rain-wash resistance</li>
              <li>Algae and fungal resistant</li>
            </ul>
            <div class="d-flex flex-wrap gap-1 mt-3">
              <span class="tag-pill">Exteriors</span><span class="tag-pill">Facades</span><span class="tag-pill">Concrete</span>
            </div>
          </div>
          <div class="card-footer bg-transparent border-top p-3">
            <div class="d-flex gap-2">
              <a href="contact.php#quote" class="btn btn-primary btn-sm flex-fill">Enquire</a>
              <a href="#" class="btn btn-outline-secondary btn-sm"><i class="bi bi-download"></i> TDS</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="product-detail-card card h-100">
          <div class="card-body p-4">
            <div class="product-icon"><i class="bi bi-house-fill"></i></div>
            <h3 class="h5 mt-3">Synthetic Enamel Paint</h3>
            <p class="text-secondary small">High-gloss solvent-based enamel for wood, metal, and masonry in interior and exterior applications.</p>
            <hr />
            <ul class="spec-list small">
              <li>Hard, durable gloss finish</li>
              <li>Moisture & abrasion resistant</li>
              <li>Easy brushing & rolling</li>
              <li>100+ colour options</li>
            </ul>
            <div class="d-flex flex-wrap gap-1 mt-3">
              <span class="tag-pill">Wood</span><span class="tag-pill">Metal</span><span class="tag-pill">Doors & Windows</span>
            </div>
          </div>
          <div class="card-footer bg-transparent border-top p-3">
            <div class="d-flex gap-2">
              <a href="contact.php#quote" class="btn btn-primary btn-sm flex-fill">Enquire</a>
              <a href="#" class="btn btn-outline-secondary btn-sm"><i class="bi bi-download"></i> TDS</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->

<!-- ===== PROTECTIVE COATINGS ===== -->
<section id="protective" class="py-section bg-white" aria-labelledby="protective-heading">
  <div class="container">
    <div class="text-center mb-5">
      <span class="section-label">Category 03</span>
      <h2 id="protective-heading" class="section-title">Protective Coatings</h2>
      <p class="text-secondary col-lg-6 mx-auto">Engineered for critical infrastructure protection — anti-corrosion, fire-retardant, and chemical-resistant systems.</p>
    </div>
    <div class="row g-4">
      <div class="col-md-6 col-lg-3">
        <div class="product-detail-card card h-100">
          <div class="card-body p-4">
            <div class="product-icon"><i class="bi bi-shield-fill-check"></i></div>
            <h3 class="h5 mt-3">Intumescent Fire Retardant Coating</h3>
            <p class="text-secondary small">Water-based intumescent coating that expands under heat to protect structural steel for up to 120 minutes.</p>
            <ul class="spec-list small mt-3"><li>UL / ASTM E119 tested</li><li>Up to R120 fire rating</li></ul>
          </div>
          <div class="card-footer bg-transparent border-top p-3"><a href="contact.php#quote" class="btn btn-primary btn-sm w-100">Enquire</a></div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="product-detail-card card h-100">
          <div class="card-body p-4">
            <div class="product-icon"><i class="bi bi-shield-fill-check"></i></div>
            <h3 class="h5 mt-3">Marine Anti-Corrosion Coating</h3>
            <p class="text-secondary small">Heavy-duty vinyl / epoxy system for offshore platforms, ships, jetties, and tidal zone steel.</p>
            <ul class="spec-list small mt-3"><li>1000+ hrs salt spray</li><li>Cathodic disbondment resistant</li></ul>
          </div>
          <div class="card-footer bg-transparent border-top p-3"><a href="contact.php#quote" class="btn btn-primary btn-sm w-100">Enquire</a></div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="product-detail-card card h-100">
          <div class="card-body p-4">
            <div class="product-icon"><i class="bi bi-shield-fill-check"></i></div>
            <h3 class="h5 mt-3">Chemical-Resistant Lining</h3>
            <p class="text-secondary small">Novolac epoxy coating for chemical storage tanks, effluent treatment plants, and industrial trenches.</p>
            <ul class="spec-list small mt-3"><li>Resistant to acids, alkalis, solvents</li><li>Zero pinhole finish</li></ul>
          </div>
          <div class="card-footer bg-transparent border-top p-3"><a href="contact.php#quote" class="btn btn-primary btn-sm w-100">Enquire</a></div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="product-detail-card card h-100">
          <div class="card-body p-4">
            <div class="product-icon"><i class="bi bi-shield-fill-check"></i></div>
            <h3 class="h5 mt-3">High Temp Coating (600°C)</h3>
            <p class="text-secondary small">Silicone-based coating withstanding up to 600°C for chimneys, exhaust systems, and furnace exteriors.</p>
            <ul class="spec-list small mt-3"><li>Excellent heat resistance</li><li>No peeling or flaking</li></ul>
          </div>
          <div class="card-footer bg-transparent border-top p-3"><a href="contact.php#quote" class="btn btn-primary btn-sm w-100">Enquire</a></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== WATERPROOFING ===== -->
<section id="waterproofing" class="py-section bg-light" aria-labelledby="wf-heading">
  <div class="container">
    <div class="row align-items-center g-5 mb-5">
      <div class="col-lg-6">
        <span class="section-label">Category 04</span>
        <h2 id="wf-heading" class="section-title">Waterproofing Solutions</h2>
        <p class="text-secondary">Our waterproofing systems provide reliable protection for roofs, basements, podiums, bathrooms, and below-grade structures. Covering acrylic, polyurethane, and cementitious categories.</p>
        <div class="d-flex gap-3 mt-4 flex-wrap">
          <a href="contact.php#quote" class="btn btn-primary">Request Quote</a>
          <a href="#" class="btn btn-outline-secondary"><i class="bi bi-download me-2"></i>Download TDS</a>
        </div>
      </div>
      <div class="col-lg-6">
        <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=700&q=80" alt="Waterproofing membrane application on roof terrace" class="img-fluid rounded-2 shadow" />
      </div>
    </div>
    <div class="row g-4">
      <div class="col-md-6 col-lg-4">
        <div class="product-detail-card card h-100">
          <div class="card-body p-4">
            <div class="product-icon"><i class="bi bi-water"></i></div>
            <h3 class="h5 mt-3">Acrylic Roof Waterproofing</h3>
            <p class="text-secondary small">Elastomeric acrylic membrane applied by brush or spray for flat and sloped roofs.</p>
            <ul class="spec-list small mt-3">
              <li>UV stable with heat reflective options</li><li>Elongation: &gt;400%</li><li>Service temp: -20°C to 80°C</li>
            </ul>
          </div>
          <div class="card-footer bg-transparent border-top p-3"><div class="d-flex gap-2"><a href="contact.php#quote" class="btn btn-primary btn-sm flex-fill">Enquire</a><a href="#" class="btn btn-outline-secondary btn-sm"><i class="bi bi-download"></i> TDS</a></div></div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="product-detail-card card h-100">
          <div class="card-body p-4">
            <div class="product-icon"><i class="bi bi-water"></i></div>
            <h3 class="h5 mt-3">Polyurethane Waterproof Membrane</h3>
            <p class="text-secondary small">Cold-applied PU liquid membrane for podiums, balconies, and water retaining structures.</p>
            <ul class="spec-list small mt-3">
              <li>Seamless, crack-bridging</li><li>Excellent adhesion to concrete</li><li>Foot traffic when cured</li>
            </ul>
          </div>
          <div class="card-footer bg-transparent border-top p-3"><div class="d-flex gap-2"><a href="contact.php#quote" class="btn btn-primary btn-sm flex-fill">Enquire</a><a href="#" class="btn btn-outline-secondary btn-sm"><i class="bi bi-download"></i> TDS</a></div></div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="product-detail-card card h-100">
          <div class="card-body p-4">
            <div class="product-icon"><i class="bi bi-water"></i></div>
            <h3 class="h5 mt-3">Crystalline Waterproofing</h3>
            <p class="text-secondary small">Cementitious crystalline system for basement walls, water tanks, and below-grade concrete structures.</p>
            <ul class="spec-list small mt-3">
              <li>Positive & negative side application</li><li>Self-sealing capillary system</li><li>NSF/ANSI 61 potable water safe</li>
            </ul>
          </div>
          <div class="card-footer bg-transparent border-top p-3"><div class="d-flex gap-2"><a href="contact.php#quote" class="btn btn-primary btn-sm flex-fill">Enquire</a><a href="#" class="btn btn-outline-secondary btn-sm"><i class="bi bi-download"></i> TDS</a></div></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== PRIMERS ===== -->
<section id="primers" class="py-section bg-white" aria-labelledby="primers-heading">
  <div class="container">
    <div class="text-center mb-5">
      <span class="section-label">Category 05</span>
      <h2 id="primers-heading" class="section-title">Primers & Undercoats</h2>
      <p class="text-secondary col-lg-6 mx-auto">The right primer is the foundation of every coating system. Our range covers metal, wood, concrete, and masonry substrates.</p>
    </div>
    <div class="row g-4">
      <div class="col-md-6 col-lg-3">
        <div class="product-detail-card card h-100">
          <div class="card-body p-4">
            <div class="product-icon"><i class="bi bi-layers-fill"></i></div>
            <h3 class="h5 mt-3">Red Oxide Metal Primer</h3>
            <p class="text-secondary small">Alkyd-based red oxide primer for all ferrous metals. Excellent adhesion and corrosion inhibition.</p>
          </div>
          <div class="card-footer bg-transparent border-top p-3"><a href="contact.php#quote" class="btn btn-primary btn-sm w-100">Enquire</a></div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="product-detail-card card h-100">
          <div class="card-body p-4">
            <div class="product-icon"><i class="bi bi-layers-fill"></i></div>
            <h3 class="h5 mt-3">Zinc Phosphate Primer</h3>
            <p class="text-secondary small">High-performance anti-corrosive primer with zinc phosphate pigmentation for structural steel.</p>
          </div>
          <div class="card-footer bg-transparent border-top p-3"><a href="contact.php#quote" class="btn btn-primary btn-sm w-100">Enquire</a></div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="product-detail-card card h-100">
          <div class="card-body p-4">
            <div class="product-icon"><i class="bi bi-layers-fill"></i></div>
            <h3 class="h5 mt-3">Wall Primer (Interior)</h3>
            <p class="text-secondary small">Alkali-resistant acrylic primer for new plaster and concrete walls prior to emulsion painting.</p>
          </div>
          <div class="card-footer bg-transparent border-top p-3"><a href="contact.php#quote" class="btn btn-primary btn-sm w-100">Enquire</a></div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="product-detail-card card h-100">
          <div class="card-body p-4">
            <div class="product-icon"><i class="bi bi-layers-fill"></i></div>
            <h3 class="h5 mt-3">Wood Primer</h3>
            <p class="text-secondary small">Oil-based wood primer that penetrates and seals fibres, providing a stable base for finishing paints.</p>
          </div>
          <div class="card-footer bg-transparent border-top p-3"><a href="contact.php#quote" class="btn btn-primary btn-sm w-100">Enquire</a></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- INQUIRY SECTION -->
<section class="py-section bg-light" aria-labelledby="product-inquiry-heading">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-7">
        <div class="card shadow-sm">
          <div class="card-body p-5">
            <div class="text-center mb-4">
              <span class="section-label">Get In Touch</span>
              <h2 id="product-inquiry-heading" class="section-title">Product Inquiry Form</h2>
            </div>
            <form novalidate aria-label="Product inquiry form">
              <div class="row g-3">
                <div class="col-sm-6">
                  <label for="inq-name" class="form-label">Full Name *</label>
                  <input type="text" id="inq-name" class="form-control" placeholder="Your Name" required />
                </div>
                <div class="col-sm-6">
                  <label for="inq-company" class="form-label">Company Name</label>
                  <input type="text" id="inq-company" class="form-control" placeholder="Your Company" />
                </div>
                <div class="col-sm-6">
                  <label for="inq-email" class="form-label">Email *</label>
                  <input type="email" id="inq-email" class="form-control" placeholder="email@company.com" required />
                </div>
                <div class="col-sm-6">
                  <label for="inq-phone" class="form-label">Phone Number</label>
                  <input type="tel" id="inq-phone" class="form-control" placeholder="+91 XXXXX XXXXX" />
                </div>
                <div class="col-12">
                  <label for="inq-product" class="form-label">Product of Interest *</label>
                  <select id="inq-product" class="form-select" required>
                    <option value="">Select a product category</option>
                    <option>Industrial Coatings</option>
                    <option>Decorative Paints</option>
                    <option>Protective Coatings</option>
                    <option>Waterproofing Solutions</option>
                    <option>Primers</option>
                    <option>White Label Manufacturing</option>
                  </select>
                </div>
                <div class="col-12">
                  <label for="inq-message" class="form-label">Requirements / Remarks</label>
                  <textarea id="inq-message" class="form-control" rows="3" placeholder="Describe your requirements, quantity, application area..."></textarea>
                </div>
                <div class="col-12">
                  <button type="submit" class="btn btn-primary w-100">Submit Inquiry</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php include __DIR__ . '/includes/footer.php';
