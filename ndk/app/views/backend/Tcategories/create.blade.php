@extends('backend.layout')
@section('title')
    <title>Создать категорию - Meow! CMS</title>
@stop
@section('content')
        <div class="container">
            <h1>Добавить категорию</h1>

            <div style="margin-top:50px;" class="mainbox col-md-8">

                {{Form::open(array('url' => route('pcreateTCat'), 'class' => 'form-horizontal'))}}
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
                <select id="parent" name="pcat_id" class="form-control">
                @foreach($data as $d)
                    @if ($d->pcat_id < 0)
                    <option value="{{$d->id}}">{{$d->name}}</option>
                    @endif
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