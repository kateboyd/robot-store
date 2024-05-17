<?php

require_once 'src/Entities/ProductSummary.php';
require_once 'src/Entities/ProductDetails.php';
class ProductModel
{
    public static function getProduct_summary(PDO $db): array
    {
        $query = $db->prepare('SELECT `id`, `image`, `title`, `price` FROM `products`;');
        $query->execute();
        $query->setFetchMode(PDO::FETCH_CLASS, ProductSummary::class);
        return $query->fetchAll();
    }

    public static function getProduct_details(PDO $db): ProductDetails
    {
        $id = $_GET['id'];
        $query = $db->prepare('SELECT `image`, `title`, `price`, `description`, `category` FROM `products` WHERE `id` = :id;');
        $query->execute(['id' => $id]);
        $query->setFetchMode(PDO::FETCH_CLASS, ProductDetails::class);
        return $query->fetch();
    }

}






