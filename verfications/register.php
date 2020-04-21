<?php
session_start();

include "../admin/db.php";
include "../helpers/functios.php";

$username = htmlspecialchars($_POST['username']);
$fullname = htmlspecialchars($_POST['fullname']);
$email =  htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);
$password2 = htmlspecialchars($_POST['password_confirm']);



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

$insertUser = "INSERT INTO users (username, full_name, email, password) VALUES('".$username."', '".$fullname."', '".$email."', '".$password."')";
print $sql;
$result = $dbuser->query($insertUser);
if ($result) {
	$_SESSION['registered'] = true;
	$_SESSION['meFullName'] = $fullname;
	$_SESSION['meUserName'] = $username;
	echo "<script>location.href='http://grower.uz/'</script>";
}else{
	print "Server Problem";
}



?>
