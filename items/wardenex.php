<?php

require_once 'classes/Membership.php';
$membership = New Membership();

$membership->confirm_Member();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/default.css" />

<!--[if lt IE 7]>
<script type="text/javascript" src="js/DD_belatedPNG_0.0.7a-min.js"></script>
<![endif]-->


<title>Untitled Document</title> 
</head>

<body>
<?php
$us=$_SESSION['hello'];
  
?>



<?php
 
$con =  mysql_connect("localhost","gourav","password");

// Check connection
if (!$con) {
    die("Connection failed: " . mysql_error());
}  
mysql_select_db("stud",$con);

 if(isset($_POST['update'])){
 
 if(isset($_POST['a'])){
	//$val1 = $_POST['a'];

	
	if(isset($_POST['hidden'])) {
		$b = $_POST['hidden'];
		}

      if($us=='ravi.cse')
	                {$updatec = "UPDATE chukya SET warden='$_POST[a]'  WHERE  rollno='$b' " ;}
	  if($us=='hod')
	         		{$updatec = "UPDATE chukya SET hod='$_POST[a]'  WHERE  rollno='$b' " ;}
	//$updatel="UPDATE lec " . " SET name=$a" . "WHERE name == $b" ;
	mysql_query($updatec,$con);
	 

}
}
$s= "SELECT * FROM chukya";
$mydata=mysql_query($s,$con);
echo	"<table border=1>
<tr>
<th>Name</th>
<th>rollno</th>
<th>Due from caretaker</th>
</tr>";

while($rec = mysql_fetch_array($mydata)){

echo "<form action = wardenex.php  method =POST>";
echo "<tr>";
echo "<td>" . $rec['name'] . " </td>";
echo "<td>" . $rec['rollno'] . " </td>";
echo "<td>" . $rec['warden'] . "</td>";
 
 echo "<td>" . "<input type='radio' name=a value='not paid'/>not_paid" . "</td>";
echo "<td>" . "<input type='radio' name=a value='paid'/> paid" . "</td>";
echo "<tr />";
echo "<td>" . "<input type=hidden name=hidden   value=" . $rec['rollno']. " </td>";
echo "<td>" . "<input type=submit name=update value=update" . " </td>";
//echo $_POST['a'];
 
//echo $_POST['hidden'];

echo "</form>";
}


mysql_close($con); 
?>

<div id="container">
	<p>
    	You've reached the page that stores all of the secret 	launch codes!
    </p>
    <a href="testlogin.php?status=loggedout">Log Out</a>
</div> 
</body>
</html>