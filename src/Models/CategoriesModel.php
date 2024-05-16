<?php

require_once 'src/Entities/Categories.php';

class CategoriesModel
{
    public static function getCategory_details(PDO $db): array
    {

        $query = $db->prepare('SELECT `category`, `category_id` FROM `products` GROUP BY `category`;');
        $query->execute();
        $query->setFetchMode(PDO::FETCH_CLASS, Categories::class);
        return $query->fetchAll();
    }
}