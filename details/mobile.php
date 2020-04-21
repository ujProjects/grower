<!-- Responsive Search -->
<div class="resp-search d-flex align-items-center">
	<input type="text" placeholder="Search...">
	<div class="ssearch"><i class="fas fa-search text-muted"></i></div>
</div>

<!-- MENU - PANEL -->
<div class="menu-panel bg-white border-top d-none">
	<ul class="d-flex justify-content-between py-2 m-0 px-4">

        <?php $active = "class='active'" ?>
		<li <?php if($page == 'home'){echo $active;} ?>><a href="http://grower.uz"><i class="icofont-home text-dark"></i></a></li>
		<li <?php if($page == 'selectCatgory'){echo $active;} ?>><a href="http://grower.uz/selectCategory.php"><i class="icofont-list text-dark"></i></a></li>
		<li <?php if($page == 'addProduct'){echo $active;} ?>><a href="http://grower.uz/addProduct.php"><i class="icofont-plus text-dark"></i></a></li>
		<li <?php if($page == 'wishlist'){echo $active;} ?>><a href="http://grower.uz/wishlist"><i class="icofont-heart text-dark"></i></a></li>
        <?php if ($_SESSION[registred] == true): ?>
            <li <?php if($page == 'account'){echo $active;} ?>><a href="account.php"><i class="icofont-user text-dark"></i></a></li>
        <?php else: ?>
            <li <?php if($page == 'register'){echo $active;} ?>><a href="register.php"><i class="icofont-user text-dark"></i></a></li>
        <?php endif ?>
	</ul>
</div>
