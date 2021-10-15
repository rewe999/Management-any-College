@extends('layouts.layout')
@section('title','Aktualności')
@section('content')
    <div class="container content-size">
    <div class="row text-center title">{{$new->title}}</div>
        <div class="row pt-3">
            <tr>
                <td>{!! $new->content !!}</td>
            </tr>
        </div>
    </div>
@endsection

<style>
    .title {
        height: 5rem;
        color: #fff;
        font-size: 2rem;
        font-family: Roboto;
        display: flex;
        flex-direction: row;
        flex-wrap: nowrap;
        justify-content: center;
        align-items: center;
        align-content: stretch;
        background-color: #aec62c;
    }
    .content-size {
        min-height: 29.6vh;
    }
</style>
