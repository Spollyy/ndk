@extends('backend.layout')
@section('title')
    <title>Проекты - Meow! CMS</title>
@stop
@section('content')
    <h1>Проекты</h1>
    <a href="{{route('createProject')}}"  class="btn btn-sm btn-success">Добавить вакансию</a>
    <br />
    <br />
    <table class="table table-striped">
        <tr>
            <td><b>Имя</b></td>
            <td></td>
        </tr>
        @foreach($data as $d)
        <tr>
            <td>{{$d->title}}</td>
            <td>
                <a href="{{route('updateProject',array('id' => $d->id))}}" class="btn btn-sm btn-warning glyphicon glyphicon-edit"></a>
                {{Form::open(array('url' => route('deleteProject'), 'method' => 'delete', 'style' => 'display:inline'))}}
                    <button type="submit" class="btn btn-sm btn-danger glyphicon glyphicon-remove"></button>
                {{Form::close()}}
            </td>
            </tr>
        @endforeach
    </table>
@stop