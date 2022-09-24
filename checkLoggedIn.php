<?php
if(!session_id()) {
session_start();
$loggedIn = false;
}	
	if(isset($_SESSION['email']))
		$loggedIn = true;
		if(isset($_SESSION['countSaltyMaci']))
			$countSaltyMaci = $_SESSION['countSaltyMaci'];
	else
		$loggedIn = false;
?>