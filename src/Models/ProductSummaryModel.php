<?php

require_once 'src/Entities/ProductSummary.php';

class ProductSummaryModel
{
    public static function getProduct_summary(PDO $db): array
    {
        $query = $db->prepare('SELECT `id`, `image`, `title`, `price` FROM `products`;');
        $query->execute();
        $query->setFetchMode(PDO::FETCH_CLASS, ProductSummary::class);
        return $query->fetchAll();
    }





}
