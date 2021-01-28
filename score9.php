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
  	
  	for($x=1;$x<=111;$x++)
  	{
  		$row = mysqli_fetch_assoc($result);
  		//echo "score " . $row["score"]. " tScore " . $row["tscore"]. "<br>";
    } 
  
	$var1 = $var2 =$score = $tscore = 0;
  	//Spatial Skills 1: Visual Memory Q112 to Q115
  	for($x=112;$x<=115;$x++)
  	{
  		$row = mysqli_fetch_assoc($result);
  		//echo "score " . $row["score"]. " tScore " . $row["tscore"]. "<br>";
  		$var1 = $row["score"];
  		$score = $score + $var1;
  		$var2 = $row["tscore"];
  		$tscore = $tscore + $var2;
  	} 
  	//sd61 is for Spatial Skills 1: Visual Memory
	$sd61 = ($score/$tscore)*100;
	
	$var1 = $var2 =$score = $tscore = 0;
  	//Spatial Skill 2: Spatial Scanning Q116 to Q119
  	for($x=116;$x<=119;$x++)
  	{
  		$row = mysqli_fetch_assoc($result);
  		//echo "score " . $row["score"]. " tScore " . $row["tscore"]. "<br>";
  		$var1 = $row["score"];
  		$score = $score + $var1;
  		$var2 = $row["tscore"];
  		$tscore = $tscore + $var2;
  	} 
  	//sd62 is for Spatial Skill 2: Spatial Scanning
	$sd62 = ($score/$tscore)*100;
	
	$var1 = $var2 =$score = $tscore = 0;
  	// Spatial Skills 3: Perceptual Speed Q120 to Q124
  	for($x=120;$x<=124;$x++)
  	{
  		$row = mysqli_fetch_assoc($result);
  		//echo "score " . $row["score"]. " tScore " . $row["tscore"]. "<br>";
  		$var1 = $row["score"];
  		$score = $score + $var1;
  		$var2 = $row["tscore"];
  		$tscore = $tscore + $var2;
  	} 
  	//sd63 is for Spatial Skills : Perceptual Speed
	$sd63 = ($score/$tscore)*100;
	
	$var1 = $var2 =$score = $tscore = 0;
  	// Spatial Skills 4: Kinesthetic Q125 to Q127
  	for($x=125;$x<=127;$x++)
  	{
  		$row = mysqli_fetch_assoc($result);
  		//echo "score " . $row["score"]. " tScore " . $row["tscore"]. "<br>";
  		$var1 = $row["score"];
  		$score = $score + $var1;
  		$var2 = $row["tscore"];
  		$tscore = $tscore + $var2;
  	} 
  	//sd64 is for Spatial Skills 4: Kinesthetic
	$sd64 = ($score/$tscore)*100;
	
	$var1 = $var2 =$score = $tscore = 0;
  	//Numerical Skills: Reasoning Q128 to Q130
  	for($x=128;$x<=130;$x++)
  	{
  		$row = mysqli_fetch_assoc($result);
  		//echo "score " . $row["score"]. " tScore " . $row["tscore"]. "<br>";
  		$var1 = $row["score"];
  		$score = $score + $var1;
  		$var2 = $row["tscore"];
  		$tscore = $tscore + $var2;
  	} 
  	//sd65 is for Numerical Skills: Reasoning  
	$sd65 = ($score/$tscore)*100;
	
	$var1 = $var2 =$score = $tscore = 0;
  	// Numerical Skills: Logic Q131 to Q131
  	for($x=131;$x<=131;$x++)
  	{
  		$row = mysqli_fetch_assoc($result);
  		//echo "score " . $row["score"]. " tScore " . $row["tscore"]. "<br>";
  		$var1 = $row["score"];
  		$score = $score + $var1;
  		$var2 = $row["tscore"];
  		$tscore = $tscore + $var2;
  	} 
  	//sd66 is for Numerical Skills: Logic 
	$sd66 = ($score/$tscore)*100;
	
  $var1 = $var2 =$score = $tscore = 0;
    //Numerical Skills: Estimation Q132 to Q134
    for($x=132;$x<=134;$x++)
    {
      $row = mysqli_fetch_assoc($result);
      //echo "score " . $row["score"]. " tScore " . $row["tscore"]. "<br>";
      $var1 = $row["score"];
      $score = $score + $var1;
      $var2 = $row["tscore"];
      $tscore = $tscore + $var2;
    } 
    //sd67 is for Numerical Skills: Estimation 
  $sd67 = ($score/$tscore)*100;

  $var1 = $var2 =$score = $tscore = 0;
    //Numerical Skills: Estimation Q135 to Q138
    for($x=135;$x<=138;$x++)
    {
      $row = mysqli_fetch_assoc($result);
      //echo "score " . $row["score"]. " tScore " . $row["tscore"]. "<br>";
      $var1 = $row["score"];
      $score = $score + $var1;
      $var2 = $row["tscore"];
      $tscore = $tscore + $var2;
    } 
    //sd68 is for Numerical Skills: Estimation 
  $sd68 = ($score/$tscore)*100;

  $var1 = $var2 =$score = $tscore = 0;
    //Mechanical Skills: Mechanical Assembly Aptitude Q139 to Q140
    for($x=139;$x<=140;$x++)
    {
      $row = mysqli_fetch_assoc($result);
      //echo "score " . $row["score"]. " tScore " . $row["tscore"]. "<br>";
      $var1 = $row["score"];
      $score = $score + $var1;
      $var2 = $row["tscore"];
      $tscore = $tscore + $var2;
    } 
    //sd69 is for Mechanical Skills: Mechanical Assembly Aptitude 
  $sd69 = ($score/$tscore)*100;

  $var1 = $var2 =$score = $tscore = 0;
    //Mechanical Skills: Mechanical Identification Q141 to Q141
    for($x=141;$x<=141;$x++)
    {
      $row = mysqli_fetch_assoc($result);
      //echo "score " . $row["score"]. " tScore " . $row["tscore"]. "<br>";
      $var1 = $row["score"];
      $score = $score + $var1;
      $var2 = $row["tscore"];
      $tscore = $tscore + $var2;
    } 
    //sd6A is for Mechanical Skills: Mechanical Identification 
  $sd6A = ($score/$tscore)*100;

   $var1 = $var2 =$score = $tscore = 0;
    //Mechanical Skills: Mechanical Interest Q142 to Q144
    for($x=142;$x<=144;$x++)
    {
      $row = mysqli_fetch_assoc($result);
      //echo "score " . $row["score"]. " tScore " . $row["tscore"]. "<br>";
      $var1 = $row["score"];
      $score = $score + $var1;
      $var2 = $row["tscore"];
      $tscore = $tscore + $var2;
    } 
    //sd6B is for Mechanical Skills: Mechanical Interest 
  $sd6B = ($score/$tscore)*100;

  $var1 = $var2 =$score = $tscore = 0;
    //Spatial Skills Q145 to Q148
    for($x=145;$x<=148;$x++)
    {
      $row = mysqli_fetch_assoc($result);
      //echo "score " . $row["score"]. " tScore " . $row["tscore"]. "<br>";
      $var1 = $row["score"];
      $score = $score + $var1;
      $var2 = $row["tscore"];
      $tscore = $tscore + $var2;
    } 
    //sd6C is for Spatial Skills 
  $sd6C = ($score/$tscore)*100;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="font-family: 'Sans-Serif';">

