<!DOCTYPE HTML>   
<html> 
	<body>   
		<?php 
			$dbhost = 'remotemysql.com';
			$dbname = 'dCObw8t2lg';
			$dbuser = 'dCObw8t2lg';
			$dbpass = 'ubV1tmbof5';
    
   			$conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
     
		?> 
		
		<form method="post" action=" " onsubmit="myFunction()">    
			<br> 
			<label for="Name">First Name</label> <br>
			<input type="text" name="firstname" id="firstname"><br> <br>  

			<label for="Name">Last Name</label> <br>
			<input type="text" name="lastname" id="lastname"><br> <br>     
			
			<label for="fruit">Favorite fruit:</label>    
				
				<?php     
					$sql="SELECT Name FROM fruits"; 
					echo "<select name='fruit' value='Select Fruit'>Select Fruit</option>"; // list box select command
					foreach ($conn->query($sql) as $row){
					echo "<option value=$row[Name]></option>"; 
					}
					echo "</select>";
				?>   
			
			<br><br>   
			<input type="submit" name="submit" value="Submit">   
		</form> 
		
		<p id="demo"></p>
	
		<script>
		function myFunction() {
			alert("submitted");
		}
</script>

		
	</body>

</html>