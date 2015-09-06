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
            <li class="#"><a href="#">Страницы</a></li>
            <li><a href="#">Проекты</a></li>
            <li><a href="#">Вакансии</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Услуги<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Рециклинг</a></li>
                    <li><a href="#">Экологическое сопровждение</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Техника<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Тут две категории</a></li>
                    <li><a href="#">Вторая</a></li>
                </ul>
            </li>
            </ul>
            @if(Auth::check())
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Exit</a></li>
                </ul>
            @endif
        </div>
    </nav>
</header>
@yield('content')
</body>
</html>
