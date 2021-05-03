@extends('layouts.layout')
@section('title','Pracownicy Uczelni')
@section('content')
    <section id="team" class="pb-5">
        <div class="container">
            <h5 class="section-title h1">POZNAJ NASZYCH PRACOWNIKÓW UCZELNI</h5>
            <div class="row">
                <!-- Team member -->
                @foreach($peoples as $people)
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="image-flip">
                            <div class="mainflip">
                                <div class="frontside">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <p><img class="img-fluid"
                                                    src="https://picsum.photos/200/300?random={{$people->id}}"
                                                    alt="card image"></p>
                                            <h4 class="card-title">{{$people->title}} {{$people->name }} {{ $people->surname }}</h4>
                                            <p class="card-text">{{$people->section}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="backside">
                                    <div class="card">
                                        <div class="card-body text-center mt-4">
                                            <h4 class="card-title">Witam!</h4>
                                            <p>Nazywam się {{$people->name }} {{ $people->surname }} mam {{ 2021 - substr($people->birth_date, 0, 4) }} lat/a i moje zainteresowania to:</p>
                                            @foreach($people->didactic as $did)
                                                <ul class="card-text">
                                                    <li> {{$did->data}} </li>
                                                </ul>
                                            @endforeach
                                        </div>
                                        <button type="button" class="btn btn-outline-info"><a href=" {{route('peoples.show',$people->id)}}"> Zobacz więcej o mnie </a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ./Team member -->
                @endforeach

                <div class="container">
                    <div class="row">
                        <div class="m-auto">{{ $peoples->links() }}</div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection

<style>
    /*#team {*/
    /*    background: #eee !important;*/
    /*}*/

    #team{
        background-image: url("{{asset('assets/pwsz-photo.jpg')}}");
        background-repeat: no-repeat;
        background-size: cover;
    }

    section {
        padding: 60px 0;
    }

    section .section-title {
        text-align: center;
        color: #007b5e;
        margin-bottom: 50px;
        text-transform: uppercase;
    }

    #team .card {
        border: none;
        background: #ffffff;
    }

    .image-flip:hover .backside,
    .image-flip.hover .backside {
        transform: rotateY(0deg);
        border-radius: .25rem;
        width: 20rem;
    }

    .image-flip:hover .frontside,
    .image-flip.hover .frontside {
        transform: rotateY(180deg);
    }

    .mainflip {
        transition: 1s;
        transform-style: preserve-3d;
        position: relative;
    }

    .frontside {
        position: relative;
        z-index: 2;
        margin-bottom: 30px;
    }

    .backside {
        position: absolute;
        top: 0;
        left: 0;
        background: white;
        transform: rotateY(-180deg);
        box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
    }

    .frontside,
    .backside {
        backface-visibility: hidden;
        transition: 1s;
        transform-style: preserve-3d;
    }

    .frontside .card,
    .backside .card {
        min-height: 312px;
        width: 20rem;
    }

    .backside .card a {
        font-size: 18px;
        color: #007b5e !important;
    }

    .frontside .card .card-title,
    .backside .card .card-title {
        color: #007b5e !important;
    }

    .frontside .card .card-body img {
        width: 120px;
        height: 120px;
        border-radius: 50%;
    }

    ul > li {
        text-align: left;
    }
</style>
