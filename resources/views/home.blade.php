@extends('layouts.layout')
@section('title','osoba')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{route('news.add')}}">Dodaj druk</a> <br />
                    <a href="{{route('people.add')}}">Dodaj pracownika</a> <br />
                    <a href="{{route('news.add')}}">Dodaj aktualności</a>
{{--                    {{ __('You are logged in!') }}--}}
                    {{ \Illuminate\Support\Facades\Session::get('registered') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
