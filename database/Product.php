<?php

require "../bootstrap.php";



use Illuminate\Database\Capsule\Manager as Capsule;



Capsule::schema()->create('products', function ($table) {

       $table->increments('id');

       $table->string('name');
       
       $table->string('code');
       
       $table->double('price');

       $table->string('description');

       $table->string('qtd');
       
       $table->string('img')->nullable();


       $table->timestamps();

   });

?>