<?php
	session_start();
	if(!empty($_SESSION['loggedIn'])){
		echo "welcome ".$_SESSION['username'];
	}
	else{
		die("unauthorized access");
	}
	
?>
