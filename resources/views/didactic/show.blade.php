@extends('layouts.section')

@section('section-main')
    <h1 class="mb-4">Sekcja dydaktyczna</h1>
    <b>{!! $person[0]->data !!}</b>
    @if($person[0]->url)
        <p>url: <a href="{{url($person[0]->url)}}" target="_blank">wejdź</a></p>
    @endif
@endsection
