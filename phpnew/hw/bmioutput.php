<?php
$height=$_GET["height"];
$weight=$_GET["weight"];
$heightInMs=$height/100;
$bmi=$weight/
($heightInMs*$heightInMs);
if($bmi<18.5){
      $message="You are  underweight."; 
}
else if($bmi >=18.5 && $bmi <= 24.9)
{
$message = "Congrats!!! You have
normal weight.";
}
else if($bmi >24.9 && $bmi <=29.9)
{
$message = "Keshav You are overweight.";
}
else
{
$message = "Be careful!!! You are
obese.";
}
echo $message;
echo "<br>BMI:".$bmi;

?>