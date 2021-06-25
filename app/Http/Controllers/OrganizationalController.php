<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrganizationalRequest;
use App\Models\Organizational;
use App\People;
use Illuminate\Http\Request;

class OrganizationalController extends Controller
{
    public function index($id)
    {
        $organizational_exist = Organizational::where('people_id',$id)->get();

        if(count($organizational_exist) > 0){
            return redirect()->route('organizational.edit',$id);
        }else {
            return redirect()->route('organizational.create',$id);
        }
    }

    public function create($id)
    {
        $person = People::where('id',$id)->first();
        return view('organizational.create',compact('person'));
    }

    public function store(OrganizationalRequest $request,$id)
    {
        $organizational = new Organizational();
        $organizational->data = $request['data'];
        $organizational->people_id = $id;
        $organizational->save();

        return redirect('pracownicy/edit');
    }

    public function show($id)
    {
        $section_not_exist = Organizational::where('people_id',$id)->first();
        $person = Organizational::with(['people.didactic','people.organizational','people.scientific'])->where('people_id',$id)->get();

        if($section_not_exist == []){
            return redirect('pracownicy/'.$id);
        }

        return view('organizational.show',compact('person'));
    }


    public function edit($id)
    {
        $person = Organizational::with('people')->where('people_id',$id)->first();
        return view('organizational.edit',compact('person'));
    }

    public function update(OrganizationalRequest $request, $id)
    {
        $person = Organizational::where('people_id',$id)->first();
        $person->data = $request['data'];
        $person->save();

        return redirect()->route('organizational.edit',$id);
    }

    public function destroy($id)
    {
        $person = Organizational::where('people_id',$id)->first();
        $person->delete();

        return redirect()->route('people.edit');
    }
}
