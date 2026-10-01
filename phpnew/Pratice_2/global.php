<?php
$a = 10;
$c = 30;
function myName()
{
      global $a;
      $b = 20;
      global $c;
      echo "$a inside the function <br>";
      echo "$b inside the function <br>";
      echo "$c inside the function <br>";
}
myName();
$a = 10;
$b = 20;
echo "$a outside the function <br>";
echo "$b outside the function <br>";
echo "$c outside the function <br>";
