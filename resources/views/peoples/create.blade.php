@extends('layouts.admin')
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
                <input class="form-control" id="title" placeholder="Tytuł" name="title" value="{{old('title')}}">
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Imię</label>
                <input class="form-control" id="name" placeholder="Imię" name="name" value="{{old('name')}}">
            </div>

            <div class="mb-3">
                <label for="surname" class="form-label">Nazwisko</label>
                <input class="form-control" id="surname" placeholder="Nazwisko" name="surname" value="{{old('surname')}}">
            </div>

            <div class="mb-3">
                <label for="section" class="form-label">Sekcja</label>
                <input class="form-control" id="section" placeholder="Sekcja" name="section" value="{{old('section')}}">
            </div>

            <div class="mb-3">
                <label for="position" class="form-label">Pozycja</label>
                <input class="form-control" id="position" placeholder="Sekcja" name="position" value="{{old('position')}}">
            </div>

            <label for="position" class="form-label">Płeć</label>
            <div class="mb-3">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="man" value="Mężczyzna" checked>
                    <label class="form-check-label" for="man">Mężczyzna</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="woman" value="Kobieta">
                    <label class="form-check-label" for="woman">Kobieta</label>
                </div>
            </div>


            <div class="mb-3">
                <label for="birth_date" class="form-label">Data urodzenia</label>
                <input class="form-control" type="date" id="birth_date" name="birth_date" value="{{ old('birth_date', date('Y-m-d')) }}">
            </div>

            <div class="mb-3">
                <label for="inputAvatar" class="form-label">Avatar</label>
                <input type="file" class="form-control" id="inputAvatar" name="avatar">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input class="form-control" id="email" placeholder="Email" name="email" value="{{old('email')}}">
            </div>

            <div class="mb-3">
                <label for="url" class="form-label">Url</label>
                <input class="form-control" id="url" placeholder="Url" name="url" value="{{old('url')}}">
            </div>

            <button type="submit" class="btn btn-primary text-center">Dodaj</button>
        </form>
    </div>
@endsection
