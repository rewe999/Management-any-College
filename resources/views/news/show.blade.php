@extends('layouts.layout')
@section('title','Aktualności')
@section('content')
    <div class="container">
    <div class="row bg-success text-center title">{{$new->title}}</div>
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
    }
</style>
