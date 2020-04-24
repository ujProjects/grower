<?php
function productMaker($product){
    global $wishArray;
    global $dbuser;
    if ($product['premieum_status'] != 0) {

        $premiumStatusSelector = "SELECT * from premieumstatus where id = ".$product['premieum_status'];
        echo $premiumStatus;
        $premiumStatus = $dbuser->query($premiumStatusSelector)->fetch_array();
        $premiumStatus = $premiumStatus['status_name'];
    }else {
        $premiumStatus = 0;
    }?>

    <div class="col-xl-2 col-lg-3 col-sm-4 col-6">
        <div href="product.php?id=<?=$product['id']?>" class="product mt-2 pt-1 mb-3 pb-2 bg-white">
            <div class="product-img border-bottom mx-1 mb-3 d-flex flex-column justify-content-center">
                <img src="images/products/<?=$product['thumbnail']?>" alt="" class="w-100">
                <a onclick="addToWishlist(<?=$product['id'].", '".$_SESSION['meUserName']."'"?>)" class="wish">
                    <?php if (in_array($product['id'], $wishArray)): ?>

                        <i id="wishlistHeart<?=$product['id']?>" class="fa fa-heart red" aria-hidden="true"></i>
                    <?php else: ?>
                        <i id="wishlistHeart<?=$product['id']?>" class="far fa-heart" aria-hidden="true"></i>
                    <?php endif; ?>

                </a>

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
<?php
}
?>