<h1>Technical Skills</h1>
<!-- Spatial Skills 1: Visual Memory -->

<h2>Spatial Skills 1: Visual Memory</h2>
<h3>Your Score is: <?php echo $sd61."%"."<br>"; 

if($sd61>60)
{
	echo "You have a High Score in Spatial Skills 1: Visual Memory";
}
if($sd61 >=30 && $sd61<=60)
{
	echo "There is a scope of further enhancement in Spatial Skills 1: Visual Memory";
}
if($sd61<30)
{
	echo "You need to develop Spatial Skills 1: Visual Memory";
}

?>	
</h3>
<p>Visual memory is a form of memory which preserves some characteristics of our senses pertaining to visual experience. It is the ability to remember or recall information such as activities, pictures or words that have been viewed in the past. The more carefully you observe, the better you will remember; thus, visual memory is found to play a crucial role in learning and performance.
</p>
<hr>

<!-- Spatial Skills 2: Spatial Scanning -->
<h2>Spatial Skills 2: Spatial Scanning</h2>
<h3>Your Score is: <?php echo $sd62."%"."<br>"; 

if($sd62>60)
{
	echo "You have a High Score in Spatial Skills 2: Spatial Scanning";
}
if($sd62 >=30 && $sd62<=60)
{
	echo "There is a scope of further enhancement in Spatial Skills 2: Spatial Scanning";
}
if($sd62<30)
{
	echo "You need to develop Spatial Skills 2: Spatial Scanning";
}

?>	
</h3>
<p>Spatial scanning is the integration of understanding the environment and the ability to complete the movements required for a task while being acutely aware of the positioning of one’s own limbs.
</p>
<hr>

