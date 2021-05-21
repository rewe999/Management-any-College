@extends('layouts.layout')
@section('title','Dodaj druk')
@section('content')
    <div class="container">
        <h1 class="text-center">Dodaj Druk</h1>
        @if($errors)
            <p class="badge-danger">{{$errors->first()}}</p>
        @endif
        <form method="POST" action="{{route('news.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Tytuł</label>
                <input class="form-control" id="title" placeholder="tytuł druku" name="title" value="{{old('title')}}">
            </div>

            <div class="mb-3">
                <label for="desc" class="form-label">Opis</label>
                <textarea class="form-control" id="desc" rows="3" name="description" value="{{old('description')}}"></textarea>
            </div>

            <div class="mb-3">
                <label for="attachment" class="form-label">Załączniki</label>
                <input class="form-control" type="file" id="attachment" name="files[]" multiple><br><br>
            </div>

            <button type="submit" class="btn btn-primary text-center">Dodaj</button>
        </form>
    </div>
@endsection
