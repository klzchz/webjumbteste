<?php

require "../../../../../bootstrap.php";

use App\Models\Product;
use App\http\controllers\products\ProductController;

$product = new Product();

$p = new ProductController($product);

$request =  $_POST;
if(empty($_POST['name']))
{   
 
    $_SESSION['msg'] = 'Nome é Obrigatório';
    return header('Location: /?page=addProduct');

}
if(strlen($_POST['name']) < 3)
{
    $_SESSION['msg'] = 'Nome Inválido';
   return  header('Location: /?page=addProduct');

}

$p->store($request);

header('Location: /?page=products');