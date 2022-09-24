<?php
if(!session_id())
session_start();
if(isset($_SESSION['email'])) {
	session_destroy();
	header('Refresh: 1; URL=index.php');
}

?>