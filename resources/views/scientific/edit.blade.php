@extends('layouts.layout')
@section('title','osoba')
@section('content')
    <div class="container">
        <h1 class="text-center">Edytuj sekcje naukową <b>{{$person->people->title}} {{$person->people->name}} {{$person->people->surname}}</b></h1>
        @if($errors->first())
            <div class="alert alert-danger" role="alert">
                {{$errors->first()}}
            </div>
        @endif
        <form method="POST" action="{{route('scientific.update',$person->people->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Dane</label>
                <input type="text" class="form-control" id="title" placeholder="Dane" name="data" value="{{$person->data}}">
            </div>
            <button type="submit" class="btn btn-primary text-center d-inline">EDYTUJ</button>
        </form>

        <form action="{{route('scientific.destroy',$person->people->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger text-center d-inline">USUŃ</button>
        </form>
        </div>
@endsection
