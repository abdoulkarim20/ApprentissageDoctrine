<?php
require_once "config/Autoloader.php"; //sans les namespace
use src\controllers\ProductController; //avec les namespace

$productController = new ProductController();
// $productController->add();
$productController->getAll();
