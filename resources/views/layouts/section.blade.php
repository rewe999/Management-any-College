@extends('layouts.layout')
@section('title',$person[0]->people->name." ".$person[0]->people->surname)
@section('content')
    <div class="container">
        <div class="card text-center">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="true"
                           href="{{route('peoples.show',$person[0]->people->id)}}">{{$person[0]->people->fullName}}</a>
                    </li>
                    @if(count($person[0]->people->didactic) > 0)
                        <li class="nav-item">
                            <a class="nav-link {{ (request()->is('pracownicy/*/dydaktyczna')) ? 'active' : '' }}" aria-current="true" href="{{route('didactic.show',$person[0]->people->id)}}">Sekcja dydaktyczna</a>
                        </li>
                    @endif

                    @if(count($person[0]->people->scientific) > 0)
                        <li class="nav-item">
                            <a class="nav-link {{ (request()->is('pracownicy/*/naukowa')) ? 'active' : '' }}" href="{{route('scientific.show',$person[0]->people->id)}}">Sekcja naukowa</a>
                        </li>
                    @endif

                    @if(count($person[0]->people->organizational) > 0)
                        <li class="nav-item">
                            <a class="nav-link {{ (request()->is('pracownicy/*/organizacyjna')) ? 'active' : '' }}" href="{{route('organizational.show',$person[0]->people->id)}}">Sekcja organizacyjna</a>
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
                                    @if($person[0]->people->avatar)
                                        <p><img class="img-fluid"
                                                src="{{$person[0]->people->image}}"
                                                alt="card image"></p>
                                    @else
                                        <p><img class="img-fluid"
                                                src="{{asset('assets/no-avatar.jpg')}}"
                                                alt="card image"></p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 desc">
                                <div class="profile-wrapper wow fadeInRight" data-wow-delay="0.3s">
                                    @yield('section-main')
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

    .desc{
        text-align: left;
    }
</style>

