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
                <tr>
                    <th scope="row">1</th>
                    <td>Testowy tytuł</td>
                    <td>Testowy opis</td>
                    <td><a href="#">Testowy załącznik</a> </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Testowy tytuł2</td>
                    <td>Testowy opis2</td>
                    <td><a href="#">Testowy załącznik2</a> </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Testowy tytuł3</td>
                    <td>Testowy opis3</td>
                    <td><a href="#">Testowy załącznik3</a> </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection
