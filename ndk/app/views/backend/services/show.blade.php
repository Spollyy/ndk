@extends('backend.layout')
@section('title')
    <title>Услуги - Meow! CMS</title>
@stop
@section('content')
    <h1>Услуги</h1>
    <a href="{{route('createService')}}"  class="btn btn-sm btn-success">Добавить услугу</a>
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
                <a href="{{route('updateService',array('id' => $d->id))}}" class="btn btn-sm btn-warning glyphicon glyphicon-edit"></a>
                {{Form::open(array('url' => route('deleteService'), 'method' => 'delete', 'style' => 'display:inline'))}}
                    <button type="submit" class="btn btn-sm btn-danger glyphicon glyphicon-remove"></button>
                {{Form::close()}}
            </td>
            </tr>
        @endforeach
    </table>
@stop