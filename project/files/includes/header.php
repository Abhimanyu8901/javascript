<?php
if (!isset($pageTitle)) {
    $pageTitle = $siteName;
}
if (!isset($activePage)) {
    $activePage = '';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo htmlspecialchars($pageTitle); ?> | <?php echo htmlspecialchars($siteName); ?></title>
  
</head>
<body>
<div class="site-shell">
  <header class="site-header">
    <nav class="nav">
      <a>
        <img src="Blood_Saathi.png" alt="Blood Saathi Logo" />
      </a>
      <button class="menu-toggle" type="button" data-menu-toggle aria-expanded="false" aria-controls="site-menu">Menu</button>
      <div class="nav-panel" id="site-menu" data-menu-panel>
        <ul class="nav-links">
          <li>">Home</li>
          <li>Find Donor / Request Blood</li>
          <li>Become a Donor</li>
          <li>Blood Groups</li>
          <li>How It Works</li>
          <li>Emergency Help</li>
          <li>FAQs</li>
        </ul>
      </div>
    </nav>
  </header>
  <main>
