<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container mt-5">
    <div class="card shadow-lg rounded-4">
      <div class="card-body p-5">
        <h1 class="text-center mb-4 text-primary">New Client</h1>
        
        <form action="store.php" method="post">
          <div class="mb-3">
            <label class="form-label">Name:</label>
            <input type="text" name="name" class="form-control" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Email:</label>
            <input type="email" name="email" class="form-control" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Phone:</label>
            <input type="text" name="phone" class="form-control">
          </div>
          <div class="mb-3">
            <label class="form-label">Address:</label>
            <input type="text" name="address" class="form-control">
          </div>
          <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-success">Submit</button>
            <a href="index.php" class="btn btn-secondary">Cancel</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
