@extends('layouts.section')

@section('section-main')
    <h3 class="">Witam Serdecznie!</h3>
    <p>Sekcja naukowa</p>
    <p>dane:</p>
    {!! $person[0]->people->scientific[0]->data !!}
@endsection
