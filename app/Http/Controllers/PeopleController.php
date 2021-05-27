<?php

namespace App\Http\Controllers;

use App\People;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peoples = People::orderBy('name')->with('didactic')->paginate(6);
        return view('peoples.index', ['peoples' => $peoples]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('peoples.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $person = new People($request->all());
        $person->gender = $request['gender'];
        $person->birth_date = $request['date'];
        if ($request->hasFile('avatar')){
            $path = $request['avatar']->store('avatars','public');
            $person->avatar = $path;
        }
        $person->save();

        return redirect('pracownicy');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $person = People::with('didactic')->findOrFail($id);
        return view('peoples.show', ['person' => $person]);
    }

    public function showPersons()
    {
        $persons = People::orderBy('name')->get();
        return view('peoples.showPerson',['persons' => $persons]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $person = People::findOrFail($id);
        return view('peoples.edit',['person' => $person]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request,int $id)
    {
        $person = People::findOrFail($id);
        $person->fill($request->all());
        if ($request->hasFile('avatar')){
            $path = $request['avatar']->store('avatars','public');
            $person->avatar = $path;
        }
        $person->save();

        return redirect('pracownicy/edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $person = People::findOrFail($id);
        $person->delete();

        return redirect('pracownicy/edit');
    }
}
