<?php
function factorial ($n)
{
$fact=1;
while ($n !=0)
{
$fact=$fact*$n;
$n--;
}
return $fact;
}
function isKrishnamurthyNumber($n)
{
	$sum=0;
	$temp=$n;
	while($temp != 0)
	{
		$sum=$sum + factorial($temp % 10);
		$temp= intdiv ($temp ,  10);
	}
	return $sum==$n;
}
$n = 145;
if(isKrishnamurthyNumber($n))
	 echo"YES";
 else
	 echo"NO";
 ?>