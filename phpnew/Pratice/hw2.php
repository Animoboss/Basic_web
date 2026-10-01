<?php 
function myCount(){
      static $c=0; //static keyword
      echo $c; 
      $c++;
}
echo "Output of myCount() with use of 'static' keyword: <br>";
myCount(); 
echo "<br>";
myCount() ;
echo "<br>";
myCount() ;
echo "<br>";
?>