@extends('meow.master')
@section('title')
    <title>{{$data->name}} - Meow! CMS</title>
    {{HTML::style('/ext/css/admin_style.css')}}
@stop
@section('navigation')
    <li class=""><a href="{{route('admin_aboutus')}}">О нас</a></li>
    <li ><a href="{{route('admin_categories')}}">Категории</a></li>
    <li class=""><a href="{{route('admin_pages')}}">Страницы</a></li>
@stop
@section('content')
    <h1>{{$data->name}}</h1>
    <br />
    <br />
    <table class="admin-table table table-striped ">
        <tr>
            <td><b>Имя</b></td>
            <td>{{$data->name}}</td>
        </tr>
        <tr>
            <td><b>Описание</b></td>
            <td>{{$data->text}}</td>
        </tr>
        <tr>
            <td>
                <a href="{{route('admin_news_getedit', array('id' => $data->id))}}" class="btn btn-info cntr">Редактировать</a>
            </td><td>
                {{Form::open(array('url' => route('admin_news_delete',array('id' => $data->id)), 'method' => 'delete', 'style' => 'display:inline'))}}
                    <button type="submit" class="btn btn-danger cntr">Удалить</button>
                {{Form::close()}}
            </td>
        </tr>
    </table>
@stop
