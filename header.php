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
