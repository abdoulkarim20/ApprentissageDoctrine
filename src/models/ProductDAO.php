<?php

namespace src\models;

use libs\system\Model;

class ProductDAO extends Model
{
    public function findAll()
    {
        $products = [
            "name" => "Biscuit",
            "categorie" => "alimentaie",
            "prix" => "200fcfa",
            "date Expiraion" => "02/04/2024"
        ];
        return $products;
    }
}
