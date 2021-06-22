<?php

namespace App;

use App\Models\Didactic;
use App\Models\Organizational;
use App\Models\Scientific;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    public $timestamps=false;

    protected $fillable = [
        'title','name', 'surname', 'section','avatar','position','sex','birth_date','avatar','active','email','url'
    ];

    protected $dates = ['date'];

    public function didactic()
    {
        return $this->hasMany(Didactic::class);
    }

    public function organizational()
    {
        return $this->hasMany(Organizational::class);
    }

    public function scientific()
    {
        return $this->hasMany(Scientific::class);
    }
}
