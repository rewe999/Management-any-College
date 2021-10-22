<?php

namespace App\Http\Controllers;

use App\Http\Models\FormAttachments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AttachmentController extends Controller
{
    public function destroy($id)
    {
        $attachment = FormAttachments::findOrFail($id);
        $oldFileAttachment = "files/".$attachment->file;
        if (File::exists($oldFileAttachment)){
            File::delete($oldFileAttachment);
        }
        $attachment->delete();

        return redirect()->back();
    }
}
