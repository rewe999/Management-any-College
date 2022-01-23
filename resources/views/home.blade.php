@extends('layouts.layout')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <a href="{{route('form.add')}}">Dodaj druk</a> <br />
                    <a href="{{route('form.edit')}}">Pokaz druki</a> <br /><br />

                    <a href="{{route('people.add')}}">Dodaj pracownika</a> <br />
                    <a href="{{route('people.edit')}}">Pokaż pracowników</a><br /><br />

                    <a href="{{route('news.add')}}">Dodaj aktualności</a><br />
                    <a href="{{route('news.edit')}}">Pokaż aktualności</a><br /><br />
                    {{ \Illuminate\Support\Facades\Session::get('registered') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
