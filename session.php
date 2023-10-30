<?php
session_start();
?>
<html>
<body>
<?php
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session varibles are set.";
?>
</body>
</html>
