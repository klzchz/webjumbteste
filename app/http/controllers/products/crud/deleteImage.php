<?php

require "../../../../../bootstrap.php";

use App\Models\Product;
use App\http\controllers\products\ProductController;

$product = new Product();

$p = new ProductController($product);

$id = $_GET['id'];

$p->deleteImage($id);

header("Location: /?page=updateProduct&id={$id}");