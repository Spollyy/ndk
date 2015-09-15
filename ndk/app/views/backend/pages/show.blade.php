@extends('backend.layout')
@section('title')
    <title>Страницы - Meow! CMS</title>
@stop
@section('content')
    <h1>Страницы</h1>
    <br />
    <br />
    <table class="table table-striped">
        <tr>
            <td><b>Имя</b></td>
            <td></td>
        </tr>
        <tr>
            <td><b>Главная</b></td>
            <td></td>
        </tr>
        <tr>
            <td><b>Новости</b></td>
            <td></td>
        </tr>
        <tr>
            <td><b>Проекты</b></td>
            <td></td>
        </tr>
        <tr>
            <td><b>Стандарты</b></td>
            <td></td>
        </tr>
        <tr>
            <td><b>Техника</b></td>
            <td></td>
        </tr>
        <tr>
            <td><b>Вакансии</b></td>
            <td></td>
        </tr>
        <tr>
            <td><b>Контакты</b></td>
            <td></td>
        </tr>
        <tr>
            <td><b>Услуги</b></td>
            <td></td>
        </tr>
        @foreach($data as $d)
        <tr>
            <td>{{$d->name}}</td>
            <td>
                <a href="{{route('updateVacancy',array('id' => $d->id))}}" class="btn btn-sm btn-warning glyphicon glyphicon-edit"></a>
                {{Form::open(array('url' => route('deleteVacancy'), 'method' => 'delete', 'style' => 'display:inline'))}}
                    <button type="submit" class="btn btn-sm btn-danger glyphicon glyphicon-remove"></button>
                {{Form::close()}}
            </td>
            </tr>
        @endforeach
    </table>
@stop