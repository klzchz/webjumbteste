<?php

require "../../../../../bootstrap.php";

use App\Models\Category;
use App\http\controllers\categories\CategoryController;

$category =new Category();

$c = new CategoryController($category);

$request = $_POST;
if(empty($_POST['name']))
{   
 
    $_SESSION['msg'] = 'Nome é Obrigatório';
    return header('Location: /?page=addCategory');

}
if(strlen($_POST['name']) < 3)
{
    $_SESSION['msg'] = 'Nome Inválido';
   return  header('Location: /?page=addCategory');

}

if(empty($_POST['code']))
{   
 
    $_SESSION['msg'] = 'SKU é Obrigatório';
    return header('Location: /?page=addCategory');

}
if(strlen($_POST['code']) < 3 || is_numeric($_POST['code']))
{
    $_SESSION['msg'] = 'SKU Inválido';
   return  header('Location: /?page=addCategory');


}
$c->store($request);

header('Location: /?page=categories');
