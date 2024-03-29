<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    public $timestamps=false;

    protected $fillable = [
        'title','content','date'
    ];
}
