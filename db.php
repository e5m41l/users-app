<?php

    $host = "localhost";
    $user = "root";
    $password = "pass123";
    $dbName = "users_app";
    $conn = mysqli_connect($host, $user, $password, $dbName);

    if (isset($conn)) {
        echo "Connected to DB";
    } else {
        echo "Failed to connect";
    }
?>