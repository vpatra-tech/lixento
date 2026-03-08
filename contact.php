<?php
require_once __DIR__ . '/includes/config.php';
$pageTitle = 'Contact Us | ChromaShield Coatings';
$pageDescription = 'Contact ChromaShield Coatings for product inquiries, quote requests, partnership discussions, or factory visits. Find our office and factory address.';
$activePage = 'contact';
include __DIR__ . '/includes/header.php';
?>




<!-- PAGE HEADER -->
<section class="page-header">
  <div class="container">
    <nav aria-label="breadcrumb"><ol class="breadcrumb"><li class="breadcrumb-item"><a href="index.php">Home</a></li><li class="breadcrumb-item active">Contact</li></ol></nav>
    <h1 class="page-title">Contact ChromaShield</h1>
    <p class="page-subtitle">Get in touch for quotes, technical support, or partnership inquiries</p>
  </div>
</section>

<!-- CONTACT INFO CARDS -->
<section class="py-section bg-white" aria-labelledby="contact-info-heading">
  <div class="container">
    <h2 id="contact-info-heading" class="visually-hidden">Contact Information</h2>
    <div class="row g-4 mb-5">
      <div class="col-sm-6 col-lg-3">
        <div class="contact-info-card text-center p-4">
          <i class="bi bi-building-fill contact-icon"></i>
          <h3 class="h6 fw-bold mt-3">Corporate Office</h3>
          <p class="text-secondary small mb-0">5th Floor, Mehta Corporate Tower,<br />Andheri East, Mumbai – 400069<br />Maharashtra, India</p>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3">
        <div class="contact-info-card text-center p-4">
          <i class="bi bi-gear-fill contact-icon"></i>
          <h3 class="h6 fw-bold mt-3">Manufacturing Plant</h3>
          <p class="text-secondary small mb-0">Plot 42, MIDC Industrial Area,<br />Phase 2, Taloja, Navi Mumbai – 410208<br />Maharashtra, India</p>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3">
        <div class="contact-info-card text-center p-4">
          <i class="bi bi-telephone-fill contact-icon"></i>
          <h3 class="h6 fw-bold mt-3">Phone</h3>
          <p class="text-secondary small mb-0">
            <a href="tel:+911234567890" class="text-secondary">+91 123 456 7890</a><br />
            <a href="tel:+911234567891" class="text-secondary">+91 123 456 7891</a><br />
            <small>Mon–Sat: 9:00 AM – 6:00 PM</small>
          </p>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3">
        <div class="contact-info-card text-center p-4">
          <i class="bi bi-envelope-fill contact-icon"></i>
          <h3 class="h6 fw-bold mt-3">Email</h3>
          <p class="text-secondary small mb-0">
            <a href="mailto:info@chromashield.com" class="text-secondary">info@chromashield.com</a><br />
            <a href="mailto:sales@chromashield.com" class="text-secondary">sales@chromashield.com</a><br />
            <a href="mailto:technical@chromashield.com" class="text-secondary">technical@chromashield.com</a>
          </p>
        </div>
      </div>
    </div>

    <!-- MAP PLACEHOLDER -->
    <div class="map-placeholder mb-5" role="img" aria-label="Map location of ChromaShield Coatings factory">
      <div class="map-overlay-text">
        <i class="bi bi-geo-alt-fill fs-2 text-accent"></i>
        <p class="mt-2 mb-0 fw-bold">ChromaShield Coatings – Taloja Plant</p>
        <p class="text-secondary small">Plot 42, MIDC Phase 2, Taloja, Navi Mumbai</p>
        <a href="https://maps.google.com" target="_blank" rel="noopener" class="btn btn-accent btn-sm mt-2">Open in Google Maps</a>
      </div>
    </div>
  </div>
</section>

