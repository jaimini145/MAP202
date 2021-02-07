
<?php
	class DB {
    public function db_connect(){
		
		$dbhost = 'remotemysql.com';	
		$dbname = 'dCObw8t2lg';
		$dbuser = 'dCObw8t2lg';
		$dbpass = 'ubV1tmbof5';	
		
    
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
	return $conn;
    }
}
?>
