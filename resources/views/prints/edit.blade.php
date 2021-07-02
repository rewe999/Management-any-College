@extends('layouts.admin')
@section('title','Dodaj druk')
@section('content')
    <div class="container">
        <h1 class="text-center">Edytuj Druk</h1>
        @if($errors)
            <p class="badge-danger">{{$errors->first()}}</p>
        @endif
        <form method="POST" action="{{route('form.update', $form->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Tytuł</label>
                <input class="form-control" id="title" placeholder="tytuł druku" name="title"
                       value="{{ $form->title }}">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Opis</label>
                <textarea class="form-control" id="description" rows="3"
                          name="description">{{ $form->description }}</textarea>
            </div>

            <div class="mb-3">
                <label for="attachment" class="form-label">Załączniki</label>
                <input class="form-control" type="file" id="attachment" name="files[]" multiple><br><br>
            </div>

            <button type="submit" class="btn btn-primary text-center">Edytuj</button>
        </form>

        <ul>
            @foreach($attachments as $att)
                <li><a href="{{asset('files')}}/{{$att->file}}" class="d-inline">{{$att->file}}</a>
                    <form action="{{route('attachment.destroy',$att->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">D</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
