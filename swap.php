<?php
$num1 = 100;
$num2 = 200;
echo"<br>"."Swap done without using temparory variabl";
echo"<hr>";
echo"<br>"."Before Swap";
echo"<hr>";
echo"<br>"."Value of first number is =".$num1;
echo"<br>"."Value of second number is =".$num2;
echo"<hr>";
$num3 = $num1;
$num1 = $num2;
$num2 = $num3;
echo"<br>"."After Swap";
echo"<hr>";
echo"<br>"."Valu of first number is =".$num1;
echo"<br>"."Value of second number is =".$num2;
?>