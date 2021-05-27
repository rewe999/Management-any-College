<?php

namespace App;

use App\Http\Models\FormAttachments;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    public $timestamps=false;

    protected $fillable = [
        'title','description'
    ];

    public function attachments()
    {
        return $this->hasMany(FormAttachments::class);
    }
}
