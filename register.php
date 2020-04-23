<?php
ob_start();
session_start();
if ($_SESSION['registered'] == true) {
    header("Location: http://grower.uz/");
}
 ?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/register.css">
</head>
<body>
	<div class="container">
		<div class="row my-5 py-4">
			<div class="bg-white shadow wrapper m-auto pt-5 pb-4 px-5 col-xl-5 col-lg-6 col-md-8 col-11">
				<form class="row px-sm-4 text-center" action="verfications/register.php" method="post">
					<h4 class="font-weight-bold mx-sm-4 mb-4">What type of user are you?</h4>
					<div class="col-12 col-sm-6 px-0 pl-sm-0 pr-sm-2 mb-sm-4">
						<input type="radio" name="userType" value="manafacture" id="user1">
						<label for="user1" class="user1"></label>
					</div>
					<div class="col-12 col-sm-6 px-0 pr-sm-0 pl-sm-2 mb-sm-4 mb-3">
						<input type="radio" name="userType" value="market" id="user2">
						<label for="user2" class="user2" ></label>
					</div>

					<input type="text" class="form-control mb-1" placeholder="Full name" name="name" id="name">
					<input type="text" class="form-control mb-1" placeholder="Username" name="username" id="username">
					<input type="email" class="form-control mb-1" placeholder="Email" name="email" id="email">
					<input type="password" class="form-control mb-1" placeholder="Password" name="password" id="password">
					<input type="password" class="form-control" placeholder="Check Password" name="password_confirm" id="password">

					<div class="custom-control custom-checkbox my-4 col-12">
						<input type="checkbox" name="agreement" class="custom-control-input" id="customCheck1">
						<label class="custom-control-label" for="customCheck1"><span class="text-muted">I agree all statements in </span><a href="">Terms of service</a></label>
					</div>
					<button type="submit" class="btn acc-create my-4 py-2 col-12">Create account</button>
					<p class="text-muted m-auto pt-4">Already have an account? <a href="">Log in</a></p>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
