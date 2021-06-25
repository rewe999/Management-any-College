@extends('layouts.layout')
@section('title','osoba')
@section('content')
    <div class="container">
        <h1 class="text-center">Utwórz sekcję organizacyjną <b>{{$person->title}} {{$person->name}} {{$person->surname}}</b> </h1>
        @if($errors->first())
            <div class="alert alert-danger" role="alert">
                {{$errors->first()}}
            </div>
        @endif
        <form method="POST" action="{{route('organizational.store',$person->id)}}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="data" class="form-label">Dane</label>
                <input type="text" class="form-control" id="data" placeholder="Dane" name="data" value="{{old('data')}}">
            </div>
            <button type="submit" class="btn btn-primary m-auto">UTWÓRZ</button>
        </form>
    </div>
@endsection
