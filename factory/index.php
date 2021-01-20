<?php

require_once 'vendor/autoload.php';

use App\Factory\ProductFactory;
use App\ProductType;

$productFactory = new ProductFactory();

// Ici avec des paramètres statiques
$product = $productFactory->create(ProductType::BOOK);
var_dump($product);

$otherProduct = $productFactory->create(ProductType::CLOTHING);
var_dump($otherProduct);

// Ici en se basant sur un paramètre d'URL
if (!empty($_GET['product'])) {
  try {
    $productFromGetParam = $productFactory->create(intval($_GET['product']));
    var_dump($productFromGetParam);
  } catch (InvalidArgumentException $e) {
    echo "Erreur lors de la création du produit : " . $e->getMessage();
  }
}
