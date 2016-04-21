<?php
session_start();
require 'connect_database.php';
extract($_POST);

    $check = "SELECT * From teacher where email = '$email'";
    $q = mysqli_query($link,$check);
    $count = mysqli_num_rows($q);

    if( $count == 1 )
      {
        $arr = mysqli_fetch_assoc($q);
      if($password == $arr['password']){
        $_SESSION['login'] = $email;
        $_SESSION['usertype'] = "teacher";
    }
      }
    else
      echo "Teacher Not Found";
 ?>
