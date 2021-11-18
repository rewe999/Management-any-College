@extends('layouts.layout')
@section('title','Aktualności')
@section('content')
    <div class="container content-size">

        <h1 class="text-center mx-auto">AKTUALNOŚCI</h1>

            @foreach($news as $new)
                <div class="alert alert-primary" role="alert">
                    <b class="newsTitle">{{mb_strtoupper($new->title)}}</b> [{{$new->date}}] <a href="{{route('news.show',$new->id)}}">zobacz więcej</a>
                </div>
            @endforeach
    </div>
@endsection

<style>
    .content-size {
        min-height: 29.6vh;
    }
    .newsTitle {
        font-family: 'Roboto', sans-serif;
    }
</style>
