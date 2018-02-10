<?php

session_start();
require_once 'member.php';
$membership=new Membership();


if($_POST && !empty ($_post['username']) &&!empty($_POST['pwd'])  ){
	
	$response=$membership->validate_user($_POST['username'],$_post['pwd']);

}


?>





<html>

<title>login page</title>

<link rel="stylesheet" type="text/css" href="css/default.css">

<body>

<style type="text/css">

	h2{
		 color:#1e1520;
		 

	}

</style>


<div id="login">
	
		<form method="post" action="">
			
		<h2>  </h2>
		<p>
			<label for="name">Username:</label>
			<input type="text" name="username" value="name@iitg.ernet.in"/>
		</p>
	
		<p>
			<label for="pwd">Password:</label>
			<input type="password" name="pwd" value="password"/>
		</p>
		
		<p>
			<input type="submit" id="submit" value="Login" name="submit"/>
		</p>

	</form>

<?php if(isset($response))echo "<h4 class='alert'>".$response."</h4>"; ?>
	
</body>
</html>
