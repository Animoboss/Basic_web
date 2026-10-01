<?php
$a=20;
$c=10;
function myFunction()
{
      $b=10;
      global $c;
      
      echo "<p> value of 'a' inside funtion is: $a </p> <br><br>";
      echo "<p> value of 'a' inside funtion is: $b </p> <br><br>";
      echo "<p> value of 'a' inside funtion is: $c </p> <br><br>";
}
myFunction();
echo "<p> value of 'a' outside function is : $a </p> <br>";
echo "<p> value of 'a' outside function is : $b </p> <br>";
echo "<p> value of 'a' outside function is : $c </p> <br>";
?>
