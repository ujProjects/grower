<?php
ob_start();
session_start();
include '../php/db.php';
$userName = $_SESSION['meUserName'];
$productId = (int)$_POST['productId'];

$idSelector = "SELECT id from users where username = '".$userName."'";
$userId = fetchQuery($idSelector);

$userId = $userId[0];

$productUserSelector = "SELECT * FROM wishlist where user_id = $userId and product_id = $productId";
$results = $dbuser->query($productUserSelector);
// echo mysqli_num_rows($results);
if (mysqli_num_rows($results)  == 0) {
    $adding = true;
    $adder = "INSERT INTO wishlist (product_id, user_id) VALUES($productId, $userId)";
    $adder = query($adder);
    if ($adder) {
        echo "Added";
    }

}
else {
    $adding = false;
    $remover = "DELETE FROM wishlist WHERE product_id = $productId and user_id = $userId";
    $remover = query($remover);
    if ($remover) {
        echo "Removed";
    }
}



 ?>
