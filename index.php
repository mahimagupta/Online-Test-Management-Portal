<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
  img {
    width:100%;
    height:800px;
    opacity: 0.4;
    filter: alpha(opacity=40);
}

img:hover {
    opacity: 1.0;
    filter: alpha(opacity=100);
}
.btn{
      border-radius: 8px;
      background-color: #555555;
      border: none;
       padding: 10px;
       display: inline-block;
       -webkit-transition-duration: 0.4s;
    transition-duration: 0.4s;
}


  </style>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">OTMT</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="admin/login.php">Admin</a>
    </li>
      <li><a href="admin/login.php">Teachers</a>

  </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Students</a><ul class="dropdown-menu">
      <li><a href="showtest.php">Take a Test</a></li>
      <li><a href="result.php">View Results</a></li>
    </ul>
    </li>
    <li><a href="contactus.html">Contact Us</a><li>
  </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="signup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a><ul class="dropdown-menu">
      <li><a href="logins.html">Students</a></li>
      <li><a href="logint.html">Teachers</a></li>
      <li><a href="logina.html">Admins</a></li>
    </ul>

    </ul>
  </div>
</nav>
  <div class="image">
<img src="images/dd.jpg" />

    <div class="col-sm-7 text-left" style="float:center;padding-left:160px;position:relative;top: -600px;">
      <h1 style="font-size:40px;">Welcome to OTMT</h1>
      <br>
      <p style="font-size:20px;">The safest and easiest way for educators to connect and</p>
        <p style="font-size:20px;">collaborate with students, teachers, and each other.</p>
      <hr>
      <br><br><br>
      <br>
      <h4>Create your free account now</h4>
      <div>
 <button type="button" class="btn btn-primary btn-md"><a href="signups.html">I'm a Student</a></button>
 <button type="button" class="btn btn-primary btn-md"><a href="signupt.html">I'm a Teacher</a></button>
 <button type="button" class="btn btn-primary btn-md"><a href="signupa.html">I'm an Admin</a></button>
</div>
</div>
</body>
</html>
