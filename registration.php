<?php
session_start();

require_once 'main_paths.php';

?>
<!DOCTYPE html>
<html lang="hu">
<?php

	// Header
	require_once $HEADER_PATH;
?>
<body>
    <?php
        require_once $REGFORM_PATH;
    ?>
		<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
		<script type="text/javascript" src="script.js"></script>
</body>
</html>


