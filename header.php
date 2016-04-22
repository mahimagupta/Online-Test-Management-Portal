
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
      <li><a href="admin/login.php">Admin</a></li>
      <li ><a href="admin/login.php">Teachers</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Students</a>
			<ul class="dropdown-menu">
      <li><a href="studentlogin.php">Home</a></li>
      <li><a href="sublist.php">Take a Test</a></li>
      <li><a href="result.php">View Results</a></li>
    </ul>
    </li>
    <li><a href="contactus.html">Contact Us</a><li>
  </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><?php
			if(isset($_SESSION['login']))
			{
				echo "<a href=\"signout.php\"><span class=\"glyphicon glyphicon-user\"></span> Signout</a>";
			}
			else
			{
				echo "<a href="."signup.html"."><span class="."glyphicon glyphicon-user"."></span> Sign Up</a>";
			}
			?></li><?php
			if(!isset($_SESSION['login'])){
				echo '<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a><ul class="dropdown-menu">
	      <li><a href="logins.html">Students</a></li>
	      <li><a href="logint.html">Teachers</a></li>
	      <li><a href="logina.html">Admins</a></li>';
			}?>
    </ul>

    </ul>
  </div>
</nav>
</div>
</body>
</html>
