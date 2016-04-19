<?php
      require('connect_database.php');
      $username = $_POST['username'];
      $email = $_POST['emailId'];
      $password = $_POST['pwd1'];
      $department = $_POST['department'];
      $designation = $_POST['designation'];
      $mobNo = $_POST['mobNo'];

    $check = "SELECT * From teacher where email = '$email'";
    $count = mysqli_num_rows($check);

    if( $count == 0 )
      {
        $ins = mysqli_query($link, "INSERT INTO teacher(username,email,password,department,designation,mobno) VALUES ('$username','$email','$password','$department','$designation','$mobNo')");
        if($ins)
        echo "successful";
      }
    else
      $error = "User Already Exists";
