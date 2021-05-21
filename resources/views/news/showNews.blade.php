@extends('layouts.layout')
@section('title','Edytuj aktualności')
@section('content')
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Data</th>
                <th scope="col">Tytuł</th>
                <th scope="col">Opis</th>
                <th scope="col">Akcje</th>
            </tr>
            </thead>
            <tbody>
            @foreach($news as $new)
                <tr>
                    <th scope="row">{{$new->id}}</th>
                    <td>{{$new->date}}</td>
                    <td>{{$new->title}}</td>
                    <td>{{$new->content}}</td>
                    <td>
                        <a href="{{route('news.edit.id',$new->id)}}"> <i class="fas fa-edit"></i> </a>
                        <a href="{{route('news.destroy',$new->id)}}"> <i class="fas fa-trash"></i> </a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
