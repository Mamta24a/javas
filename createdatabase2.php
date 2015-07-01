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

if(mysql_query("CREATE DATABASE logtable2",$con))
{
echo "your database is created";
}
else
echo "error:".mysql_error();


mysql_close($con);


?>

</body>
</html>