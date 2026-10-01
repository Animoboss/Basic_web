<?php                                                                                                                                                 
$A="      My name is harishankar gupta ";
echo "<br> String: ".$A;
echo "<br> String length: ".strlen($A);
echo "<br> String word count :".str_word_count($A);
echo "<br> Reverse a String :".strrev($A);
echo "<br> String position :".strpos($A,"gupta");
echo "<br> String replace :".str_replace("harishankar","Keashav",$A);
echo "<br> Sub String:".substr($A,7);
echo "<br> Lower String: ".strtolower($A);
echo "<br> String count: ".substr_count($A,"a");
echo "<br> upper case String :".ucwords($A);
echo "<br> Trim String:".trim($A);
?>
