@extends('layouts.admin')
@section('title','Edytuj druki')
@section('content')
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tytuł</th>
                <th scope="col">Opis</th>
                <th scope="col">Akcje</th>
            </tr>
            </thead>
            <tbody>
            @foreach($prints as $print)
                <tr>
                    <th scope="row">{{$print->id}}</th>
                    <td>{{$print->title}}</td>
                    <td>{{$print->description}}</td>
                    <td>
                        <a href="{{route('form.edit.id',$print->id)}}"> <i class="fas fa-edit"></i> </a>
                        <a href="{{route('form.destroy',$print->id)}}"> <i class="fas fa-trash"></i> </a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
