<?php
// Megerősítés
if(!session_id())
session_start();
require_once 'main_paths.php';

if(isset($_SESSION['email'])) {
	// Verifikációs kód feldolgozása
	$email = $_SESSION['email'];

	require_once $DB_PATH;

	$stmt = "SELECT email FROM $table WHERE email = '$email' LIMIT 1";

	$result = mysqli_query($conString, $stmt);

	$num = mysqli_num_rows($result);

	if($num == 1) {
		// Email validálása
		$update = "UPDATE $table SET foundSaltyMaci = foundSaltyMaci + 1 WHERE email = '$email' LIMIT 1";
		$exec = mysqli_query($conString,$update);
		if($exec) {
			//echo "Az eredményedet elmentettük az adatbázisba!";
			header("Refresh: 1; URL=$LOGINPATH");
		}
	} 
	
		else {
			echo "Sajnálom, az eredményedet nem sikerült elmenteni!";
            header("Refresh: 3; URL=$LOGINPATH");
		}

	}

?>