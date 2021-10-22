<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonRequest;
use App\People;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PeopleController extends Controller
{
    public function index()
    {
        $peoples = People::orderBy('name')->with('didactic')->paginate(10);
        return view('peoples.index', ['peoples' => $peoples]);
    }


    public function create()
    {
        return view('peoples.create');
    }


    public function store(PersonRequest $request)
    {
        $person = new People($request->validated());
        $person->gender = $request['gender'];
        $person->birth_date = $request['birth_date'];
        if ($request->hasFile('avatar')){
            $path = $request['avatar']->store('avatars','public');
            $person->avatar = $path;
        }
        $person->save();

        return redirect()->route('people.edit')->with('message',"Pracownik {$person->name} {$person->surname} został dodany");
    }

    public function show(int $id)
    {
        $person = People::with(['didactic','organizational','scientific'])->findOrFail($id);
        return view('peoples.show', ['person' => $person]);
    }

    public function showPersons()
    {
        $persons = People::orderBy('name')->get();
        return view('peoples.showPerson',['persons' => $persons]);
    }

    public function edit($id)
    {
        $person = People::findOrFail($id);
        return view('peoples.edit',['person' => $person]);
    }

    public function update(PersonRequest $request,int $id)
    {
        $person = People::findOrFail($id);
        $oldPersonImage = 'public/'.$person->avatar;
        $person->fill($request->validated());
        if ($request->hasFile('avatar')){
            if (Storage::get($oldPersonImage)){
                Storage::delete($oldPersonImage);
            }
            $path = $request['avatar']->store('avatars','public');
            $person->avatar = $path;
        }
        $person->save();

        return redirect()->back()->with('message',"Pracownik {$person->name} został edytowany");
    }

    public function destroy($id)
    {
        try {
            $person = People::findOrFail($id);
            $person->delete();
            session()->flash('message','Usunięto pracownika '.$person->name." ".$person->surname);
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
