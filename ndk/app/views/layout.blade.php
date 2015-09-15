<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    {{HTML::script('js/j.js')}}
    {{HTML::script('js/script.js')}}
    {{HTML::style('style.css')}}
</head>
<body>


<header>
    <div class="menu_top_left">
        <div class="menu_items">
            <a href="#" class="menu_item item1">О компании</a>
            <a href="career.html" class="menu_item item2">Работа</a>
            <a href="#" class="menu_item item3">Стандарты</a>
            <a href="technic.html" class="menu_item item4">Наша техника</a>
        </div>
    </div>
</header>

<div class="menu_middle_right">
    <div class="logo"></div>

    <div id='cssmenu'>
        <ul>
            <li class='active has-sub'><a href='service.html'><span>Услуги</span></a>
                <ul>
                @foreach($scat as $s)
                    @if($s->pcat_id < 0)
                    <li class='has-sub'><a href='#'><span>{{$s->name}}</span></a>
                    </li>
                    @endif
                @endforeach
                </ul>
            </li>


            <li class='active has-sub'><a href='#'><span>Проекты</span></a>
                <ul>
                    <li class='has-sub'><a href='#'><span>Product 1</span></a>
                        <ul>
                            <li><a href='#'><span>Sub Product</span></a></li>
                            <li class='last'><a href='#'><span>Sub Product</span></a></li>
                        </ul>
                    </li>
                    <li class='has-sub'><a href='#'><span>Product 2</span></a>
                        <ul>
                            <li><a href='#'><span>Sub Product2</span></a></li>
                            <li class='last'><a href='#'><span>Sub Product2</span></a></li>
                        </ul>
                    </li>
                </ul>
            </li>


            <li><a href='news.html'><span>Новости</span></a></li>
            <li class='last'><a href='contacts.html'><span>Контакты</span></a></li>
        </ul>
    </div>
</div>
@yield('content')

<div class="story">
    <span>Национальная демонтажная компания <br/>Copyright 2015</span>
</div>
<div class="contactus">
    <img src="img/cloud_small.png" alt="Связаться с нами"/>
</div>
<div class="shadow">
    <img class='message' src="img/msg.png" alt="Наш Email"/>

    <p>contact@ндк.орг</p>
    <img class='phone' src="img/phone.png" alt="Наш Телефон"/>

    <p>+7 916 001 22 22</p>
</div>
</body>
</html>