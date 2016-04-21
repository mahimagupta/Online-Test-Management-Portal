<?php
// $cn=mysqli_connect("localhost:3306","root","root") or die("Could not Connect My Sql");
// mysqli_select_db("quiz_new")  or die("Could connect to Database");

   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = 'root';
   $cn = mysqli_connect($dbhost, $dbuser, $dbpass, "quiz_new");
   if(! $cn )
   {
     die('Could not connect: ' . mysqli_error());
   }
  //  echo 'Connected successfully';
?>
