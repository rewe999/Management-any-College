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
                            <td><b>{{$form->title}}</b></td>
                            <td>
                                <ul>
                                    @foreach($form->attachments as $fo)
                                        <li><a href="{{asset('files')}}/{{$fo->file}}" class="d-inline">{{$fo->file}}</a></li>
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
