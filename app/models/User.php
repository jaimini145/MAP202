<?php

class User {

    public $username;
    public $password;
    public $auth = false;

    public function __construct() {
        
    }

    public function authenticate($username, $password) {

		$username = strtolower($username);
		$db = db_connect();
        $statement = $db->prepare("SELECT * FROM users where username = :username");
        $statement->bindValue(':username', $username);
        $statement->execute();
        $rows = $statement->fetch(PDO::FETCH_ASSOC);
		
		if (password_verify($password, $rows['password'])) {
			$_SESSION['auth'] = 1;
			$_SESSION['username'] = ucwords($username);
			unset($_SESSION['failedAuth']);
			header('Location: /home');
			die;
		} else {
			if(isset($_SESSION['failedAuth'])) {
				$_SESSION['failedAuth'] ++; //increment
			} else {
				$_SESSION['failedAuth'] = 1;
			}
			header('Location: /login');
			die;
		}
    }
	
	
public function user_exists($username)
	{

	public function register ($username, $password) {
		$username = strtolower($username);
		$db = db_connect();

		if(isset($_POST['create'])){
			$sql_u = $db->prepare("select * from Users where username = '$username' ") ;
			$res_u = mysqli_query($db, $sql_u) or die(mysqli_query($db));
		 	if (mysqli_num_rows($res_u) > 0) {
			 $name_error = "Sorry Username already taken";
			 }else if (!empty($username) && !empty($password) && !is_numeric($username)){
			$query = "insert into users ('username','password') VALUES ( '$username', '" .md5($password)."')";
			mysqli_query($db,$query);
			die;
			}else{
				echo "Please input correct information!";
			}
			header('Location: /login');
			die;


		
	$db = db_connect();
 	$statement = $db->prepare("SELECT * FROM Users WHERE username= :username");
	$statement->execute(array(':username' => $username));
 	$statement->execute();
 	$rows = $statement->fetchAll(PDO::FETCH_ASSOC);
	$numberRows = count($rows);
 	return $numberRows;
	}

	public function insert_new_user($username,$password)
	{
	$db = db_connect();

	$statement = $db->prepare("insert into Users (username, password) values(:username,:password)");
	$statement->execute(array(':username' => $username, 'password'=>$password));
	}

}
