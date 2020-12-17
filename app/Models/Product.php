<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notification;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_pro', 'kind_pro', 'price',  'qty_pro', 'product_id','avatar'
    ];


}
