<!DOCTYPE html>
<?php
include 'php/db.php';
include 'php/sql.php';

if(!is_numeric($id = $_GET['id'])){
    echo "<script>location.href='404.php'</script>";
}

$productsSelectorByCategory = "SELECT p.id AS id, p.title AS title, p.description AS description, p.category_id, p.`view` AS views, p.thumbnail, c.title AS cateogry_title, c.icon, pr.currentPrice, pr.oldPrice, u.username, p.premieum_status FROM products AS p
LEFT JOIN categories AS c ON p.category_id=c.id
LEFT JOIN prices AS pr ON pr.product_id = p.id
/*LEFT JOIN images AS img ON img.product_id = p.id*/ /* Full details*/
LEFT JOIN users AS u ON u.id = p.sellerId
LEFT JOIN availabletypes AS t ON t.product_id = p.id
LEFT JOIN premieumstatus AS ps ON ps.id = p.premieum_status
where category_id = $id
ORDER BY id desc";
$products = $dbuser->query($productsSelectorByCategory);
$sql = "Select title from categories where id=$id";

$categoryName = fetchQuery($sql);


$page = "category";
?>

<html lang="en">

<?php include 'details/head.php'; ?>
<body class=" bg-light">

<!-- SIDEBAR - LOGO - NAVBAR -->
<?php include 'details/sidebar.php'; ?>

<!-- HOME-PAGE -->
			<section class="home-page pt-4 ml-4">
				<h4 class="font-weight-bold ml-3 mb-4"><?=$categoryName[0]?></h4>
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
									<img src="images/<?=$product['thumbnail']?>" alt="" class="w-100">
									<a href="" class="wish"><i class="far fa-heart text-muted"></i></a>
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
	<div class="resp-search d-flex align-items-center">
		<input type="text" placeholder="Search...">
		<div class="ssearch"><i class="fas fa-search text-muted"></i></div>
	</div>

<!-- MENU - PANEL -->
<?php include "details/mobileNav.php" ?>

<?php include 'details/scripts.php'; ?>
</body>
</html>