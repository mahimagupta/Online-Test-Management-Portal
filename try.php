<html>
<body><?php $timeLeft = strtotime("+5 minutes") - time();?>
<div id="timeDisplay" style="font-size: 200%; margin: 160px 0; text-align: center">&ndash;</div>

<script type="text/javascript">


// Get the remaining time from the php code
var timeLeft = <?php echo $timeLeft?>;
console.log(timeLeft);
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
    alert("the time is up.");
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
