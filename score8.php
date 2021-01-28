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
  	
  	for($x=1;$x<=87;$x++)
  	{
  		$row = mysqli_fetch_assoc($result);
  		//echo "score " . $row["score"]. " tScore " . $row["tscore"]. "<br>";
    } 
  
	$var1 = $var2 =$score = $tscore = 0;
  	//Office skills Q88 to Q90
  	for($x=88;$x<=90;$x++)
  	{
  		$row = mysqli_fetch_assoc($result);
  		//echo "score " . $row["score"]. " tScore " . $row["tscore"]. "<br>";
  		$var1 = $row["score"];
  		$score = $score + $var1;
  		$var2 = $row["tscore"];
  		$tscore = $tscore + $var2;
  	} 
  	//sd51 is for Office Skills
	$sd51 = ($score/$tscore)*100;
	
	$var1 = $var2 =$score = $tscore = 0;
  	//Time Management skills Q91 to Q92
  	for($x=91;$x<=92;$x++)
  	{
  		$row = mysqli_fetch_assoc($result);
  		//echo "score " . $row["score"]. " tScore " . $row["tscore"]. "<br>";
  		$var1 = $row["score"];
  		$score = $score + $var1;
  		$var2 = $row["tscore"];
  		$tscore = $tscore + $var2;
  	} 
  	//sd52 is for Time Management skills
	$sd52 = ($score/$tscore)*100;
	
	$var1 = $var2 =$score = $tscore = 0;
  	//Resource Management skills Q93 to Q94
  	for($x=93;$x<=94;$x++)
  	{
  		$row = mysqli_fetch_assoc($result);
  		//echo "score " . $row["score"]. " tScore " . $row["tscore"]. "<br>";
  		$var1 = $row["score"];
  		$score = $score + $var1;
  		$var2 = $row["tscore"];
  		$tscore = $tscore + $var2;
  	} 
  	//sd53 is for Resource Management skills
	$sd53 = ($score/$tscore)*100;
	
	$var1 = $var2 =$score = $tscore = 0;
  	//Management SKills: Leadership skills Q95 to Q97
  	for($x=95;$x<=97;$x++)
  	{
  		$row = mysqli_fetch_assoc($result);
  		//echo "score " . $row["score"]. " tScore " . $row["tscore"]. "<br>";
  		$var1 = $row["score"];
  		$score = $score + $var1;
  		$var2 = $row["tscore"];
  		$tscore = $tscore + $var2;
  	} 
  	//sd54 is for Management Skills: Leadership Skills
	$sd54 = ($score/$tscore)*100;
	
	$var1 = $var2 =$score = $tscore = 0;
  	//Management Skills: Conflict Management or Negotiation Q98 to Q100
  	for($x=98;$x<=100;$x++)
  	{
  		$row = mysqli_fetch_assoc($result);
  		//echo "score " . $row["score"]. " tScore " . $row["tscore"]. "<br>";
  		$var1 = $row["score"];
  		$score = $score + $var1;
  		$var2 = $row["tscore"];
  		$tscore = $tscore + $var2;
  	} 
  	//sd55 is for Management Skills: Conflict Management or Negotiation  
	$sd55 = ($score/$tscore)*100;
	
	$var1 = $var2 =$score = $tscore = 0;
  	// Management Skills: Stress Management Q101 to Q103
  	for($x=101;$x<=103;$x++)
  	{
  		$row = mysqli_fetch_assoc($result);
  		//echo "score " . $row["score"]. " tScore " . $row["tscore"]. "<br>";
  		$var1 = $row["score"];
  		$score = $score + $var1;
  		$var2 = $row["tscore"];
  		$tscore = $tscore + $var2;
  	} 
  	//sd56 is for Management Skills: Stress Management 
	$sd56 = ($score/$tscore)*100;
	
  $var1 = $var2 =$score = $tscore = 0;
    //Management Skills: Life Management Q104 to Q105
    for($x=104;$x<=106;$x++)
    {
      $row = mysqli_fetch_assoc($result);
      //echo "score " . $row["score"]. " tScore " . $row["tscore"]. "<br>";
      $var1 = $row["score"];
      $score = $score + $var1;
      $var2 = $row["tscore"];
      $tscore = $tscore + $var2;
    } 
    //sd57 is for Management Skills: Life Management 
  $sd57 = ($score/$tscore)*100;

  $var1 = $var2 =$score = $tscore = 0;
    //Administrative Skills Q106 to Q111
    for($x=106;$x<=111;$x++)
    {
      $row = mysqli_fetch_assoc($result);
      //echo "score " . $row["score"]. " tScore " . $row["tscore"]. "<br>";
      $var1 = $row["score"];
      $score = $score + $var1;
      $var2 = $row["tscore"];
      $tscore = $tscore + $var2;
    } 
    //sd58 is for Administrative Skills 
  $sd58 = ($score/$tscore)*100;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="font-family: 'Sans-Serif';">

