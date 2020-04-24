<?php
ob_start();
session_start();
include 'php/db.php';
include 'php/sql.php';
include 'details/functions.php';
$page = "home";


$wishListSelector = "SELECT product_id FROM wishlist where user_id = ".$_SESSION['userId'];
$wishlist = query($wishListSelector);


$wishArray = [];
while ($row = $wishlist->fetch_array(MYSQLI_ASSOC)) {
	$wishArray[] = $row['product_id'];
}
?>

<html lang="en">

<?php include 'details/head.php'; ?>
<body class=" bg-light">

<!-- SIDEBAR - LOGO - NAVBAR -->
<?php include 'details/sidebar.php'; ?>

<!-- HOME-PAGE -->
			<section class="home-page pt-4 ml-4">
				<h4 class="font-weight-bold ml-3 mb-4">Hot Products</h4>
				<div class="container-fluid">
					<div class="row">
						<!-- Product  -->
						<?php while ($product = $products->fetch_array()){
							productMaker($product);
					}; ?>
					</div>
				</div>
			</section>
		</div>
	</div>
<!-- Responsive Search -->
<!-- MENU - PANEL -->
<?php include "details/mobile.php" ?>

<?php include 'details/scripts.php';
?>

<script>
$('a.wish').click(function() {
	return false;
})
</script>
</body>
</html>
