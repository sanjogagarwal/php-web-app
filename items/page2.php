<?php

$DB_SERVER='localhost';
$DB_USER='root';
$DB_PASSWORD='';
$DB_NAME='membership';



?>
<html>
<title>administrative update</title>




<body>
<?php

		$mysqli = new mysqli	($DB_SERVER,$DB_USER,$DB_PASSWORD,$DB_NAME)or 
		die('there is a problem connecting the database');


$query=mysql_query("SELECT username FROM users");
$rowtwo=mysql_fetch_array($query)or die();


echo '<table>';

while($rowtwo = mysql_fetch_array($query)){
  echo '<tr>
        <td><font size="2" face="Lucida Sans Unicode" color=#EBEBEB>' .$rowtwo['username'].'</td>
        </tr>';
}




?>
</body>


</html>


