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

$product_details = ProductModel::getProduct_details($db);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Robot Store</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div>
    <?php
    echo $product_details->productDetailsSection();
    ?>
</div>
</body>
</html>
