<?php
$connect = include('connect.php');
$query   = "SELECT * FROM clients";
$result  = mysqli_query($connect, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>List of Clients</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h2>List of Clients</h2>
      <a href="create.php" class="btn btn-primary">New Client</a>
    </div>

    <table class="table table-striped table-hover">
      <thead class="table-dark">
        <tr>
          <th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Address</th><th>Created At</th><th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php if(mysqli_num_rows($result) > 0): ?>
          <?php while($row = mysqli_fetch_assoc($result)): ?>
            <tr>
              <td><?= $row['id'] ?></td>
              <td><?= $row['name'] ?></td>
              <td><?= $row['email'] ?></td>
              <td><?= $row['phone'] ?></td>
              <td><?= $row['address'] ?></td>
              <td><?= $row['created_at'] ?? '-' ?></td>
              <td>
                <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-primary">Edit</a>
                <a href="delete.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
              </td>
            </tr>
          <?php endwhile; ?>
        <?php else: ?>
          <tr><td colspan="7" class="text-center text-muted">No clients found</td></tr>
        <?php endif; ?>
      </tbody>
    </table>
  </div>
</body>
</html>
