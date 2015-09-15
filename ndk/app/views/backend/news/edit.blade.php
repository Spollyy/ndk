@extends('backend.layout')
@section('title')
    <title>Новости - редактирование - Meow! CMS</title>
    <script src="//cdn.ckeditor.com/4.4.7/full/ckeditor.js"></script>

@stop
@section('content')
        <div class="container">
            <h1>Редактировать новость</h1>

            <div style="margin-top:50px;" class="mainbox col-md-8">

                {{Form::open(array('url' => route('pupdateNews'),'class' => 'form-horizontal','files' => true, 'method' => 'put'))}}
                {{Form::token();}}
                <div class="input-group">
                    <label for="title">Заголовок</label>
                    <input id="title" type="text" class="form-control" name="title"
                           placeholder="Заголовок" value="{{$data->title}}">
                </div>
                <div class="input-group">
                    <label for="url">url</label>
                    <input id="url" type="text" class="form-control" name="url"
                           placeholder="url" value="{{$data->url}}">
                </div>
                <br/>
                                       <div class="input-group">
                                                                    <label for="text">Условия</label>
                                                                    <textarea id="text" class="form-control" name="text"
                                                                           placeholder="text" value="{{$data->full}}">
                                                                    </textarea>
                                                                </div>
                                                                {{Form::file('file')}}
                <div class="form-group">
                    <!-- Button -->

                    <div class="col-sm-12 controls">
                        <button type="submit" id="btn-login" class="btn btn-success">Создать </button>
                    </div>
                </div>
                {{Form::close()}}
            </div>
                            <script>
                                CKEDITOR.replace( 'text' );
                            </script>
        </div>
@stop