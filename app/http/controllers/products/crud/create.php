<?php

require "../../../../../bootstrap.php";

use App\Models\Product;
use App\http\controllers\products\ProductController;

$product = new Product();

$p = new ProductController($product);

$request =  $_POST;

$p->store($request);

header('Location: /?page=products');