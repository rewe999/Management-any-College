<?php

namespace App;

use App\Http\Models\FormsAttachment;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    public $timestamps=false;

    protected $fillable = [
        'title','description'
    ];

    public function attachment()
    {
        return $this->belongsToMany(FormsAttachment::class);
    }
}
