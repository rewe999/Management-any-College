<?php

namespace App\Http\Controllers;

use App\Form;
use App\Http\Models\FormAttachments;
use App\Http\Requests\FormsRequest;
use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forms = Form::with('attachments')->get();
        $attachments = FormAttachments::all();
        return view('prints.index',['forms'=>$forms,'attachments' => $attachments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('prints.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
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

        return redirect('druki/edit');
    }

    public function showPrints()
    {
        return view('prints.showPrints', ['prints' => Form::all()]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $form = Form::findOrFail($id);
        $attachments = FormAttachments::where('form_id', $id)->get();
        return view('prints.edit', ['form' => $form, 'attachments' => $attachments]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
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

        return redirect('druki/edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $form = Form::findOrFail($id);
        $form->delete();

        return redirect('druki/edit');
    }
}
