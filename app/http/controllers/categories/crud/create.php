<?php

require "../../../../../bootstrap.php";

use App\Models\Category;
use App\http\controllers\categories\CategoryController;

$category =new Category();

$c = new CategoryController($category);

$request = $_POST;


$c->store($request);

header('Location: /?page=categories');
