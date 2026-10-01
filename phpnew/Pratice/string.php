<?php
$A="      My name is harishankar gupta ";
echo "<br> String: ".$A."<br>";
echo "<br> String length: ".strlen($A)."<br>";
echo "<br> String word count :".str_word_count($A)."<br>";
echo "<br> Reverse a String :".strrev($A)."<br>";
echo "<br> String position :".strpos($A,"gupta")."<br>";
echo "<br> String replace :".str_replace("harishankar","Keashav",$A)."<br>";
echo "<br> Sub String:".substr($A,7)."<br>";
echo "<br> Lower String: ".strtolower($A)."<br>";
echo "<br> String count: ".substr_count($A,"a")."<br>";
echo "<br> upper case String :".ucwords($A)."<br>";
echo "<br> Trim String:".trim($A)."<br>";
echo "<br> upper case String each letter/word :".strtoupper($A)."<br>";
?>