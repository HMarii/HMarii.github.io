<?php
// Megerősítés
if(!session_id())
session_start();
 require_once 'main_paths.php';

if(isset($_GET['vkey'])) {
	// Verifikációs kód feldolgozása
	$vkey = $_GET['vkey'];

	require_once $DB_PATH;

	$stmt = "SELECT validated, vkey FROM $table WHERE validated = 0 AND vkey = '$vkey' LIMIT 1";

	$result = mysqli_query($conString, $stmt);

	$num = mysqli_num_rows($result);

	if($num == 1) {
		require_once $EMAIL_VAL_PATH;	
	} 
	
		else {
			echo "Sajnálom, valami hiba történt!";
		}
}

?>