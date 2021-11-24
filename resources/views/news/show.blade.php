@extends('layouts.layout')
@section('title','Aktualności')
@section('content')
    <div class="container content-size">
    <div class="title text-center textWord">{{$new->title}}</div>
            <div class="text-wrap test">
               <p class="pt-5 font-weight-bold">{!! $new->content !!}</p>
            </div>
    </div>
@endsection

<style>
    .textWord {
        max-width: 100vw;
        word-wrap: break-word;
    }
    .title {
        min-height: 2rem;
        color: #fff;
        font-size: 2rem;
        font-family: Roboto;
        background-color: #aec62c;
    }
    .content-size {
        min-height: 29.6vh;
    }
</style>
