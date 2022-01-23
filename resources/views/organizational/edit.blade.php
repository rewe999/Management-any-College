@extends('layouts.layout')
@section('title',$person->people->name." ".$person->people->surname)
@section('content')
    <div class="container">
        <h1 class="text-center pt-5">Edytuj sekcje organizacyjną <b>{{$person->people->title}} {{$person->people->name}} {{$person->people->surname}}</b></h1>
        @if($errors->first())
            <div class="alert alert-danger" role="alert">
                {{$errors->first()}}
            </div>
        @endif
        <form method="POST" action="{{route('organizational.update',$person->people->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Dane</label>
                <textarea type="text" class="form-control" id="title" placeholder="Dane" name="data">{{$person->data}}</textarea>
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
                        <h5 class="modal-title text-center" id="exampleModalLabel">Czy na pewno chcesz usunąć sekcje organizacyjną pracownika <b>{{$person->people->title}} {{$person->people->name}} {{$person->people->surname}} </b></h5>
                        <button type="button" class="btn-close btn-secondary" data-bs-dismiss="modal" aria-label="Close">X</button>
                    </div>
                    <div class="modal-footer text-center">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Anuluj</button>
                        <form action="{{route('organizational.destroy',$person->people->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger text-center d-inline">USUŃ</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('javascript')
    ClassicEditor
    .create( document.querySelector( '#title' ) )
    .catch( error => {
    console.error( error );
    } );
@endsection
