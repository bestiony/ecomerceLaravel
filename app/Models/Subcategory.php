<?php

namespace App\Models;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subcategory extends Model
{
    use HasFactory;

    public function categories(){
        return $this->belongsToMany(Category::class);
    }

    public function products(){
        return $this->belongsToMany(Product::class);
    }
}
