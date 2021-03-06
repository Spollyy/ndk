@extends('backend.layout')
@section('title')
    <title>Проект - создание - Meow! CMS</title>
    <script src="//cdn.ckeditor.com/4.4.7/full/ckeditor.js"></script>

@stop
@section('content')
        <div class="container">
            <h1>Добавить проект</h1>

            <div style="margin-top:50px;" class="mainbox col-md-8">

                {{Form::open(array('url' => route('pcreateProject'),'class' => 'form-horizontal'))}}
                {{Form::token();}}
                <div class="input-group">
                    <label for="title">Название</label>
                    <input id="title" type="text" class="form-control" name="title"
                           placeholder="Название">
                </div>

                <div class="input-group">
                    <label for="url">УРЛ</label>
                    <input id="url" type="text" class="form-control" name="url"
                           placeholder="УРЛ">
                </div>


                                          <br/>
                                                              <div class="input-group">
                                                                    <label for="text">Текст</label>
                                                                    <textarea id="text" class="form-control" name="text"
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
                <script>
                    CKEDITOR.replace( 'text' );
                </script>
@stop