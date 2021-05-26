@extends('layouts.layout')
@section('title','Dodaj Aktualności')
@section('content')
    <div class="container">
        <h1 class="text-center">Dodaj Aktualności</h1>
        @if($errors)
            <p class="badge-danger">{{$errors->first()}}</p>
        @endif
        <form method="POST" action="{{route('news.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Tytuł</label>
                <input class="form-control" id="title" placeholder="Tytuł" name="title" value="{{old('title')}}">
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Opis</label>
                <textarea class="form-control" id="content" rows="3" name="content" value="{{old('description')}}"></textarea>
            </div>

            <button type="submit" class="btn btn-primary text-center">Dodaj</button>
        </form>
    </div>
@endsection
