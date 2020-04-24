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
<?php
SectionMaker('Hot Today', $products);
SectionMaker('For You', $RandProducts);
SectionMaker('Most Popular', $ViewProducts);
SectionMaker('Special for Umid', $RandProducts2);
 ?>
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
