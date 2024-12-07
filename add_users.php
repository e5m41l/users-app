<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users App...</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <div class="wrapper p-5 p-l--5">
      <div class="d-flex justify-content-between">
        <h2>Add User</h2>
        <div><a href="index.php"><i data-feather="corner-down-left"></i></a></div>
      </div>
    </div>
    <form action="index.php" method="post">
      <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Name</label>
        <input name="name" type="text" class="form-control" id="formGroupExampleInput" placeholder="name">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Phone</label>
        <input name="phone" type="tel" class="form-control" id="formGroupExampleInput2" placeholder="phone">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Email</label>
        <input name="email" type="email" class="form-control" id="formGroupExampleInput" placeholder="email">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Password</label>
        <input name="password" type="password" class="form-control" id="formGroupExampleInput2" placeholder="password">
      </div>

      <button type="submit" class="btn btn-primary">Add</button>
    </form>
  </div>


    

    <script src="js/icons.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script>
      feather.replace();
    </script>
</body>
</html>