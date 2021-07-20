@extends('layouts.layout')
@section('title','osoba')
@section('content')
    <div class="container">
        <h1 class="text-center pt-5">Utwórz sekcję dydaktyczną <b>{{$person->title}} {{$person->name}} {{$person->surname}}</b></h1>
        @if($errors->first())
            <div class="alert alert-danger" role="alert">
                {{$errors->first()}}
            </div>
        @endif
        <form method="POST" action="{{route('didactic.store',$person->id)}}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="data" class="form-label">Dane</label>
                <input type="text" class="form-control" id="data" placeholder="Dane" name="data" value="{{old('data')}}">
            </div>
            <div class="mb-3">
                <label for="url" class="form-label">Url</label>
                <input type="text" class="form-control" id="url" placeholder="url" name="url" value="{{old('url')}}">
            </div>
            <div class="text-center pb-5">
                <button type="submit" class="btn btn-primary m-auto">UTWÓRZ</button>
            </div>
        </form>
    </div>
@endsection
