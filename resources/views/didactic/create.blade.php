@extends('layouts.layout')
@section('title','osoba')
@section('content')
    <div class="container">
        <h1 class="text-center">Utwórz sekcję dydaktyczną </h1>
        <form method="POST" action="{{route('didactic.store',$id)}}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Dane</label>
                <input type="text" class="form-control" id="title" placeholder="Dane" name="data">
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Url</label>
                <input type="text" class="form-control" id="title" placeholder="url" name="url">
            </div>
            <button type="submit" class="btn btn-primary m-auto">UTWÓRZ</button>
        </form>
    </div>
@endsection
