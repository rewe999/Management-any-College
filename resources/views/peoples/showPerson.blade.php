@extends('layouts.layout')
@section('title','osoba')
@section('content')
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Imię i nazwisko</th>
                <th scope="col">Sekcja Naukowa</th>
                <th scope="col">Sekcja Dydaktyczna</th>
                <th scope="col">Sekcja Organizacyjna</th>
                <th scope="col">Akcje</th>
            </tr>
            </thead>
            <tbody>
            @foreach($persons as $person)
                <tr>
                    <th scope="row">{{$person->id}}</th>
                    <td>{{$person->title}} {{$person->name}} {{$person->surname}}</td>
                    <td>
                        <button class="btn btn-info">Dodaj</button>
                        <button class="btn btn-success"><a href="{{route('didactic.edit',$person->id)}}">Edytuj</a></button>
                    </td>
                    <td>
                        <button class="btn btn-info">Dodaj</button>
                        <button class="btn btn-success"><a href="{{route('scientific.edit',$person->id)}}">Edytuj</a></button>
                    </td>
                    <td>
                        <button class="btn btn-info">Dodaj</button>
                        <button class="btn btn-success"><a href="{{route('organizational.edit',$person->id)}}">Edytuj</a></button>
                    </td>
                    <td>
                        <a href="{{route('people.edit.id',$person->id)}}"> <i class="fas fa-edit"></i> </a>
                        <a href="{{route('people.destroy',$person->id)}}"> <i class="fas fa-trash"></i> </a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
