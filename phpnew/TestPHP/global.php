<?php
$a=10;
static $s;
function myName(){
      global $a;
      $s=30;
      echo "$a inside the functio <br>";
      echo "$s inside the functio <br>";
}
myName();
echo "$a outside the functio <br>";
      echo "$s outside the functio <br>";
?>