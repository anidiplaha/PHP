<html>
<body>
<?php
$arr = array(1,2,3,4,5);
print ("Original array:<br>");
for ($i=0; $i<count($arr); $i++)
{
	print($arr[$i] . " ");
}
print ("<br>");
print ("Array in reverse order:<br>");
for ($i=count($arr)-1; $i>=0; $i--)
{
	print($arr[$i] . " ");
}
?>
</body>
</html>