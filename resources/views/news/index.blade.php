@extends('layouts.layout')
@section('title','Aktualności')
@section('content')
    <div class="container">

            <h1 class="text-center mx-auto">AKTUALNOŚCI</h1>

                @foreach($news as $new)
                    <div class="alert alert-primary" role="alert">
                        <b>{{strtoupper($new->title)}}</b> [{{$new->date}}] <a href="{{route('news.show',$new->id)}}">zobacz więcej</a>
                    </div>
        @endforeach
    </div>
@endsection

<style>

    ul > li {
        list-style: none;
    }

    .fl {
        float: left;
    }

    .news-header {
        margin-bottom: 20px;
    }

    .circle-date {
        width: 48px;
        height: 48px;
        background: #B60D18;
        color: #fff;
        border-radius: 50%;
        text-align: center;
    }

    .circle-date-day {
        position: relative;
        top: 1px;
        font-size: 24px;
        font-weight: 700;
    }

    .circle-date-month {
        position: relative;
        bottom: 7px;
        font-size: 14px;
    }



</style>
