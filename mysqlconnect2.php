<!DOCTYPE html>
<html>
<head></head>
<body>

<?php
$con = mysql_connect("localhost","cumbre2","123");
if( !$con)
{
die("can not connect:".mysql_error());
}



mysql_close($con);


?>

</body>
</html>