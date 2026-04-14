
<section class="page-hero">
  <div class="page-hero-card">
    <div class="kicker">User Dashboard</div>
    <h1 class="page-title">A donor can review profile details, update availability, and manage <span class="red">urgent notifications</span>.</h1>
    <p class="page-lead">This is still frontend-only, but it demonstrates the product direction clearly and gives your project a stronger sense of completeness.</p>
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
        <div><label for="dashboard-city">City</label><input id="dashboard-city" type="text" value="Kathmandu" /></div>
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
      </article>
      <article class="dashboard-panel">
        <div class="kicker">Recent Matches</div>
        <h3>Preview of donor activity cards</h3>
        <p class="body-copy">Delhi Governments Hospital requested O+ blood, 2 units, needed today.<br><br>Lalitpur Trauma Center requested donor standby for tomorrow morning.</p>
      </article>
    </div>
  </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
