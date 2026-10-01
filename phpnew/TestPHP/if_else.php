<?php
// Write a code to print that you got less 60% using if elese;
// use loop structure to print number backword(10);
// write a code for string position,str_replace ,str_word_count;
// write code to print key and value pairs using foreach loop; 
$marks ="60%";
if($marks<="60%"){
      echo "i fail in exam <br>";
}
else{
      echo "i pass the exam <br>";
}
"<br>";
for($i=10;$i>=0;$i--)
{
      echo   "$i My name is keshav <br>";
}
$r ="My  bhh n  j j  j j j j j j j j  j ";

 echo "count".str_word_count($r)."<br>";
$sub =array("English"=>"99","Maths"=>"100");
foreach($sub as $x=>$y){
      echo "$x=>$y <br>";
}
?>