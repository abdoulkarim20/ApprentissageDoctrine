<?php
require_once "config/Autoloader.php";
use src\controllers\ProductController;
$productController = new ProductController();
$productController->add();
$productController->getAll();
