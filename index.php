<?php

require_once 'src/Entities/ProductSummary.php';
require_once 'src/Entities/Categories.php';
require_once 'src/Entities/Characters.php';


$db = new PDO('mysql:host=DB;dbname=robot_store', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = $db->prepare('SELECT `image`, `title`, `price` FROM `products`;');
$query->execute();
$query->setFetchMode(PDO::FETCH_CLASS, ProductSummary::class);
$product_summary = $query->fetchAll();

$query = $db->prepare('SELECT `category`, `category_id` FROM `products` GROUP BY `category`;');
$query->execute();
$query->setFetchMode(PDO::FETCH_CLASS, Categories::class);
$category_details = $query->fetchAll();

$query = $db->prepare('SELECT `character`, `character_id` FROM `products` GROUP BY `character`;');
$query->execute();
$query->setFetchMode(PDO::FETCH_CLASS, Characters::class);
$character_details = $query->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Robot Store</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <div class="productpage">
        <div class="checkboxes">
        <h1>Categories</h1>
        <?php
        foreach ($category_details as $category) {
        echo $category->CategoryChecklist();
        }
        ?>
        <h1>Characters</h1>
        <?php
        foreach ($character_details as $character) {
            echo $character->CharacterChecklist();
        }
        ?>
        </div>

    <div class="productbox">
        <?php
        foreach ($product_summary as $product) {
    echo $product->ProductSummarySection();
    }
        ?>
    </div>

    </div>
</body>
</html>
