@extends('layouts.admin')
@section('title','Admin Panel')
@section('content')
    <div class="container text-center pb-5">
        <div class="alert alert-info" role="alert">
            <h1>Dashboard</h1>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4 col-sm-12 col-xs-12">
                <div class="card p-4">
                    <div class="d-flex">
                        <h6 class="flex-grow-1">Legnica</h6>
                        <h6>{{date("H:i")}}</h6>
                    </div>
                    <div class="d-flex flex-column temp mt-5 mb-3">
                        <h1 class="mb-0 font-weight-bold" id="heading"> {{(float)json_encode($weather['main']['temp']) - 273.15}}° C </h1>
                            <span class="small grey">{{ $weather['weather'][0]['main'] }}</span>
                    </div>
                    <div class="d-flex">
                        <div class="temp-details flex-grow-1">
                            <p class="my-1"> <i class="fas fa-wind"> </i> <span> {{(int) (json_encode($weather['wind']['speed']) * 3.6) }} km/h </span> </p>
                            <p class="my-1"> <i class="fas fa-tint mr-2" aria-hidden="true"></i> <span> {{(int)json_encode($weather['main']['humidity'])}} % </span> </p>
                        </div>
                        <div> <img src="http://openweathermap.org/img/wn/{{ $weather['weather'][0]['icon'] }}.png" width="100px"> </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

<style>
    .card {
        background-color: #ffffff;
        border-radius: 50px;
        color: #6f707d;
        font-family: 'Marcellus', serif
    }

    #heading {
        font-size: 55px;
        color: #2b304d
    }

    .temp {
        place-items: center
    }

    .temp-details>p>span,
    .grey {
        color: #a3acc1;
        font-size: 12px
    }

    .fa {
        color: #a5a5b1
    }

    *:focus {
        outline: none
    }
</style>
