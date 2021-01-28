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
  	$var1 = $var2 =$score = $tscore = 0;
  	//cognitive flexibility skills Q1 to Q4
  	for($x=1;$x<=4;$x++)
  	{
  		$row = mysqli_fetch_assoc($result);
  		//echo "score " . $row["score"]. " tScore " . $row["tscore"]. "<br>";
  		$var1 = $row["score"];
  		$score = $score + $var1;
  		$var2 = $row["tscore"];
  		$tscore = $tscore + $var2;
  	} 
  	//sd11 is for cognitive flexibility
	$sd11 = ($score/$tscore)*100;
	//echo "Cognitive Flexibility Score is: ".$sd11." %"."<br>";

	$var1 = $var2 =$score = $tscore = 0;
  	//Executive Functioning skills Q5 to Q8
  	for($x=5;$x<=8;$x++)
  	{
  		$row = mysqli_fetch_assoc($result);
  		//echo "score " . $row["score"]. " tScore " . $row["tscore"]. "<br>";
  		$var1 = $row["score"];
  		$score = $score + $var1;
  		$var2 = $row["tscore"];
  		$tscore = $tscore + $var2;
  	} 
  	//sd12 is for Executive Functioning
	$sd12 = ($score/$tscore)*100;
	//echo "Executive Functioning Skills Score is: ".$sd12." %"."<br>";

	$var1 = $var2 =$score = $tscore = 0;
  	//Problem Solving skills Q9 to Q12
  	for($x=9;$x<=12;$x++)
  	{
  		$row = mysqli_fetch_assoc($result);
  		//echo "score " . $row["score"]. " tScore " . $row["tscore"]. "<br>";
  		$var1 = $row["score"];
  		$score = $score + $var1;
  		$var2 = $row["tscore"];
  		$tscore = $tscore + $var2;
  	} 
  	//sd13 is for Problem Solving
	$sd13 = ($score/$tscore)*100;
	//echo "Problem Solving Skills Score is: ".$sd13." %"."<br>";

	$var1 = $var2 =$score = $tscore = 0;
  	//Self Regulation skills Q13 to Q16
  	for($x=13;$x<=16;$x++)
  	{
  		$row = mysqli_fetch_assoc($result);
  		//echo "score " . $row["score"]. " tScore " . $row["tscore"]. "<br>";
  		$var1 = $row["score"];
  		$score = $score + $var1;
  		$var2 = $row["tscore"];
  		$tscore = $tscore + $var2;
  	} 
  	//sd14 is for Self Regulation
	$sd14 = ($score/$tscore)*100;
	//echo "Self Regulation Skills Score is: ".$sd14." %"."<br>";

	$var1 = $var2 =$score = $tscore = 0;
  	//Negotiation skills Q16 to Q20
  	for($x=16;$x<=20;$x++)
  	{
  		$row = mysqli_fetch_assoc($result);
  		//echo "score " . $row["score"]. " tScore " . $row["tscore"]. "<br>";
  		$var1 = $row["score"];
  		$score = $score + $var1;
  		$var2 = $row["tscore"];
  		$tscore = $tscore + $var2;
  	} 
  	//sd15 is for Negotiation Skills
	$sd15 = ($score/$tscore)*100;
	//echo "Negotiation Skills Score is: ".$sd15." %"."<br>";

	$var1 = $var2 =$score = $tscore = 0;
  	//Logical Reasoning skills Q21 to Q24
  	for($x=21;$x<=24;$x++)
  	{
  		$row = mysqli_fetch_assoc($result);
  		//echo "score " . $row["score"]. " tScore " . $row["tscore"]. "<br>";
  		$var1 = $row["score"];
  		$score = $score + $var1;
  		$var2 = $row["tscore"];
  		$tscore = $tscore + $var2;
  	} 
  	//sd16 is for Logical Reasoning 
	$sd16 = ($score/$tscore)*100;
	//echo "Logical Reasoning Skills Score is: ".$sd16." %"."<br>";

	$var1 = $var2 =$score = $tscore = 0;
  	//Attention to Detail Q25 to Q28
  	for($x=25;$x<=28;$x++)
  	{
  		$row = mysqli_fetch_assoc($result);
  		//echo "score " . $row["score"]. " tScore " . $row["tscore"]. "<br>";
  		$var1 = $row["score"];
  		$score = $score + $var1;
  		$var2 = $row["tscore"];
  		$tscore = $tscore + $var2;
  	} 
  	//sd17 is for Attention to Detail 
	$sd17 = ($score/$tscore)*100;
	//echo "Attention to Detail Skills Score is: ".$sd17." %"."<br>";
}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style2.css" />
	<title></title>
</head>
<body style="font-family: 'Sans-Serif';">
<div  class="tps">
<h1>Thinking and Problem Solving Skills</h1>
<!-- Cognitive Flexibility Skills -->

<h2>Cognitive Flexibility Skills</h2>
<h3>Your Score is: <?php echo $sd11."%"."<br>"; 

if($sd11>60)
{
	echo "You have a High Score in Cognitive Flexibility Skills";
}
if($sd11 >=30 && $sd11<=60)
{
	echo "There is a scope of further enhancement in Cognitive Flexibility Skills";
}
if($sd11<30)
{
	echo "You need to develop Cognitive Flexibility Skills";
}

