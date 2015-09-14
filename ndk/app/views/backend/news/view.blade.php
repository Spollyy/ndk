@extends('backend.layout')
@section('title')
    <title>Новость - Meow! CMS</title>
@stop
@section('content')
    <br />
    <br />
    <table class="admin-table table table-striped ">
        <tr>
            <td><b>Имя</b></td>
            <td>{{$data->title}}</td>
        </tr>
        <tr>
            <td><b>Описание</b></td>
            <td>{{$data->text}}</td>
        </tr>
    </table>
@stop
