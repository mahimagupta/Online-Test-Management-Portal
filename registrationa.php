<?php
      require('connect_database.php');
    $username = $_POST['username'];
		$email = $_POST['emailId'];
		$password = $_POST['pwd1'];
    $id = $_POST['id'];

    $check = "SELECT * From admin where email = '$email'";
    $count = mysqli_num_rows($check);

    if( $count == 0 )
      {
        $ins = mysqli_query($link, "INSERT INTO admin(id,username,email,password) VALUES ('$id','$username','$email','$password')");
        if($ins)
        echo "successful";
      }
    else
      $error = "User Already Exists";
