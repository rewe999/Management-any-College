@extends('layouts.layout')
@section('title',$person->name." ".$person->surname)
@section('content')
    <div class="container">
        <h1 class="text-center pt-5">Utwórz sekcję organizacyjną <b>{{$person->title}} {{$person->name}} {{$person->surname}}</b> </h1>
        @if($errors->first())
            <div class="alert alert-danger" role="alert">
                {{$errors->first()}}
            </div>
        @endif
        <form method="POST" action="{{route('organizational.store',$person->id)}}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="data" class="form-label">Dane</label>
                <textarea type="text" class="form-control" id="data" placeholder="Dane" name="data">{{old('data')}}</textarea>
            </div>
            <div class="text-center pb-5">
                <button type="submit" class="btn btn-primary m-auto">UTWÓRZ</button>
            </div>
        </form>
    </div>
@endsection

@section('javascript')
    ClassicEditor
    .create( document.querySelector( '#data' ) )
    .catch( error => {
    console.error( error );
    } );
@endsection
