<?php
require_once "../bootstrap.php";
// echo "Bonjour je suis la pour faire le teste d'jout dans la base de donnees";
require_once "../src/entities/Product.php";
$product = new Product();
// $product->setId(1);
$product->setName("Biscuit");
$entityManager->persist($product);
$entityManager->flush();
echo "Votre produit a ete creer avec succees ". $product->getId();
