<!DOCTYPE html>
<html>
	
	<body>
		
		
		<?php
		require_once('login.php');
			if ($_SESSION['failedAttempts']) {
			echo  '<strong>You have '.$_SESSION['failedAttempts'].' failed Attempts!</strong>';
		}
		?>
		
		
	</body>
	
</html>