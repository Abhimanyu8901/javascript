
<section class="page-hero">
  <div class="page-hero-card">
    <div class="kicker">Urgent Response</div>
    <h1 class="page-title">For critical cases, every minute matters. Keep the next step <span class="red">obvious</span>.</h1>
    <p class="page-lead">This section is designed to reduce friction under stress with immediate contacts, checklist guidance, and request routing prompts.</p>
  </div>
</section>

<section class="section">
  <div class="section-inner split-grid">
    <div class="stack">
      <article class="card">
        <div class="kicker">Emergency Numbers</div>
        <h3><?php echo htmlspecialchars($primaryPhone); ?></h3>
        <p>General response line</p>
        <h3><?php echo htmlspecialchars($emergencyPhone); ?></h3>
        <p>Urgent support coordination</p>
      </article>
      <article class="card">
        <div class="kicker">Quick Checklist</div>
        <ul class="list-clean">
          <li>Confirm blood group from the treating hospital.</li>
          <li>Keep the patient name, hospital, and units required ready.</li>
          <li>Submit a request and call the emergency line if the case is critical.</li>
        </ul>
      </article>
    </div>
    <div class="form-card">
      <div class="kicker">Fast Action</div>
      <h2 class="section-title">Need blood immediately?</h2>
      <p class="body-copy">Use the request form on the donor search page for the full flow, or call the emergency line first if the case is time-sensitive.</p>
      <div class="button-row">
        <a class="button" href="find-donor.php">Open Request Flow</a>
        <a class="button secondary" href="tel:<?php echo preg_replace('/[^0-9+]/', '', $emergencyPhone); ?>">Call Emergency Help</a>
      </div>
    </div>
  </div>
</section>
