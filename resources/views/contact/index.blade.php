@extends('layouts.layout')
@section('title','Kontakt')
@section('content')
    <div class="container pt-4">
        @if(session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>

    @if($errors->first())
        <div class="container">
            <div class="alert alert-danger" role="alert">
                <p class="badge-danger"><h6>{{$errors->first()}}</h6></p>
            </div>
        </div>
    @endif

    <div class="container d-flex justify-content-center cont">
        <div class="row my-2 mx-2">
            <div class="col-sm-6"> <img class="contactImage" src="{{asset('assets/contact.jpg')}}" alt="IMG"> </div>
            <div class="col-sm-6">
                <h2 class="form-title">Skontaktuj się z naszymi pracownikami</h2>
                <p class="justify text-muted">Masz pytanie lub chciałbyś przekazać nam swoją opinię? Wypełnij poniższy formularz, aby skontaktować się z naszymi pracownikami.</p>

                <form method="POST" action="{{route('contact.send')}}" enctype="multipart/form-data">
                    <div class="form-group pt-2 pl-1"> <label for="exampleInputName">Twoje imię</label> <input type="text" class="form-control" id="exampleInputName" name="name" value="{{old('name')}}"> </div>
                    <div class="form-group pl-1"> <label for="exampleInputEmail1">Twój adres email</label> <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="{{old('email')}}"></div>
                    <div class="form-group pl-1"> <label for="exampleInputEmail1">Odbiorca </label>
                        <input class="form-control" list="person" id="personEmail" name="person" value="{{old('person')}}"/>
                        <datalist id="person">
                            @foreach($peoples as $people)
                                <option value="{{$people->email}}"> {{$people->name}} {{$people->surname}}
                            @endforeach
                        </datalist>
                    </div>
                    <div class="form-group pl-1"> <label for="exampleFormControlTextarea1">Twoja wiadomość</label> <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="message">{{old('message')}}</textarea> </div>
                    <div class="row">
                        <div class="col-md-3 offset-md-9"><button type="submit" class="btn btn-primary sendButton">Wyślij</button></div>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection

<link rel="stylesheet" href="{{asset('css/contact.css')}}">
