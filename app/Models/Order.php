<?php

namespace App\Models;

use App\Models\User;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','address_id','status'];

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function products(){
        return $this->belongsToMany(Product::class, 'order_has_products')->withPivot('quantity');
    }

    public function get_product_quantity($Productid){
        return $this->products->where('id',$Productid)->first()->pivot->quantity;
    }


}
