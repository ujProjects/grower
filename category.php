<?php
ob_start();
include 'php/db.php';
include 'php/sql.php';
include 'details/functions.php';
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

$wishListSelector = "SELECT product_id FROM wishlist where user_id = ".$_SESSION['userId'];
$wishlist = query($wishListSelector);


$wishArray = [];
while ($row = $wishlist->fetch_array(MYSQLI_ASSOC)) {
	$wishArray[] = $row['product_id'];
}

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
                        <?php while ($product = $products->fetch_array()){
							productMaker($product);
					}; ?>
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
<?php include "details/mobile.php" ?>

<?php include 'details/scripts.php'; ?>


<script>
$('a.wish').click(function() {
	return false;
})
</script>
</body>
</html>
