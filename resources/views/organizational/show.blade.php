@extends('layouts.section')

@section('section-main')
    <h1 class="mb-4">Sekcja organizacyjna</h1>
    <b>{!! $person[0]->people->organizational[0]->data !!}</b>
@endsection

