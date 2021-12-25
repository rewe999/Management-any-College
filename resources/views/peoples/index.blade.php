@extends('layouts.layout')
@section('title','Pracownicy Uczelni')
@section('content')
    <section id="team">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-6">
                    <h2 class="text-xl-center fs-1 textColor">Poznaj naszych Pracowników!</h2>
                </div>
            </div>

            <div class="row">
                @foreach($peoples as $people)
                    <div class="col-lg-3 col-md-6 m-auto">
                        <div class="member">
                            <div class="member-img">
                                @if($people->avatar)
                                    <img src="{{$people->image}}"
                                         class="img-fluid rounded avatarImage" alt="image">
                                @else
                                    <img src="{{asset('assets/no-avatar.jpg')}}"
                                         class="img-fluid rounded mx-auto d-block avatarImage" alt="image ">
                                @endif
                            </div>
                            <div class="member-info">
                                <h4 class="memberAHref"><a href="{{route('peoples.show',$people->id)}}" class="memberAHref">{{$people->fullName}}</a></h4>
                                <span class="positionName">{{$people->position}}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="container">
                <div class="row">
                    <div class="m-auto">{{ $peoples->links() }}</div>
                </div>
            </div>

        </div>
    </section>


@endsection

<link rel="stylesheet" href="{{asset("css/peoples.css")}}">

<style>
    #team {
        padding: 60px 0;
        text-align: center;
        background-image: url("{{asset('assets/pwsz-img.jpg')}}");
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
