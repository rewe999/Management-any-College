@extends('layouts.admin')
@section('title','Edytuj druki')
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
                    <th scope="col">Tytuł</th>
                    <th scope="col">Opis</th>
                    <th scope="col">Akcje</th>
                </tr>
                </thead>
                <tbody>
                @foreach($prints as $print)
                    <tr>
                        <th scope="row">{{$print->id}}</th>
                        <td>{{$print->title}}</td>
                        <td>{{ Str::limit($print->description,20) }}</td>
                        <td class="d-flex">
                            <a href="{{route('form.edit.id',$print->id)}}"><button class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button></a>
                            <button class="btn btn-danger btn-sm delete" data-id="{{ $print->id }}" data-title={{ $print->title }}><i class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection

@section('javascript')
    const deleteUrl = "{{ url('druki') }}/";
    const confirmDelete = "Czy na pewno chcesz usunąć ?";
@endsection

@section('js-files')
    <script src="{{asset('js/delete.js')}}"></script>
@endsection
