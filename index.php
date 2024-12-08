<?php

  $notify = false;
  include_once('db.php');

  if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // echo "<pre>";
    // var_dump($_POST);
    $query;
    if ($_POST['save'] == 'save') {
      $query = "INSERT INTO users(name, email, password, mobile) VALUES('$name', '$email', '$password', '$phone')";
    } else {
      $ID = $_POST['id'];
      // echo $ID;
      $query = "UPDATE `users` SET `name` = '$name', `email` = '$email', `mobile` = $phone, `password` = '$password' WHERE `id` = $ID";
      // $query = "UPDATE `users` SET `name` = '$name', `email` = '$email', `password` = '$password', `mobile` = '$phone' WHERE id = $ID ";
    }

    $res = mysqli_query($conn, $query);

    if ($res) {
      if ($_POST['save'] == 'save') {
        $notify = "go";
      } else {
        $notify = "updated";
      }
    } else {
      echo "There was a problem :'(";
    }
    
  }


  if (isset($_GET['action']) && $_GET['action']=='del') {

    // var_dump($_GET);
    // die();

    $ID = $_GET['id'];
    
    // echo $ID;

    $res_del = mysqli_query($conn, "DELETE FROM users WHERE id = $ID");


    if ($res_del) {
      $notify = 'deleted';
    }
    
  }
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users App</title>
    <link rel="stylesheet" href="css/toastr.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <div class="wrapper p-5 m-5">
      <div class="d-flex justify-content-between">
        <h2>All Users</h2>
        <div><a href="add_users.php"><i data-feather="user-plus"></i></a></div>
      </div>
    <table class="table table-striped table-hover">
    <thead>
      <tr class="table-dark">
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">E-mail</th>
        <th scope="col">Phone</th>
        <th scope="col">Action</th>
      </tr>
    </thead>

      <?php

      $users = mysqli_query($conn, "SELECT* FROM users");

      while ($user = mysqli_fetch_array($users)) {?>

          <tr>
            <td>
              <?php echo $user['id']; ?>
            </td>
            <td>
              <?php echo $user['name']; ?>
            </td>
            <td>
              <?php echo $user['email']; ?>
            </td>
            <td>
              <?php echo $user['mobile']; ?>
            </td>
            
          <td class='d-flex justify-content-around'>
            <i onclick="editUser(<?php echo $user['id']; ?>)" class='text-primary' data-feather='edit-3'></i>
            <i onclick="confirmDelete(<?php echo $user['id']; ?>)" class='text-danger' data-feather='trash'></i>
          </td>
            </tr>

      <?php
      }

      ?>
    </table>
    </div>
  </div>


    

    <script src="js/main.js"></script>
    <script src="js/jq.js"></script>
    <script src="js/toastr.js"></script>
    <script src="js/icons.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <?php
      if ($notify != false) {
        if ($notify == 'go') {?>

            <script>
              showAdd();
            </script>

      <?php }

        else if ($notify == 'deleted') {?>

          <script>
              showDeleted();
            </script>
        
            <?php
          }
          else if ($notify == 'updated') { 
            ?>

            <script>
              showUpdated();
            </script>

            <?php
          }
        }
    ?>

    <script>
      feather.replace();
    </script>
</body>
</html>