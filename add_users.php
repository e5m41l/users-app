<?php

  $title = "Add User";
  $btn_title = "save";
  $name = "";
  $email = "";
  $phone = "";
  $password = "";

  include_once('db.php');

  if (isset($_GET['action']) && $_GET['action']=='edit') {
    $ID = $_GET['id'];
    $btn_title = "update";
    // var_dump($_GET);
    // die();

    $user = mysqli_query($conn, "SELECT* FROM users WHERE id = $ID");
    
    if ($user) {
      $title = "Update";
      $user = $user->fetch_assoc();
      $ID = $user['id'];
      $name = $user['name'];
      $email = $user['email'];
      $phone = $user['mobile'];
      $password = $user['password'];
      
    }
  }
?>
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
        <h2><?php echo $title; ?></h2>
        <div><a href="index.php"><i data-feather="corner-down-left"></i></a></div>
      </div>
    </div>
    <form action="index.php" method="post">
      <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Name</label>
        <input value="<?php echo $name; ?>" name="name" type="text" class="form-control" id="formGroupExampleInput" placeholder="name">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Phone</label>
        <input value="<?php echo $phone; ?>" name="phone" type="tel" class="form-control" id="formGroupExampleInput2" placeholder="phone">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Email</label>
        <input value="<?php echo $email; ?>" name="email" type="email" class="form-control" id="formGroupExampleInput" placeholder="email">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Password</label>
        <input value="<?php echo $password; ?>" name="password" type="password" class="form-control" id="formGroupExampleInput2" placeholder="password">
      </div>

      <?php 
        if (isset($_GET['id'])) {
          ?>
        <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
      <?php
        } ?>
      <input value="<?php echo $btn_title; ?>" name="save" type="submit" class="btn btn-primary">
    </form>
  </div>


    

    <script src="js/icons.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script>
      feather.replace();
    </script>
</body>
</html>