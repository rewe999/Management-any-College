<?php

namespace App\Http\Controllers;

use App\Http\Models\FormAttachments;
use Illuminate\Http\Request;

class AttachmentController extends Controller
{
    public function destroy($id)
    {
        $attachment = FormAttachments::findOrFail($id);
        $attachment->delete();

        return redirect()->back();
    }
}
