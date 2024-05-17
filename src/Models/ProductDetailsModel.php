<?php

require_once 'src/Entities/ProductDetails.php';

class ProductDetailsModel
{
    public static function getProduct_details(PDO $db): ProductDetails
    {
        $id = $_GET['id'];
        $query = $db->prepare('SELECT `image`, `title`, `price`, `description`, `category` FROM `products` WHERE `id` = :id;');
        $query->execute(['id' => $id]);
        $query->setFetchMode(PDO::FETCH_CLASS, ProductDetails::class);
        return $query->fetch();

    }
}