<h1>Leadership Skills</h1>
<!-- Office Skills -->

<h2>Office Skills</h2>
<h3>Your Score is: <?php echo $sd51."%"."<br>"; 

if($sd51>60)
{
	echo "You have a High Score in Office Skills";
}
if($sd51 >=30 && $sd51<=60)
{
	echo "There is a scope of further enhancement in Office Skills";
}
if($sd51<30)
{
	echo "You need to develop Office Skills";
}

?>	
</h3>
<p>Office managers oversee everyday operations, which can involve many different staff members. Office managers need to know how to handle several things at once without compromising effectiveness or efficiency. Office managers perform many tasks with responsibilities that range from ordering office supplies to following up on customer complaints. They often act as the glue that holds the other departments together as they shuttle from one part of the office to the other, depositing issues into the proper hands and picking up problems to be solved.
</p>
<hr>

<!-- Management Skills: Time Management -->
<h2>Management Skills: Time Management</h2>
<h3>Your Score is: <?php echo $sd52."%"."<br>"; 

if($sd52>60)
{
	echo "You have a High Score in Time Management Skills";
}
if($sd52 >=30 && $sd52<=60)
{
	echo "There is a scope of further enhancement in Time Management Skills";
}
if($sd52<30)
{
	echo "You need to develop Time Management Skills";
}

?>	
</h3>
<p>Time management means staying on top of your time, life, and activities. Being productive is one of the main goals of time management. When you are aware of what you need to do, you are able to better manage your workload. You will be able to get more (of the right tasks) done in less time. When you know what you need to do, you waste less time in idle activities. Your time management reputation will proceed you. At work and in life you will be known as reliable.
</p>
<hr>

<!-- Management Skills: Resource Management -->
<h2>Management Skills: Resource Management</h2>
<h3>Your Score is: <?php echo $sd53."%"."<br>"; 

if($sd53>60)
{
	echo "You have a High Score in Resource Management Skills";
}
if($sd53 >=30 && $sd53<=60)
{
	echo "There is a scope of further enhancement in Resource Management Skills";
}
if($sd53<30)
{
	echo "You need to develop Resource Management Skills";
}

?>	
</h3>
<p>Resource management is the process of pre-planning, scheduling, and allocating your resources to maximize efficiency. This concept is centered on optimization and efficiency. When one knows what one needs to do to make a project successful, one can effectively plan out the optimal way to use those resources. By understanding your resources upfront and planning how to use them, you can troubleshoot gaps or problems before they happen.
</p>
<hr>

<!-- Management SKills: Leadership skills -->
<h2>Management Skills: Leadership Skills</h2>
<h3>Your Score is: <?php echo $sd54."%"."<br>"; 

if($sd54>60)
{
	echo "You have a High Score in Management SKills: Leadership Skills";
}
if($sd54 >=30 && $sd54<=60)
{
	echo "There is a scope of further enhancement in Management SKills: Leadership Skills";
}
if($sd54<30)
{
	echo "You need to develop Management SKills:Leadership Skills";
}

