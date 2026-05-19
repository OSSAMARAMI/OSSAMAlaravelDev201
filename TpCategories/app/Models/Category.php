<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\product;

class Category extends Model
{
    use HasFactory;
    function Product()
    {
        return $this->hasMany(Product::class);
    }
}
