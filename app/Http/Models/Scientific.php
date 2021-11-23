<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Scientific extends Model
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
