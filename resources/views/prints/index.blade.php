@extends('layouts.layout')
@section('title','Druki')
@section('content')
    <div class="container">
        <div class="row">
            <h1 class="text-center mx-auto pb-5">DRUKI</h1>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">tytuł</th>
                    <th scope="col">opis</th>
                    <th scope="col">załącznik</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($forms as $form)
                        <tr>
                            <th scope="row">{{$form->id}}</th>
                            <td>{{$form->title}}</td>
                            <td>{{$form->description}}</td>
                            <td>
{{--                                <a href="{{asset('files')}}/{{$attachments[$form->id]->file}}" class="d-inline">{{$attachments[$form->id]->file}}</a>--}}
{{--                                {{$form->getAttachment($form->id)}}--}}
                                <ul>
                                @foreach($form->getAttachment($form->id) as $fo)
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
