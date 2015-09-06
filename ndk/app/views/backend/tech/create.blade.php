@extends('backend.layout')
@section('title')
    <title>Вакансия - создание - Meow! CMS</title>
    <script src="//cdn.ckeditor.com/4.4.7/full/ckeditor.js"></script>

@stop
@section('content')
        <div class="container">
            <h1>Добавить новость</h1>

            <div style="margin-top:50px;" class="mainbox col-md-8">

                {{Form::open(array('url' => route('pcreateVacancy'),'class' => 'form-horizontal'))}}
                {{Form::token();}}
                <div class="input-group">
                    <label for="name">Имя</label>
                    <input id="name" type="text" class="form-control" name="name"
                           placeholder="Имя">
                </div>

                <br/>

                    <div class="input-group">
                          <label for="requirements">Требования</label>
                          <textarea id="requirements" class="form-control" name="requirements"
                                 placeholder="text">
                          </textarea>
                      </div>

                <br />
                                        <div class="input-group">
                                              <label for="duties">Обязанности</label>
                                              <textarea id="duties" class="form-control" name="duties"
                                                     placeholder="text">
                                              </textarea>
                                          </div>
                                          <br/>
                                                              <div class="input-group">
                                                                    <label for="conditions">Условия</label>
                                                                    <textarea id="conditions" class="form-control" name="conditions"
                                                                           placeholder="text">
                                                                    </textarea>
                                                                </div>
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