<?php
require_once __DIR__ . '/includes/bootstrap.php';

$page_title = 'Find Donor';
$page_description = 'MySQL-backed blood request page with donor search, filter controls, urgency handling, and request form submission.';
$active_page = 'find-blood';

$searchCity = trim((string) ($_GET['city'] ?? ''));
$searchGroup = trim((string) ($_GET['blood_group'] ?? ''));
$searchAvailability = trim((string) ($_GET['availability'] ?? ''));
$searchContact = trim((string) ($_GET['contact_preference'] ?? ''));

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $pdo instanceof PDO) {
    $patientName = post_value('patient_name');
    $bloodGroup = post_value('blood_group');
    $requiredUnits = (int) ($_POST['required_units'] ?? 0);
    $urgency = post_value('urgency');
    $hospital = post_value('hospital');
    $city = post_value('city');
    $notes = post_value('notes');

    if ($patientName === '' || $bloodGroup === '' || $requiredUnits < 1 || $urgency === '' || $hospital === '' || $city === '') {
        $errors[] = 'Please complete all required blood request fields.';
    }

    if (!$errors) {
        $statement = $pdo->prepare(
            'INSERT INTO blood_requests (patient_name, blood_group, required_units, urgency, hospital, city, notes)
             VALUES (:patient_name, :blood_group, :required_units, :urgency, :hospital, :city, :notes)'
        );
        $statement->execute([
            'patient_name' => $patientName,
            'blood_group' => $bloodGroup,
            'required_units' => $requiredUnits,
            'urgency' => $urgency,
            'hospital' => $hospital,
            'city' => $city,
            'notes' => $notes !== '' ? $notes : null,
        ]);

        set_flash('success', 'Blood request saved successfully. You can now use the donor search to find matching profiles.');
        redirect_to('find-blood.php');
    }
}
$donorSql = 'SELECT * FROM donors WHERE 1=1';
$donorParams = [];
if ($searchCity !== '') {
    $donorSql .= ' AND city LIKE :city';
    $donorParams['city'] = '%' . $searchCity . '%';
}
if ($searchGroup !== '' && $searchGroup !== 'Any group') {
    $donorSql .= ' AND blood_group = :blood_group';
    $donorParams['blood_group'] = $searchGroup;
}
if ($searchAvailability !== '') {
    $donorSql .= ' AND availability = :availability';
    $donorParams['availability'] = $searchAvailability;
}
if ($searchContact !== '') {
    $donorSql .= ' AND contact_preference = :contact_preference';
    $donorParams['contact_preference'] = $searchContact;
}
$donorSql .= ' ORDER BY is_verified DESC, created_at DESC LIMIT 12';
$donors = db_all($donorSql, $donorParams);
include 'includes/header.php';
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
