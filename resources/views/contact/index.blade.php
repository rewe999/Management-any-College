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
            <div class="col-md-6"> <img class="contactImage" src="{{asset('assets/contact.jpg')}}" alt="IMG"> </div>
            <div class="col-md-6">
                <h2 class="form-title">Skontaktuj się z nami</h2>
                <p class="justify text-muted">Masz pytanie lub chciałbyś przekazać nam swoją opinię? Wypełnij poniższy formularz, aby skontaktować się z naszym zespołem.</p>

                <form method="POST" action="{{route('contact.send')}}" enctype="multipart/form-data">
                    <div class="form-group pt-2 pl-1"> <label for="exampleInputName">Twoje imię</label> <input type="text" class="form-control" id="exampleInputName" name="name"> </div>
                    <div class="form-group pl-1"> <label for="exampleInputEmail1">Twój adres email</label> <input type="email" class="form-control" id="exampleInputEmail1" name="email"> </div>
                    <div class="form-group pl-1"> <label for="exampleFormControlTextarea1">Twoja wiadomość</label> <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="message"></textarea> </div>
                    <div class="row">
                        <div class="col-md-3 offset-md-9"><button type="submit" class="btn btn-primary sendButton">Wyślij</button></div>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection

<style>
    body {
        background: rgba(132, 155, 219, 0.5);
        font-family: Arial, Helvetica, sans-serif
    }

    .cont {
        background: #fff;
        margin-top: 50px;
        padding: 20px 20px 20px 20px;
        box-sizing: border-box;
        border-radius: 20px;
        width: 945px
    }

    .contactImage {
        padding-top: 110px;
        padding-left: 50px;
        width: 85%;
        height: 80%
    }

    .sendButton {
        width: 100%;
        font-size: 12px;
        margin-top: 10px;
        background-color: rgba(56, 147, 243, 0.67);
        text-align: center;
        border-radius: 5px
    }

    .text-muted {
        font-size: 13px;
        font-weight: bold
    }

    .form-title {
        font-weight: bold
    }

    .form-group label {
        font-size: 11px;
        font-weight: bold;
        padding-left: 5px;
        color: #828282
    }

    .form-control {
        border: none;
        border-radius: 20px;
        background: rgba(165, 147, 69, 0.075);
        box-shadow: 0px 1px 1px 1px rgba(0, 0, 0, 0.2)
    }

    .form-control:focus {
        color: #495057;
        border-color: #fff !important;
        outline: 0;
        box-shadow: 0 1px 1px 1px rgba(0, 123, 255, .25) !important
    }
</style>
