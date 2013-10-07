<html>
<head>
<link rel="stylesheet" style="text/css" href="MainFrame.css">
</head>
<body>

<div id="header" style="background-color:#990099;">
<h1 style="margin-bottom:0;text-align:center;">Nu Network</h1></div>

<div class='container'>
	<div class='right'>
		
	</div>
	<div class='left'>
		
	</div>
	<div class='middle'>
	<a href="create_event.html">ADD YOUR EVENT</a>	

		<?php 
$file = fopen("welcome.txt","r") or exit("Unable to open file!");


	$lines = file("welcome.txt", FILE_IGNORE_NEW_LINES);
	$size = sizeof($lines);	
	
	$x =0;
	while ($size > $x)
{
	
	echo "<div class='box'>";
	//echo "HELLO";
	echo "<b>Activity:</b> " . $lines[$x] . "<br><br><b>When:</b> " . $lines[($x+1)] . "<br><br><b>Contact Number:</b> " . $lines[($x+2)]; 
	echo "</div>";
	$x+=3;
}

	?>	
		</div>



</div>

</body>
</html>
