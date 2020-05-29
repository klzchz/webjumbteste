<?php

require "../bootstrap.php";



use Illuminate\Database\Capsule\Manager as Capsule;



Capsule::schema()->create('category_product', function ($table) {

      

       $table->integer('product_id')->unsigned();

       $table->integer('category_id')->unsigned();
                

        $table->foreign('category_id')
                    ->references('id')
                    ->on('categories')
                    ->onDelete('cascade');

        $table->foreign('product_id')
                    ->references('id')
                    ->on('products')
                    ->onDelete('cascade');
   });

?>