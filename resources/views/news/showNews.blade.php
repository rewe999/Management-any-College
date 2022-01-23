@extends('layouts.admin')
@section('title','Pokaż aktualności')
@section('content')
    @if(session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <div class="container">
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Data</th>
                    <th scope="col">Tytuł</th>
                    <th scope="col">Opis</th>
                    <th scope="col">Akcje</th>
                </tr>
                </thead>
                <tbody>
                @foreach($news as $new)
                    <tr>
                        <th scope="row">{{$new->id}}</th>
                        <td>{{$new->date}}</td>
                        <td>{{$new->title}}</td>
                        <td>{!! Str::limit($new->content,20) !!}</td>
                        <td class="d-flex">
                            <a href="{{route('news.edit.id',$new->id)}}"><button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button></a>
                            <button class="btn btn-danger btn-sm delete" data-id="{{ $new->id }}" data-title="{{ $new->title }}"><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection

@section('javascript')
    const deleteUrl = "{{ url('aktualnosci') }}/";
    const confirmDelete = "Czy na pewno chcesz usunąć ?";
@endsection

@section('js-files')
    <script src="{{asset('js/delete.js')}}"></script>
@endsection
