@extends('layouts.section')

@section('section-main')
    <h1 class="mb-4">Sekcja naukowa</h1>
    <b>{!! $person[0]->people->scientific[0]->data !!}</b>
@endsection
