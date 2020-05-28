<?php

require "../bootstrap.php";



use Illuminate\Database\Capsule\Manager as Capsule;



Capsule::schema()->create('categories', function ($table) {

       $table->increments('id');

       $table->string('name');

       $table->string('code');

       $table->timestamps();

   });

?>