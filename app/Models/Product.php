<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Product extends Eloquent

{
    protected $fillable = [
    
        'name',
        'code',
        'price',
        'description',
        'qtd',
        'img',
        'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(category::class,'category_id');
    }

}