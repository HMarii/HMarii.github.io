<?php
	require_once 'checkLoggedIn.php';
?>
<!DOCTYPE html>
<html lang="hu">
<?php
	// Header
	require_once 'header.html';
?>
<body>
	<div id="container" class="container">
		<div id="question-container" class="hide">
			<div id="question">Kérdés</div>
			<div id="answer-buttons" class="btn-grid">
				<button class="btn">Válasz 1</button>
				<button class="btn">Válasz 2</button>
				<button class="btn">Válasz 3</button>
				<button class="btn">Válasz 4</button>
			</div>
			<p>Pontok: <span id="right-answers">0</span></p>
		  </div>
			<div class="controls">
			<?php if($loggedIn)

				if($countSaltyMaci > 0) {
					for($x = 1; $x <= $countSaltyMaci; $x++) {
						echo '<span class="foundSaltyMaci"><img src="img/salt.png"><img src="img/favicon.png"></span>';
					}
				echo '
				<input class="playerName" type="text" name="playerName" id="playerName" placeholder="Név">

				<label id="soundlbl" for="soundchck">Hangok:</label>
				<input id="soundchck" type="checkbox" name="soundchck" checked="true">
				
					<button id="start-btn" class="start-btn4 btn">Mehet</button>';
				} else {
					echo '
					<input class="playerName" type="text" name="playerName" id="playerName" placeholder="Név">
					<label id="soundlbl" for="soundchck">Hangok:</label>
					<input id="soundchck" type="checkbox" name="soundchck" checked="true">

					
						<button id="start-btn" class="start-btn4 btn">Mehet</button>';
						
				}
					else {
						echo'
						<h1 id="header">Find Salty Maci</h1>
						<a href="login.php"><button id="start-btn" class="start-btn btn">Belépés</button></a>
						<a href="registration.php"><button id="start-btn" class="reg-btn btn">Regisztráció</button></a>
						<a href="leaderboard.php"><button id="start-btn" class="start-btn3 btn">Ranglista</button></a>';
				} 
				?>
				<button id="next-btn" class="next-btn btn hide">Következő</button>
		</div>
	</div>
		<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js" integrity="sha512-yFjZbTYRCJodnuyGlsKamNE/LlEaEAxSUDe5+u61mV8zzqJVFOH7TnULE2/PP/l5vKWpUNnF4VGVkXh3MjgLsg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<script type="text/javascript" src="script.js"></script>
</body>
</html>