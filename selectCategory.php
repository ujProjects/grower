<?php
$page = "selectCatgory";
include "php/db.php";
include 'php/sql.php';
 ?><!DOCTYPE html>
<html lang="en">
<?php include 'details/head.php'; ?>
<link rel="stylesheet" href="HTML/css/mobile-category.css">
<body class="bg-light">

<!-- LOGO -->
<div class="logo d-none">
	<h2 class="mt-4"><a href="http://grower.uz" class="font-weight-bold text-success ml-4">Logo</a></h2>
</div>
<!-- MOB - CATEGORY -->
<section class="category-page pt-4 ml-4">
	<h4 class="font-weight-bold ml-3 mb-4">Category</h4>
	<ul class="ml-3">
		<?php while ($category = $mainCategories->fetch_array()): ?>

			<li class="mb-3 "><?= $category['icon']?> <a href="http://grower.uz/category.php?id=<?=$category['id']?>" class="text-dark"><?= $category['title']?></a></li>
		<?php endwhile; ?>
	</ul>
</section>


<!-- Responsive Search -->
<!-- MENU - PANEL -->
<?php include "details/mobile.php" ?>

<script src="js/jquery.js"></script>
<script src="js/main.js"></script>
</body>
</html>
