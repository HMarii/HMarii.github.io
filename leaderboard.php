<?php
    require_once 'main_paths.php';
    if(!session_id())
    session_start();


    if(!(isset($_SESSION['email']))) {
        header("URL=$LOGINFORM_PATH");
    }

?>

<!DOCTYPE html>
<html lang="en">
    <?php
        require_once 'header.html';
        require_once 'read.php';
    ?>
<body>
    <div id="container" class="container">
        <a href="index.php"><button id="back-btn" class="back btn"><- Vissza</button></a>
        <h1 id="leaderBoardTitle">Ranglista</h1>
    <?php
    echo "
        <table>
            <th>Rank</th>
            <th>Email</th>
            <th>Salty Macik</th>";
            $j = 1;
    foreach($rows as $row ) {
        
        echo '<tr>
                
                    <td>'.$j.'</td>
                    <td>'.$row['email'].'</td>
                    
                    <td>'; for($i = 1; $i <= $row['foundSaltyMaci']; $i++) {
                        if($row['foundSaltyMaci'] > 0) {
                        echo '<span class="foundSaltyMaci"><img src="img/salt.png"><img src="img/favicon.png"></span>';
                        } else {
                            echo 'Sajnos nem találta még meg Salty Macit';
                        }
                        
                    }$j++;'</td>
                    
              </tr>';
              
            }
            

        echo "</table>";

    ?>
    </div>    
        <style>
                span {
                    padding: 1%;
                }
        </style>
</body>
</html>