<?php


namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class FormAttachments extends Model
{
    public $timestamps=false;

    protected $fillable = [
        'attachment_id','file'
    ];

    public function form()
    {
        return $this->hasMany(Form::class);
    }
}
