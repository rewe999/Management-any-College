<?php

namespace App\Http\Controllers;

use App\Form;
use App\Http\Models\FormAttachments;
use App\Http\Requests\FormsRequest;
use Exception;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        $forms = Form::with('attachments')->get();
        $attachments = FormAttachments::all();
        return view('prints.index',['forms'=>$forms,'attachments' => $attachments]);
    }

    public function create()
    {
        return view('prints.create');
    }


    public function store(FormsRequest $request)
    {
        $form = new Form();
        $form->title = $request->input('title');
        $form->description = $request->input('description');
        $form->save();

        if ($request->hasfile('files')) {
            foreach ($request->file('files') as $file) {
                $name = $file->getClientOriginalName();
                $file->move(public_path() . '/files/', $name);
                $data[] = $name;
            }
            foreach ($data as $dat) {
                $attachment = new FormAttachments();
                $attachment->form_id = $form->id;
                $attachment->file = $dat;
                $attachment->save();
            }
        }

        return redirect()->route('form.edit')->with('message','Druk '.$form->title.' został dodany');
    }

    public function showPrints()
    {
        return view('prints.showPrints', ['prints' => Form::all()]);
    }

    public function show($id)
    {
        return $id;
    }

    public function edit($id)
    {
        $form = Form::findOrFail($id);
        $attachments = FormAttachments::where('form_id', $id)->get();
        return view('prints.edit', ['form' => $form, 'attachments' => $attachments]);
    }

    public function update(Request $request, $id)
    {
        $form = Form::findOrFail($id);
        $form->title = $request->input('title');
        $form->description = $request->input('description');
        $form->save();

        if ($request->hasfile('files')) {
            foreach ($request->file('files') as $file) {
                $name = $file->getClientOriginalName();
                $file->move(public_path() . '/files/', $name);
                $data[] = $name;
            }
            foreach ($data as $dat) {
                $attachment = new FormAttachments();
                $attachment->form_id = $form->id;
                $attachment->file = $dat;
                $attachment->save();
            }
        }

        return redirect('druki/edit')->with('message','Druk '.$form->title.' został edytowany');
    }

    public function destroy($id)
    {
        try {
            $form = Form::findOrFail($id);
            $form->delete();

            session()->flash('message','Usunięto druk '.$form->title);
            return response()->json([
                'message' => 'success'
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Wystąpił błąd!'
            ])->setStatusCode(500);
        }
    }
}
