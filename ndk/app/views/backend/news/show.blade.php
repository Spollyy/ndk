@extends('backend.layout')
@section('title')
    <title>Новости - Meow! CMS</title>
@stop
@section('content')
    <h1>Новости</h1>
    <a href="{{route('createNews')}}" class="btn btn-sm btn-success">Добавить новость</a>
    <br />
    <br />
    <table class="table table-striped">
        <tr>
            <td><b>Url</b></td>
            <td></td>
        </tr>
        @foreach($data as $d)
        <tr>
            <td>{{$d->url}}</td>
            <td>
                <a href="{{route('updateNews',array('id' => $d->id))}}" class="btn btn-sm btn-warning glyphicon glyphicon-edit"></a>
                {{Form::open(array('url' => route('deleteNews'), 'method' => 'delete', 'style' => 'display:inline'))}}
                    <button type="submit" class="btn btn-sm btn-danger glyphicon glyphicon-remove"></button>
                {{Form::close()}}
            </td>
            </tr>
        @endforeach
    </table>
@stop