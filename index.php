<?php
require_once "config/Autoloader.php"; //sans les namespace
use src\controllers\ProductController; //avec les namespace
// use Doctrine\Common\Cache\ArrayCache;

$productController = new ProductController();
$productController->add();
$productController->getAll();
