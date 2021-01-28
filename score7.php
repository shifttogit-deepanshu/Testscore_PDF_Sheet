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
  	
  	for($x=1;$x<=70;$x++)
  	{
  		$row = mysqli_fetch_assoc($result);
  		//echo "score " . $row["score"]. " tScore " . $row["tscore"]. "<br>";
    } 
  
	$var1 = $var2 =$score = $tscore = 0;
  	//Cooperation skills Q71 to Q72
  	for($x=71;$x<=72;$x++)
  	{
  		$row = mysqli_fetch_assoc($result);
  		//echo "score " . $row["score"]. " tScore " . $row["tscore"]. "<br>";
  		$var1 = $row["score"];
  		$score = $score + $var1;
  		$var2 = $row["tscore"];
  		$tscore = $tscore + $var2;
  	} 
  	//sd41 is for Cooperation Skills
	$sd41 = ($score/$tscore)*100;
	
	$var1 = $var2 =$score = $tscore = 0;
  	//Assertion skills Q73 to Q74
  	for($x=73;$x<=74;$x++)
  	{
  		$row = mysqli_fetch_assoc($result);
  		//echo "score " . $row["score"]. " tScore " . $row["tscore"]. "<br>";
  		$var1 = $row["score"];
  		$score = $score + $var1;
  		$var2 = $row["tscore"];
  		$tscore = $tscore + $var2;
  	} 
  	//sd42 is for Assertion skills
	$sd42 = ($score/$tscore)*100;
	
	$var1 = $var2 =$score = $tscore = 0;
  	//Responsibility skills Q75 to Q77
  	for($x=75;$x<=77;$x++)
  	{
  		$row = mysqli_fetch_assoc($result);
  		//echo "score " . $row["score"]. " tScore " . $row["tscore"]. "<br>";
  		$var1 = $row["score"];
  		$score = $score + $var1;
  		$var2 = $row["tscore"];
  		$tscore = $tscore + $var2;
  	} 
  	//sd43 is for Responsibilty skills
	$sd43 = ($score/$tscore)*100;
	
	$var1 = $var2 =$score = $tscore = 0;
  	//Engagement skills Q78 to Q79
  	for($x=78;$x<=79;$x++)
  	{
  		$row = mysqli_fetch_assoc($result);
  		//echo "score " . $row["score"]. " tScore " . $row["tscore"]. "<br>";
  		$var1 = $row["score"];
  		$score = $score + $var1;
  		$var2 = $row["tscore"];
  		$tscore = $tscore + $var2;
  	} 
  	//sd44 is for Engagement Skills
	$sd44 = ($score/$tscore)*100;
	
	$var1 = $var2 =$score = $tscore = 0;
  	//Self Control skills Q80 to Q82
  	for($x=80;$x<=82;$x++)
  	{
  		$row = mysqli_fetch_assoc($result);
  		//echo "score " . $row["score"]. " tScore " . $row["tscore"]. "<br>";
  		$var1 = $row["score"];
  		$score = $score + $var1;
  		$var2 = $row["tscore"];
  		$tscore = $tscore + $var2;
  	} 
  	//sd45 is for Self Control skills 
	$sd45 = ($score/$tscore)*100;
	
	$var1 = $var2 =$score = $tscore = 0;
  	// Self Reflection skills Q83 to Q85
  	for($x=83;$x<=85;$x++)
  	{
  		$row = mysqli_fetch_assoc($result);
  		//echo "score " . $row["score"]. " tScore " . $row["tscore"]. "<br>";
  		$var1 = $row["score"];
  		$score = $score + $var1;
  		$var2 = $row["tscore"];
  		$tscore = $tscore + $var2;
  	} 
  	//sd46 is for Self Reflection skills 
	$sd46 = ($score/$tscore)*100;
	
  $var1 = $var2 =$score = $tscore = 0;
    //Optimism skills Q86 to Q87
    for($x=86;$x<=87;$x++)
    {
      $row = mysqli_fetch_assoc($result);
      //echo "score " . $row["score"]. " tScore " . $row["tscore"]. "<br>";
      $var1 = $row["score"];
      $score = $score + $var1;
      $var2 = $row["tscore"];
      $tscore = $tscore + $var2;
    } 
    //sd47 is for Optimism skills 
  $sd47 = ($score/$tscore)*100;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="font-family: 'Sans-Serif';">

<h1>Social Skills</h1>
<!-- Cooperation Skills -->

<h2>Cooperation Skills</h2>
<h3>Your Score is: <?php echo $sd41."%"."<br>"; 

if($sd41>60)
{
	echo "You have a High Score in Cooperation Skills";
}
if($sd41 >=30 && $sd41<=60)
{
	echo "There is a scope of further enhancement in Cooperation Skills";
}
if($sd41<30)
{
	echo "You need to develop Cooperation Skills";
}

