@extends('layout')
@section('content')
<div class="breadcrumbs">
    <a href="index.html">Главная</a> / <a href="{{route('news')}}">Новости</a> / <a href="#">{{$data->title}}</a>
</div>

<div class="content-zone">
    <div class="post">
        <p class="header">{{$data->title}}</p>


        <div class="text">
            <p class="fulltext"> <img width=300 height="300" src="{{asset('uploads/'.$data->image)}}" alt="Новость"/>
                {{$data->full}}
            </p>

            <div class="bottom"><span class="date">{{$data->created_at}}</span></div>
        </div>
    </div>
</div>

@stop