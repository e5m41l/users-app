<?php

  include_once('db.php');
  

  // echo $name;
  // echo $phone;
  // echo $email;
  // echo $password;

  if (isset($_POST['add'])) {
    // $name = $_POST['name'];
    // $phone = $_POST['phone'];
    // $email = $_POST['email'];
    // $password = $_POST['password'];

    echo "<pre>";

    var_dump($_POST);

    die();
  }
//   if(isset($_POST['add'])) {

      

//     $query = "INSERT INTO users(name, email, date) VALUES('$name', '$phone', '$email', '$password')";
//     $result = mysqli_query($conn, $query);

//     if ($result) {
//       echo "<p style='color: green'>تم اضافة مستخدم جديد</p>";
//     }
// }
  
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
    <div class="wrapper p-5 m-5">
      <div class="d-flex justify-content-between">
        <h2>All Users</h2>
        <div><a href="add_users.php"><i data-feather="user-plus"></i></a></div>
      </div>
    </div>
  </div>


    

    <script src="js/icons.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script>
      feather.replace();
    </script>
</body>
</html>