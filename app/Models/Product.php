<?php

namespace App\Models;

use App\Models\Image;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\ReturnPolicy;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    public function image(){
        return $this->hasOne(Image::class,'image_id');
    }

    public function returnPolicy(){
        return $this->hasOne(ReturnPolicy::class,'return_policy_id');
    }

    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }

    public function subcategories(){
        return $this->belongsToMany(Subcategory::class);
    }
}
