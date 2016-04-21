<?php
if(isset($_SESSION['login']))
{
	echo "<div align=\"right\"><strong><a href=\"login.php\">Admin Home</a>|<a href=\"signout.php\">Signout</a></strong></div>";
}
else
{
	echo "&nbsp;";
}
?>
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
      <a class="navbar-brand" href="#">OTMT</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Admin</a><ul class="dropdown-menu">
      <li><a href="#">Submenu 1-1</a></li>
      <li><a href="#">Submenu 1-2</a></li>
      <li><a href="#">Submenu 1-3</a></li> 
    </ul>
    </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Teachers</a><ul class="dropdown-menu">
      <li><a href="#">Submenu 1-1</a></li>
      <li><a href="createtest.html">Create Test</a></li>
      <li><a href="#">Submenu 1-3</a></li> 
    </ul>
  </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Students</a><ul class="dropdown-menu">
      <li><a href="#">Submenu 1-1</a></li>
      <li><a href="#">Take a Test</a></li>
      <li><a href="#">View Results</a></li> 
    </ul>
    </li> 
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Training</a><ul class="dropdown-menu">
      <li><a href="progress.html">Progress</a></li>
      <li><a href="#">Submenu 1-2</a></li>
      <li><a href="#">Submenu 1-3</a></li> 
    </ul>
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
</div>
</body>
</html>