<?php
    require_once 'main_paths.php';

    require_once $DB_PATH;

    $s = "SELECT id,email, foundSaltyMaci FROM $table WHERE validated = 1 ORDER BY foundSaltyMaci DESC";

    $result = mysqli_query($conString, $s);

    $num = mysqli_num_rows($result);

    if($num > 0) {
        $rows = array();

        while($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
    }


?>