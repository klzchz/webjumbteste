<?php

require "../../../../../bootstrap.php";

use App\Models\Product;
use App\http\controllers\products\ProductController;

$product = new Product();

$p = new ProductController($product);

$id = $_GET['id'];
$request = $_POST;

$p->update($id,$request);

header('Location: /?page=products');