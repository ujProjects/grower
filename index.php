<?php
ob_start();
session_start();
include 'php/db.php';
include 'php/sql.php';


$page = "home";
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
						<?php while ($product = $products->fetch_array()):
							if ($product['premieum_status'] != 0) {

								$premiumStatusSelector = "SELECT * from premieumstatus where id = ".$product['premieum_status'];
								$premiumStatus = $dbuser->query($premiumStatusSelector)->fetch_array();
								$premiumStatus = $premiumStatus['status_name'];
							}else {
								$premiumStatus = 0;
							}?>


						<div class="col-xl-2 col-lg-3 col-sm-4 col-6">
							<div href="product.php/?id=<?=$product['id']?>" class="product mt-2 pt-1 mb-3 pb-2 bg-white">
								<div class="product-img border-bottom mx-1 mb-3 d-flex flex-column justify-content-center">
									<img src="images/products/<?=$product['thumbnail']?>" alt="" class="w-100">
									<a href="javascript:void(0)" onclick="addToWishlist(<?=$product['id']?>)" class="wish"><i class="far fa-heart text-muted"></i></a>

								</div>

								<div class="product-info px-3">
									<h6 class="font-weight-bold">$<span><?=$product['currentPrice']?></span></h6>
									<p><?=$product['title']?>	</p>
								</div>
								<?php if ($premiumStatus !== 0): ?>
									<p class="deal bg-success"><?=$premiumStatus?></p>
								<?php endif; ?>
							</div>
						</div>
						<?php endwhile ?>
					</div>
				</div>
			</section>
		</div>
	</div>
<!-- Responsive Search -->
<!-- MENU - PANEL -->
<?php include "details/mobile.php" ?>

<?php include 'details/scripts.php'; ?>
</body>
</html>
