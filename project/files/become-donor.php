<?php
require __DIR__ . '/includes/data.php';
$pageTitle = 'Become a Donor';
$activePage = 'donor';
$submitted = $_SERVER['REQUEST_METHOD'] === 'POST';
require __DIR__ . '/includes/header.php';
?>
<section class="page-hero">
  <div class="page-hero-card">
    <div class="kicker">Donor Registration</div>
    <h1 class="page-title">Join the donor network with a clean, trustworthy <span class="red">signup flow</span>.</h1>
  </div>
</section>

<section class="section">
  <div class="section-inner split-grid">
    <div class="stack">
      <article class="card">
        <div class="kicker">Why Donate</div>
        <ul class="list-clean">
          <li>Donors can control availability and preferred communication channel.</li>
          <li>The interface clearly separates urgent matching from routine community donation.</li>
          <li>Verification and safety messaging stays visible throughout the journey.</li>
        </ul>
      </article>
      <article class="card">
        <div class="kicker">Notification Preferences</div>
        <h3>Urgent matches can be surfaced by email, SMS, or WhatsApp.</h3>
      </article>
    </div>
    <div class="form-card">
      <div class="kicker">Frontend Form</div>
      <h2 class="section-title">Become a donor</h2>
      <?php if ($submitted): ?>
        <div class="status-banner">Thanks. The donor registration UI is working in frontend mode. Backend storage and verification can be connected next.</div>
      <?php endif; ?>
      <form method="post" class="form-grid">
        <div><label for="full-name">Full Name</label><input id="full-name" name="full_name" type="text" required /></div>
        <div><label for="donor-city">City</label><input id="donor-city" name="city" type="text" required /></div>
        <div><label for="donor-group">Blood Group</label><select id="donor-group" name="blood_group" required><option value="">Select group</option><?php foreach ($bloodGroups as $group): ?><option><?php echo htmlspecialchars($group['type']); ?></option><?php endforeach; ?></select></div>
        <div><label for="availability">Availability</label><select id="availability" name="availability" required><option>Available today</option><option>Available tomorrow</option><option>On standby</option><option>Temporarily unavailable</option></select></div>
        <div><label for="phone-number">Phone Number</label><input id="phone-number" name="phone" type="tel" required /></div>
        <div><label for="contact-preference">Contact Preference</label><select id="contact-preference" name="contact_preference"><option>Phone call</option><option>SMS</option><option>WhatsApp</option><option>Email</option></select></div>
        <div class="form-row-full"><label for="medical-note">Donation Notes</label><textarea id="medical-note" name="notes" placeholder="Optional notes about donation timing, travel radius, or availability windows."></textarea></div>
        <div class="form-row-full"><button class="button" type="submit">Register as Donor</button></div>
      </form>
    </div>
  </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
