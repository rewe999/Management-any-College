@extends('layouts.layout')
@section('title','Druki')
@section('content')
    <div class="container">
        <div class="row">
            <h1 class="text-center mx-auto pb-5">DRUKI</h1>
            <table class="table">
                <thead>
                </thead>
                <tbody>
                    @foreach($forms as $form)
                        <tr>
                            <td><h4><b>{{$form->title}}</b></h4></td>
                            <td>
                                <ul>
                                    @foreach($form->attachments as $fo)
                                        <li><h6><a href="{{asset('files')}}/{{$fo->file}}" class="d-inline">{{$fo->file}}</a></h6></li>
                                    @endforeach
                                </ul>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
