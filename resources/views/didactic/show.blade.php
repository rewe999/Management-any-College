@extends('layouts.section')

@section('section-main')
    <h3 class="">Witam Serdecznie!</h3>
    <p>Sekcja dydaktyczna</p>
    <p>dane: {{$person[0]->data}}</p>
    <p>url: <a href="{{$person[0]->url}}">wejdź</a></p>
@endsection
