<?php
require __DIR__ . '/includes/data.php';
$pageTitle = 'FAQs';
$activePage = 'faqs';
require __DIR__ . '/includes/header.php';
?>
<section class="page-hero">
  <div class="page-hero-card">
    <div class="kicker">Frequently Asked Questions</div>
    <h1 class="page-title">Answer the important questions before visitors have to ask.</h1>
    <p class="page-lead">FAQs make the product easier to trust and reduce hesitation for both donors and requesters.</p>
  </div>
</section>

<section class="section">
  <div class="section-inner faq-grid">
    <?php foreach ($faqs as $faq): ?>
      <article class="faq-item">
        <h3><?php echo htmlspecialchars($faq['question']); ?></h3>
        <p class="faq-answer"><?php echo htmlspecialchars($faq['answer']); ?></p>
      </article>
    <?php endforeach; ?>
  </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
