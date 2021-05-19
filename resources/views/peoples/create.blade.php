@extends('layouts.layout')
@section('title','Dodaj pracownika')
@section('content')
    <div class="container">
        <h1 class="text-center">Dodaj Pracownika</h1>
        @if($errors)
            <p class="badge-danger">{{$errors->first()}}</p>
        @endif
        <form method="POST" action="{{route('people.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Tytuł</label>
                <input class="form-control" id="title" placeholder="Tytuł" name="title">
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Imię</label>
                <input class="form-control" id="name" placeholder="Imię" name="name">
            </div>

            <div class="mb-3">
                <label for="surname" class="form-label">Nazwisko</label>
                <input class="form-control" id="surname" placeholder="Nazwisko" name="surname">
            </div>

            <div class="mb-3">
                <label for="section" class="form-label">Sekcja</label>
                <input class="form-control" id="section" placeholder="Sekcja" name="section">
            </div>

            <div class="mb-3">
                <label for="position" class="form-label">Pozycja</label>
                <input class="form-control" id="position" placeholder="Sekcja" name="position">
            </div>

            <div class="mb-3">
                <label for="gender" class="form-label">Płeć</label>
                <input class="form-control" id="gender" placeholder="Płeć" name="gender">
            </div>

            <div class="mb-3">
                <label for="date" class="form-label">Data urodzenia</label>
                <input class="form-control" type="datetime-local" id="date" name="date">
            </div>

            <div class="mb-3">
                <label for="inputAvatar" class="form-label">Avatar</label>
                <input type="file" class="form-control" id="inputAvatar" name="avatar">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input class="form-control" id="email" placeholder="Email" name="email">
            </div>

            <div class="mb-3">
                <label for="url" class="form-label">Url</label>
                <input class="form-control" id="url" placeholder="Url" name="url">
            </div>

            <button type="submit" class="btn btn-primary text-center">Dodaj</button>
        </form>
    </div>
@endsection
