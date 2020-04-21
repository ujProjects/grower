<!DOCTYPE html>
<html lang="en">
<?php

include 'details/head.php';

 ?>
<link rel="stylesheet" href="html/css/load.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css">
<body class=" bg-light">

	<!-- SIDEBAR -->
	<div class="d-flex">
		<div class="sidebar px-2 py-3">
			<div class="bborder mx-3 mb-3">
				<h4 class="mb-3">
					<a href="" class="text-white">Logo</a>
				</h4>
			</div>
			<div class="category px-3">
				<ul class="m-0">
					<li class="my-3 mt-3"><a href="" class="text-muted"><i class="icofont-home mr-2"></i>Home</a></li>
					<li class="my-3 pb-3 bborder"><a href="" class="text-muted"><i class="icofont-box mr-2"></i>Box</a></li>
					<p>The Best List</p>
					<li class="my-3"><a href="" class="text-muted"><i class="icofont-list mr-2"></i>Forms</a></li>
					<li class="my-3"><a href="" class="text-muted"><i class="icofont-phone mr-2"></i>Contact</a></li>
					<li class="my-3 pb-3 bborder"><a href="" class="text-muted"><i class="icofont-home mr-2"></i>Home</a></li>
					<p>Most Viewed</p>
					<li class="my-3"><a href="" class="text-muted"><i class="icofont-box mr-2"></i>Box</a></li>
					<li class="my-3"><a href="" class="text-muted"><i class="icofont-list mr-2"></i>Forms</a></li>
					<li class="my-3"><a href="" class="text-muted"><i class="icofont-phone mr-2"></i>Contact</a></li>
					<li class="my-3 pb-3 bborder"><a href="" class="text-muted"><i class="icofont-home mr-2"></i>Home</a></li>
					<p>People Want</p>
					<li class="my-3"><a href="" class="text-muted"><i class="icofont-box mr-2"></i>Box</a></li>
					<li class="my-3"><a href="" class="text-muted"><i class="icofont-list mr-2"></i>Forms</a></li>
					<li class="my-3"><a href="" class="text-muted"><i class="icofont-phone mr-2"></i>Contact</a></li>
				</ul>
			</div>
		</div>

		<!-- NAVBAR - RIGHT-SIDE -->
		<div class="right-side">

			<nav class="nav px-2 bg-white">
				<form class="search form-inline col-md-9">
					<label for="search"><i class="fas fa-search text-muted"></i></label>
					<input type="search" id="search" class="pl-3" placeholder="Search" aria-label="Search">
				</form>
				<ul class="d-flex col-md-3 align-items-center justify-content-end m-0">
					<li class="mr-2"><a href=""><i class="far fa-bell text-muted"></i></a></li>
					<li class="mx-4"><a href=""><i class="far fa-envelope text-muted"></i></a></li>
					<li class="pl-4 border-left">
						<a href="" class="text-muted d-flex align-items-center">
							Cindy Deitch
							<div class="border user mx-3">
								<img src="https://asdorural.com/upload/iblock/160/1604ed7b020dfd7c616e0383e0bab2c8.png" class="w-100" alt="">
							</div>
						</a>
					</li>
				</ul>
			</nav>

<!-- LOGO -->
			<div class="logo d-none">
				<h2 class="mt-4"><a href="" class="font-weight-bold text-success ml-4">Logo</a></h2>
			</div>

<!-- LOAD-PAGE -->
			<section class="load-page pt-4 pb-5 container">
				<h1 class="text-success font-weight-bold">Add Product</h1>
				<div class="row">
					<div class="col-lg-3">
						<div class="row mt-5 px-3">
							<div class="col-lg-12 col-6 load-img mb-3">
								<img src="" alt="">
							</div>
							<div class="add-load-imgs d-flex flex-wrap justify-content-between pl-lg-0 pr-0 col-lg-12 col-6">
								<div class="col-lg-3 pl-lg-0 pr-lg-1 col-6">
									<div class="add-img">
										<img src="" alt="">
									</div>
								</div>
								<div class="col-lg-3 px-lg-1 col-6">
									<div class="add-img">
										<img src="" alt="">
									</div>
								</div>
								<div class="col-lg-3 px-lg-1 col-6">
									<div class="add-img">
										<img src="" alt="">
									</div>
								</div>
								<div class="col-lg-3 pr-lg-0 pl-lg-1 col-6">
									<div class="add-img">
										<img src="" alt="">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-9">
						<form class="py-5" action="verfications/addProduct.php" method="POST">

							<div class="mb-3">
								<label for="title"><h4 class="fw-600 m-0">Title</h4></label>
								<input type="text" id="title" class="form-control" name="title">
							</div>
							<div class="row">
								<div class="col-lg-6 mb-3">
									<label for="price"><h4 class="fw-600 m-0">Price</h4></label>
									<input type="text" id="price" class="form-control" value="$" name="price">

								</div>
								<div class="col-lg-6 mb-3">
									<label for="category"><h4 class="fw-600 m-0">Category</h4></label>
									<select class="form-control" id="category" name="category">>
										<option value="0">Not chosen</option>
										<option value="1">Food</option>
										<option value="2">Fruit</option>
									</select>
								</div>
							</div>

							<div class="mb-3">
								<label for="description"><h4 class="fw-600 m-0">Description</h4></label>
								<textarea name="description" id="description" style="resize: none;" class="form-control" rows="5"></textarea>
							</div>
							<div class="row">
								<div class="col-md-3 mb-3">
									<h4 class="fw-600">Additional Info</h4>
									<div class="d-flex">
										<div class="mr-4">
											<div class="pretty p-svg p-curve">
										        <input type="checkbox" name="is_color" checked>
										        <div class="state p-success">
										            <svg class="svg svg-icon" viewBox="0 0 20 20">
										                <path d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z" style="stroke: white;fill:white;"></path>
										            </svg>
										            <label>Colors</label>
										        </div>
										    </div>
									    </div>
										<div>
											<div class="pretty p-svg p-curve">
										        <input type="checkbox" name="is_size">
										        <div class="state p-success">
										            <svg class="svg svg-icon" viewBox="0 0 20 20">
										                <path d="M7.629,14.566c0.125,0.125,0.291,0.188,0.456,0.188c0.164,0,0.329-0.062,0.456-0.188l8.219-8.221c0.252-0.252,0.252-0.659,0-0.911c-0.252-0.252-0.659-0.252-0.911,0l-7.764,7.763L4.152,9.267c-0.252-0.251-0.66-0.251-0.911,0c-0.252,0.252-0.252,0.66,0,0.911L7.629,14.566z" style="stroke: white;fill:white;"></path>
										            </svg>
										            <label>Sizes</label>
										        </div>
										    </div>
									    </div>
									</div>
								</div>
								<div class="col-md-3">

								</div>
							</div>
							<div class="row m-0 justify-content-end pt-3 mt-4">
								<button class="col-md-2 col-5 py-1 btn">Cancel</button>
								<button type="submit" class="col-md-3 col-7 py-1 btn btn-success">Post</button>
							</div>
						</form>
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
			<li class="active"><a href=""><i class="icofont-plus text-dark"></i></a></li>
			<li><a href=""><i class="icofont-heart text-dark"></i></a></li>
			<li><a href=""><i class="icofont-user text-dark"></i></a></li>
		</ul>
	</div>

	<script src="js/jquery.js"></script>
	<script src="js/main.js"></script>

</body>
</html>
