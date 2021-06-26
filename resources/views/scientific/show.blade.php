@extends('layouts.section')

@section('section-main')
    <h3 class="">Witam Serdecznie!</h3>
    <p>Sekcja naukowa</p>
    <p>dane: <b>{{$person[0]->people->organizational[0]->data}}</b></p>
@endsection
