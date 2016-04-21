<?php
      require('connect_database.php');
      echo "inside";
    $username = $_POST['username'];
		$email = $_POST['emailId'];
		$password = $_POST['pwd1'];
    $regNo = $_POST['regNo'];
    $mobNo = $_POST['mobNo'];

    $check = "SELECT * From student where email = '$email'";
    $q = mysqli_query($link,$check);
    $count = mysqli_num_rows($q);

    if( $count == 0 && isset($email))
      {
        $ins = mysqli_query($link, "INSERT INTO student(username,email,password,regno,mobno) VALUES ('$username','$email','$password','$regNo','$mobNo')");
        if($ins)
        echo "successful";
      }
    else
      echo "User Already Exists";
