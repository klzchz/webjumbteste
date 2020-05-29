<?php

require "../../../../../bootstrap.php";

use App\Models\Category;
use App\http\controllers\categories\CategoryController;

$category =new Category();

$c = new CategoryController($category);

$request = $_POST;
$id = $_GET['id'];


$c->update($id,$request);

header('Location: /?page=categories');