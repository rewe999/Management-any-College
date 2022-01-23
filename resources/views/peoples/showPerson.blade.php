@extends('layouts.admin')
@section('title','Pokaż pracowników')
@section('content')
    @if(session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
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
                            <button class="btn btn-danger btn-sm delete" data-id="{{ $person->id }}" data-title="{{ $person->title }} {{ $person->name }} {{ $person->surname }}"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection

@section('javascript')
    const deleteUrl = "{{ url('pracownicy') }}/";
    const confirmDelete = "Czy na pewno chcesz usunąć ?";
@endsection

@section('js-files')
    <script src="{{asset('js/delete.js')}}"></script>
@endsection

