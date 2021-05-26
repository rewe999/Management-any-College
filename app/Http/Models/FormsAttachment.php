<?php


namespace App\Http\Models;


use App\Form;
use Illuminate\Database\Eloquent\Model;

class FormsAttachment extends Model
{
    protected $table = 'forms_attachment';

    public $timestamps=false;

    protected $fillable = [
        'attachment_id','file'
    ];

    public function form()
    {
        return $this->hasMany(Form::class);
    }
}
