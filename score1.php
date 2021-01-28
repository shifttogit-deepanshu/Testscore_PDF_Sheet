<?php 

require("connect.php");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
echo "connection established successfully"."<br>";
echo "This message is printed from score1.php file"."<br>";
// use select query to read the data from the table, table name is Sheet1
$sql = "SELECT * FROM Sheet1";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) 
{
  // output data of each row
  	//while($row = mysqli_fetch_assoc($result))
  	$var1 = $var2 =$score = $tscore = 0;
  	for($x=1;$x<=28;$x++)
  	{
  		$row = mysqli_fetch_assoc($result);
  		//echo "score " . $row["score"]. " tScore " . $row["tscore"]. "<br>";
  		$var1 = $row["score"];
  		$score = $score + $var1;
  		$var2 = $row["tscore"];
  		$tscore = $tscore + $var2;
  	} 
	//here you need to calculate the average core per dimension.
	//dimension 1 Thinking and problem solving skills Q1 to Q28
	//echo $score."<br>";
	//echo $tscore."<br>";
	$dim1Score = ($score/$tscore)*100;
	echo "Dimension1: Thinking and Problem Solving Skills Score is: ".$dim1Score." %"."<br>";

	//calculation for dimension 2
	$var1 = $var2 =$score = $tscore = 0;
	for($x=29;$x<=59;$x++)
  	{
  		$row = mysqli_fetch_assoc($result);
  		//echo "score " . $row["score"]. " tScore " . $row["tscore"]. "<br>";
  		$var1 = $row["score"];
  		$score = $score + $var1;
  		$var2 = $row["tscore"];
  		$tscore = $tscore + $var2;
  	} 
  	$dim2Score = ($score/$tscore)*100;
	echo "Dimension2: Personality Skills Score is: ".$dim2Score." %"."<br>";

	//calculation for dimension 3
	$var1 = $var2 =$score = $tscore = 0;
	for($x=60;$x<=70;$x++)
  	{
  		$row = mysqli_fetch_assoc($result);
  		//echo "score " . $row["score"]. " tScore " . $row["tscore"]. "<br>";
  		$var1 = $row["score"];
  		$score = $score + $var1;
  		$var2 = $row["tscore"];
  		$tscore = $tscore + $var2;
  	} 
  	$dim3Score = ($score/$tscore)*100;
	echo "Dimension3: Communication Skills Score is: ".$dim3Score." %"."<br>";

	//calculation for dimension 4
	$var1 = $var2 =$score = $tscore = 0;
	for($x=71;$x<=87;$x++)
  	{
  		$row = mysqli_fetch_assoc($result);
  		//echo "score " . $row["score"]. " tScore " . $row["tscore"]. "<br>";
  		$var1 = $row["score"];
  		$score = $score + $var1;
  		$var2 = $row["tscore"];
  		$tscore = $tscore + $var2;
  	} 
  	$dim4Score = ($score/$tscore)*100;
	echo "Dimension4: Social Skills Score is: ".$dim4Score." %"."<br>";

	//calculation for dimension 5
	$var1 = $var2 =$score = $tscore = 0;
	for($x=88;$x<=111;$x++)
  	{
  		$row = mysqli_fetch_assoc($result);
  		//echo "score " . $row["score"]. " tScore " . $row["tscore"]. "<br>";
  		$var1 = $row["score"];
  		$score = $score + $var1;
  		$var2 = $row["tscore"];
  		$tscore = $tscore + $var2;
  	} 
  	$dim5Score = ($score/$tscore)*100;
	echo "Dimension5: Leadership Skills Score is: ".$dim5Score." %"."<br>";

	//calculation for dimension 6
	$var1 = $var2 =$score = $tscore = 0;
	for($x=112;$x<=148;$x++)
  	{
  		$row = mysqli_fetch_assoc($result);
  		//echo "score " . $row["score"]. " tScore " . $row["tscore"]. "<br>";
  		$var1 = $row["score"];
  		$score = $score + $var1;
  		$var2 = $row["tscore"];
  		$tscore = $tscore + $var2;
  	} 
  	$dim6Score = ($score/$tscore)*100;
	echo "Dimension6: Technical Skills Score is: ".$dim6Score." %"."<br>";

} 
else 
{
  echo "0 results";
}


?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  
</head>
<body>
  
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

    google.charts.load("current", {packages:["corechart"]});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Dimension", "Score", { role: "style" } ],
        ["Thinking & Problem Solving Skills", <?php echo $dim1Score ?>, "color:#f03434"],
        ["Personality Skills", <?php echo $dim2Score ?>, "color:#336e7b"],
        ["Communication Skills", <?php echo $dim3Score ?>, "color:#f7ca18"],
        ["Social Skills", <?php echo $dim4Score ?>, "color:#00b16a "],
        ["Leadership Skills", <?php echo $dim5Score ?>, "color: #e87e04"],
        ["Technical Skills", <?php echo $dim6Score ?>, "color: #963694"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Dimension Score",
        width: 800,
        height: 600,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.BarChart(document.getElementById("barchart_values"));
      chart.draw(view, options);
  }
  </script>

<div id="barchart_values" style="width: 900px; height: 300px;"></div>


</body>
</html>
