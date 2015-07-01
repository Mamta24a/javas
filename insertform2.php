<!DOCTYPE html>
<html>
<head></head>
<body>

<form action="insertform2.php" method="post">
username:<input type="text" name="username"/>
<p></p>
password :<input type="password" name="password"/>
<p></p>
<input type="submit" name="submit" value="login"/>
</form>

<?php

if(isset($_POST['submit']))

{

$con = mysql_connect("localhost","cumbre2","123");
if( !$con)
{
die("can not connect:".mysql_error());
}

mysql_select_db("logtable2",$con);

$sql = "INSERT INTO logtable2(username,password)
                          VALUES ('$_POST[username]','$_POST[password]')";

if(mysql_query($sql,$con))
{echo "done";}
else 
echo "not done:".mysql_error();

mysql_close($con);

} 

?>

</body>
</html>