@extends('backend.layout')
@section('title')
    <title>{{$data->name}} - редактирование - Meow! CMS</title>
    <script src="//cdn.ckeditor.com/4.4.7/full/ckeditor.js"></script>

@stop
@section('content')
        <div class="container">
            <h1>{{$data->name}} - редактирование</h1>

            <div style="margin-top:50px;" class="mainbox col-md-8">

                {{Form::open(array('url' => route('pupdateVacancy'), 'method' => 'put', 'files' => true,'class' => 'form-horizontal'))}}
                {{Form::token();}}
                <input type="hidden" name="id" value="{{$data->id}}"/>
                <div class="input-group">
                    <label for="name">Имя</label>
                    <input id="name" type="text" class="form-control" name="name"
                           placeholder="Имя" value="{{$data->name}}">
                </div>

                <br/>

                <div class="input-group">
                    <label for="requirements">Требования</label><br/>
                    {{ Form::textarea('requirements', $data->requirements , array('id'=>'requirements')) }}
                </div>

                <br />
                <div class="input-group">
                    <label for="duties">Обязанности</label><br/>
                    {{ Form::textarea('duties', $data->duties , array('id'=>'duties')) }}
                </div>

                <br />
                <div class="input-group">
                    <label for="conditions">Условия</label><br/>
                    {{ Form::textarea('conditions', $data->conditions , array('id'=>'conditions')) }}
                </div>


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