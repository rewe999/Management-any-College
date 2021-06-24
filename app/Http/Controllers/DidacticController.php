<?php

namespace App\Http\Controllers;

use App\Models\Didactic;
use App\People;
use Illuminate\Http\Request;

class DidacticController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $didactic_exist = Didactic::where('people_id',$id)->get();

        if(count($didactic_exist) > 0){
            return redirect()->route('didactic.edit',$id);
        }else {
            return redirect()->route('didactic.create',$id);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('didactic.create',compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        $didactic = new Didactic();
        $didactic->data = $request['data'];
        $didactic->url = $request['url'];
        $didactic->people_id = $id;
        $didactic->save();

        return redirect('pracownicy/edit');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $section_not_exist = Didactic::where('people_id',$id)->first();
        $person = Didactic::with(['people.didactic','people.organizational','people.scientific'])->get();

        if($section_not_exist == []){
            return redirect('pracownicy/'.$id);
        }
        return view('didactic.show',compact('person'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $person = Didactic::with('people')->where('people_id',$id)->first();
        return view('didactic.edit',compact('person'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $person = Didactic::where('people_id',$id)->first();
        $person->data = $request['data'];
        $person->url = $request['url'];
        $person->save();

        return redirect()->route('didactic.edit',$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $person = Didactic::where('people_id',$id)->first();
        $person->delete();

        return redirect()->route('people.edit');
    }
}
