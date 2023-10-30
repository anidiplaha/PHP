<html>
<body>
<form method="post">
Enter the Year:
<input type="number" name="number">
<input type="submit" name="Submit">
</form>
</body>
</html>
<?php
  if($_POST)
  {
  $number=$_POST['number'];
  if (($number % 4)==0)
  {
  echo"$number is Leap Year";
  }
  else
  {
  echo"$number is Not Leap Year";
  }
  }
  ?>