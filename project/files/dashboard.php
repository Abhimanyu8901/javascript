<?php
require __DIR__ . '/includes/data.php';
$pageTitle = 'Donor Dashboard';
$activePage = 'dashboard';
require __DIR__ . '/includes/header.php';
?>

<section class="page-hero">
  <div class="page-hero-card">
    <div class="kicker">User Dashboard</div>
    <h1 class="page-title">A donor can review profile details, update availability, and manage <span class="red">urgent notifications</span>.</h1>
  </div>
</section>

<section class="section">
  <div class="section-inner dashboard-grid">
    <div class="dashboard-panel">
      <div class="kicker">Profile and Availability</div>
      <h2 class="section-title">Donor control panel</h2>
      <?php if ($updated): ?>
        <div class="status-banner">Profile changes updated in the frontend preview. Persistence can be added in the backend phase.</div>
      <?php endif; ?>
      <form method="post" class="form-grid">
        <div><label for="dashboard-name">Full Name</label><input id="dashboard-name" type="text" value="Aarav Shrestha" /></div>
        <div><label for="dashboard-group">Blood Group</label><select id="dashboard-group"><option>O+</option><option>A+</option><option>B+</option><option>AB+</option></select></div>
        <div><label for="dashboard-city">City</label><input id="dashboard-city" type="text" value="Delhi" /></div>
        <div><label for="dashboard-availability">Availability</label><select id="dashboard-availability"><option>Available today</option><option>On standby</option><option>Available tomorrow</option><option>Temporarily unavailable</option></select></div>
        <div class="form-row-full"><label for="dashboard-pref">Contact Preference</label><select id="dashboard-pref"><option>WhatsApp preferred</option><option>Phone call</option><option>SMS</option><option>Email</option></select></div>
        <div class="form-row-full"><button class="button" type="submit">Update Frontend Profile</button></div>
      </form>
    </div>
    <div class="stack">
      <article class="dashboard-panel">
        <div class="kicker">Notification Channels</div>
        <h3>Urgent match alerts</h3>
        <div class="notification-list">
          <div class="tag-row"><span class="tag strong">Email</span><span class="meta">Enabled for non-critical matches</span></div>
          <div class="tag-row"><span class="tag strong">SMS</span><span class="meta">Enabled for urgent same-day requests</span></div>
          <div class="tag-row"><span class="tag strong">WhatsApp</span><span class="meta">Primary channel for immediate coordination</span></div>
        </div>
        
    <div class="dashboard-card">
      <p class="eyebrow">Account snapshot</p>
      <h3>Availability and request summary</h3>
      <ul class="list-clean">
        <li>Signed in as: <?php echo e($user['email']); ?></li>
        <li>Donor status: <?php echo e($donor['status']); ?></li>
        <li>Verification: <?php echo (int) $donor['is_verified'] === 1 ? 'Verified profile' : 'Awaiting verification'; ?></li>
        <li>Open requests in the system: <?php echo e((string) ($openRequestCount['total'] ?? '0')); ?></li>
      </ul>
    </div>
  </div>
      </article>
      <article class="dashboard-panel">
        <div class="kicker">Recent Matches</div>
        <h3>Preview of donor activity cards</h3>
        <p class="body-copy">Delhi Govenrments Hospital requested O+ blood, 2 units, needed today.<br><br>Lalitpur Trauma Center requested donor standby for tomorrow morning.</p>
      </article>
    </div>
  </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
