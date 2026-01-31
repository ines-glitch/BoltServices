
<?php
require_once 'data/animals.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Animals</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php include 'partials/navbar.php'; ?>

<div class="container mt-4">
  <h1 class="mb-4">Animals</h1>

  <table class="table table-hover align-middle">
    <thead class="table-light">
      <tr>
        <th>Photo</th>
        <th>Name</th>
        <th>Type</th>
        <th>Breed</th>
      </tr>
    </thead>
    <tbody>

      <?php foreach ($animals as $animal): ?>
<tr>
  <td>
    <img src="<?= htmlspecialchars($animal['image']) ?>" width="60" class="rounded">
  </td>
  <td>
    <a href="animal.php?id=<?= $animal['id'] ?>">
      <?= htmlspecialchars($animal['name']) ?>
    </a>
  </td>
  <td><?= htmlspecialchars($animal['type']) ?></td>
  <td><?= htmlspecialchars($animal['breed']) ?></td>
</tr>
<?php endforeach; ?>

    </tbody>
  </table>
</div>

</body>
</html>