?>	
</h3>
<p>People with good skills in this domain tend to work or act together to achieve a common or mutual purpose, or some underlying benefit. It includes joint action, collaboration, synergy, partnership, teamwork, coalition, participation and mutual assistance.
</p>
<hr>

<!-- Assertion skills -->
<h2>Assertion Skills</h2>
<h3>Your Score is: <?php echo $sd42."%"."<br>"; 

if($sd42>60)
{
	echo "You have a High Score in Assertion Skills";
}
if($sd42 >=30 && $sd42<=60)
{
	echo "There is a scope of further enhancement in Assertion Skills";
}
if($sd42<30)
{
	echo "You need to develop Assertion Skills";
}

?>	
</h3>
<p>Assertiveness concerns being able to express feelings, wishes, wants and desires appropriately and is an important personal and interpersonal skill. People with good skills in this domain tend to confidently voice opinions, needs, and feelings, and exert social influence. It is also an act of standing up for oneself or for what is right. It includes claims, bold declaration, affirmation and clear & firm statements. Assertiveness enables individuals to act in their own best interests, to stand up for themselves without undue anxiety, to express honest feelings comfortably and to express personal rights without denying the rights of others.
</p>
<hr>

<!-- Responsibility skills -->
<h2>Responsibility Skills</h2>
<h3>Your Score is: <?php echo $sd43."%"."<br>"; 

if($sd43>60)
{
	echo "You have a High Score in Responsibility Skills";
}
if($sd43 >=30 && $sd43<=60)
{
	echo "There is a scope of further enhancement in Responsibility Skills";
}
if($sd43<30)
{
	echo "You need to develop Responsibility Skills";
}

?>	
</h3>
<p>People scoring high in this domain tend to make moral or rational decisions on one’s own, and to be answerable for one’s behavior. It includes trustworthiness, reliability, doing one’s duty, dependability and accountability.
</p>
<hr>

<!-- Engagement skills -->
<h2>Engagement Skills</h2>
<h3>Your Score is: <?php echo $sd44."%"."<br>"; 

if($sd44>60)
{
	echo "You have a High Score in Engagement Skills";
}
if($sd44 >=30 && $sd44<=60)
{
	echo "There is a scope of further enhancement in Engagement Skills";
}
if($sd44<30)
{
	echo "You need to develop Engagement Skills";
}

?>	
</h3>
<p>People with high scores in this domain tend to involve someone in an activity; involve oneself or becoming occupied; the act of sharing in the activities of a group. It includes participation, involvement, connecting, and interest.
</p>
<hr>

<!-- Self Control Skills -->
<h2>Self Control Skills</h2>
<h3>Your Score is: <?php echo $sd45."%"."<br>"; 

if($sd45>60)
{
	echo "You have a High Score in Self Control Skills";
}
if($sd45 >=30 && $sd45<=60)
{
	echo "There is a scope of further enhancement in Self Control Skills";
}
if($sd45<30)
{
	echo "You need to develop Self Control Skills";
}

?>	
</h3>
<p>People with high scores in this domain tend to control one’s emotions and remain calm even when feeling angry, afraid, excited or upset. The skill to forgo short-term temptations, appetites, and impulses, in order to prioritize a higher pursuit. It includes poise, self-restraint, reserve, self-regulation and level-headedness.
</p>
<hr>

<!-- Self Reflection Skills -->
<h2>Self Reflection Skills</h2>
<h3>Your Score is: <?php echo $sd46."%"."<br>"; 

if($sd46>60)
{
	echo "You have a High Score in Self Reflection Skills";
}
if($sd46 >=30 && $sd46<=60)
{
	echo "There is a scope of further enhancement in Self Reflection Skills";
}
if($sd46<30)
{
	echo "You need to develop Self Reflection Skills";
}

?>	
</h3>
<p>People with high scores in this domain have an awareness of their own inner processes and subjective experiences, such as thoughts and feelings, and the ability to reflect on and articulate such experiences. It includes self-examination, contemplation, retrospect, reflection and introspection.
</p>
<hr>

<!-- Optimism Skills -->

<h2>Optimism Skills</h2>
<h3>Your Score is: <?php echo $sd47."%"."<br>"; 

if($sd47>60)
{
	echo "You have a High Score in Optimism Skills";
}
if($sd47 >=30 && $sd47<=60)
{
	echo "There is a scope of further enhancement in Optimism Skills";
}
if($sd47<30)
{
	echo "You need to develop Optimism Skills";
}

?>	
</h3>
<p>People with high scores in this domain tend to maintain a positive and hopeful attitude towards life, even in the face of adversity. It represents a positive approach to daily living and an important motivating factor in whatever we do.  It is a mental attitude reflecting a belief or hope that the outcome of some specific endeavor, or outcomes in general, will be positive, favorable, and desirable. It includes hopefulness, positivity and a positive attitude.
</p>
<hr>

</body>
</html>