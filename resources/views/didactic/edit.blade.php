@extends('layouts.layout')
@section('title','osoba')
@section('content')
    <div class="container">
        <h1 class="text-center">Edytuj sekcje dydaktyczna <b>{{$person->people->title}} {{$person->people->name}} {{$person->people->surname}}</b></h1>
        @if($errors->first())
            <div class="alert alert-danger" role="alert">
                {{$errors->first()}}
            </div>
        @endif
        <form method="POST" action="{{route('didactic.update',$person->people->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Dane</label>
                <input type="text" class="form-control" id="title" placeholder="Dane" name="data" value="{{$person->data}}">
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Url</label>
                <input type="text" class="form-control" id="title" placeholder="url" name="url" value="{{$person->url}}">
            </div>
            <div class="text-center pb-2">
                <button type="submit" class="btn btn-primary text-center">EDYTUJ</button>
            </div>
        </form>

        <div class="text-center pb-5">
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                USUŃ
            </button>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-center" id="exampleModalLabel">Czy na pewno chcesz usunąć sekcje dydaktyczną pracownika <b>{{$person->people->title}} {{$person->people->name}} {{$person->people->surname}} </b></h5>
                        <button type="button" class="btn-close btn-secondary" data-bs-dismiss="modal" aria-label="Close">X</button>
                    </div>
                    <div class="modal-footer text-center">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Anuluj</button>
                        <form action="{{route('didactic.destroy',$person->people->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger text-center d-inline">USUŃ</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
