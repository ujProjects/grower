<?php
ob_start();
include 'php/db.php';
include 'php/sql.php';
include 'details/head.php';

$productId = $_GET['id'];
if (!$productId) {
    echo "<script>location.href='http://grower.uz/'</script>";
}else {
    $productSelecter = "SELECT * from products where id = ".$productId;
    $product = fetchQuery($productSelecter);
}
 ?>
	<link rel="stylesheet" href="css/product-view.css">
	<title>Document</title>

<body class=" bg-light">

	<!-- SIDEBAR -->
	<?php include 'details/sidebar.php' ?>


<!-- LOAD-PAGE -->
			<section class="px-5 pt-4 pb-5">
				<h3 class="font-weight-bold mt-3"><?= $product['title']?></h3>
				<form class="row">
					<div class="col-lg-6">
						<div class="mt-3 mb-4 product-main-img d-flex pl-0 align-items-center">
							<img src="" class="w-100" alt="">
						</div>
						<div class="row">
							<div class="col-3">
								<div class="product-imgs d-flex justify-content-center align-items-center">
									<img src="https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fimg1.cookinglight.timeinc.net%2Fsites%2Fdefault%2Ffiles%2Fstyles%2F4_3_horizontal_-_1200x900%2Fpublic%2F1542062283%2Fchocolate-and-cream-layer-cake-1812-cover.jpg%3Fitok%3DR_xDiShk" class="w-100" alt="">
								</div>
							</div>
							<div class="col-3">
								<div class="product-imgs d-flex justify-content-center align-items-center">
									<img src="https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fimg1.cookinglight.timeinc.net%2Fsites%2Fdefault%2Ffiles%2Fstyles%2F4_3_horizontal_-_1200x900%2Fpublic%2F1542062283%2Fchocolate-and-cream-layer-cake-1812-cover.jpg%3Fitok%3DR_xDiShk" class="w-100" alt="">
								</div>
							</div>
							<div class="col-3">
								<div class="product-imgs d-flex justify-content-center align-items-center">
									<img src="https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fimg1.cookinglight.timeinc.net%2Fsites%2Fdefault%2Ffiles%2Fstyles%2F4_3_horizontal_-_1200x900%2Fpublic%2F1542062283%2Fchocolate-and-cream-layer-cake-1812-cover.jpg%3Fitok%3DR_xDiShk" class="w-100" alt="">
								</div>
							</div>
							<div class="col-3 mb-sm-4">
								<div class="product-imgs d-flex justify-content-center align-items-center">
									<img src="https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fimg1.cookinglight.timeinc.net%2Fsites%2Fdefault%2Ffiles%2Fstyles%2F4_3_horizontal_-_1200x900%2Fpublic%2F1542062283%2Fchocolate-and-cream-layer-cake-1812-cover.jpg%3Fitok%3DR_xDiShk" class="w-100" alt="">
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 pl-lg-5 pr-0">
						<div class="pt-3">
							<h3 class="col-12 text-center py-2 product-price">$<span>99.5</span></h3>
							<div class="d-flex">
								<div class="col-6 pl-0 pr-1">
									<h6>
										<a href="" class="d-flex align-items-center user-name product-price">
											<div class="user ml-1 mr-3">
												<img src="https://asdorural.com/upload/iblock/160/1604ed7b020dfd7c616e0383e0bab2c8.png" class="w-100" alt="">
											</div>
											<span class="text-dark">Roy Jons</span>
										</a>
									</h6>
								</div>
								<div class="col-6 pr-0 pl-1">
									<button type="button" class="btn btn-success w-100" data-toggle="modal" data-target="#exampleModalCenter"><h5 class="d-inline"><i class="icofont-phone mr-1"></i>Call</h5></button>
								</div>
							</div>
							<h5 class="mt-3 mb-2 font-weight-bold">Description</h5>
							<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, fugiat blanditiis quisquam fuga debitis, officia nam consequatur voluptatibus quod sequi excepturi nisi amet nobis eveniet veritatis aliquam, praesentium culpa voluptas optio necessitatibus a explicabo! Voluptates, explicabo amet sequi atque molestias ipsa cupiditate fugiat. Iure dolorem, tempora in ea. Quis maxime commodi sunt mollitia, quasi iure vero ab saepe unde assumenda, voluptas quibusdam error omnis sapiente obcaecati laudantium ratione suscipit laborum provident ipsum perferendis at. Suscipit at est doloribus dolorem magnam, esse! Tempora aliquam soluta necessitatibus veritatis. Dolor, laboriosam vel sequi illum dolorem nihil totam minima placeat facere, ipsum itaque beatae!</p>
						</div>
					</div>
				</form>
			</section>

