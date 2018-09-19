<?php
	session_start();
	// $db_pass = "foo123";
	$entered_pass = $_POST["password"];	

	// if ($db_pass == $entered_pass) {
	// 	$_SESSION["misc_login"] = true;
 //        header('Location: /misc.php');
	// } else {
	// 	echo "Here";
	// }
	


function wordpress_hash_password($password) {
	require_once('/home/angeliastefani/www/wordpress/wp-includes/class-phpass.php');
	$wp_hasher = new PasswordHash(8, TRUE);
	// $hashed_password = $wp_hasher->HashPassword($password);
	$hashed_password = md5($password);
	return $hashed_password;
}

	$servername = "mysql717.db.sakura.ne.jp";
	$username = "angeliastefani";
	$password = "GKD1rjrq-BP9DS1Ny";
	$database = "angeliastefani_wp";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $database);

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$result = $conn->query("SELECT user_pass FROM wp_users WHERE user_login = 'guest'");
	
	// Should only return one row
	$row = $result->fetch_assoc();
	$db_pass = $row["user_pass"];
	$entered_pass = wordpress_hash_password($_POST["password"]);
	if ($db_pass == $entered_pass) {
		$_SESSION["isLogin"] = true;
        header('Location:'. $_SESSION["oldURL"]);
	} else {
		$_SESSION['error'] = 'Incorrect Password';
  		header('Location: secure.php');
	}

?>