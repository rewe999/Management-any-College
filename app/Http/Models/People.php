<?php

namespace App;

use App\Models\Didactic;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    public $timestamps=false;

    protected $fillable = [
        'title','name', 'surname', 'section','avatar','position','sex','birth_date','avatar','active','email','url'
    ];

    public function didactic()
    {
        return $this->hasMany(Didactic::class);
    }
}
