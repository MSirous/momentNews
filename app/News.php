<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = "news";
    protected $fillable = [
        'news',
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
