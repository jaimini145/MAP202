<?php require_once 'app/views/templates/headerPublic.php' ?>
<html>
	
	<body>
		 <h1>Enter the details to sign up</h1>
			<form method="post" action="Register/signup">
					<b style="color:blue">Create your new account</b>	<br>
					<br>
				<b>User name:</b><br>
				<input type="text" name="user_name" >
				<br><br>
				<b>Password:</b><br>
				<input type="password" name="password">
				<br><br>
				<input type="submit" value="Submit">
				
				<p>
				<a href = "/login">Click here to login</a> 
			</p>
			</form> 
	</body>
	
</html> 

<?php require_once 'app/views/templates/footer.php' ?>
