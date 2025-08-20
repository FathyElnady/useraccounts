<?php
$connect=include('connect.php');
$query   = "SELECT * FROM tasks";
$result  = mysqli_query($connect, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TEST</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card shadow-lg rounded-4 mb-5">
          <div class="card-body p-4">
            <h3 class="text-center text-primary mb-4">📌 المهام اليومية</h3>

            <form action="insert.php" method="post" class="d-flex">
              <input type="text" name="task" id="text" class="form-control me-2" placeholder="أدخل مهمة جديدة" required>
              <button type="submit" class="btn btn-success">إضافة</button>
            </form>
          </div>
        </div>
      </div>
    </div>
 
<?php if(mysqli_num_rows($result)>0): ?>
              <?php while($row=mysqli_fetch_assoc($result)):?>
    <div class="row g-4"> 
      <div class="col-md-4">
        <div class="card shadow-sm h-100">
          <div class="card-body">
            <h5 class="card-title"><?=$row['id']?></h5>
            <p class="card-text"><?=$row['task']?></p>
            <a href="#" class="card-link">Edit</a>
            <a href="delete.php?id=<?= $row['id'] ?>" class="card-link">Delete</a>
            
          </div>
        </div>
      </div>
  <?php endwhile; ?>
            <?php endif;?>

      
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

