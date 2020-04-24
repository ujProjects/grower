<?php
ob_start();
include 'php/db.php';
include 'php/sql.php';
include 'details/head.php';

$productId = $_GET['id'];
if (!$productId) {
    echo "<script>location.href='http://grower.uz/'</script>";
}else {
    $productSelecter = "SELECT p.id AS id, p.title AS title, p.description AS description, p.category_id, p.`view` AS views, p.thumbnail, c.title AS cateogry_title, c.icon, pr.currentPrice, pr.oldPrice, u.username, u.id AS userId, p.premieum_status FROM products AS p
    LEFT JOIN categories AS c ON p.category_id=c.id
    LEFT JOIN prices AS pr ON pr.product_id = p.id
    /*LEFT JOIN images AS img ON img.product_id = p.id*/ /* Full details*/
    LEFT JOIN users AS u ON u.id = p.sellerId
    LEFT JOIN availabletypes AS t ON t.product_id = p.id
    LEFT JOIN premieumstatus AS ps ON ps.id = p.premieum_status
    where p.id = ".$productId;
    $product = fetchQuery($productSelecter);


    $imagesSelector = "SELECT * from images where product_id =".$productId." order by image_order_number desc";
    $images = query($imagesSelector);


    $userInfoSelecter = "SELECT * from users where id = ".$product['userId'];
    $user = fetchQuery($userInfoSelecter);

}
 ?>
	<link rel="stylesheet" href="css/product-view.css">
	<title>Document</title>

<body class=" bg-light">

	<!-- SIDEBAR -->
	<?php include 'details/sidebar.php' ?>


<!-- LOAD-PAGE -->
			<section class="px-5 pt-4 pb-5">
				<h3 class="font-weight-bold mt-3"><?=$product['title']?></h3>
				<form class="row">
					<div class="col-lg-6">
						<div class="mt-3 mb-4 product-main-img d-flex justify-content-center pl-0 align-items-center">
							<img src="images/products/<?=$product['thumbnail']?>" alt="">
						</div>
						<div class="row m-0 justify-content-between">
							<div class="col-2 p-0">
								<div class="product-imgs d-flex justify-content-center align-items-center">
                                    <img src="images/products/<?=$product['thumbnail']?>" alt="">
								</div>
                            </div>
                            <?php while($img = $images->fetch_array()): ?>
							<div class="col-2 p-0">
								<div class="product-imgs d-flex justify-content-center align-items-center">
                                    <img src="images/products/<?=$img['imageUrl']?>" alt="">
								</div>
							</div>
                            <?endwhile; ?>
						</div>
					</div>
					<div class="col-lg-6 pl-lg-5 pr-0">
						<div class="pt-3">
							<h3 class="col-12 text-center py-2 product-price">$<span><?=$product['currentPrice']?></span></h3>
							<div class="d-flex">
								<div class="col-6 pl-0 pr-1">
									<h6>
										<a href="users?id=<?=$product['userId']?>" class="d-flex align-items-center user-name product-price">
											<div class="user ml-1 mr-3">
                                                <?php if ($user['logo'] != ""): ?>
                                                <img  src="images/avatars/<?=$user['logo']?>" class="w-100 mb-2 circle" alt="">
                                            <?php else:?>
                                                <img src="images/avatars/default.jpg" class="w-100 mb-2 circle" alt="">
                                            <?php endif;?>
											</div>
											<span class="text-dark"><?=$product['username']?></span>
										</a>
									</h6>
								</div>
								<div class="col-6 pr-0 pl-1">
									<button type="button" class="btn btn-success w-100" data-toggle="modal" data-target="#exampleModalCenter"><h5 class="d-inline"><i class="icofont-phone mr-1"></i>Call</h5></button>
								</div>
							</div>
							<h5 class="mt-3 mb-2 font-weight-bold">Description</h5>
							<p class="text-justify"><?=$product['description'] ?></p>
						</div>
					</div>
				</form>
			</section>

