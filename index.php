<?php

require_once 'src/Entities/ProductSummary.php';
require_once 'src/Entities/Categories.php';

$db = new PDO('mysql:host=DB;dbname=robot_store', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = $db->prepare('SELECT `image`, `title`, `price` FROM `products`;');
$query->execute();
$query->setFetchMode(PDO::FETCH_CLASS, ProductSummary::class);
$product_summary = $query->fetchAll();

$query = $db->prepare('SELECT `category_id`, `category` FROM `products`;');
$query->execute();
$query->setFetchMode(PDO::FETCH_CLASS, Categories::class);
$category_details = $query->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Robot Store</title>

    <link rel="stylesheet" href="styles.css">

</head>
<body>
<?php

echo "<div>";
foreach ($category_details as $category) {
    echo $category->Categories();
    }
    echo "</div>";


echo "<div>";
    foreach ($product_summary as $product) {
    echo $product->ProductSummarySection();
    }
    echo "</div>";
?>

</body>
</html>
