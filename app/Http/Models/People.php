<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $fillable = [
        'title','name', 'surname', 'section','avatar'
    ];

    public function didactic()
    {
        return $this->hasMany(Didactic::class);
    }
}
