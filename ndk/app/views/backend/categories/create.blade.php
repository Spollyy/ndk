@extends('meow.master')
@section('title')
    <title>Создать категорию - Meow! CMS</title>
@stop
@section('navigation')
    <li class=""><a href="{{route('admin_aboutus')}}">О нас</a></li>
    <li class=""><a href="{{route('admin_categories')}}">Категории</a></li>
    <li class="active"><a>Категории создание</a></li>
    <li class=""><a href="{{route('admin_pages')}}">Страницы</a></li>
@stop
@section('content')
        <div class="container">
            <h1>Добавить категорию</h1>

            <div style="margin-top:50px;" class="mainbox col-md-8">

                {{Form::open(array('url' => route('admin_categories_postcreate'), 'class' => 'form-horizontal'))}}
                {{Form::token();}}
                <div class="input-group">
                    <label for="name">Название</label>
                    <input id="name" type="text" class="form-control" name="name"
                           placeholder="Имя">
                </div>

                <br/>

                <div class="input-group">
                    <label for="description">URL</label>
                    <input id="description" type="text" class="form-control" name="url"
                           placeholder="URL">
                </div>

                <br />

                <label for="parent">Родительская категория</label><br/>
                <select id="parent" name="parent" class="form-control">
                    <option value="-1">Родительская категория</option>
                @foreach($data as $d)
                    <option value="{{$d->id}}">{{$d->name}}</option>

                @endforeach
                </select>

                <br/>

                <div class="form-group">
                    <!-- Button -->

                    <div class="col-sm-12 controls">
                        <button type="submit" id="btn-login" class="btn btn-success">Создать </button>
                    </div>
                </div>
                {{Form::close()}}
            </div>
        </div>
@stop