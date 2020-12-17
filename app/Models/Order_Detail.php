<?php

namespace App\Models;

use Database\Factories\OrderDetailFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_Detail extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id','product_id','qty_order','price','total_price'
    ];
    protected static function newFactory()
    {
        return OrderDetailFactory::new();
    }

    public function product(){
        return $this->hasOne('App\Models\Product');
    }
}
