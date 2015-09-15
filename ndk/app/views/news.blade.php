@extends('layout')
@section ('content')
<div class="breadcrumbs">
    <a href="index.html">Главная</a> / <a href="#">Новости</a>
</div>

<div class="content-zone">
    @foreach ($newss as $news)
    <div class="news">
        <img height=300 width=300 src="{{asset('uploads/'.$news->image)}}" alt="Новость"/>

        <div class="text">
            <p class="header">{{$news->title}}</p>

            <p class="fulltext">{{$news->full}}</p>

            <div class="bottom"><span class="next"><a href="{{route('post',[$news->url])}}">Читать далее...</a></span><span class="date">{{$news->created_at}}</span></div>
        </div>
    </div>
    @endforeach

    <div class="pagination">
    {{$newss->links()}}
    </div>
</div>

@stop