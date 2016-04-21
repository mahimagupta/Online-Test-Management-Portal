<?php
session_start();
require 'connect_database.php';
extract($_POST);

    $check = "SELECT * From teacher where email = '$email'";
    $q = mysqli_query($link,$check);
    $count = mysqli_num_rows($q);

    if( $count == 1 )
      {
        $_SESSION['email'] = $email;
        $_SESSION['usertype'] = "teacher";
      }
    else
      echo "Teacher Not Found";
 ?>
