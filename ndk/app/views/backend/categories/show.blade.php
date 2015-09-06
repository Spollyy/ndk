@extends('meow.master')
@section('title')
    <title>Категории - Meow! CMS</title>
@stop
@section('navigation')
    <li class=""><a href="{{route('admin_aboutus')}}">О нас</a></li>
    <li class="active"><a href="{{route('admin_categories')}}">Категории</a></li>
    <li class=""><a href="{{route('admin_pages')}}">Страницы</a></li>
@stop
@section('content')
    <h1>Категории</h1>
    <a href="{{route('admin_categories_getcreate')}}" class="btn btn-sm btn-success">Добавить Категорию</a>
    <br />
    <br />
    <table class="table table-striped">
        <tr>
            <td><b>Название</b></td>
            <td><b>url</b></td>
            <td><b>Родительская категория</b></td>
            <td></td>
        </tr>
        @foreach($data as $d)
        <tr>
            <td>{{$d->name}}</td>
            <td>/{{$d->url}}</td>
            @if($d->parent_id > 0)
            <td>{{Categories::find($d->parent_id)->name}}</td>
            @else
            <td>Основнaя категория</td>
            @endif
            <td>
                <a href="{{route('admin_categories_getedit', array('id' => $d->id))}}" class="btn btn-sm btn-warning glyphicon glyphicon-edit"></a>
                {{Form::open(array('url' => route('admin_categories_delete',array('id' => $d->id)), 'method' => 'delete', 'style' => 'display:inline'))}}
                    <button type="submit" class="btn btn-sm btn-danger glyphicon glyphicon-remove"></button>
                {{Form::close()}}
            </td>
            </tr>
        @endforeach
    </table>
@stop