<!-- ALSO LIKE -->


<?php
$randomSelector = "SELECT p.id AS id, p.title AS title, p.thumbnail,u.logo, c.title AS cateogry_title, pr.currentPrice, u.username, u.id AS userId, p.premieum_status FROM products AS p
LEFT JOIN prices AS pr ON pr.product_id = p.id
LEFT JOIN categories As c on p.category_id=c.id
LEFT JOIN users AS u ON u.id = p.sellerId
LEFT JOIN premieumstatus AS ps ON ps.id = p.premieum_status
ORDER BY RAND()
LIMIT 2";



$products = query($randomSelector);

 ?>
			<section class="also-like pb-5 ml-4">
				<h4 class="font-weight-bold ml-3 mb-4">You might also like</h4>
				<div class="container-fluid">
					<div class="row">
                        <?php while ($randProduct = $products->fetch_array()): ?>
						<div class="col-xl-3 col-lg-4 col-6">
							<div href="product.php?id=<?=$randProduct[id] ?>" class="also-product mt-2 pt-1 mb-3 pb-2 bg-white">
								<div class="d-flex pl-3 border-bottom py-1">
									<div class="user ml-1 mr-3">
                                        <?php if ($randProduct['logo'] != ""): ?>
                                            <img src="images/avatars/<?=$randProduct['logo']?>" class="w-100 mb-2" alt="">

                                        <?php else: ?>
                                        <img src="images/avatars/default.jpg" class="w-100 mb-2" alt="">
                                        <?php endif; ?>
									</div>
									<span><?=$randProduct['title'] ?></span>
								</div>
								<div class="also-product-img border-bottom mb-3 d-flex align-items-center">
									<img src="images/products/<?=$randProduct['thumbnail']?>" alt="" class="w-100">
								</div>
								<div class="also-product-info px-3">
									<h6 class="font-weight-bold">$<?=number_format($randProduct['currentPrice'])?></h6>
									<p class="text-muted m-0"><?=$randProduct['title'] ?></p>
								</div>
							</div>
						</div>
                    <?php endwhile; ?>
					</div>
				</div>
			</section>
		</div>
	</div>


<?php include 'details/mobile.php'; ?>

	<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalCenterTitle">
	        	<a href="user?id=<?=$product['id']?>" class="d-flex align-items-center">
					<div class="user ml-1 mr-3 ">
                        <?php if ($user['logo'] != ""): ?>
						<img src="images/avatars/<?=$user['logo']?>" class="w-100 mb-2 circle" alt="">
                    <?php else:?>
                        <img src="images/avatars/default.jpg" class="w-100 mb-2 circle" alt="">
                    <?php endif;?>

					</div>
					<span class="text-dark"><b><?= $user['username']?></b>  (<?=$user['full_name']?>)</span>
				</a>
	        </h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
              <?php if ($user['phone_number'] != ""): ?>

	      	<a href="tel: <?=$user['phone_number']?>" class="user-contact d-block mb-3"><i class="fas fa-phone-alt text-success mr-2"></i><span class="text-dark"><?= $user['phone_number']?></span></a>
        <?php endif; ?>
        <?php if ($user['email'] != ""): ?>
	      	<a href="mailto: <?= $user['email']?>" class="user-contact d-block mt-3"><i class="fas fa-envelope text-success mr-2"></i><span class="text-dark"><?= $user['email']?></span></a>
        <?php endif; ?>
	      </div>
	    </div>
	  </div>
	</div>



	<script src="js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.product-imgs img').mouseover(function(e){
				e.preventDefault();
				$('.product-main-img img').attr('src', $(this).attr('src'));
			})
		});
		$(document).ready(function(){
			$('.product-imgs').mouseover(function(e){
				$('.product-imgs').removeClass('img-border');
				$(this).addClass('img-border');
			})
		});$(".also-product").on('click', function () {
			let link = $(this).attr('href')

			window.location.href = link;
		});
	</script>
</body>
</html>
