@extends('layouts.admin')
@section('title','osoba')
@section('content')
    @if(session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <div class="container">
        <h1 class="text-center">Edytuj Pracownika</h1>
        @if($person->avatar)
            <img src="{{asset('storage/'.$person->avatar)}}" class="mx-auto d-block" alt="img">
        <div class="d-flex justify-content-center mt-4">
            <form action="{{route('people.destroy.avatar',$person->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">
                    Usuń avatara
                </button>
            </form>
        </div>
        @endif

        @if($errors)
            <p class="badge-danger">{{$errors->first()}}</p>
        @endif

        <form method="POST" action="{{route('people.update',$person->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Tytuł</label>
                <input type="text" class="form-control" id="title" placeholder="Tytuł" name="title" value="{{$person->title}}">
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Imię</label>
                <input class="form-control" id="name" placeholder="Imię" name="name" value="{{$person->name}}">
            </div>

            <div class="mb-3">
                <label for="surname" class="form-label">Nazwisko</label>
                <input class="form-control" id="surname" placeholder="Nazwisko" name="surname" value="{{$person->surname}}">
            </div>

            <div class="mb-3">
                <label for="section" class="form-label">Sekcja</label>
                <input class="form-control" id="section" placeholder="Sekcja" name="section" value="{{$person->section}}">
            </div>

            <div class="mb-3">
                <label for="position" class="form-label">Pozycja</label>
                <input class="form-control" id="position" placeholder="Sekcja" name="position" value="{{$person->position}}">
            </div>

            <label for="position" class="form-label">Płeć</label>
            <div class="mb-3">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="man" value="Mężczyzna" @if($person->gender == "Mężczyzna") checked @endif checked>
                    <label class="form-check-label" for="man">Mężczyzna</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="woman" value="Kobieta" @if($person->gender == "Kobieta") checked @endif>
                    <label class="form-check-label" for="woman">Kobieta</label>
                </div>
            </div>

            <div class="mb-3">
                <label for="birth_date" class="form-label">Data urodzenia</label>
                <input class="form-control" type="date" id="birth_date" name="birth_date" value="{{$person->birth_date}}">
            </div>

            <div class="mb-3">
                <label for="inputAvatar" class="form-label">Avatar</label>
                <input type="file" class="form-control" id="inputAvatar" name="avatar" value="{{$person->avatar}}">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="{{$person->email}}">
            </div>

            <div class="mb-3">
                <label for="url" class="form-label">Url</label>
                <input class="form-control" id="url" placeholder="Url" name="url" value="{{$person->url}}">
            </div>

            <button type="submit" class="btn btn-primary text-center">EDYTUJ</button>
        </form>
    </div>
@endsection