?>	
</h3>
<p>Leadership is the most influential and critical element of all businesses. Effective leaders have the necessary tools and skills to inspire and impact their teams, thereby allowing firms to run competently and smoothly. Good leaders must influence, motivate, communicate, and energize their followers to bring the best from them for betterment of the business entity. They are the catalyst for the success of the business venture and determine the direction the business will take.
</p>
<hr>

<!-- Management SKills:Conflict Management or Negotiation -->
<h2>Management SKills:Conflict Management or Negotiation</h2>
<h3>Your Score is: <?php echo $sd55."%"."<br>"; 

if($sd55>60)
{
	echo "You have a High Score in Management SKills:Conflict Management or Negotiation Skills";
}
if($sd55 >=30 && $sd55<=60)
{
	echo "There is a scope of further enhancement in Management SKills:Conflict Management or Negotiation Skills";
}
if($sd55<30)
{
	echo "You need to develop Management SKills:Conflict Management or Negotiation Skills";
}

?>	
</h3>
<p>Conflict management is the practice of being able to identify and handle conflicts sensibly, fairly, and efficiently. Good conflict management skills enhance the ability to make better business decisions and ensures that new initiatives are implemented more effectively and with more cohesion. It fosters an environment of creative innovation which helps drive the organization forward and facilitates a better public perception of your organization’s brand and reduces bad word of mouth.
</p>
<hr>

<!-- Management SKills: Stress Management Skills -->
<h2>Management SKills: Stress Management Skills</h2>
<h3>Your Score is: <?php echo $sd56."%"."<br>"; 

if($sd56>60)
{
	echo "You have a High Score in Management SKills: Stress Management Skills";
}
if($sd56 >=30 && $sd56<=60)
{
	echo "There is a scope of further enhancement in Management SKills: Stress Management Skills";
}
if($sd56<30)
{
	echo "You need to develop Management SKills: Stress Management Skills";
}

?>	
</h3>
<p>Effective stress management helps you to reduce stress from your life, so you can be happier, healthier, and more productive. The goal is to have a balanced life, with time for work, relationships, relaxation, and fun, and the resilience to hold up under pressure and meet challenges head on. With good stress management skills, moods become more stable, thoughts become clearer, relationships improve, and the risk of illness diminishes.
</p>
<hr>

<!-- Management Skills: Life Management Skills -->

<h2>Management Skills: Life Management Skills</h2>
<h3>Your Score is: <?php echo $sd57."%"."<br>"; 

if($sd57>60)
{
	echo "You have a High Score in Management Skills: Life Management Skills";
}
if($sd57 >=30 && $sd57<=60)
{
	echo "There is a scope of further enhancement in Management Skills: Life Management Skills";
}
if($sd57<30)
{
	echo "You need to develop Management Skills: Life Management Skills";
}

?>	
</h3>
<p>Life skills are an essential part of being able to meet the challenges of everyday life. To cope with the increasing pace and change of modern life, people need new life skills to effectively mitigate the challenges. Development of life skills helps individuals to recognize the impact of their actions and teaches them to take responsibility for what they do rather than to blame others, to develop new ways of thinking and problem solving, to be agile and adaptable to different roles and be able to function in dynamic, flexible work environments.
</p>
<hr>

<!-- Administrative Skills -->

<h2>Administrative Skills</h2>
<h3>Your Score is: <?php echo $sd58."%"."<br>"; 

if($sd58>60)
{
  echo "You have a High Score in Administrative Skills";
}
if($sd58 >=30 && $sd58<=60)
{
  echo "There is a scope of further enhancement in Administrative Skills";
}
if($sd58<30)
{
  echo "You need to develop Administrative Skills";
}

?>  
</h3>
<p>Administrative skills can help you to be well organized, to be a strong communicator and to enhance your customer service skills. This might involve responsibilities such as filing paperwork, meeting with internal and external stakeholders, presenting important information, developing processes, and answering employee questions. There are many administrative skills that help you perform these responsibilities in an efficient, quality way. Administrative skills are important because they keep business processes running smoothly.
</p>
<hr>
</body>
</html>