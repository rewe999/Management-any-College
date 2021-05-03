@extends('layouts.layout')
@section('title','Aktualności')
@section('content')
    <div class="container">
        <div class="row">

            <h1 class="text-center mx-auto">AKTUALNOŚCI</h1>

            <ul id="news-list" class="simple-list-1">

                <li class="cf pb-5">
                    <div class="circle-date fl pb-5">
                        <h4 class="circle-date-day">24</h4>
                        <h6 class="circle-date-month">Kwi.</h6>
                    </div>
                    <div class="news-header-wrapper fl"><a class="news-header basic-link-inv"
                                                           href="/instytut/aktualnosci/297">
                            Dzień otwarty - link do YouTube
                    </a></div>

                    <div id="news-text" class="default-text" style="clear:both;">Zapraszamy w sobotę,&nbsp;24
                        kwietnia o godzinie 11:00 na nasz kanał YouTube
                        Program: link
                        Najczęściej zadawane pytania: link
                    </div>
                </li>

                <li class="cf">
                    <div class="circle-date fl pb-2">
                        <h4 class="circle-date-day">20</h4>
                        <h6 class="circle-date-month">Kwi.</h6>
                    </div>
                    <div class="news-header-wrapper fl"><a class="news-header basic-link-inv"
                                                           href="/instytut/aktualnosci/296">

                            Webinar UBS: Logs Aggregation &amp; Monitoring
                        </a></div>

                    <div id="news-text" class="default-text" style="clear:both;">Zapraszamy na webinar w
                        ramach Byte My Code Academy z firmą UBS.
                        Wydarzenie odbędzie się online za pośrednictwem platformy WebEx - link.

                        Temat: Logs Aggregation &amp; Monitoring
                        Początek: czwartek, 22 kwietnia ...
                    </div>

                </li>

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