<!-- Spatial Skills 3: Perceptual Speed -->
<h2>Spatial Skills 3: Perceptual Speed</h2>
<h3>Your Score is: <?php echo $sd63."%"."<br>"; 

if($sd63>60)
{
	echo "You have a High Score in Spatial Skills 3: Perceptual Speed";
}
if($sd63 >=30 && $sd63<=60)
{
	echo "There is a scope of further enhancement in Spatial Skills 3: Perceptual Speed";
}
if($sd63<30)
{
	echo "You need to develop Spatial Skills 3: Perceptual Speed";
}

?>	
</h3>
<p>Perceptual development that is vital for an individual’s cognitive abilities, for the person to be able to socialize, develop a sense of self-awareness, master hand-eye co-ordination and memory skills.
</p>
<hr>

<!-- Spatial Skills 4: Kinesthetic -->
<h2>Spatial Skills 4: Kinesthetic</h2>
<h3>Your Score is: <?php echo $sd64."%"."<br>"; 

if($sd64>60)
{
	echo "You have a High Score in Spatial Skills 4: Kinesthetic";
}
if($sd64 >=30 && $sd64<=60)
{
	echo "There is a scope of further enhancement in Spatial Skills 4: Kinesthetic";
}
if($sd64<30)
{
	echo "You need to develop Spatial Skills 4: Kinesthetic";
}

?>	
</h3>
<p>Individuals who are good kinesthetic learners are more efficient when they participate in physical activities like science experiments, sports or even dancing. As a kinesthetic learner, individuals lean more towards tactile learning than bodily learning. Tactile learners prefer to use touch, rather than by body movement. When kinesthetic learners must learn by listening or reading, they often like to move something with their hands to satisfy their tactile instincts.
</p>
<hr>

<!-- Numerical Skills: Reasoning -->
<h2>Numerical Skills: Reasoning</h2>
<h3>Your Score is: <?php echo $sd65."%"."<br>"; 

if($sd65>60)
{
	echo "You have a High Score in Numerical Skills: Reasoning";
}
if($sd65 >=30 && $sd65<=60)
{
	echo "There is a scope of further enhancement in Numerical Skills: Reasoning";
}
if($sd65<30)
{
	echo "You need to develop Numerical Skills: Reasoning";
}

?>	
</h3>
<p>Numeracy reasoning skills can be thought of as the application of analysis, inference, interpretation, explanation, evaluation, as well as reflection on one’s own reasoning process (metacognition) to numerical and spatial information and relationship. Numerical reasoning is one of the most basic skills needed in today’s data-driven marketplace, and without strong numerical reasoning skills, it would be difficult to succeed in many jobs today. Many fields benefit from this type of testing, including most clerical and administrative jobs, jobs found in the craft and technical field at any level, and even positions in police or fire departments, or in the military field. 
</p>
<hr>

<!-- Numerical Skills: Logic -->
<h2>Numerical Skills: Logic</h2>
<h3>Your Score is: <?php echo $sd66."%"."<br>"; 

if($sd66>60)
{
	echo "You have a High Score in Numerical Skills: Logic";
}
if($sd66 >=30 && $sd66<=60)
{
	echo "There is a scope of further enhancement in Numerical Skills: Logic";
}
if($sd66<30)
{
	echo "You need to develop Numerical Skills: Logic";
}

?>	
</h3>
<p>Numeric logical skills are the application of critical thinking skills like, analysis and interpretation, along with mathematical basics, like algebra, to quantitative information. Numeracy includes understanding how quantitative information is gathered, represented, and correctly interpreted using graphs, charts, tables and diagrams. A person with strong numeracy skills can apply his or her knowledge of numbers, arithmetic, algebraic relationships, geometric relationships, and mathematical techniques to situations that require the interpretation or evaluation of quantitative information. 
</p>
<hr>

<!-- Numerical Skills: Estimation -->

<h2>Numerical Skills: Estimation</h2>
<h3>Your Score is: <?php echo $sd67."%"."<br>"; 

if($sd67>60)
{
	echo "You have a High Score in Numerical Skills: Estimation";
}
if($sd67 >=30 && $sd67<=60)
{
	echo "There is a scope of further enhancement in Numerical Skills: Estimation";
}
if($sd67<30)
{
	echo "You need to develop Numerical Skills: Estimation";
}

?>	
</h3>
<p>The person with strong numerical estimation skills can recognize and use quantitative information, patterns, ratios, percentages, spatial relationships, and statistical information intelligently and correctly when drawing conclusions, making estimates, explaining, or predicting events or behavior. Such skills are essential in our data-driven world, if one hopes to be successful in the workplace, to achieve academically, to be engaged citizens, and to make thoughtful and well supported decisions in any domain of life that admits of the relevance of quantitative information.
</p>
<hr>

<!-- Numerical Skills: Data Interpretation -->

<h2>Numerical Skills: Data Interpretation</h2>
<h3>Your Score is: <?php echo $sd68."%"."<br>"; 

if($sd68>60)
{
  echo "You have a High Score in Numerical Skills: Data Interpretation";
}
if($sd68 >=30 && $sd68<=60)
{
  echo "There is a scope of further enhancement in Numerical Skills: Data Interpretation";
}
if($sd68<30)
{
  echo "You need to develop Numerical Skills: Data Interpretation";
}

?>  
</h3>
<p>Data interpretation refers to the implementation of processes through which data is reviewed for the purpose of arriving at an informed conclusion. The interpretation of data assigns a meaning to the information analyzed and determines its signification and implications. It is the ability to analyze complex data, produce actionable insights and adapt to new market needs, all at lightning speed. 
</p>
<hr>

<!-- Mechanical Skills: Mechanical Assembly Aptitude -->

<h2>Mechanical Skills: Mechanical Assembly Aptitude</h2>
<h3>Your Score is: <?php echo $sd69."%"."<br>"; 

if($sd69>60)
{
  echo "You have a High Score in Mechanical Skills: Mechanical Assembly Aptitude";
}
if($sd69 >=30 && $sd69<=60)
{
  echo "There is a scope of further enhancement in Mechanical Skills:Mechanical Assembly Aptitude";
}
if($sd68<30)
{
  echo "You need to develop Mechanical Skills: Mechanical Assembly Aptitude ";
}

?>  
</h3>
<p>Mechanical aptitude can be thought of as possessing a basic understanding and knowledge of mechanics and mechanical relationships, including the ability to identify basic mechanical tools and devices, and visualize and mentally manipulate objects in space. 
</p>
<hr>

<!-- Mechanical Skills: Mechanical Identification -->

<h2>Mechanical Skills: Mechanical Identification</h2>
<h3>Your Score is: <?php echo $sd6A."%"."<br>"; 

if($sd6A>60)
{
  echo "You have a High Score in Mechanical Skills: Mechanical Identification";
}
if($sd6A >=30 && $sd6A<=60)
{
  echo "There is a scope of further enhancement in Mechanical Skills: Mechanical Identification";
}
if($sd6A<30)
{
  echo "You need to develop Mechanical Skills: Mechanical Identification";
}

?>  
</h3>
<p>Mechanical aptitude tests require a person to recognize which mechanical principle is suggested by a test item. Mechanical aptitude is a complex function and is the sum of several different capacities, one of which is the ability to perceive spatial relations. Such a test helps us know how good the individual is in dealing with a machine.
</p>
<hr>

<!-- Mechanical Skills: Mechanical Interest -->

<h2>Mechanical Skills: Mechanical Interest</h2>
<h3>Your Score is: <?php echo $sd6B."%"."<br>"; 

if($sd6B>60)
{
  echo "You have a High Score in Mechanical Skills: Mechanical Interest";
}
if($sd6B >=30 && $sd6B<=60)
{
  echo "There is a scope of further enhancement in Mechanical Skills: Mechanical Interest";
}
if($sd6B<30)
{
  echo "You need to develop Mechanical Skills: Mechanical Interest";
}

?>  
</h3>
<p>Individuals with mechanical aptitude demonstrate innovation, creativity and a wealth of knowledge, as well as an ability to be critical yet creative; curious yet capable; as well as ready to handle the constantly changing world. By applying the principles of mathematics and science, these people develop solutions to technical issues. 
</p>
<hr>

<!-- Spatial Skills -->

<h2>Spatial Skills</h2>
<h3>Your Score is: <?php echo $sd6C."%"."<br>"; 

if($sd6C>60)
{
  echo "You have a High Score in Spatial Skills";
}
if($sd6C >=30 && $sd6C<=60)
{
  echo "There is a scope of further enhancement in Spatial Skills";
}
if($sd6C<30)
{
  echo "You need to develop Spatial Skills";
}

?>  
</h3>
<p>It is the capacity to understand, reason, and remember the spatial relations among objects or space. Visual-spatial abilities are used for everyday use from navigation, understanding or fixing equipment, understanding or estimating distance and measurement, and performing on a job. Spatial intelligence involves understanding and remembering the relative locations of objects in the mind. Objects can be manipulated through mental movement or transformation. It is the ability to perform visualization and spatial thinking.
</p>
<hr>
</body>
</html>