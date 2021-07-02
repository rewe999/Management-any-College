@extends('layouts.admin')
@section('title','Edytuj aktualności')
@section('content')
    <div class="container">
        <h1 class="text-center">Edytuj Aktualność</h1>
        @if($errors)
            <p class="badge-danger">{{$errors->first()}}</p>
        @endif
        <form method="POST" action="{{route('news.update',$new->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Tytuł</label>
                <input class="form-control" id="title" placeholder="Tytuł" name="title" value="{{$new->title}}">
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Opis</label>
                <textarea class="form-control" id="textEditor" rows="3" name="content">{{$new->content}}</textarea>
            </div>

            <button type="submit" class="btn btn-primary text-center">Edytuj</button>
        </form>
    </div>
@endsection

@section('javascript')
    ClassicEditor
    .create( document.querySelector( '#textEditor' ) )
    .catch( error => {
    console.error( error );
    } );
@endsection
