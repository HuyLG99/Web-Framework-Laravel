<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id','status'
    ];
//    public function user() {
//        return $this->belongsTo('App\User');
//        //xác định quan hệ có thể đảo ngược nhau  1 article có thể truy cập đến user,
//        //và ngược lại 1 user cũng có thể truy cập lấy thông tin 1 article
//    }
//
//    public function products() {
//        return $this->belongsToMany('Product');
//    }
}
