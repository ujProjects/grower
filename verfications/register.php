<?php
session_start();

include "../php/db.php";
include "../helpers/functios.php";

$username = htmlspecialchars($_POST['username']);
$fullname = htmlspecialchars($_POST['name']);
$email =  htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);
$password2 = htmlspecialchars($_POST['password_confirm']);
$userType = htmlspecialchars($_POST['userType']);
print_r($_POST);
if (!isset($_POST['userType'])) {
	die("Select your user type");
}

if (!validate_alphanumeric_underscore($username) or empty($username)) {
	die("Error in your username");
}
if (!validate_alpha_space($fullname) or empty($fullname)) {
	die("Error in your name");
}
if (!validate_email($email) or empty($email)) {
	die("Error in your email");
}
if ($password !== $password2 or empty($password) or empty($password2)) {
	die("Your passwords should be same");
}elseif(strlen($password) < 8){
	die("Your passwords should be at least 8 characters");

}
if ($userType != "manafacture" and $userType != "market") {
	die("Invalid usertype");
}


$password = sha1(md5(md5($password)));

$checkUser = "SELECT * from users where username = '".$username."'";
$emailCheck = "SELECT * from users where email = '".$email."'";

$userCount = mysqli_num_rows($dbuser->query($checkUser));
$emailCount = mysqli_num_rows($dbuser->query($emailCheck));



if ($userCount > 0) {
	die("Username Taken");
}
if ($emailCount > 0) {
	die("Email Taken");
}



if ($userType == "manafacture") {
	$market = 0;
}else{
	$market = 1;
}


$insertUser = "INSERT INTO users (username, full_name, email, password, market) VALUES('".$username."', '".$fullname."', '".$email."', '".$password."', $market)";
$result = $dbuser->query($insertUser);

if ($result) {
	$userID = $dbuser->insert_id;
	$_SESSION['registered'] = true;
	$_SESSION['meFullName'] = $fullname;
	$_SESSION['meUserName'] = $username;
	$_SESSION['market'] = $market;
	$_SESSION['userId'] = $userID;

	echo "<script>location.href='http://grower.uz/'</script>";
}else{
	print "Server Problem";
}

?>
