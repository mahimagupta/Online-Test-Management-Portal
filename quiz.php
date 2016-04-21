<?php
session_start();
error_reporting(1);
include("database.php");
extract($_POST);
extract($_GET);
extract($_SESSION);
if (!isset($_SESSION['timeout'])) {
	$query = "Select * from mst_test where test_id = '$testid'";
	$ans = mysqli_query($cn,$query);
	$row = mysqli_fetch_assoc($ans);
	$query = "+".$row['duration']." minutes";
	$_SESSION['timeout'] = strtotime($query);
}
// if (isset($_SESSION['timeout']) && (time() > $_SESSION['timeout'])) {
//   header('Location: review.php');
// }
/*$rs=mysqli_query($cn,"select * from mst_question where test_id=$tid") or die(mysqli_error());
if($_SESSION[qn]>mysqli_num_rows($rs))
{
unset($_SESSION[qn]);
exit;
}*/
if(isset($subid) && isset($testid))
{
$_SESSION[sid]=$subid;
$_SESSION[tid]=$testid;
header("location: quiz.php");
}
if(!isset($_SESSION[sid]) || !isset($_SESSION[tid]))
{
	header("location: index.php");
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Online Quiz</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
include("header.php");


$query="select * from mst_question";

$rs=mysqli_query($cn,"select * from mst_question where test_id=$tid") or die(mysqli_error());
if(!isset($_SESSION[qn]))
{
	$_SESSION[qn]=0;
	mysqli_query($cn,"delete from mst_useranswer where sess_id='" . session_id() ."'") or die(mysqli_error());
	$_SESSION[trueans]=0;

}
else
{
		if($submit=='Next Question' && isset($ans))
		{
				mysqli_data_seek($rs,$_SESSION[qn]);
				$row= mysqli_fetch_row($rs);
				mysqli_query($cn,"insert into mst_useranswer(sess_id, test_id, que_des, ans1,ans2,ans3,ans4,true_ans,your_ans) values ('".session_id()."', $tid,'$row[2]','$row[3]','$row[4]','$row[5]', '$row[6]','$row[7]','$ans')") or die(mysqli_error());
				if($ans==$row[7])
				{
							$_SESSION[trueans]=$_SESSION[trueans]+1;
				}
				$_SESSION[qn]=$_SESSION[qn]+1;
		}
		else if($submit=='Get Result' && isset($ans))
		{
				mysqli_data_seek($rs,$_SESSION[qn]);
				$row= mysqli_fetch_row($rs);
				mysqli_query($cn,"insert into mst_useranswer(sess_id, test_id, que_des, ans1,ans2,ans3,ans4,true_ans,your_ans) values ('".session_id()."', $tid,'$row[2]','$row[3]','$row[4]','$row[5]', '$row[6]','$row[7]','$ans')") or die(mysqli_error());
				if($ans==$row[7])
				{
							$_SESSION[trueans]=$_SESSION[trueans]+1;
				}
				echo "<h1 class=head1> Result</h1>";
				$_SESSION[qn]=$_SESSION[qn]+1;
				echo "<Table align=center><tr class=tot><td>Total Question<td> $_SESSION[qn]";
				echo "<tr class=tans><td>True Answer<td>".$_SESSION[trueans];
				$w=$_SESSION[qn]-$_SESSION[trueans];
				echo "<tr class=fans><td>Wrong Answer<td> ". $w;
				echo "</table>";
				mysqli_query($cn,"insert into mst_result(login,test_id,test_date,score) values('$login',$tid,'".date("d/m/Y")."',$_SESSION[trueans])") or die(mysqli_error());
				echo "<h1 align=center><a href=review.php> Review Question</a> </h1>";
				unset($_SESSION[qn]);
				unset($_SESSION[sid]);
				unset($_SESSION[tid]);
				unset($_SESSION[trueans]);
				exit;
		}
}
$rs=mysqli_query($cn,"select * from mst_question where test_id=$tid") or die(mysqli_error());
if($_SESSION[qn]>mysqli_num_rows($rs)-1)
{
unset($_SESSION[qn]);
echo "<h1 class=head1>Some Error  Occured</h1>";
session_destroy();
echo "Please <a href=index.php> Start Again</a>";

exit;
}
mysqli_data_seek($rs,$_SESSION[qn]);
$row= mysqli_fetch_row($rs);
echo "<form style="."align:center;"."name=myfm method=post action=quiz.php>";
echo "<table width=20% > <tr> <td width=30>&nbsp;<td> <table border=0>";
$n=$_SESSION[qn]+1;
echo "<tR><td><span class=style2>Que ".  $n .": $row[2]</style>";
echo "<tr><td class=style8><input type=\"radio\" name=\"ans\" id=q1a value=1>$row[3]";
echo "<tr><td class=style8><input type=\"radio\" name=\"ans\" id=q2a value=2>$row[4]";
echo "<tr><td class=style8><input type=\"radio\" name=\"ans\" id=q3a value=3>$row[5]";
echo "<tr><td class=style8><input type=\"radio\" name=\"ans\" id=q4a value=4>$row[6]";

if($_SESSION[qn]<mysqli_num_rows($rs)-1)
echo "<tr><td><input type=submit name=submit value='Next Question'></form>";
else
echo "<tr><td><input type=submit name=submit value='Get Result'></form>";
echo "</table></table>";
?>
<?php $timeLeft = $_SESSION['timeout'] - time();?>
<p style="font-size: 200%; margin-right:90px;text-align: right"> Timer: </p>
<div id="timeDisplay" style="font-size: 200%; margin: 0px 100px 900px 900px; text-align: right">&ndash;</div>

<script type="text/javascript">


// Get the remaining time from the php code
var timeLeft = <?php echo $timeLeft?>;
var timeStart = new Date();

// Refresh the time display and check whether the time is up
function updateCountdown() {
  // calculate the remaining time
  var now = new Date();
  var timePage = Math.floor((now.getTime() - timeStart.getTime()) / 1000);  // Time passed in seconds
  var remain = timeLeft - timePage;

  // Is the time up?
  if (remain <= 0) {
    remain = 0;
    // Stop the timer
    window.clearInterval(timerInterval);
    // Display a message (optional)
    alert("The time is up.");
    // Redirect the participant to the next page (optional)
   // SoSciTools.submitPage();
  }

  // Display the time
  var display = document.getElementById("timeDisplay");
  if (!display) {
    return;
  }
  while (display.lastChild) {
    display.removeChild(display.lastChild);
  }
  var minutes = Math.floor(remain / 60);
  var seconds = String(remain - 60 * minutes);
  if (seconds.length < 2) {
    seconds = "0" + seconds;
  }
  var displayText = String(minutes) + ":" + seconds;
  var displayNode = document.createTextNode(displayText);
  display.appendChild(displayNode);
}

// Initialize
var timerInterval = window.setInterval(updateCountdown, 250);
updateCountdown();


</script>
</body>

</html>
