<?php
require __DIR__ . '/includes/data.php';
$pageTitle = 'Blood Groups';
$activePage = 'groups';
require __DIR__ . '/includes/header.php';
?>
<section class="page-hero">
  <div class="page-hero-card">
    <div class="kicker">Compatibility Guide</div>
    <h1 class="page-title">Understand blood group <span class="red">compatibility</span> before you reach out.</h1>
    <p class="page-lead">A clearer education layer makes the site more useful for visitors who are stressed, unfamiliar with donation terms, or trying to help quickly.</p>
  </div>
</section>

<section class="section">
  <div class="section-inner">
    <div class="groups-grid">
      <?php foreach ($bloodGroups as $group): ?>
        <article class="card">
          <span class="stat-number" style="font-size:2.2rem;"><?php echo htmlspecialchars($group['type']); ?></span>
          <p><strong>Can donate to:</strong><br><?php echo htmlspecialchars($group['canDonateTo']); ?></p>
          <p><strong>Can receive from:</strong><br><?php echo htmlspecialchars($group['canReceiveFrom']); ?></p>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
