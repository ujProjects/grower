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
				<form class="row px-sm-4 text-center" method="post">
					<h4 class="font-weight-bold mx-sm-4 mb-4">Log in</h4>

                    <div id="errorHandler" class="alert alert-danger w-100 d-none " role="alert">

                    </div>
					<input type="text" class="form-control mb-1" placeholder="Username or E-mail" name="username" id="username">
					<input type="password" class="form-control mb-1" placeholder="Password" name="password" id="password">

					<button type="submit" class="btn acc-create my-4 py-2 col-12" id="loginBtn">Log In</button>
					<p class="text-muted m-auto pt-4">Do'nt have an account? <a href="register.php">Register</a></p>
				</form>
			</div>
		</div>
	</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/mymain.js"></script>
    <script>
    $( "form" ).submit(function( event ) {
      event.preventDefault();
    });
    </script>
</body>
</html>
