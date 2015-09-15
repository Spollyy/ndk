<!doctype html>
<html lang="en">
<head>
    @yield('title')
    {{HTML::style('css/bootstrap.css')}}
    {{HTML::style('css/bootstrap-theme.css')}}
    {{HTML::script('js/j.js')}}
    {{HTML::script('js/jquery.js')}}
    {{HTML::script('js/bootstrap.js')}}
</head>
<body>
<header>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Meow! Cms</a>
            </div>
            <ul class="nav navbar-nav">
            <li><a href="{{route('showPage')}}">Страницы</a></li>
            <li><a href="{{route('showProject')}}">Проекты</a></li>
            <li><a href="{{route('showVacancy')}}">Вакансии</a></li>
            <li><a href="{{route('showStandart')}}">Стандарты</a></li>
            <li><a href="{{route('showNews')}}">Новости</a></li>
            <li><a href="{{route('showService')}}">Услуги</a></li>
            <li><a href="{{route('showSCat')}}">Катгории услуг</a></li>
            <li><a href="{{route('showTech')}}">Техника</a></li>
            <li><a href="{{route('showTCat')}}">Катгории техники</a></li>


            </ul>
            @if(Auth::check())
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{route('')}}">Exit</a></li>
                </ul>
            @endif
        </div>
    </nav>
</header>
@yield('content')
</body>
</html>
