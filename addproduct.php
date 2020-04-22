<!DOCTYPE html>
<html lang="en">
<?php
include 'php/db.php';
include 'php/sql.php';
include "details/head.php";
$page = "addProduct";
?>

	<link rel="stylesheet" href="css/load.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css">

<body class=" bg-light">


<?php include 'details/sidebar.php'; ?>

<!-- LOAD-PAGE -->
<section class="load-page pt-4 pb-5 container">
    <h1 class="text-success font-weight-bold">Add Product</h1>
    <form class="row" action="verfications/addProduct.php" method="post" enctype="multipart/form-data">
        <div class="col-lg-3">
            <div class="row mt-5 px-3">
                <div class="col-lg-12 col-6 p-0 load-img main-img mb-3">
                    <img src="" class="inpImage w-100" alt="">
                    <input type="file" class="inpFile" name="thumbnail">
                </div>
                <div class="add-load-imgs d-flex flex-wrap justify-content-between pl-lg-0 pr-0 col-lg-12 col-6">
                    <div class="col-lg-3 pl-lg-0 pl-0 pr-lg-1 col-6">
                        <div class="load-img add-img customInp1">
                            <img src="" class="inpImage1 w-100" alt="">
                            <input type="file" class="inpFile1" name="img1">
                        </div>
                    </div>
                    <div class="col-lg-3 px-lg-1 pl-0 col-6">
                        <div class="load-img add-img customInp2">
                            <img src="" class="inpImage2 w-100" alt="">
                            <input type="file" class="inpFile2" name="img2">
                        </div>
                    </div>
                    <div class="col-lg-3 px-lg-1 pl-0 col-6">
                        <div class="load-img add-img customInp3">
                            <img src="" class="inpImage3 w-100" alt="">
                            <input type="file" class="inpFile3" name="img3">
                        </div>
                    </div>
                    <div class="col-lg-3 pr-lg-0 pl-0 pl-lg-1 col-6">
                        <div class="load-img add-img customInp4">
                            <img src="" class="inpImage4 w-100" alt="">
                            <input type="file" class="inpFile4" name="img4">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="py-5">
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
                        <select name="category" class="form-control" id="category">
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
                <div class="row m-0 justify-content-end pt-4">
                    <button class="col-md-2 cancel col-5 btn" type="button" onclick="window.location.href = 'http://grower.uz/';">Cancel</button>
                    <button class="col-md-2 col-7 btn btn-success">Post</button>
                </div>
            </div>
        </div>
    </form>
</section>
		</div>
	</div>


<?php
include 'details/mobile.php';
include 'details/scripts.php';
 ?>

</body>
</html>
