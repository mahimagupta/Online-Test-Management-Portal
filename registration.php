<?php
	if(isset($_POST['submit'])) {
      require('connect_database.php');
		$email = $_POST['emailid'];
		$password = $_POST['password'];
		$email = mysqli_real_escape_string($link, $email);
		$expertise = mysqli_real_escape_string($link, $password);

    $check = "SELECT From users where email = '$email'";
    $count = mysqli_num_rows($check);

    if( $count == 0 )
      $ins = mysqli_query($link, "INSERT INTO speakerdetails(FirstName,LastName,RegNo,Contact,Email,Expertise,Other,Topic,Date,Experience,Projects,Links) VALUES ('$firstName','$lastName','$regNo','$contact','$email','$expertise','$other','$topic','$dat','$experience','$projects','$links')");
    else
      $error = "User Already Exists";
