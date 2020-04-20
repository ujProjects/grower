<?php

$productsSelector = "SELECT p.id AS id, p.title AS title, p.description AS description, p.category_id, p.`view` AS views, p.thumbnail, c.title AS cateogry_title, c.icon, pr.currentPrice, pr.oldPrice, u.username, p.premieum_status FROM products AS p
LEFT JOIN categories AS c ON p.category_id=c.id
LEFT JOIN prices AS pr ON pr.product_id = p.id
/*LEFT JOIN images AS img ON img.product_id = p.id*/ /* Full details*/
LEFT JOIN users AS u ON u.id = p.sellerId
LEFT JOIN availabletypes AS t ON t.product_id = p.id
LEFT JOIN premieumstatus AS ps ON ps.id = p.premieum_status
ORDER BY id desc";
$products = $dbuser->query($productsSelector);





$mainCategoriesSelector = "SELECT * FROM categories where parent = 0";
$mainCategories = query($mainCategoriesSelector);

 ?>
