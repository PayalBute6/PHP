<!-- 3. Write PHP script to demonstrate the concept of introspection for examining object.-->

<?php
class cwipedia
{
 //decl
}
if(class_exists('cwipedia'))
{
 $ob=new cwipedia();
 echo "This is cwipedia.in";
}
else
{
 echo "Not exist";
}

?>
