<?php

namespace App\Models;

use App\People;
use Illuminate\Database\Eloquent\Model;

class Organizational extends Model
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
