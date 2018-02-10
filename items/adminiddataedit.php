</html>
<body>

 
<form action="adminiddataedit.php" method ="post">
username: =<input type="text" name="name"><br />
Post  =<input type="int" name="pos"><br />
password  =<input type="int" name="roll"><br />
<input type="submit" name="submit">
</form>


<?php
if (isset($_POST['submit'])) {
$con =  mysql_connect("localhost","gourav","password");

// Check connection
if (!$con) {
    die("Connection failed: " . mysql_error());
}
 
//mysql_query("CREATE DATABASE stud",$con);
  
mysql_select_db("stud",$con);

$s= "INSERT INTO  admin (username,post,password) VALUES ('$_POST[name]', '$_POST[pos]' ,'$_POST[roll]')";
mysql_query($s,$con);
 
//if(mysql_query($s,$con))
//		{ echo "submitted";}
//else {die("Connection failed: " . mysql_error());}
mysql_close($con); 
}
?> 

</body>
</html>