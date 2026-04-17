<?php
require __DIR__ . '/includes/data.php';
$pageTitle = 'Find Donor / Request Blood';
$activePage = 'find';
$requestSubmitted = $_SERVER['REQUEST_METHOD'] === 'POST';
require __DIR__ . '/includes/header.php';
?>
$searchCity = trim((string) ($_GET['city'] ?? ''));
$searchGroup = trim((string) ($_GET['blood_group'] ?? ''));
$searchAvailability = trim((string) ($_GET['availability'] ?? ''));
$searchContact = trim((string) ($_GET['contact_preference'] ?? ''));
<section class="page-hero">
  <div class="page-hero-card">
    <div class="kicker">Search and request in one place</div>
    <h1 class="page-title">Find the right <span class="red">donor</span> and submit a clear blood request.</h1>
    <p class="page-lead">This page combines donor filtering with a structured request form so families and hospitals can move quickly during urgent cases.</p>
  </div>
</section>

<section class="section">
  <div class="section-inner split-grid">
    <div>
      <div class="section-head">
        <div class="section-copy">
          <div class="kicker">Search / Filter</div>
          <h2 class="section-title">Filter by city, blood group, and <span class="red">availability</span>.</h2>
        </div>
      </div>
      <form class="filter-bar" data-donor-filters>
        <input type="text" name="city" placeholder="Search city" />
        <select name="group">
          <option value="">All blood groups</option>
          <?php foreach ($bloodGroups as $group): ?>
            <option value="<?php echo htmlspecialchars($group['type']); ?>"><?php echo htmlspecialchars($group['type']); ?></option>
          <?php endforeach; ?>
        </select>
        <select name="availability">
          <option value="">All availability</option>
          <option value="today">Available today</option>
          <option value="standby">On standby</option>
          <option value="tomorrow">Available tomorrow</option>
          <option value="hours">Available in 4 hours</option>
        </select>
        <button type="button" class="button ghost">Frontend Filter</button>
      </form>
      <div class="cards-grid two">
        <?php foreach ($donors as $donor): ?>
          <article class="card" data-donor-card data-city="<?php echo htmlspecialchars($donor['city']); ?>" data-group="<?php echo htmlspecialchars($donor['group']); ?>" data-availability="<?php echo htmlspecialchars($donor['availability']); ?>">
            <div class="tag-row">
              <span class="tag strong"><?php echo htmlspecialchars($donor['group']); ?></span>
              <span class="tag"><?php echo htmlspecialchars($donor['city']); ?></span>
            </div>
            <h3><?php echo htmlspecialchars($donor['name']); ?></h3>
            <p><?php echo htmlspecialchars($donor['availability']); ?><br><?php echo htmlspecialchars($donor['contact']); ?><br>Last donation: <?php echo htmlspecialchars($donor['lastDonation']); ?></p>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="form-card">
      <div class="kicker">Request Blood</div>
      <h2 class="section-title">Share the details the response team actually needs.</h2>
      <?php if ($requestSubmitted): ?>
        <div class="status-banner">Request captured in the frontend preview. In the backend phase this will be stored, routed, and matched automatically.</div>
      <?php endif; ?>
      <form method="post" class="form-grid">
        <div><label for="patient-name">Patient Name</label><input id="patient-name" name="patient_name" type="text" required /></div>
        <div><label for="blood-group">Blood Group</label><select id="blood-group" name="blood_group" required><option value="">Select group</option><?php foreach ($bloodGroups as $group): ?><option><?php echo htmlspecialchars($group['type']); ?></option><?php endforeach; ?></select></div>
        <div><label for="units">Required Units</label><input id="units" name="units" type="number" min="1" max="20" required /></div>
        <div><label for="urgency">Urgency</label><select id="urgency" name="urgency" required><option>Critical within 1 hour</option><option>Needed today</option><option>Needed within 24 hours</option></select></div>
        <div><label for="hospital">Hospital</label><input id="hospital" name="hospital" type="text" required /></div>
        <div><label for="request-city">City</label><input id="request-city" name="city" type="text" required /></div>
        <div class="form-row-full"><label for="request-notes">Case Details</label><textarea id="request-notes" name="notes" placeholder="Ward number, blood type confirmation, attending physician, and any timing constraints."></textarea></div>
        <div><label for="request-contact">Primary Contact Number</label><input id="request-contact" name="contact" type="tel" required /></div>
        <div><label for="contact-method">Preferred Contact Method</label><select id="contact-method" name="contact_method"><option>Phone call</option><option>SMS</option><option>WhatsApp</option></select></div>
        <div class="form-row-full"><button class="button" type="submit">Submit Frontend Request</button><p class="helper-text">No backend is connected yet. This interaction is included to complete the frontend experience.</p></div>
      </form>
    </div>
  </div>
  <div class="info-stack">
      <article class="info-card">
        <h3>Before you submit</h3>
        <ul class="list-clean">
          <li>Confirm the exact blood group with the treating facility.</li>
          <li>Keep hospital name, patient name, and urgency details ready.</li>
          <li>Use emergency help if the requirement is immediate.</li>
        </ul>
      </article>
      <article class="info-card">
        <h3>Search filters included</h3>
        <p>City, blood group, donor availability, and contact preference are all part of the backend search now.</p>
      </article>
      <article class="info-card">
        <h3>Notifications later</h3>
        <p>This search and request flow is structured so staff alerts can be connected later.</p>
      </article>
    </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
