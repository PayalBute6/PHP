<!-- 1. Write a PHP program to define Interface shape which has two method as area() and
volume (). Define a constant PI. Create a class Cylinder implement this interface and
calculate area and Volume.-->

<?php
$r    =   $_GET['r'];
$h   =   $_GET['h'];
define('PI','3.14');
interface calculate
{
                                function area($r,$h);
                                function vol($r,$h);
}
class cylinder implements calculate
{
                                function area($r,$h)
                                {
                                                $area  =  2*PI*$r*($r+$h);
                                                echo "<h3>The area of cylinder is :$area</h3>";   
                                }
                                function vol($r,$h)
                                {
                                                $vol  =  PI*$r*$r*$h;
                                                echo "<h3>The volume of cylinder is :$vol</h3>"; 
                                }
}
$c   =  new cylinder;
                $c->area($r,$h);
                $c->vol($r,$h);
?>
