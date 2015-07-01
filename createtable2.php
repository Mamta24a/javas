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

mysql_select_db("logtable2",$con);

$sql = "CREATE TABLE logtable2(username varchar(20),
                              password varchar(20))";

if(mysql_query($sql,$con))
{echo "done";}
else 
echo "not done:".mysql_error();

mysql_close($con);


?>

</body>
</html>