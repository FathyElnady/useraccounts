<?php
$connect = include('connect.php');
$id = $_GET['id'] ?? 0;

$query = "SELECT * FROM clients WHERE id = $id";
$result = mysqli_query($connect, $query);
$client = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Client</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container mt-5">
    <div class="card shadow-lg rounded-4">
      <div class="card-body p-5">
        <h1 class="text-center mb-4 text-primary">Edit Client</h1>
        
        <form action="update.php" method="post">
          <input type="hidden" name="id" value="<?= $client['id'] ?>">
          <div class="mb-3"><label class="form-label">Name:</label>
            <input type="text" name="name" value="<?= $client['name'] ?>" class="form-control">
          </div>
          <div class="mb-3"><label class="form-label">Email:</label>
            <input type="email" name="email" value="<?= $client['email'] ?>" class="form-control">
          </div>
          <div class="mb-3"><label class="form-label">Phone:</label>
            <input type="text" name="phone" value="<?= $client['phone'] ?>" class="form-control">
          </div>
          <div class="mb-3"><label class="form-label">Address:</label>
            <input type="text" name="address" value="<?= $client['address'] ?>" class="form-control">
          </div>
          <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-success">Update</button>
            <a href="index.php" class="btn btn-secondary">Cancel</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
