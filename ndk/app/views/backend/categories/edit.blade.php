@extends('meow.master')
@section('title')
    <title>Pедактирование {{$data->name}} - Meow! CMS</title>
@stop
@section('navigation')
    <li class=""><a href="{{route('admin_aboutus')}}">О нас</a></li>
    <li class=""><a href="{{route('admin_categories')}}">Категории</a></li>
    <li class="active"><a>{{$data->name}} редактирование</a></li>
    <li class=""><a href="{{route('admin_pages')}}">Страницы</a></li>
@stop
@section('content')
        <div class="container">
            <h1>{{$data->name}} - редактирование</h1>

            <div style="margin-top:50px;" class="mainbox col-md-8">

                {{Form::open(array('url' => route('admin_categories_putedit'), 'method' => 'put', 'files' => true,'class' => 'form-horizontal'))}}
                {{Form::token();}}
                <input type="hidden" name="id" value="{{$data->id}}"/>
                <div class="input-group">
                    <label for="name">Название</label>
                    <input id="name" type="text" class="form-control" name="name"
                           placeholder="Название" value="{{$data->name}}">
                </div>

                <br/>

                <div class="input-group">
                    <label for="description">URL</label>
                    <input id="description" type="text" class="form-control" name="url"
                           placeholder="URL" value="{{$data->url}}">
                </div>

                <br />
                <label for="parent">Родительская категория</label><br/>
                <select id="parent" name="parent" class="form-control">
                    <option value="-1">Родительская категория</option>
                @foreach($all as $d)
                    @if ($data->id != $d->id )

                        @if ($data->parent_id == $d->id)

                            <option value="{{$d->id}}" selected>{{$d->name}}</option>
                        @else
                            <option value="{{$d->id}}">{{$d->name}}</option>
                        @endif
                    @endif
                @endforeach
                </select>

                <br/>

                <div class="form-group">
                    <!-- Button -->

                    <div class="col-sm-12 controls">
                        <button type="submit" id="btn-login" class="btn btn-success">Изменить </button>
                    </div>
                </div>
                {{Form::close()}}
            </div>
        </div>
@stop