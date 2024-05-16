<?php

require_once 'src/Entities/ProductDetails.php';

class ProductDetailsModel
{
    public static function getProduct_details(PDO $db): array
    {

        $query = $db->prepare('SELECT `image`, `title`, `price`, `description`, `category` FROM `products`;');
        $query->execute();
        $query->setFetchMode(PDO::FETCH_CLASS, ProductDetails::class);
        return $query->fetchAll();

    }
}
