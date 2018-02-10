<?php

require 'Mysql.php';

class Membership {
	
	function validate_user($un, $pwd) {
		$mysql = New Mysql();
		$ensure_credentials = $mysql->verify_Username_and_Pass($un, $pwd);
		
		if($ensure_credentials) {
			$_SESSION['status'] = 'authorized';
            $_SESSION['hell'] = $un;
            
			$con =  mysql_connect("localhost","gourav","password");
 
			if (!$con) {
    		die("Connection failed: " . mysql_error());
			}  
 
			mysql_select_db("stud",$con);
			$s="SELECT * FROM admin";
			$stu = mysql_query($s,$con);
			 
 			while($rec=mysql_fetch_array($stu))
 			 {if($rec['username']==$un)
 						{$c=$rec['post'];}
 			}
 			if($c == 'student')
 				{header("location: realstudentdata.php");}	
 			elseif($c == 'warden')
                {
			     header("location: exam.php");}
			elseif($c == 'library')
				{ header("location: library.php");} 
			elseif($c == 'caretaker')
				{ header("location: caretaker.php");}   
			elseif($c == 'depoffice')
				{ header("location: depoffice.php");}  
			elseif($c == 'assregistrar')
				{ header("location: assregistrar.php");} 
			elseif($c == 'cc')
				{ header("location: cc.php");}
			elseif($c == 'qipcell')
				{ header("location: qip.php");}
			elseif($c == 'mechwork')
				{ header("location: workshop.php");}
			elseif($c == 'hod')
				{ header("location: hod.php");}
			elseif($c == 'finance')
				{ header("location: gymkhana.php");}   
		} else return "Please enter a correct username and password";
		
	} 
	
	function log_User_Out() {
		if(isset($_SESSION['status'])) {
			unset($_SESSION['status']);
			
			if(isset($_COOKIE[session_name()])) 
				setcookie(session_name(), '', time() - 1000);
				session_destroy();
		}
	}
	
	function confirm_Member() {
		session_start();
		$_SESSION['hello'] =  $_SESSION['hell'];
		if($_SESSION['status'] !='authorized') header("location: testlogin.php");
	}
	
}
