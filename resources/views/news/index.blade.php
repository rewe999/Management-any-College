@extends('layouts.layout')
@section('title','Aktualności')
@section('content')
    <div class="container">
        <div class="row">

            <h1 class="text-center mx-auto">AKTUALNOŚCI</h1>

            <ul id="news-list" class="simple-list-1">
                @foreach($news as $new)
                <li class="cf pb-5">
                    <div class="circle-date fl pb-5">
                        <h4 class="circle-date-day">24</h4>
                        <h6 class="circle-date-month">Kwi.</h6>
                    </div>
                    <div class="news-header-wrapper fl"><a class="news-header basic-link-inv"
                                                           href="{{route('news.show',$new->id)}}">
                        {{$new->title}}
                    </a></div>

                    <div id="news-text" class="default-text" style="clear:both;">{{$new->content}}</div>
                </li>
                @endforeach
            </ul>
        </div>
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
