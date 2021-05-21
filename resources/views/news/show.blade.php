@extends('layouts.layout')
@section('title','Aktualności')
@section('content')
    <div class="container">
        <div class="row bg-success text-center">{{$new->title}}</div>
        <div class="row">{{$new->content}}</div>
    </div>
@endsection
