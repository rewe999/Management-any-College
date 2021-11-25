@extends('layouts.layout')
@section('title','Pracownicy Uczelni')
@section('content')
<div class="team-grid">
    <div class="container">
        <div class="intro fs-1">
            <h2 class="text-xl-center fs-1 textColor pb-3 pt-5">Poznaj naszych Pracowników!</h2>
        </div>

            <div class="row people d-flex justify-content-center">
        @foreach($peoples as $people)
                    <a href="{{route('peoples.show',$people->id)}}">
                <div class="col-md-4 col-lg-3 item">
                    <div class="box">
                        @if($people->avatar)
                            <img src="{{$people->image}}"
                                 class="img-fluid rounded avatarImage" alt="image">
                        @else
                            <img src="https://picsum.photos/200/300?random={{$people->id}}"
                                 class="img-fluid rounded mx-auto d-block avatarImage" alt="image">
                        @endif

                        <div class="cover">
                            <h3 class="name">{{$people->fullName}}</h3>
                            <p class="title">{{$people->position}}</p>
                            <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                        </div>

                    </div>
                </div>
                    </a>
        @endforeach
            </div>
    <div class="container">
        <div class="row">
            <div class="m-auto">{{ $peoples->links() }}</div>
        </div>
    </div>
    </div>
</div>

@endsection

<style>

    .team-grid {
        background-image: url("{{asset('assets/pwsz-img.jpg')}}");
        background-repeat: no-repeat;
        background-size: cover;
    }

    .avatarImage {
        width: 550px;
        height: 100%;
    }

    p {
        color: #fff
    }

    h2 {
        font-weight: bold;
        margin-bottom: 40px;
        padding-top: 40px;
        color: #fff
    }

    .cover{
        width: 550px;
        height: 220px;
    }


    @media (max-width:767px) {
        h2 {
            margin-bottom: 25px;
            padding-top: 25px;
            font-size: 24px
        }
    }

    .intro {
        font-size: 16px;
        max-width: 500px;
        margin: 0 auto
    }

    .intro p {
        margin-bottom: 0
    }

    .people {
        padding: 50px 0;
        cursor: pointer
    }

    .item {
        margin-bottom: 30px
    }

    .item .box {
        text-align: center;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        height: 280px;
        position: relative;
        overflow: hidden
    }

    .item .cover {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(11, 33, 138, 0.5);
        transition: opacity 0.15s ease-in;
        opacity: 0;
        padding-top: 80px;
        color: #fff;
        text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.15)
    }

    .item:hover .cover {
        opacity: 1
    }

    .textColor {
        font-size: 3rem;
    }

    .item .name {
        font-weight: bold;
        margin-bottom: 8px;
        color: #09b8a5;
    }

    .name:hover {
        color: #6a0aac;
        transition: 0.2s linear;
    }

    .item .title {
        text-transform: uppercase;
        font-weight: bold;
        color: #bbd8fb;
        letter-spacing: 2px;
        font-size: 13px;
        margin-bottom: 20px
    }

    .social {
        font-size: 18px
    }

    .social a {
        color: inherit;
        margin: 0 10px;
        display: inline-block;
        opacity: 0.7
    }

    .social a:hover {
        opacity: 1
    }
</style>
