<?php
// Create three variable xy andz where z is a global varible.print x y z inside and outside the function
// create a static varible it's vaule is 10 print decresing order.
//  write program for 4 opration sum,mul,sub ,div

$z = 10;
function myName()
{
      $x = 20;
      $y = 40;
      global $z;
      echo "$x Variable inside the function <br>";
      echo "$y Variable inside the fnction <br>";
      echo "$z Variable inside the fnction <br>";
}
myName();
echo "$x Variable outside the fnction <br>";
echo "$y Variable outside the fnction <br> ";
echo "$z Variable outside the fnction <br>";
?>                                                                