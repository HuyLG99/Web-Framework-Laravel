<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $fillable = [
        'user_id', 'title', 'body', //các thuộc tính
    ];

    public function user() {
        return $this->belongsTo('App\User');
        //xác định quan hệ có thể đảo ngược nhau  1 article có thể truy cập đến user,
        //và ngược lại 1 user cũng có thể truy cập lấy thông tin 1 article
    }

    /**
     * Get the tags for the article
     */

    public function tags() {
        return $this->belongsToMany('Tag');
    }

    /**
     * Get all of the profiles' comments.
     */
    //public function comments(){
    // return $this->morphMany('Comment', 'commentable');
    // }
}
