<?php

namespace App\Http\Controllers;

use App\Http\Models\FormsAttachment;
use Illuminate\Http\Request;

class AttachmentController extends Controller
{
    public function destroy($id)
    {
        $attachment = FormsAttachment::findOrFail($id);
        $attachment->delete();

        return redirect()->back();
    }
}
