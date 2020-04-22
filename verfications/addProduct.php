<?php
include "../helpers/functios.php";
include '../php/db.php';

echo "<pre>";
$res = validate_img($_FILES['thumbnail']);
if($res['type'] != "success"){
    die($res['message']);
}else {
    $thumbnail = $res['target'];
}
// if (isset($_FILES['img1'])) {
//     $res = validate_img($_FILES['img1']);
//     if($res['type'] != "success"){
//         echo $res['message'];
//         echo "Img 1 didn't uploaded";
//     }else {
//         $img1 = $res['target'];
//     }
// }
// if (isset($_FILES['img2'])) {
//     $res = validate_img($_FILES['img2']);
//     if($res['type'] != "success"){
//         echo $res['message'];
//         echo "Img 2 didn't uploaded";
//     }else {
//         $img2 = $res['target'];
//     }
// }
// if (isset($_FILES['img3'])) {
//
//     $res = validate_img($_FILES['img3']);
//     if($res['type'] != "success"){
//         echo $res['message'];
//         echo "Img 3 didn't uploaded";
//     }else {
//         $img3 = $res['target'];
//     }
// }
// if (isset($_FILES['img4'])) {
//     $res = validate_img($_FILES['img4']);
//     if($res['type'] != "success"){
//         echo $res['message'];
//         echo "Img 4 didn't uploaded";
//     }else {
//         $img4 = $res['target'];
//     }
// }
// print_r($_FILES);
// print_r($_POST);

$title = htmlspecialchars($_POST['title'], ENT_QUOTES );
$price = htmlspecialchars($_POST['price'], ENT_QUOTES );
$category = htmlspecialchars($_POST['category'], ENT_QUOTES );
$description = htmlspecialchars($_POST['description'], ENT_QUOTES );

// echo "$title, $price, $category, $description, $is_color, $is_size";

if (strlen($title)<5) {
    die("Your Title is too short");
}

$price = floatval(str_replace("$", "", $price));
if ($price == 0) {
    die("Incorrect format of price");
}

if ($category == 0) {
    die("Choose the Category");
}
if (!is_numeric($category)) {
    die("Category not Found");
}else{
    $sql = "SELECT title FROM categories where id = $category";
    $categoryTitle = query($sql);
    if (mysqli_num_rows($categoryTitle) == 0) {
        die("Category not Found");
    }
}
$idSelector = "SELECT id from users where username = '".$_SESSION['meUserName']."'";
$id = query($idSelector)->fetch_array();
$id = $id[0];
// echo "$thumbnail, $img1, $img2, $img3, $img4, $title, $price, $category, $description";
$addProductSql = "INSERT INTO products(title, description, category_id, sellerId, thumbnail) VALUES('".$title."', '".$description."', $category, ".$id.", '".$thumbnail."')";
// print $addProductSql;
$resProduct = $dbuser->query($addProductSql);
if ($resProduct == true) {
    $product_id = $dbuser->insert_id;
}else{
    die("<script>window.location.href = 'http://grower.uz/error.php';</script>");
}

$addPricesSql = "INSERT INTO prices(product_id, currentPrice) VALUES($product_id, $price)";
$resPrice = $dbuser->query($addPricesSql);


if ($resProduct and $resPrice) {
    die("<script>window.location.href = 'http://grower.uz/product.php?id=$product_id';</script>");
}



 ?>
