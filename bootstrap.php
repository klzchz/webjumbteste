<?php

require "vendor/autoload.php";

// Exibe erros simples
error_reporting(E_ERROR | E_WARNING | E_PARSE);

// Exibir E_NOTICE também pode ser bom para mostrar variáveis não iniciadas...
// ou com erros de digitação.
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

// Exibe todos os erros, exceto E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);

// Exibe todos os erros PHP (see changelog)
error_reporting(E_ALL);

// Exibe todos os erros PHP
error_reporting(-1);

// Mesmo que error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);


use Illuminate\Database\Capsule\Manager as Capsule;



$capsule = new Capsule;



$capsule->addConnection([

   "driver" => "mysql",

   "host" =>"127.0.0.1",

   "database" => "acl",

   "username" => "root",

   "password" => "root"

]);

//Make this Capsule instance available globally.
$capsule->setAsGlobal();

// Setup the Eloquent ORM.
$capsule->bootEloquent();
$capsule->bootEloquent();