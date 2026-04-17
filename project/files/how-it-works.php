<?php
require __DIR__ . '/includes/data.php';
$pageTitle = 'How It Works';
$activePage = 'how';
require __DIR__ . '/includes/header.php';
?>
<section class="page-hero">
  <div class="page-hero-card">
    <div class="kicker">Platform Flow</div>
    <h1 class="page-title">A simple, calm process for donors, families, and <span class="red">hospitals</span>.</h1>
    <p class="page-lead">This page explains the intended workflow so the frontend feels like a complete product rather than disconnected screens.</p>
  </div>
</section>

<section class="section">
  <div class="section-inner cards-grid three">
    <article class="card"><div class="kicker">01</div><h3>Search or raise a request</h3><p>Families and staff can filter existing donors or submit a structured request with urgency, hospital, patient details, and units required.</p></article>
    <article class="card"><div class="kicker">02</div><h3>Match donors intelligently</h3><p>The future backend can use blood group, city, and availability to surface the best-fit donors for immediate outreach.</p></article>
    <article class="card"><div class="kicker">03</div><h3>Keep everyone updated</h3><p>Donors maintain profiles and notification preferences, while hospitals and families receive timely communication.</p></article>
  </div>
</section>
<section class="section">
  <div class="steps-grid">
    <article class="step-card">
      <div class="step-index">1</div>
      <h3>Open the request or donor flow</h3>
      <p>Users choose whether they need blood now or want to join the donor network.</p>
    </article>
    <article class="step-card">
      <div class="step-index">2</div>
      <h3>Share the right details</h3>
      <p>Patient data, blood group, hospital, city, donor availability, and contact preference are captured clearly.</p>
    </article>
    <article class="step-card">
      <div class="step-index">3</div>
      <h3>Review matching results</h3>
      <p>Volunteers can search by city, blood group, and availability to narrow potential donor matches.</p>
    </article>
    <article class="step-card">
      <div class="step-index">4</div>
      <h3>Use emergency support if needed</h3>
      <p>Critical situations route users to visible support information and emergency instructions.</p>
    </article>
    <article class="step-card">
      <div class="step-index">5</div>
      <h3>Manage donor settings</h3>
      <p>Dashboard controls let donors update profile details, availability, and notification preferences.</p>
    </article>
    <article class="step-card">
      <div class="step-index">6</div>
      <h3>Connect notifications later</h3>
      <p>The frontend already has places for email, SMS, and WhatsApp alert preferences when backend support is added.</p>
    </article>
  </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