<!-- QUOTE FORM -->
<section id="quote" class="py-section bg-light" aria-labelledby="quote-heading">
  <div class="container">
    <div class="row g-5">
      <div class="col-lg-5">
        <span class="section-label">Get a Quote</span>
        <h2 id="quote-heading" class="section-title">Request a Quote or Inquiry</h2>
        <p class="text-secondary">Fill in the form and our technical sales team will get back to you within 24 business hours with pricing, availability, and product recommendations.</p>

        <div class="contact-faq mt-4">
          <div class="accordion" id="contactFAQ">
            <div class="accordion-item border-0 bg-transparent mb-2">
              <h3 class="accordion-header">
                <button class="accordion-button collapsed px-0 bg-transparent fw-600" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                  What is the minimum order for bulk supply?
                </button>
              </h3>
              <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#contactFAQ">
                <div class="accordion-body px-0 text-secondary small">Minimum order for bulk paint supply starts from 200 litres. For white-label manufacturing, MOQ is 500 litres per SKU.</div>
              </div>
            </div>
            <div class="accordion-item border-0 bg-transparent mb-2">
              <h3 class="accordion-header">
                <button class="accordion-button collapsed px-0 bg-transparent fw-600" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                  Do you supply internationally?
                </button>
              </h3>
              <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#contactFAQ">
                <div class="accordion-body px-0 text-secondary small">Yes, we export to 30+ countries. We handle all export documentation, SDS in local languages, and customs compliance.</div>
              </div>
            </div>
            <div class="accordion-item border-0 bg-transparent mb-2">
              <h3 class="accordion-header">
                <button class="accordion-button collapsed px-0 bg-transparent fw-600" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                  Can you match a specific colour shade?
                </button>
              </h3>
              <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#contactFAQ">
                <div class="accordion-body px-0 text-secondary small">Absolutely. We offer spectrophotometric colour matching for any RAL, NCS, Pantone, or custom shade provided by the client.</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-7">
        <div class="card shadow-sm">
          <div class="card-body p-5">
            <form novalidate aria-label="Quote request form" id="quoteForm">
              <div class="row g-3">
                <div class="col-sm-6"><label for="q-name" class="form-label">Full Name *</label><input type="text" id="q-name" class="form-control" required /></div>
                <div class="col-sm-6"><label for="q-company" class="form-label">Company Name *</label><input type="text" id="q-company" class="form-control" required /></div>
                <div class="col-sm-6"><label for="q-email" class="form-label">Email *</label><input type="email" id="q-email" class="form-control" required /></div>
                <div class="col-sm-6"><label for="q-phone" class="form-label">Phone *</label><input type="tel" id="q-phone" class="form-control" required /></div>
                <div class="col-sm-6">
                  <label for="q-type" class="form-label">Inquiry Type *</label>
                  <select id="q-type" class="form-select" required>
                    <option value="">Select type</option>
                    <option>Product Quote</option>
                    <option>White Label / OEM</option>
                    <option>Technical Support</option>
                    <option>Partnership / Distributor</option>
                    <option>Other</option>
                  </select>
                </div>
                <div class="col-sm-6">
                  <label for="q-product" class="form-label">Product Category</label>
                  <select id="q-product" class="form-select">
                    <option value="">Select category</option>
                    <option>Industrial Coatings</option>
                    <option>Decorative Paints</option>
                    <option>Protective Coatings</option>
                    <option>Waterproofing Solutions</option>
                    <option>Primers</option>
                    <option>Multiple / All</option>
                  </select>
                </div>
                <div class="col-12"><label for="q-message" class="form-label">Message / Requirements *</label><textarea id="q-message" class="form-control" rows="4" placeholder="Describe your requirements, application area, volume needed, and any specific technical needs..." required></textarea></div>
                <div class="col-12">
                  <div class="form-check mb-3">
                    <input type="checkbox" id="q-consent" class="form-check-input" required />
                    <label for="q-consent" class="form-check-label small text-secondary">I agree to be contacted by ChromaShield Coatings regarding my inquiry. *</label>
                  </div>
                  <button type="submit" class="btn btn-primary w-100 btn-lg">Send Inquiry</button>
                </div>
              </div>
            </form>
            <div id="formSuccess" class="alert alert-success mt-3 d-none" role="alert">
              <i class="bi bi-check-circle-fill me-2"></i><strong>Thank you!</strong> Your inquiry has been received. We'll respond within 24 business hours.
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<?php include __DIR__ . '/includes/footer.php';
