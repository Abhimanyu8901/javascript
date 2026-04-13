<?php
require __DIR__ . '/includes/data.php';
$pageTitle = 'Save Life Donate Blood';
$activePage = 'home';
require __DIR__ . '/includes/header.php';
?>
<section class="hero">
  <div class="hero-grid">
    <div>
      <div class="eyebrow">Trusted donor coordination frontend</div>
      <h1 class="title-xl">Save <span class="red">Life</span>. Find help, mobilize donors, and respond faster in every <span class="red">blood emergency</span>.</h1>
      <p class="lead">This redesigned frontend keeps the same Blood Saathi visual identity while expanding it into a clearer product experience with donor search, request flows, trust signals, blood group guidance, FAQs, and dashboard previews.</p>
      <div class="hero-actions">
        <a href="find-donor.php" class="button">Find Donor / Request Blood</a>
        <a href="become-donor.php" class="button secondary">Become a Donor</a>
      </div>
      <div class="tag-row" style="margin-top:24px;">
        <span class="tag strong">Verified partners</span>
        <span class="tag">Emergency contact visible</span>
        <span class="tag">Frontend-only forms ready</span>
      </div>
    </div>
    <div class="hero-visual">
      <img src="heart_logo.png" alt="Blood donation heart illustration" />
    </div>
  </div>
</section>

<section class="section">
  <div class="section-inner">
    <div class="section-head">
      <div class="section-copy">
        <div class="kicker">Better Information Architecture</div>
        <h2 class="section-title">Everything a visitor needs is now easier to <span class="red">find fast</span>.</h2>
      </div>
    </div>
    <div class="cards-grid three">
      <article class="card"><h3>Find Donor / Request Blood</h3><p>Search donors by blood group, city, and availability, then submit a detailed request form in the same flow.</p></article>
      <article class="card"><h3>Become a Donor</h3><p>A dedicated registration experience collects blood group, location, contact preference, and current availability.</p></article>
      <article class="card"><h3>How It Works</h3><p>Simple, confidence-building steps explain exactly how donors, hospitals, and families move through the platform.</p></article>
      <article class="card"><h3>Blood Groups</h3><p>Compatibility guidance helps users understand who can donate to whom before contacting a donor.</p></article>
      <article class="card"><h3>Emergency Help</h3><p>High-priority support actions, emergency numbers, and the fastest route to submitting urgent requests.</p></article>
      <article class="card"><h3>FAQs and Policies</h3><p>Clear answers, privacy details, terms of use, and safety guidance build trust for a healthcare-adjacent product.</p></article>
    </div>
  </div>
</section>

<section class="section">
  <div class="section-inner">
    <div class="section-head">
      <div class="section-copy">
        <div class="kicker">Trust Signals</div>
        <h2 class="section-title">Credibility is visible throughout the <span class="red">experience</span>.</h2>
      </div>
    </div>
    <div class="trust-grid">
      <?php foreach ($partners as $partner): ?>
        <article class="card">
          <div class="kicker">Verified Partner</div>
          <h3><?php echo htmlspecialchars($partner['name']); ?></h3>
          <p><?php echo htmlspecialchars($partner['label']); ?></p>
        </article>
      <?php endforeach; ?>
      <article class="card">
        <div class="kicker">Real Contact Details</div>
        <h3>Human support stays easy to reach</h3>
        <p>Phone: <?php echo htmlspecialchars($primaryPhone); ?><br>Email: <?php echo htmlspecialchars($supportEmail); ?><br>Address: <?php echo htmlspecialchars($address); ?></p>
      </article>
    </div>
  </div>
</section>

<section class="section">
  <div class="section-inner">
    <div class="section-head">
      <div class="section-copy">
        <div class="kicker">Impact Snapshot</div>
        <h2 class="section-title">Data-backed stats and testimonials make the product feel <span class="red">real</span>.</h2>
      </div>
    </div>
    <div class="stats-grid">
      <?php foreach ($impactStats as $stat): ?>
        <article class="card">
          <span class="stat-number"><?php echo htmlspecialchars($stat['value']); ?></span>
          <h3><?php echo htmlspecialchars($stat['label']); ?></h3>
          <p class="stat-note"><?php echo htmlspecialchars($stat['note']); ?></p>
        </article>
      <?php endforeach; ?>
    </div>
    <div class="cards-grid three" style="margin-top:20px;">
      <?php foreach ($testimonials as $testimonial): ?>
        <article class="card">
          <p>"<?php echo htmlspecialchars($testimonial['quote']); ?>"</p>
          <div class="info-line"><strong><?php echo htmlspecialchars($testimonial['name']); ?></strong><br><span class="meta"><?php echo htmlspecialchars($testimonial['role']); ?></span></div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="cta-band">
  <div class="cta-band-inner">
    <div>
      <div class="kicker">Ready to explore the product</div>
      <h2 class="section-title" style="margin-bottom:0;">Move into donor search, registration, and dashboard flows.</h2>
    </div>
    <div class="button-row">
      <a href="find-donor.php" class="button">Open Search</a>
      <a href="dashboard.php" class="button ghost">View Dashboard</a>
    </div>
  </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
