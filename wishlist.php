<?php
ob_start();
session_start();
include 'php/db.php';
include 'php/sql.php';
include 'details/functions.php';
$page = "home";
$productsSelector = "SELECT p.id AS id, p.title AS title, p.description AS description, p.category_id, p.`view` AS views, p.thumbnail, c.title AS cateogry_title, c.icon, pr.currentPrice, pr.oldPrice, u.username, p.premieum_status FROM products AS p
LEFT JOIN categories AS c ON p.category_id=c.id
LEFT JOIN prices AS pr ON pr.product_id = p.id
/*LEFT JOIN images AS img ON img.product_id = p.id*/ /* Full details*/
LEFT JOIN users AS u ON u.id = p.sellerId
LEFT JOIN availabletypes AS t ON t.product_id = p.id
LEFT JOIN premieumstatus AS ps ON ps.id = p.premieum_status
INNER JOIN wishlist as w on p.id = w.product_id
ORDER BY id desc";
$products = $dbuser->query($productsSelector);

$wishListSelector = "SELECT product_id FROM wishlist where user_id = ".$_SESSION['userId'];
$wishlist = query($wishListSelector);


$wishArray = [];
while ($row = $wishlist->fetch_array(MYSQLI_ASSOC)) {
	$wishArray[] = $row['product_id'];
}
?>
<html lang="en">

<?php include 'details/head.php'; ?>
<link rel="stylesheet" href="css/product-view.css">
<link rel="stylesheet" href="css/wishlist.css">
<body class=" bg-light">

	<!-- SIDEBAR -->
    <?php include 'details/sidebar.php'; ?>


<!-- 	WISHLIST -->
			<section class="also-like pb-5 mt-md-5 mt-3 ml-4">
				<h4 class="font-weight-bold ml-3 mb-4 d-lg-block d-none">Wishlist</h4>
				<div class="container-fluid">
					<div class="row">
                        <?php if (mysqli_num_rows($products) == 0): ?>
                            You didn't wish yet
                        <?php endif; ?>
                        <?php while ($product = $products->fetch_array()){
							productMaker($product);
					}; ?>
					</div>
				</div>
			</section>
		</div>
	</div>

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
