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
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="styles.css" />
</head>
<body>
<div class="site-shell">
  <header class="site-header">
    <nav class="nav">
      <a href="index.php" class="logo">
        <img src="Blood_Saathi.png" alt="Blood Saathi Logo" />
      </a>
      <button class="menu-toggle" type="button" data-menu-toggle aria-expanded="false" aria-controls="site-menu">Menu</button>
      <div class="nav-panel" id="site-menu" data-menu-panel>
        <ul class="nav-links">
          <li><a href="index.php" class="<?php echo $activePage === 'home' ? 'active' : ''; ?>">Home</a></li>
          <li><a href="find-donor.php" class="<?php echo $activePage === 'find' ? 'active' : ''; ?>">Find Donor / Request Blood</a></li>
          <li><a href="become-donor.php" class="<?php echo $activePage === 'donor' ? 'active' : ''; ?>">Become a Donor</a></li>
          <li><a href="blood-groups.php" class="<?php echo $activePage === 'groups' ? 'active' : ''; ?>">Blood Groups</a></li>
          <li><a href="how-it-works.php" class="<?php echo $activePage === 'how' ? 'active' : ''; ?>">How It Works</a></li>
          <li><a href="emergency-help.php" class="<?php echo $activePage === 'emergency' ? 'active' : ''; ?>">Emergency Help</a></li>
          <li><a href="faqs.php" class="<?php echo $activePage === 'faqs' ? 'active' : ''; ?>">FAQs</a></li>
        </ul>
        <a href="dashboard.php" class="btn-login <?php echo $activePage === 'dashboard' ? 'active' : ''; ?>">Dashboard</a>
      </div>
    </nav>
  </header>
  <main>
