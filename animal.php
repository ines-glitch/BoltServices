<?php
require_once 'data/animals.php';

$id = $_GET['id'] ?? null;

if (!$id || !isset($animals[$id])) {
  http_response_code(404);
  echo "Animal not found";
  exit;
}

$animal = $animals[$id];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?= htmlspecialchars($animal['name']) ?> – Animal Clinic</title>
  <link rel="icon" href="images/logo.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php include 'partials/navbar.php'; ?>

<div class="container mt-4">
  <a href="animals.php" class="btn btn-sm btn-outline-secondary mb-3">
    ← Back to Animals
  </a>

  <div class="row">
    <!-- Image -->
    <div class="col-md-4">
      <img
        src="<?= htmlspecialchars($animal['image']) ?>"
        alt="<?= htmlspecialchars($animal['name']) ?>"
        class="img-fluid rounded"
      >
    </div>

    <!-- Info -->
    <div class="col-md-8">
      <h1><?= htmlspecialchars($animal['name']) ?></h1>

      <div class="row mt-3">
        <div class="col-sm-6">
          <p><strong>Type:</strong> <?= htmlspecialchars($animal['type']) ?></p>
          <p><strong>Breed:</strong> <?= htmlspecialchars($animal['breed']) ?></p>
          <p><strong>Gender:</strong> <?= htmlspecialchars($animal['gender']) ?></p>
          <p><strong>Date of Birth:</strong> <?= htmlspecialchars($animal['dob']) ?></p>
        </div>

        <div class="col-sm-6">
          <p><strong>Weight:</strong> <?= htmlspecialchars($animal['weight']) ?></p>
          <p><strong>Owner:</strong> <?= htmlspecialchars($animal['owner']) ?></p>
          <p><strong>Phone:</strong> <?= htmlspecialchars($animal['phone']) ?></p>
        </div>
      </div>

      <hr>

      <h5>Notes</h5>
      <p><?= htmlspecialchars($animal['notes']) ?></p>
    </div>
  </div>
</div>

</body>
</html>