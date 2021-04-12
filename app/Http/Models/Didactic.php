<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Didactic extends Model
{
    public $timestamps=false;

    protected $fillable = [
        'data','people_id',
    ];

    public function people()
    {
        return $this->belongsTo(People::class);
    }
}
