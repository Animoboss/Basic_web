<?php 
echo "hii";
$x=10;
$y=70;

function myName(){
      $z=30;
      global $y;

      Echo "print inside the function $x <br>";
      Echo "print inside the function $y <br>";
      Echo "print inside the function $z <br>";
}
myName();
Echo "print outside the function $x <br>";
Echo "print outside the function $z <br>";
Echo "print outside the function $y <br>";
?>