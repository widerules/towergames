<?
require_once 'cards.class.php';
function addUser($username, $password){

	$username = strtolower($username);
	
	$password = stripslashes($password);
	$username = stripslashes($username);
	
	$password = mysql_real_escape_string($password);
	$username = mysql_real_escape_string($username);
	$username = htmlspecialchars($username);

	$password = sha1($password);//sha1 giver en 40 cifret kryptering
	$query = mysql_query("SELECT name FROM users WHERE name='$username'") or die('Error, query failed');

	if(mysql_num_rows($query) < 1) {
		mysql_query("INSERT INTO users (name, password, created, point, credit)
					VALUES('$username','$password', CURDATE(), 0, 0") or die('Error, query failed!');
	}
}	

function login($username, $password){
	$username = strtolower($username);
	
	$password = stripslashes($password);
	$username = stripslashes($username);
	
	$password = mysql_real_escape_string($password);
	$username = mysql_real_escape_string($username);
	$username = htmlspecialchars($username);

	$password = sha1($password);//sha1 giver en 40 cifret kryptering
	
	$query = "SELECT * FROM users WHERE name='$username' AND password='$password'";
	$result = mysql_query($query) or die('Error, query failed');
	
}
function addCard(){
	
}
















?>