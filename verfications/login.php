<?php
session_start();
include "../php/db.php";
include "../helpers/functios.php";

$username = htmlspecialchars($_POST['username']);
$password = htmlspecialchars($_POST['password']);
$password = sha1(md5(md5($password)));




$checkUser = "SELECT * from users where username = '".$username."' or email = '".$username."' and password = '".$password."'";
$userCount = mysqli_num_rows($dbuser->query($checkUser));
if ($userCount <= 0) {
    die("User not Found");
}else {
    $userDetails = fetchQuery($checkUser);
    print_r($userDetails);
	$_SESSION['registered'] = true;
	$_SESSION['meFullName'] = $userDetails['full_name'];
	$_SESSION['meUserName'] = $$userDetails['username'];
	echo "<script>location.href='http://grower.uz/'</script>";
}

?>