?>	
</h3>
<p>Cognitive flexibility is the ability to revise your plans in the face of obstacles, setbacks, new information, or mistakes. Essentially, it is your ability to adapt when a situation changes. Having cognitive flexibility allows you to analyze a situation and come up with alternative plans to meet your goals or requirements. It’s important to possess this skill so you don’t end up frozen in a situation where you can’t move forward to your next task. Being cognitively flexible increases your likelihood of success, too. This ability to quickly adapt to new situations increases one’s brain function and resilience to stress. Cognitively flexible people tend to have increased fluency and comprehension while reading and they have an expanded sense of awareness. Being cognitively flexible allows you to see different points of view with empathy and understanding, which is a particularly important skill in today’s diverse society.
</p>
<hr>

<!-- Executive Functioning -->
<h2>Executive Functioning Skills</h2>
<h3>Your Score is: <?php echo $sd12."%"."<br>"; 

if($sd12>60)
{
	echo "You have a High Score in Executive Functioning Skills";
}
if($sd12 >=30 && $sd12<=60)
{
	echo "There is a scope of further enhancement in Executive Functioning Skills";
}
if($sd12<30)
{
	echo "You need to develop Executive Functioning Skills";
}

?>	
</h3>
<p>Executive function skills are the mental processes that enable us to plan, focus attention, remember instructions, and juggle multiple tasks successfully. This is the skill set required to filter distractions, prioritize tasks, set and achieve goals, and control impulses. These skills are crucial for learning and development. They also enable positive behavior and allow us to make healthy choices for ourselves and our families.
</p>
<hr>

<!-- Problem Solving Skills -->
<h2>Problem Solving Skills</h2>
<h3>Your Score is: <?php echo $sd13."%"."<br>"; 

if($sd13>60)
{
	echo "You have a High Score in Problem Solving Skills";
}
if($sd13 >=30 && $sd13<=60)
{
	echo "There is a scope of further enhancement in Problem Solving Skills";
}
if($sd13<30)
{
	echo "You need to develop Problem Solving Skills";
}

?>	
</h3>
<p>Problem solving skills refers to our ability to solve problems in an effective and timely manner without any impediments. Such skills enable an individual to overcome perilous challenges. If you become a regular problem solver at your workplace, you are easily noticed, recognized, and appreciated. Having the ability to solve problems will boost your confidence level.
</p>
<hr>

<!-- Self Regulation Skills -->
<h2>Self Regulation Skills</h2>
<h3>Your Score is: <?php echo $sd14."%"."<br>"; 

if($sd14>60)
{
	echo "You have a High Score in Self Regulation Skills";
}
if($sd14 >=30 && $sd14<=60)
{
	echo "There is a scope of further enhancement in Self Regulation Skills";
}
if($sd14<30)
{
	echo "You need to develop Self Regulation Skills";
}

?>	
</h3>
<p>Self-regulation is the ability to manage your emotions and behavior in accordance with the demands of the situation. It includes being able to resist highly emotional reactions to upsetting stimuli, to calm yourself down when you get upset, to adjust to a change in expectations and to handle frustration without an outburst.
</p>
<hr>

<!-- Negotiation Skills -->
<h2>Negotiation Skills</h2>
<h3>Your Score is: <?php echo $sd15."%"."<br>"; 

if($sd15>60)
{
	echo "You have a High Score in Negotiation Skills";
}
if($sd15 >=30 && $sd15<=60)
{
	echo "There is a scope of further enhancement in Negotiation Skills";
}
if($sd15<30)
{
	echo "You need to develop Negotiation Skills";
}

?>	
</h3>
<p>Strong negotiation skills can be the difference between a beneficial compromise and a loss. There will always be conflicts in life, and the ability to solve them is essential, particularly in the life. Good negotiations contribute significantly to success, as they help you build better relationships, deliver lasting, quality solutions - rather than poor short-term solutions that do not satisfy the needs of either party and help you avoid future problems and conflicts.
</p>
<hr>

<!-- Logical Reasoning Skills -->
<h2>Logical Reasoning Skills</h2>
<h3>Your Score is: <?php echo $sd16."%"."<br>"; 

if($sd16>60)
{
	echo "You have a High Score in Logical Reasoning Skills";
}
if($sd16 >=30 && $sd16<=60)
{
	echo "There is a scope of further enhancement in Logical Reasoning Skills";
}
if($sd16<30)
{
	echo "You need to develop Logical Reasoning Skills";
}

?>	
</h3>
<p>It is the ability to understand what they have read or been shown, and also to build upon that knowledge without incremental guidance. Logical thinkers observe and analyze phenomena, reactions, and feedback and then draw conclusions based on that input. They can justify their strategies, actions, and decisions based on the facts they gather. Logical thinkers can also reason deductively. They can identify an acceptable premise and apply it to situations that they encounter on the job.  Logical thinking helps all people process facts and reason out solutions rather than act on their emotions.
</p>
<hr>

<!-- Attention to Detail Skills -->

<h2>Attention to Detail with Data Checking Skills</h2>
<h3>Your Score is: <?php echo $sd17."%"."<br>"; 

if($sd17>60)
{
	echo "You have a High Score in Attention to Detail with Data Checking Skills";
}
if($sd17 >=30 && $sd17<=60)
{
	echo "There is a scope of further enhancement in Attention to Detail with Data Checking Skills";
}
if($sd17<30)
{
	echo "You need to develop Attention to Detail with Data Checking Skills";
}

?>	
</h3>
<p>Attention to detail is about getting the small things right. Attention to detail is important because it helps prevent mistakes and makes success in the workplace easier. Attention to detail translates into ability to identify and solve problems, particularly small issues that are not immediately obvious.Data checking skills is to test how good you are at noticing errors and discrepancies in the data. This type of test is used to measure how quickly and accurately errors can be detected in data. It is used to select candidates for clerical and data input jobs, particularly where accuracy is important, for example, accounting and banking.
 </p>
<hr>

</div>

</body>
</html>