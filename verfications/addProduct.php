<?php
include "../helpers/functios.php";
include '../php/db.php';
$title = htmlspecialchars($_POST['title'], ENT_QUOTES );
$price = htmlspecialchars($_POST['price'], ENT_QUOTES );
$category = htmlspecialchars($_POST['category'], ENT_QUOTES );
$description = htmlspecialchars($_POST['description'], ENT_QUOTES );


$is_color = htmlspecialchars($_POST['is_color']);
$is_size = htmlspecialchars($_POST['is_size']);

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





 ?>