<!-- ALSO LIKE -->
			<section class="also-like pt-4 pb-5 ml-4">
				<h4 class="font-weight-bold ml-3 mb-4">You might also like</h4>
				<div class="container-fluid">
					<div class="row">
						<div class="col-xl-3 col-lg-4 col-6">
							<div href="" class="also-product mt-2 pt-1 mb-3 pb-2 bg-white">
								<div class="d-flex pl-3 border-bottom py-1">
									<div class="user ml-1 mr-3">
										<img src="https://www.pavilionweb.com/wp-content/uploads/2017/03/man-300x300.png" class="w-100 mb-2" alt="">
									</div>
									<span>Roy Jons</span>
								</div>
								<div class="also-product-img border-bottom mb-3 d-flex align-items-center">
									<img src="https://cdn.lynda.com/course/713378/713378-637199728618542346-16x9.jpg" alt="" class="w-100">
								</div>
								<div class="also-product-info px-3">
									<h6 class="font-weight-bold">Product Name</h6>
									<p class="text-muted m-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis delectus</p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-6">
							<div href="" class="also-product mt-2 pt-1 mb-3 pb-2 bg-white">
								<div class="d-flex pl-3 border-bottom py-1">
									<div class="user ml-1 mr-3">
										<img src="https://www.pavilionweb.com/wp-content/uploads/2017/03/man-300x300.png" class="w-100 mb-2" alt="">
									</div>
									<span>Roy Jons</span>
								</div>
								<div class="also-product-img border-bottom mb-3 d-flex align-items-center">
									<img src="https://cdn.lynda.com/course/713378/713378-637199728618542346-16x9.jpg" alt="" class="w-100">
								</div>
								<div class="also-product-info px-3">
									<h6 class="font-weight-bold">Product Name</h6>
									<p class="text-muted m-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis delectus</p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-6">
							<div href="" class="also-product mt-2 pt-1 mb-3 pb-2 bg-white">
								<div class="d-flex pl-3 border-bottom py-1">
									<div class="user ml-1 mr-3">
										<img src="https://www.pavilionweb.com/wp-content/uploads/2017/03/man-300x300.png" class="w-100 mb-2" alt="">
									</div>
									<span>Roy Jons</span>
								</div>
								<div class="also-product-img border-bottom mb-3 d-flex align-items-center">
									<img src="https://cdn.lynda.com/course/713378/713378-637199728618542346-16x9.jpg" alt="" class="w-100">
								</div>
								<div class="also-product-info px-3">
									<h6 class="font-weight-bold">Product Name</h6>
									<p class="text-muted m-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis delectus</p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-6">
							<div href="" class="also-product mt-2 pt-1 mb-3 pb-2 bg-white">
								<div class="d-flex pl-3 border-bottom py-1">
									<div class="user ml-1 mr-3">
										<img src="https://www.pavilionweb.com/wp-content/uploads/2017/03/man-300x300.png" class="w-100 mb-2" alt="">
									</div>
									<span>Roy Jons</span>
								</div>
								<div class="also-product-img border-bottom mb-3 d-flex align-items-center">
									<img src="https://cdn.lynda.com/course/713378/713378-637199728618542346-16x9.jpg" alt="" class="w-100">
								</div>
								<div class="also-product-info px-3">
									<h6 class="font-weight-bold">Product Name</h6>
									<p class="text-muted m-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis delectus</p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-6">
							<div href="" class="also-product mt-2 pt-1 mb-3 pb-2 bg-white">
								<div class="d-flex pl-3 border-bottom py-1">
									<div class="user ml-1 mr-3">
										<img src="https://www.pavilionweb.com/wp-content/uploads/2017/03/man-300x300.png" class="w-100 mb-2" alt="">
									</div>
									<span>Roy Jons</span>
								</div>
								<div class="also-product-img border-bottom mb-3 d-flex align-items-center">
									<img src="https://cdn.lynda.com/course/713378/713378-637199728618542346-16x9.jpg" alt="" class="w-100">
								</div>
								<div class="also-product-info px-3">
									<h6 class="font-weight-bold">Product Name</h6>
									<p class="text-muted m-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis delectus</p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-6">
							<div href="" class="also-product mt-2 pt-1 mb-3 pb-2 bg-white">
								<div class="d-flex pl-3 border-bottom py-1">
									<div class="user ml-1 mr-3">
										<img src="https://www.pavilionweb.com/wp-content/uploads/2017/03/man-300x300.png" class="w-100 mb-2" alt="">
									</div>
									<span>Roy Jons</span>
								</div>
								<div class="also-product-img border-bottom mb-3 d-flex align-items-center">
									<img src="https://cdn.lynda.com/course/713378/713378-637199728618542346-16x9.jpg" alt="" class="w-100">
								</div>
								<div class="also-product-info px-3">
									<h6 class="font-weight-bold">Product Name</h6>
									<p class="text-muted m-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis delectus</p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-6">
							<div href="" class="also-product mt-2 pt-1 mb-3 pb-2 bg-white">
								<div class="d-flex pl-3 border-bottom py-1">
									<div class="user ml-1 mr-3">
										<img src="https://www.pavilionweb.com/wp-content/uploads/2017/03/man-300x300.png" class="w-100 mb-2" alt="">
									</div>
									<span>Roy Jons</span>
								</div>
								<div class="also-product-img border-bottom mb-3 d-flex align-items-center">
									<img src="https://cdn.lynda.com/course/713378/713378-637199728618542346-16x9.jpg" alt="" class="w-100">
								</div>
								<div class="also-product-info px-3">
									<h6 class="font-weight-bold">Product Name</h6>
									<p class="text-muted m-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis delectus</p>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-6">
							<div href="" class="also-product mt-2 pt-1 mb-3 pb-2 bg-white">
								<div class="d-flex pl-3 border-bottom py-1">
									<div class="user ml-1 mr-3">
										<img src="https://www.pavilionweb.com/wp-content/uploads/2017/03/man-300x300.png" class="w-100 mb-2" alt="">
									</div>
									<span>Roy Jons</span>
								</div>
								<div class="also-product-img border-bottom mb-3 d-flex align-items-center">
									<img src="https://cdn.lynda.com/course/713378/713378-637199728618542346-16x9.jpg" alt="" class="w-100">
								</div>
								<div class="also-product-info px-3">
									<h6 class="font-weight-bold">Product Name</h6>
									<p class="text-muted m-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis delectus</p>
								</div>
							</div>
						</div>
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
	<div class="menu-panel bg-white border-top d-none">
		<ul class="d-flex justify-content-between py-2 m-0 px-4">
			<li><a href=""><i class="icofont-home text-dark"></i></a></li>
			<li><a href=""><i class="icofont-list text-dark"></i></a></li>
			<li><a href=""><i class="icofont-plus text-dark"></i></a></li>
			<li><a href=""><i class="icofont-heart text-dark"></i></a></li>
			<li><a href=""><i class="icofont-user text-dark"></i></a></li>
		</ul>
	</div>

<!-- Modal -->
	<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalCenterTitle">
	        	<a href="" class="d-flex align-items-center">
					<div class="user ml-1 mr-3">
						<img src="https://www.pavilionweb.com/wp-content/uploads/2017/03/man-300x300.png" class="w-100 mb-2" alt="">
					</div>
					<span class="text-dark">Roy Jons</span>
				</a>
	        </h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      	<a href="" class="user-contact d-block mb-3"><i class="fas fa-phone-alt text-success mr-2"></i><span class="text-dark">+998 90 999 99 99</span></a>
	      	<a href="" class="user-contact d-block mt-3"><i class="fas fa-envelope text-success mr-2"></i><span class="text-dark">-</span></a>
	      </div>
	    </div>
	  </div>
	</div>



	<script src="js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.product-imgs img').click(function(e){
				e.preventDefault();
				$('.product-main-img img').attr('src', $(this).attr('src'))
			})
		});$(".also-product").on('click', function () {
			let link = $(this).attr('href')

			window.location.href = link;
		});
	</script>
</body>
</html>
