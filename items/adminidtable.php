<html>
<head>
</head>
<body>
<?php
$con =  mysql_connect("localhost","gourav","password");
 
if (!$con) {
    die("Connection failed: " . mysql_error());
}  
else
mysql_select_db("stud",$con);

$s = select * 
mysql_query($s,$con);
 
if(mysql_query($s,$con))
	{echo "yeah";}
else
		{echo mysql_error();}
mysql_close($con);
?>
</body>
</html>

