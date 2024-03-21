<?php
function NoOfVowels()
{
$str=$_POST['str'];
$vow=0;
for($i=0;$i<strlen($str);$i++)
{
switch($str[$i])
{
case 'a': 
case 'e': 
case 'i': 
case 'o': 
case 'u': 
$vow++; 
} 
} 
echo"The number of vowels is" .$vow; 
} 
NoOfVowels(); 
?>
