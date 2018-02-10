<?php

require_once 'classes/Membership.php';
$membership = New Membership();

$membership->confirm_Member();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="resultantdataclasses/1.css" rel="stylesheet" type="text/css" />

<!--[if lt IE 7]>
<script type="text/javascript" src="js/DD_belatedPNG_0.0.7a-min.js"></script>
<![endif]-->


<title>Untitled Document</title>

  

 
</head>
<body>

<div id="header">
</div>

<div id="container">
  <div id="inner_container">
   
    <div id="content">

<?php

 

$us=$_SESSION['hello'];
 //echo $useris;
?>

<?php
$con =  mysql_connect("localhost","gourav","password");
 
if (!$con) {
    die("Connection failed: " . mysql_error());
}  
 
mysql_select_db("stud",$con);
$s="SELECT * FROM chukya";
$stu = mysql_query($s,$con);
 while($rec=mysql_fetch_array($stu))
 		{ $a=$us;
 		  if ($rec['username'] == $a)
 			{
 	   //   echo $rec['rollno'];
 	      echo "<p class=note>"; 
		echo "<br/>";
 	      echo "NAME :".$rec['name']. "<br />";
 	      echo "ROLL NUMBER :".$rec['rollno']. "<br />";
 	      echo "DEPARTMENT :".$rec['department']. "<br />";
 	      echo "ACCOUNT NUMBER: ".$rec['accountno']. "<br />";
		echo "<br/>";
	      echo "</p>";

	      echo "_______________________________________________________________________________"."<br/>"."<br/>";

 	      echo "1.Due by department library :" . $rec['departlibrary'] . "<br />". "<br />";

 	      echo "2.Due  by hod is :" . $rec['hod'] . "<br />". "<br />";
 	      echo "3.Due  by department office is :" . $rec['depoffice'] . "<br />". "<br />";
 	      echo "4.Due  by supervisor is :" . $rec['super'] . "<br />". "<br />";
 	      echo "5.Due  by library  is :" . $rec['library'] . "<br />". "<br />";
 	      echo "6.Due  by caretaker :" . $rec['caretaker'] . "<br />". "<br />";
 	      echo "7.Due  by warden is :" . $rec['warden'] . "<br />". "<br />";
 	      echo "8.Due  by assistent registrar is :" . $rec['assregistrar'] . "<br />". "<br />";
 	      echo "9.Due  by computer centre is :" . $rec['cc'] . "<br />". "<br />";
 	      echo "10.Due  by mech workshop is :" . $rec['mechwork'] . "<br />". "<br />";
 	      echo "11.Due  by finance department is :" . $rec['finance'] . "<br />". "<br />";
 	      echo "12.Due  by qip cell is :" . $rec['qipcell'] . "<br />". "<br />";
 	       
 	      echo  "<br />";
 	       
         echo "<br />";
         }
 		}
mysql_close($con);
?>

	</div>
     </div>
</div>


<div id="navigation" align="center">
	
    <a href="login.php?status=loggedout">Log Out</a>
</div><!--end container-->
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/><br/><br/><br/><br/><br/><br/>
</body>
</html>
