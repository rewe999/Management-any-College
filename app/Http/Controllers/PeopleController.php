<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonRequest;
use App\People;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    public function index()
    {
        $peoples = People::orderBy('name')->with('didactic')->paginate(6);
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

        return redirect('pracownicy');
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
        $person->fill($request->validated());
        if ($request->hasFile('avatar')){
            $path = $request['avatar']->store('avatars','public');
            $person->avatar = $path;
        }
        $person->save();

        return redirect('pracownicy/edit');
    }

    public function destroy($id)
    {
        $person = People::findOrFail($id);
        $person->delete();

        return redirect('pracownicy/edit');
    }
}
