@extends('backend.layout')
@section('title')
    <title>Вакансия - создание - Meow! CMS</title>
    <script src="//cdn.ckeditor.com/4.4.7/full/ckeditor.js"></script>

@stop
@section('content')
    <div class="container">
        <h1>Главная - редактирование</h1>

        <div style="margin-top:50px;" class="mainbox col-md-8">

            {{Form::open(array('url' => route('pupdateMain'), 'method' => 'put', 'class' => 'form-horizontal'))}}
            {{Form::token();}}
            <div class="input-group">
                <label for="name">Тайтл</label>
                <br/>
                {{Form::text('title', $data->title)}}
            </div>
            <br/>
            <div class="input-group">
                <label for="name">Дескрипшн</label>
                <br/>
                {{Form::text('description', $data->description)}}
            </div>
            <br/>
            <div class="input-group">
                <label for="name">Ключевики</label>
                <br/>
                {{Form::text('keywords', $data->keywords)}}
            </div>
            <br/>
            <br/>
            <div class="input-group">
                <label for="name">Текст</label>
                <br/>
                {{Form::textarea('title', $data->text)}}
            </div>
            <div class="input-group">
                <label for="name">Первое кольцо текст</label>
                <br/>
                {{Form::text('first_circle_text', $data->first_circle_text)}}
            </div>
            <br/>
            <div class="input-group">
                <label for="name">Первое кольцо цифра</label>
                <br/>
                {{Form::text('first_circle_num', $data->first_circle_num)}}
            </div>
            <br/>
            <div class="input-group">
                <label for="name">Второе кольцо текст</label>
                <br/>
                {{Form::text('second_circle_text', $data->second_circle_text)}}
            </div>
            <br/>
            <div class="input-group">
                <label for="name">Второе кольцо цифра</label>
                <br/>
                {{Form::text('second_circle_num', $data->second_circle_num)}}
            </div>
            <br/>
            <div class="input-group">
                <label for="name">Третье кольцо текст</label>
                <br/>
                {{Form::text('third_circle_text', $data->third_circle_text)}}
            </div>
            <br/>
            <div class="input-group">
                <label for="name">Третье кольцо цифра</label>
                <br/>
                {{Form::text('third_circle_num', $data->first_circle_num)}}
            </div>
            <br/>
            <div class="input-group">
                <label for="name">Заголовок</label>
                <br/>
                {{Form::text('title', $data->h1)}}
            </div>

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