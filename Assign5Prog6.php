<?php
echo "Style is ".$_GET['s1']."
Color is ".$_GET['c']."
Background color is ".$_GET['b']."
size is ".$_GET['s'];
setcookie("set1",$_GET['s1'],time()+3600);
setcookie("set2",$_GET['c'],time()+3600);
setcookie("set3",$_GET['b'],time()+3600);
setcookie("set4",$_GET['s'],time()+3600);
?><br>
<a href="Assign5Prog6_1.php">Show</a>
