<!DOCTYPE html>
<html>
<head>
    <title>PHP Test</title>
</head>
<body>
	<?php
$films = array(
"comedy" => array (
0 => "Pink Panther",
1 => "johnny English",
2 => "Tommy Boy"),
"action" => array (
0 => "Die Hard",
1 => "Expendables"),
"epic" => array (
0 => "The Lord of the Rings"),
"Romance" => array (
0 => "Romeo and Juliet")
);
	?>


		
	<table>
		<tr>
		<th>Film_Name</th>
		<th>film_genre</th>
		</tr>
		<?php

		foreach ($films as $film => $movies) {
			
			foreach($movies as $movie) {
			
			
				
				echo '<tr><td>' .$movie.'<td>';
				echo '<td>' .$film.'<tr><td>';

			}
			
		}
		?>
	</table>		
	
	<br>
	<br>
	<br>
	
<?php
	
	$favorites = array(
	array (
		"Name" => "Dave Punk",
		"Phone" => "5689741523",
		"Email" => "davepunk@gmail.com"),
	array (
		"Name" => "Monty Smith",
		"Phone" => "2584369721",
		"Email" => "montysmith@gmail.com"),
	array (
		"Name" => "John Flinch",
		"Phone" => "9875147536",
		"Email" => "johnflinch@gmail.com")
	);
	
	?>
	
	<table>
		
		<tr>
		<th>Name</th>
		<th>Phone_Number</th>
		<th>Email_id</th>
		</tr>
		<?php

		foreach ($favorites as $ContactDetails){
			
			
				echo '<tr>
				<td>' .$ContactDetails['Name'].'</td>
				<td>' .$ContactDetails['Phone'].'</td>
				<td>' .$ContactDetails['Email'].'</td>
				</tr>';

			
		}
		?>
	</table>	
	
	</body>
	
</html>	