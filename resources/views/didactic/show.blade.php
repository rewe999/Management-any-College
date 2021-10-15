@extends('layouts.section')

@section('section-main')
    <h1 class="mb-4">Sekcja dydaktyczna</h1>
    <b>{!! $person[0]->data !!}</b>
    <p>url: <a href="{{$person[0]->url}}">wejdź</a></p>
@endsection
