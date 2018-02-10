<?php

require_once 'includes/constants.php';

class mysql{


	function verify_Username_and_Pass($un,$pw){
		$conn = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_NAME)or 
		die('there is a problem connecting the database');

		$query = "SELECT * 
			FROM admin
			WHERE username='".$un."' AND password='".$pw."' ";
			
		if($stmt=$conn->prepare($query)){
			$stmt->bind_param('ss',$un,$pw);
			$stmt->execute();

			if($stmt->fetch() ){
				
				$stmt->close();
				return true;
			}

		}
			

	}




}
