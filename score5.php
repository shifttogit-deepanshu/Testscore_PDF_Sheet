<?php 
require("connect.php");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
//echo "connection established successfully"."<br>";
//echo "This message is printed from score4.php file"."<br>";
// use select query to read the data from the table, table name is Sheet1
$sql = "SELECT * FROM Sheet1";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) 
{
  // output data of each row
  	//while($row = mysqli_fetch_assoc($result))
  	//cognitive flexibility skills Q1 to Q4
  	for($x=1;$x<=28;$x++)
  	{
  		$row = mysqli_fetch_assoc($result);
  		//echo "score " . $row["score"]. " tScore " . $row["tscore"]. "<br>";
    } 
  
	$var1 = $var2 =$score = $tscore = 0;
  	//Persuasion skills Q29 to Q31
  	for($x=29;$x<=31;$x++)
  	{
  		$row = mysqli_fetch_assoc($result);
  		//echo "score " . $row["score"]. " tScore " . $row["tscore"]. "<br>";
  		$var1 = $row["score"];
  		$score = $score + $var1;
  		$var2 = $row["tscore"];
  		$tscore = $tscore + $var2;
  	} 
  	//sd21 is for Persuasion Skills
	$sd21 = ($score/$tscore)*100;
	
	$var1 = $var2 =$score = $tscore = 0;
  	//Risk Taking Ability skills Q32 to Q34
  	for($x=32;$x<=34;$x++)
  	{
  		$row = mysqli_fetch_assoc($result);
  		//echo "score " . $row["score"]. " tScore " . $row["tscore"]. "<br>";
  		$var1 = $row["score"];
  		$score = $score + $var1;
  		$var2 = $row["tscore"];
  		$tscore = $tscore + $var2;
  	} 
  	//sd22 is for Problem Solving
	$sd22 = ($score/$tscore)*100;
	
	$var1 = $var2 =$score = $tscore = 0;
  	//Locus of Control skills Q35 to Q40
  	for($x=35;$x<=40;$x++)
  	{
  		$row = mysqli_fetch_assoc($result);
  		//echo "score " . $row["score"]. " tScore " . $row["tscore"]. "<br>";
  		$var1 = $row["score"];
  		$score = $score + $var1;
  		$var2 = $row["tscore"];
  		$tscore = $tscore + $var2;
  	} 
  	//sd23 is for Locus of Control
	$sd23 = ($score/$tscore)*100;
	
	$var1 = $var2 =$score = $tscore = 0;
  	//Tolerance For Ambiguity skills Q41 to Q43
  	for($x=41;$x<=43;$x++)
  	{
  		$row = mysqli_fetch_assoc($result);
  		//echo "score " . $row["score"]. " tScore " . $row["tscore"]. "<br>";
  		$var1 = $row["score"];
  		$score = $score + $var1;
  		$var2 = $row["tscore"];
  		$tscore = $tscore + $var2;
  	} 
  	//sd24 is Tolerance For Ambiguity Skills
	$sd24 = ($score/$tscore)*100;
	
	$var1 = $var2 =$score = $tscore = 0;
  	//Resilience skills Q44 to Q46
  	for($x=44;$x<=46;$x++)
  	{
  		$row = mysqli_fetch_assoc($result);
  		//echo "score " . $row["score"]. " tScore " . $row["tscore"]. "<br>";
  		$var1 = $row["score"];
  		$score = $score + $var1;
  		$var2 = $row["tscore"];
  		$tscore = $tscore + $var2;
  	} 
  	//sd25 is for Resilience 
	$sd25 = ($score/$tscore)*100;
	
	$var1 = $var2 =$score = $tscore = 0;
  	//Self Awareness skills Q47 to Q48
  	for($x=47;$x<=48;$x++)
  	{
  		$row = mysqli_fetch_assoc($result);
  		//echo "score " . $row["score"]. " tScore " . $row["tscore"]. "<br>";
  		$var1 = $row["score"];
  		$score = $score + $var1;
  		$var2 = $row["tscore"];
  		$tscore = $tscore + $var2;
  	} 
  	//sd26 is for Self Awareness skills 
	$sd26 = ($score/$tscore)*100;
	
  $var1 = $var2 =$score = $tscore = 0;
    //Personal Disposition skills Q49 to Q59
    for($x=49;$x<=59;$x++)
    {
      $row = mysqli_fetch_assoc($result);
      //echo "score " . $row["score"]. " tScore " . $row["tscore"]. "<br>";
      $var1 = $row["score"];
      $score = $score + $var1;
      $var2 = $row["tscore"];
      $tscore = $tscore + $var2;
    } 
    //sd27 is for Personal Disposition skills 
  $sd27 = ($score/$tscore)*100;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="font-family: 'Sans-Serif';">

<h1>Personality</h1>
<!-- Persuasion Skills -->

<h2>Persuasion Skills</h2>
<h3>Your Score is: <?php echo $sd21."%"."<br>"; 

if($sd21>60)
{
	echo "You have a High Score in Persuasion Skills";
}
if($sd21 >=30 && $sd21<=60)
{
	echo "There is a scope of further enhancement in Persuasion Skills";
}
if($sd21<30)
{
	echo "You need to develop Persuasion Skills";
}

?>	
</h3>
<p>A persuasive individual is able to use effective persuasion to help the opposing party to abandon their previous position and to embrace your own position. 
</p>
<hr>

<!-- Risk Taking Ability -->
<h2>Risk Taking Ability Skills</h2>
<h3>Your Score is: <?php echo $sd22."%"."<br>"; 

if($sd22>60)
{
	echo "You have a High Score in Risk Taking Ability Skills";
}
if($sd22 >=30 && $sd22<=60)
{
	echo "There is a scope of further enhancement in Risk Taking Ability Skills";
}
if($sd22<30)
{
	echo "You need to develop Risk Taking Ability Skills";
}

?>	
</h3>
<p>It is the ability to reframe risk as an opportunity to succeed rather than a path to failure. Taking a risk is also a great opportunity to stand out and to present yourself as a leader, and not a follower satisfied with the status quo. It also provides an opportunity for internal growth. 
</p>
<hr>

<!-- Locus of Control Skills -->
<h2>Locus of Control Skills</h2>
<h3>Your Score is: <?php echo $sd23."%"."<br>"; 

if($sd23>60)
{
	echo "You have a High Score in Locus of Control Skills";
}
if($sd23 >=30 && $sd23<=60)
{
	echo "There is a scope of further enhancement in Locus of Control Skills";
}
if($sd23<30)
{
	echo "You need to develop Locus of Control Skills";
}

?>	
</h3>
<p>Locus of control is the degree to which people believe that they have control over the outcome of events in their lives. Locus of control can influence not only how you respond to the events that happen in your life, but also your motivation to take action. If you believe that you hold the keys to your fate, you are more likely to take action to change your situation when needed. If on the other hand, you believe that the outcome is out of your hands, you may be less likely to work toward change.
</p>
<hr>

<!-- Tolerance for Ambiguity -->
<h2>Tolerance for Ambiguity Skills</h2>
<h3>Your Score is: <?php echo $sd24."%"."<br>"; 

if($sd24>60)
{
	echo "You have a High Score in Tolerance for Ambiguity Skills";
}
if($sd24 >=30 && $sd24<=60)
{
	echo "There is a scope of further enhancement in Tolerance for Ambiguity Skills";
}
if($sd24<30)
{
	echo "You need to develop Tolerance for Ambiguity Skills";
}

?>	
</h3>
<p>Tolerance of ambiguity may allow the person to deal with the ill-defined nature of problems that have creative potential. It may also allow them to tolerate the range of options that should be considered. Tolerance of ambiguity may be especially useful when working on problems in groups.
</p>
<hr>

<!-- Resilience Skills -->
<h2>Resilience Skills</h2>
<h3>Your Score is: <?php echo $sd25."%"."<br>"; 

if($sd25>60)
{
	echo "You have a High Score in Resilience Skills";
}
if($sd25 >=30 && $sd25<=60)
{
	echo "There is a scope of further enhancement in Resilience Skills";
}
if($sd25<30)
{
	echo "You need to develop Resilience Skills";
}

?>	
</h3>
<p>It is the capacity to recover quickly from difficulties. It enables us to develop mechanisms for protection against experiences which could be overwhelming; it helps us to maintain the balance in our lives during difficult or stressful periods of time and can also protect us from the development of some mental health difficulties and issues. It is associated with improved learning and academic achievement, lower absences from work or study due to sickness, reduced use of risk-taking behaviours such as excessive drinking, smoking or use of drugs.
</p>
<hr>

<!-- Self Awareness Skills -->
<h2>Self Awareness Skills</h2>
<h3>Your Score is: <?php echo $sd26."%"."<br>"; 

if($sd26>60)
{
	echo "You have a High Score in Self Awareness Skills";
}
if($sd26 >=30 && $sd26<=60)
{
	echo "There is a scope of further enhancement in Self Awareness Skills";
}
if($sd26<30)
{
	echo "You need to develop Self Awareness Skills";
}

?>	
</h3>
<p>Self-awareness skills, as the term indicates, refer to one’s ability to be aware of or to recognize one’s own emotions, behaviors, beliefs, motivations and other characteristics such as strengths and weaknesses, such that it enables us to identify and understand ourselves as a separate entity. Self-awareness is important because when we have a better understanding of ourselves, we can experience ourselves as unique and separate individuals. We are then empowered to make changes and to build on our areas of strength as well as identify areas where we would like to make improvements. Having self-awareness skills not only enables you to understand your own personality but also helps you comprehend other people, their perceptions about you, and your response to their actions. Apart from enabling you to understand, it also helps you to change your own thoughts and interpretations, in an effort to alter some unwarranted emotions.
</p>
<hr>

<!-- Personal Disposition Skills -->

<h2>Personality Development  Skills</h2>
<h3>Your Score is: <?php echo $sd27."%"."<br>"; 

if($sd27>60)
{
	echo "You have a High Score in Personal Disposition Skills";
}
if($sd27 >=30 && $sd27<=60)
{
	echo "There is a scope of further enhancement in Personal Disposition Skills";
}
if($sd27<30)
{
	echo "You need to develop Personal Disposition Skills";
}

?>	
</h3>
<p>Personality development grooms an individual and helps him make a mark of his/her own. Personality development goes a long way in reducing stress and conflicts. Personality development helps you develop a positive attitude in life. Personality development helps an individual to inculcate positive qualities like punctuality, flexible attitude, willingness to learn, friendly nature and the eagerness to help others.

</p>
<hr>



</body>
</html>