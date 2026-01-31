<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Admin</title>
  <link rel="icon" type="image/png" href="images/logo.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php include 'partials/navbar.php'; ?>

<div class="container mt-4">
  <h1>Admin Panel</h1>

  <!-- Add Animal -->
  <div class="card mt-4">
    <div class="card-body">
      <h4>Add Animal</h4>
      <form method="post">
        <div class="mb-3">
          <label class="form-label">Name</label>
          <input class="form-control" name="animal_name" type="text">
        </div>

        <div class="mb-3">
          <label class="form-label">Species</label>
          <input class="form-control" name="species" type="text">
        </div>

        <button class="btn btn-success">Add Animal</button>
      </form>
    </div>
  </div>
</div>

</body>
</html>
