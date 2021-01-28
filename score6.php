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
  	for($x=1;$x<=59;$x++)
  	{
  		$row = mysqli_fetch_assoc($result);
  		//echo "score " . $row["score"]. " tScore " . $row["tscore"]. "<br>";
    } 
  
	$var1 = $var2 =$score = $tscore = 0;
  	//Verbal Communication Skills Q60 to Q62
  	for($x=60;$x<=62;$x++)
  	{
  		$row = mysqli_fetch_assoc($result);
  		//echo "score " . $row["score"]. " tScore " . $row["tscore"]. "<br>";
  		$var1 = $row["score"];
  		$score = $score + $var1;
  		$var2 = $row["tscore"];
  		$tscore = $tscore + $var2;
  	} 
  	//sd31 is for Verbal Communication Skills
	$sd31 = ($score/$tscore)*100;
	
	$var1 = $var2 =$score = $tscore = 0;
  	//Non Verbal Communication Skills Q63 to Q64
  	for($x=63;$x<=63;$x++)
  	{
  		$row = mysqli_fetch_assoc($result);
  		//echo "score " . $row["score"]. " tScore " . $row["tscore"]. "<br>";
  		$var1 = $row["score"];
  		$score = $score + $var1;
  		$var2 = $row["tscore"];
  		$tscore = $tscore + $var2;
  	} 
  	//sd32 is for Non Verbal Communication Skills
	$sd32 = ($score/$tscore)*100;
	
	$var1 = $var2 =$score = $tscore = 0;
  	//Listening skills Q65 to Q67
  	for($x=65;$x<=67;$x++)
  	{
  		$row = mysqli_fetch_assoc($result);
  		//echo "score " . $row["score"]. " tScore " . $row["tscore"]. "<br>";
  		$var1 = $row["score"];
  		$score = $score + $var1;
  		$var2 = $row["tscore"];
  		$tscore = $tscore + $var2;
  	} 
  	//sd33 is for Listening Skills
	$sd33 = ($score/$tscore)*100;
	
	$var1 = $var2 =$score = $tscore = 0;
  	//Social Emotional skills Q68 to Q70
  	for($x=68;$x<=70;$x++)
  	{
  		$row = mysqli_fetch_assoc($result);
  		//echo "score " . $row["score"]. " tScore " . $row["tscore"]. "<br>";
  		$var1 = $row["score"];
  		$score = $score + $var1;
  		$var2 = $row["tscore"];
  		$tscore = $tscore + $var2;
  	} 
  	//sd34 is for Social Emotional Skills
	$sd34 = ($score/$tscore)*100;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="font-family: 'Sans-Serif';">
<div class="cs">
<h1>Communication Skills</h1>
<!-- Verbal Communication Skills -->

<h2>Verbal Communication Skills</h2>
<h3>Your Score is: <?php echo $sd31."%"."<br>"; 

if($sd31>60)
{
	echo "You have a High Score in Verbal Communication Skills";
}
if($sd31 >=30 && $sd31<=60)
{
	echo "There is a scope of further enhancement in Verbal Communication Skills";
}
if($sd31<30)
{
	echo "You need to develop Verbal Communication Skills";
}

?>	
</h3>
<p>People with good skills in this domain tend to use the spoken word to acknowledge, amplify, confirm, contrast, or contradict other verbal and nonverbal messages. It includes adaptability - adapting your communication styles to support the situation, clarity, confidence, assertiveness and storytelling. 
</p>
<hr>

<!-- Non-Verbal Communication Skills  -->
<h2>Non-Verbal Communication Skills</h2>
<h3>Your Score is: <?php echo $sd32."%"."<br>"; 

if($sd32>60)
{
	echo "You have a High Score in Non-Verbal Communication Skills";
}
if($sd32 >=30 && $sd32<=60)
{
	echo "There is a scope of further enhancement in Non-Verbal Communication Skills";
}
if($sd32<30)
{
	echo "You need to develop Non-Verbal Communication Skills";
}

?>	
</h3>
<p>People with good skills in this domain tend to communicate through gestures, body language or posture, facial expressions, and eye contact. Speech may also contain non-verbal elements including voice quality, emotion, and speaking style, as well as rhythm and intonation.  
</p>
<hr>

<!-- Listening Skills -->
<h2>Listening Skills</h2>
<h3>Your Score is: <?php echo $sd33."%"."<br>"; 

if($sd33>60)
{
	echo "You have a High Score in Listening Skills";
}
if($sd33 >=30 && $sd33<=60)
{
	echo "There is a scope of further enhancement in Listening Skills";
}
if($sd33<30)
{
	echo "You need to develop Listening Skills";
}

?>	
</h3>
<p>People with good skills in this domain tend to not only hear what is being said, but also attempt to understand what lies behind the spoken words. Good listeners always strive to fully understand what others want to communicate, particularly when the statements lacks clarity. Listening demands the attempt to decode and interpret both verbal messages and nonverbal cues (e.g., the tone of voice, facial expressions, physical posture). 
</p>
<hr>

<!-- Social Emotional Skills -->
<h2>Social Emotional Skills</h2>
<h3>Your Score is: <?php echo $sd34."%"."<br>"; 

if($sd34>60)
{
	echo "You have a High Score in Social Emotional Skills";
}
if($sd34 >=30 && $sd34<=60)
{
	echo "There is a scope of further enhancement in Social Emotional Skills";
}
if($sd34<30)
{
	echo "You need to develop Social Emotional Skills";
}

?>	
</h3>
<p>People with good skills in this domain tend to impart or interchange thoughts, opinions, or information by speech, writing or signs. It includes conversation, interchange, talk, information transmittal, nonverbal communication, basic pragmatics. As your career progresses, the importance of communication skills increases; the ability to speak, listen, question and write with clarity and conciseness are essential for most managers and leaders. In your personal life, good communication skills can improve your personal relationships by helping you to understand others, and to be understood.
</p>
<hr>
</div>
</body>
</html>