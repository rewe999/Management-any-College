@extends('layouts.layout')
@section('title','osoba')
@section('content')
    <div class="container">
        <div class="card text-center">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="true"
                           href="{{route('peoples.show',$person->id)}}">{{$person->fullName}}</a>
                    </li>
                    @if(count($person->didactic) > 0)
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('didactic.show',$person->id)}}">Sekcja dydaktyczna</a>
                        </li>
                    @endif

                    @if(count($person->scientific) > 0)
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('scientific.show',$person->id)}}">Sekcja naukowa</a>
                        </li>
                    @endif

                    @if(count($person->organizational) > 0)
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('organizational.show',$person->id)}}">Sekcja organizacyjna</a>
                        </li>
                    @endif
                </ul>
            </div>
            <div class="card-body">
                <section id="about" class="section-padding">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="img-thumb wow fadeInLeft" data-wow-delay="0.3s">
                                    @if($person->avatar)
                                        <p><img class="img-fluid"
                                                src="{{$person->image}}"
                                                alt="card image"></p>
                                    @else
                                        <p><img class="img-fluid"
                                                src="https://picsum.photos/200/300?random={{$person->id}}"
                                                alt="card image"></p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 desc">
                                <div class="profile-wrapper wow fadeInRight" data-wow-delay="0.3s">
                                    <h1 class="mb-4">Dane o pracowniku:</h1>
                                    <div class="about-profile">
                                        <ul class="admin-profile ">
                                            <li><h5><span class="pro-title"> Imię </span> <span class="pro-detail">{{$person->name}}</span></h5></li>
                                            <li><h5><span class="pro-title"> Nazwisko </span> <span class="pro-detail">{{$person->surname}}</span></h5></li>
                                            <li><h5><span class="pro-title"> Email </span> <span class="pro-detail">{{$person->email}}</span></h5></li>
                                            <li><h5><span class="pro-title"> Sekcja </span> <span class="pro-detail">{{$person->section}}</span></h5></li>
                                            <li><h5><span class="pro-title"> Pozycja </span> <span class="pro-detail">{{$person->position}}</span></h5></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection

<style>
    ul > li {
        list-style: none;
    }

    .img-fluid{
        width: 15rem;
        height: 15rem;
        filter: drop-shadow(0 0 0.75rem #0a0a0a);
    }

    .pro-title {
        font-weight: bold;
    }

    .pro-title:after {
        content: ':';
        padding-right: .1rem;
    }

    .desc{
        text-align: left;
    }
</style>

