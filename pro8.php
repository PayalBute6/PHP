<?php 
if($_POST) { 
	$num = $_POST["number"]; 

	echo nl2br("<p style='text-align: center;'> 
		Multiplication Table of $num: </p> 
	"); 
		
	for ($i = 1; $i <= 10; $i++) { 
		echo ("<p style='text-align: center;'>$num"
			. " X " . "$i" . " = "
			. $num * $i . "</p> 
		"); 
	} 
} 
?>

