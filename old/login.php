<?php
		session_start();
		
    	include ('database.php');
	
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			
		$password = $_REQUEST['psw'];
		$username = $_REQUEST['uname'];
        $db = new DB();
        
        $conn = $db->db_connect();
        
        $query = "SELECT * FROM users where username = :username";
        $stmt = $conn->prepare($query);
		$stmt->bindParam(':username',$username);
        $stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		
		if (password_verify($password, $result[0]['password'])) {
		
		$_SESSION['isAuthenticated'] =1;
		unset($_SESSION['failedAttempts']);
		header("Location: secret.php");
		
		} else {
		if ($_SESSION['failedAttempts']) {
			$_SESSION['failedAttempts']++;
		} else 
			$_SESSION['failedAttempts'] = 1;
		}
		}
	?>
<html> 	
	<head>
		<h1>
			Login Form
		</h1>
	</head> 
<body> 
		<form action=login.php method="post"> 
			<label for="uname"><b>Username</b></label>
			<input type="text" placeholder="Enter Username" name="uname" required>

			<label for="psw"><b>Password</b></label>
			<input type="text" placeholder="Enter Password" name="psw" required>

			<button type="submit">LogIn</button>
		
		</form>
</body>
</html>

<?php
	require_once('footer.php');
?>