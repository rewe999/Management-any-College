@extends('layouts.admin')
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
                <textarea class="form-control" id="editor" rows="3" name="content" value="{{old('content')}}"></textarea>
            </div>

            <button type="submit" class="btn btn-primary text-center">Dodaj</button>
        </form>
    </div>
@endsection

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

@section('javascript')
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
        console.error(error)
        });
@endsection
