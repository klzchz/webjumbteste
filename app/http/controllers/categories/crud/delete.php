<?php 

require "../../../../../bootstrap.php";

use App\Models\Category;
use App\http\controllers\categories\CategoryController;

$category =new Category();

$c = new CategoryController($category);

$c->destroy($_GET['id']);

header('Location: /?page=categories');