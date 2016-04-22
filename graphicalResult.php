<?php session_start();
include 'header.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Progress</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script type="text/javascript">
window.onload = function () {
  var chart = new CanvasJS.Chart("chartContainer",
  {
    title:{
      text: "",
      fontFamily: "arial black"
    },
                animationEnabled: true,
    legend: {
      verticalAlign: "bottom",
      horizontalAlign: "center"
    },
    theme: "theme1",
    data: [
    {
      type: "pie",
      indexLabelFontFamily: "Garamond",
      indexLabelFontSize: 20,
      indexLabelFontWeight: "bold",
      startAngle:0,
      indexLabelFontColor: "MistyRo",
      indexLabelLineColor: "darkgrey",
      indexLabelPlacement: "inside",
      toolTipContent: "{name}: {y}score",
      showInLegend: true,
      indexLabel: "#percent%",
      dataPoints: [
        {  y: <?php echo $_SESSION['totalQuestions']-$_SESSION['totalScore'] ?>, name: "Incorrect Answers", legendMarkerType: "triangle"},
        {  y: <?php echo $_SESSION['totalScore'] ?>, name: "Correct Answers", legendMarkerType: "square"},

      ]
    }
    ]
  });
  chart.render();
}
</script>
<script type="text/javascript" src="canvasjs.min.js"></script>
</head>
<body>

<div class="container">
  <h2>PERFORMANCE ANALYSIS</h2>
  <p></p>
  <br>
  <br>
  <div class="progress">
    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo ($_SESSION['totalQuestions']-$_SESSION['totalScore'])/($_SESSION['totalQuestions'])*100 ?>%">
      <?php echo round(($_SESSION['totalQuestions']-$_SESSION['totalScore'])/($_SESSION['totalQuestions']),2)*100 ?>%
    </div>
  </div>
  <div class="progress">
    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo ($_SESSION['totalScore'])/($_SESSION['totalQuestions'])*100 ?>%">
      <?php echo round(($_SESSION['totalScore'])/($_SESSION['totalQuestions']),2)*100 ?>%
    </div>
  </div>
</div>
<br>
<div id="chartContainer" style="height: 300px; width: 100%;"></div>
</body>
</html>
