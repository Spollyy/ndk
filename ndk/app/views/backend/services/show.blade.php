@extends('backend.layout')
@section('title')
    <title>Вакансии - Meow! CMS</title>
@stop
@section('content')
    <h1>Вакансии</h1>
    <a href="" class="btn btn-sm btn-success">Добавить вакансию</a>
    <br />
    <br />
    <table class="table table-striped">
        <tr>
            <td><b>Имя</b></td>
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