<?php
function mergesort(&$Array, $left, $right)
{
	if($left < $right)
	{
		$mid = $left+(int)(($right-$left)/2);
		mergesort($Array, $left, $mid);
		mergesort($Array, $mid+1, $right);
		merge($Array, $left, $mid,$right);
	}
}
function merge(&$Array, $left, $mid, $right)
{
	$n1 = $mid - $left + 1;
	$n2 = $right - $mid;
	$LeftArray = array_fill (0,$n1,0);
	$RightArray = array_fill (0,$n2,0);
	for($i=0; $i<$n1; $i++)
	{
		$LeftArray[$i] = $Array[$left+$i];
	}
	for($i=0; $i<$n2; $i++)
	{
		$RightArray[$i] = $Array[$mid+$i+1];
	}
	$x=0; $y=0; $z=$left;
	while ($x<$n1 && $y<$n2)
	{
		if($LeftArray[$x] < $RightArray[$y])
		{
			$Array[$z] = $LeftArray[$x];
			$x++;
		}
		else
		{
			$Array[$z] = $RightArray[$y];
			$y++;
		}
		$z++;
	}
	while($x < $n1)
	{
		$Array[$z] = $LeftArray[$x];
		$x++;
		$z++;
	}
	while($y < $n2)
	{
		$Array[$z] = $RightArray[$y];
		$y++;
		$z++;
	}
}
function PrintArray ($Array, $n)
{
	for($i=0; $i<$n; $i++)
		echo $Array[$i]. " ";
	echo "\n";
}
$MyArray = array (10,1,23,50,4,9,-4);
$n = sizeof ($MyArray);
echo "Original Array \n";
PrintArray($MyArray, $n);
mergesort ($MyArray, 0, $n-1);
echo "\nSorted Array \n";
PrintArray($MyArray, $n);
?>