<?php

namespace src\controllers;

use src\models\ProductDAO;
use libs\system\Controller;

class ProductController extends Controller
{
    public function add()
    {
        return $this->view->load("product/add");
    }
    public function getAll()
    {
        $productDAO = new ProductDAO();
        $test = $productDAO->findAll();
        $products = [
            "name" => "Biscuit",
            "categorie" => "alimentaie",
            "prix" => "200fcfa",
            "date Expiraion" => "02/04/2024"
        ];

        return $this->view->load("product/liste", $test);
    }
}
