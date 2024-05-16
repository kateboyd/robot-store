<?php

require_once 'src/Entities/Characters.php';

class CharacterDetailsModel
{
    public static function getCharacter_details(PDO $db): array
    {

        $query = $db->prepare('SELECT `character`, `character_id` FROM `products` GROUP BY `character`;');
        $query->execute();
        $query->setFetchMode(PDO::FETCH_CLASS, Characters::class);
        return $query->fetchAll();

    }
}
