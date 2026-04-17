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
  <div class="card-grid four">
    <article class="card">
      <h3>A Group</h3>
      <p>A+ and A- requests should clearly explain donor compatibility and urgency level on the request screen.</p>
    </article>
    <article class="card">
      <h3>B Group</h3>
      <p>B+ and B- are common in request flows and should remain easy to select in both donor and patient forms.</p>
    </article>
    <article class="card">
      <h3>AB Group</h3>
      <p>AB groups often need extra clarity in compatibility guidance for families unfamiliar with donation terminology.</p>
    </article>
    <article class="card">
      <h3>O Group</h3>
      <p>O group pages should highlight urgency and why O-negative requests often need fast coordination.</p>
    </article>
  </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
