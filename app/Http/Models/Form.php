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

    public function getAttachment(int $id){
        $attachment = FormsAttachment::where('attachment_id',$id)->get();
        return $attachment;
    }

    public function attachment()
    {
        return $this->belongsTo(FormsAttachment::class);
    }
}
