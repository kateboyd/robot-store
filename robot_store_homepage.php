<?php

require_once 'src/Factories/PdoFactory.php';
require_once 'src/Entities/ProductSummary.php';
require_once 'src/Entities/Categories.php';
require_once 'src/Entities/Characters.php';
require_once 'src/Entities/ProductDetails.php';
require_once 'src/Models/CategoriesModel.php';
require_once 'src/Models/ProductModel.php';
require_once 'src/Models/CharacterDetailsModel.php';

$db = PdoFactory::connect();

$category_details = CategoriesModel::getCategory_details($db);
$product_summary = ProductModel::getProduct_summary($db);
$character_details = CharacterDetailsModel::getCharacter_details($db);

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

<!--        <div class="detailsbox">-->
<!--        --><?php
//        foreach ($product_details as $details) {
//            echo $details->ProductDetailsSection();
//        }
//        ?>
<!--        </div>-->
    </div>
</body>
</html>
