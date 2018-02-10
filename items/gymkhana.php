<html>

<head>

<!-- CSS goes in the document HEAD or added to your external stylesheet -->





<script type="text/javascript">
// '.tbl-content' consumed little space for vertical scrollbar, scrollbar width depend on browser/os/platfrom. Here calculate the scollbar width .
 $(window).on("load resize ", function() {
  var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width()+ $100 px;
  $('.tbl-header').css({'padding-right':scrollWidth});
}).resize();
</script>


<style type="text/css">


h1{
  font-size: 30px;
  color: #fff;
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  margin-bottom: 15px;
}
table{
  width:100%;
  table-layout: fixed;
  
}
.tbl-header{
  background-color: rgba(255,255,245,0.3);
 }
.tbl-content{
  height:300px;
  overflow-x:auto;
  margin-top: 0px;
  border: 2px solid rgba(255,255,255,0.3);
}
th{
  padding: 20px 15px;
  text-align: left;
  font-weight: 500;
  font-size: 14px;
  color: #fff;
  text-transform: uppercase;
}
td{
  padding: 15px;
  text-align: left;
  vertical-align:left;
  font-weight: 300;
  font-size: 14px;
  color: #fff;
  border-bottom: solid 2px rgba(255,255,255,0.1);
}
tr{
width:35%


}

#navigation {
background-color: rgba(255,255,245,0.3);
width:600px;
font-family: 'Roboto', sans-serif;
padding:12px 0;
margin:35px auto 1px;


letter-spacing:2px;
text-transform:uppercase;
}

#nav li {
list-style:none;
display:inline;
margin-right:0px;
color:white
}

#nav a {
padding:12px;
color:#ACACB0;
text-decoration:none;
margin-right:0px;
color:white
}

#nav a:hover {
background:url(images/nav_link_active.jpg) top repeat-x;
color:#fff;
}

#nav a.active {
background:url(images/nav_link_active.jpg) top repeat-x;
color:#fff;
font-weight:bold;
}


#container ul {
margin:10px 15px;
}


#container ul li {
margin:10px 0;
}


#nav li {
list-style:none;
display:inline;
margin-right:0px;
}
/* demo styles */

@import url(http://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
body{
  background: -webkit-linear-gradient(left, #25c481, #25b7c4);
  background: linear-gradient(to right, #25c481, #25b7c4);
  font-family: 'Roboto', sans-serif;
}
section{
  margin: 50px;
}


/* follow me template */
.made-with-love {
  margin-top: 40px;
  padding: 10px;
  clear: left;
  text-align: center;
  font-size: 10px;
  font-family: arial;
  color: #fff;
}
.made-with-love i {
  font-style: normal;
  color: #F50057;
  font-size: 14px;
  position: relative;
  top: 2px;
}
.made-with-love a {
  color: #fff;
  text-decoration: none;
}
.made-with-love a:hover {
  text-decoration: underline;
}


/* for custom scrollbar for webkit browser*/

::-webkit-scrollbar {
    width: 6px;
} 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
} 
::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
}


</style>
<!-- Table goes in the document BODY -->

</head>


<body>
<br/>
<h1>STUDENTS  DUES   LIST</h1>







  <div class="tbl-header" align=center>
    <table cellpadding="0" cellspacing="0" border="0" width="90%">
      <thead>
        <tr>
             <th>name</th>
             <th>roll number</th>
             <th>clearence from  gymkhana</th>
             <th>new status</th>
             <th>update status </th>
	     <th></th>

        </tr>
      </thead>
    </table>
  </div>








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


	$updatec = "UPDATE chukya SET finance='$_POST[a]'  WHERE  rollno='$b' " ;
	//$updatel="UPDATE lec " . " SET name=$a" . "WHERE name == $b" ;
	mysql_query($updatec,$con);
	 

}
}
$s= "SELECT * FROM chukya";
$mydata=mysql_query($s,$con);


echo	"<table border=1>";

echo "  <div class= 'tbl-header'>";
echo "    <table cellpadding='0' cellspacing='0' border='0'>";
echo "      <thead>";

echo "      </thead>";
echo "    </table>";
echo "  </div>";

echo " <div class=tbl-content>";
echo "    <table cellpadding=0 cellspacing=0 border=0>";
echo "      <tbody>";



echo "<table class=tbl-content align=center height =10% >";

while($rec = mysql_fetch_array($mydata)){

echo "<form action = gymkhana.php  method =POST>";
echo "<tr>";
echo "<td>" . $rec['name'] . " </td>";
echo "<td>" . $rec['rollno'] . " </td>";
echo "<td>" . $rec['finance'] . "</td>";
 
 echo "<td>" . "<input type='radio' name=a value='not paid'/> NOT PAID" . "<br/>" ;
echo  "<input type='radio' name=a value='paid'/> PAID" . "</td>";
echo "<td>" . "<input type=submit name=update value=update" . " </td>";
echo "<td>" . "<input type=hidden name=hidden   value=" . $rec['rollno']. " </td>";
//echo "<td>" . "<input type=submit name=update value=update" . " </td>";

echo "<tr />";
//echo $_POST['a'];
 
//echo $_POST['hidden'];

echo "</form>";

}
	echo "</tbody>";

  echo "</table>";

echo"</div>";

mysql_close($con); 
?>
<div id=navigation align=center >
  <ul id="nav">	
    <a href="login.php?status=loggedout">Log Out</a>
  </ul>
</div><!--end container-->
</body>
</html> 
