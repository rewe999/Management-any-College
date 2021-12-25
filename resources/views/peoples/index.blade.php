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
                <div class="col-md-4 col-lg-3 col-sm-4 item">
                    <div class="box">
                        @if($people->avatar)
                            <img src="{{$people->image}}"
                                 class="img-fluid rounded avatarImage" alt="image">
                        @else
                            <img src="https://smart-be.pl/wp-content/uploads/2016/07/no-avatar.jpg"
                                 class="img-fluid rounded mx-auto d-block avatarImage" alt="image ">
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

<link rel="stylesheet" href="{{asset("css/peoples.css")}}">

<style>
    .team-grid {
        background-image: url("{{asset('assets/pwsz-img.jpg')}}");
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
