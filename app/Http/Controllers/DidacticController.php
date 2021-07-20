<?php

namespace App\Http\Controllers;

use App\Http\Requests\DidacticRequest;
use App\Models\Didactic;
use App\People;

class DidacticController extends Controller
{
    public function index($id)
    {
        $didactic_exist = Didactic::where('people_id',$id)->get();

        if(count($didactic_exist) > 0){
            return redirect()->route('didactic.edit',$id);
        }else {
            return redirect()->route('didactic.create',$id);
        }
    }

    public function create($id)
    {
        $person = People::where('id',$id)->first();
        return view('didactic.create',compact('person'));
    }

    public function store(DidacticRequest $request,$id)
    {
        $didactic = new Didactic();
        $didactic->data = $request['data'];
        $didactic->url = $request['url'];
        $didactic->people_id = $id;
        $didactic->save();

        $PersonData = $didactic->people->title . " " . $didactic->people->name . " " . $didactic->people->surname;
        session()->flash('message','Utworzono sekcje dydaktyczną ' . $PersonData);
        return redirect()->route('people.edit');
    }

    public function show($id)
    {
        $section_not_exist = Didactic::where('people_id',$id)->first();
        $person = Didactic::with(['people.didactic','people.organizational','people.scientific'])->where('people_id',$id)->get();

        if($section_not_exist == []){
            return redirect('pracownicy/'.$id);
        }
        return view('didactic.show',compact('person'));
    }

    public function edit($id)
    {
        $person = Didactic::with('people')->where('people_id',$id)->first();
        return view('didactic.edit',compact('person'));
    }

    public function update(DidacticRequest $request, $id)
    {
        $person = Didactic::where('people_id',$id)->first();
        $person->data = $request['data'];
        $person->url = $request['url'];
        $person->save();

        $PersonData = $person->people->title . " " . $person->people->name . " " . $person->people->surname;
        session()->flash('message','Edytowano sekcje dydaktyczną ' . $PersonData);
        return redirect()->route('people.edit');
    }

    public function destroy($id)
    {
        $person = Didactic::where('people_id',$id)->first();
        $PersonData = $person->people->title . " " . $person->people->name . " " . $person->people->surname;
        session()->flash('message','Usunięto sekcje dydaktyczną ' . $PersonData);
        $person->delete();

        return redirect()->route('people.edit');
    }
}
