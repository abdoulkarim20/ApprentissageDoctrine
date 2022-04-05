<?php
namespace src\controllers;
use libs\system\Controller;
use src\models\ProductDAO;

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
        return $this->view->load("product/liste", $test);
    }
}
