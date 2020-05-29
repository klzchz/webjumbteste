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
        'img'
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

}