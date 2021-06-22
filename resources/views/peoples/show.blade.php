@extends('layouts.layout')
@section('title','osoba')
@section('content')
    <div class="container">
        <div class="card text-center">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="true"
                           href="{{route('peoples.show',$person->id)}}">{{$person->title}} {{$person->name}} {{$person->surname}}</a>
                    </li>
                    @if(count($person->didactic) > 0)
                        <li class="nav-item">
                            <a class="nav-link" aria-current="true" href="{{route('didactic.show',$person->id)}}">Sekcja dydaktyczna</a>
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
                                                src="{{asset('storage')}}/{{$person->avatar}}"
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
                                    <h3 class="">Witam Serdecznie!</h3>
                                    <p class="">Est diam venenatis arcu lacus ad. Duis quis eros. Cursus et rutrum eleifend
                                        sollicitudin lacinia justo id turpis. Nec convallis integer. Odio eget duis.
                                        Nulla aenean et. Blandit varius sollicitudin. Pellentesque leo primis neque urna
                                        magnis. Elit ut sollicitudin. Et est a nam dolores eget itaque sagittis et
                                        parturient duis est eleifend sociis rutrum odio viverra integer.</p>
                                    <div class="about-profile">
                                        <ul class="admin-profile ">
                                            <li><span class="pro-title"> Name </span> <span class="pro-detail">{{$person->name}}</span>
                                            </li>
                                            <li><span class="pro-title"> Age </span> <span
                                                    class="pro-detail">25 Years</span></li>
                                            <li><span class="pro-title"> Experience </span> <span class="pro-detail">4 Years</span>
                                            </li>
                                            <li><span class="pro-title"> Country </span> <span
                                                    class="pro-detail">USA</span></li>
                                            <li><span class="pro-title"> Location </span> <span class="pro-detail">San Francisco, CA</span>
                                            </li>
                                            <li><span class="pro-title"> e-mail </span> <span class="pro-detail">email@example.com</span>
                                            </li>
                                            <li><span class="pro-title"> Phone </span> <span class="pro-detail">+ (00) 123 456 789</span>
                                            </li>
                                            <li><span class="pro-title"> Freelance </span> <span class="pro-detail">Available</span>
                                            </li>
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

