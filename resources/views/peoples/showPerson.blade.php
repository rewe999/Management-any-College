@extends('layouts.admin')
@section('title','osoba')
@section('content')
    <div class="container">
        <div class="table-responsive">
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
                            <button class="btn btn-success"><a href="{{route('scientific.index',$person->id)}}"
                                                               class="text-white">Edytuj</a></button>
                        </td>
                        <td>
                            <button class="btn btn-success"><a href="{{route('didactic.index',$person->id)}}"
                                                               class="text-white">Edytuj</a></button>
                        </td>
                        <td>
                            <button class="btn btn-success"><a href="{{route('organizational.index',$person->id)}}"
                                                               class="text-white">Edytuj</a></button>
                        </td>
                        <td class="d-flex">
                            <a href="{{route('people.edit.id',$person->id)}}"><button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button></a>
                            <form action="{{route('people.destroy',$person->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
