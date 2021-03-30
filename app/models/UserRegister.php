<?php
class UserRegister
{
public function check_user($username)
	{

	$db = db_connect();
 	$statement = $db->prepare("SELECT * FROM users WHERE username= :username");
	$statement->execute(array(':username' => $username));

 	$statement->execute();
 	$rows = $statement->fetchAll(PDO::FETCH_ASSOC);
	$count = count($rows);

 	return $count;
	}

public function insert_user($username,$password)
	{
	$db = db_connect();

	$statement = $db->prepare("insert into users (username, password) values(:username,:password)");
	
	$statement->execute(array(':username' => $username, ':password'=>$password));
	}
}
?>