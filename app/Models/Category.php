<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Category extends Eloquent

{

   /**
   * The attributes that are mass assignable.
   *
   * @var array
   */

   protected $fillable = [

       'name', 'code'

   ];

   /*Definindo o Relacionamento de Muitos Para Muitos*/

   public function products()
   {
        return $this->belongsToMany(Product::class);
   }

 }