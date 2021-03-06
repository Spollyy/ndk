<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <link rel="stylesheet" href="style.css"/>
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
                    <li class='has-sub'><a href='#'><span>Рециклинг</span></a>
                        <ul>
                            <li><a href='#'><span>Sub Product</span></a></li>
                            <li class='last'><a href='#'><span>Sub Product</span></a></li>
                        </ul>
                    </li>
                    <li class='has-sub'><a href='#'><span>Подготовка территории</span></a>
                        <ul>
                            <li><a href='#'><span>Sub Product2</span></a></li>
                            <li class='last'><a href='#'><span>Sub Product2</span></a></li>
                        </ul>
                    </li>
                    <li class='has-sub'><a href='#'><span>Промышленный демонтаж</span></a>
                        <ul>
                            <li><a href='#'><span>Sub Product</span></a></li>
                            <li class='last'><a href='#'><span>Sub Product</span></a></li>
                        </ul>
                    </li>
                    <li class='has-sub'><a href='#'><span>Демонтаж оборудования</span></a>
                        <ul>
                            <li><a href='#'><span>Sub Product2</span></a></li>
                            <li class='last'><a href='#'><span>Sub Product2</span></a></li>
                        </ul>
                    </li>
                    <li class='has-sub'><a href='#'><span>Ликвидация опасного производства</span></a>
                        <ul>
                            <li><a href='#'><span>Sub Product</span></a></li>
                            <li class='last'><a href='#'><span>Sub Product</span></a></li>
                        </ul>
                    </li>
                    <li class='has-sub'><a href='#'><span>Экологическое сопровождение</span></a>
                        <ul>
                            <li><a href='#'><span>Sub Product2</span></a></li>
                            <li class='last'><a href='#'><span>Sub Product2</span></a></li>
                        </ul>
                    </li>
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
<div class="breadcrumbs">
    <a href="index.html">Главная</a> / <a href="#">Вакансии</a>
</div>
<div class="content-zone">
    <p class="content-zone__text-field">
        At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque
        corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in
        culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et
        expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id
        quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem
        quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et
        molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus
        maiores alias consequatur aut perferendis doloribus asperiores repellat
    </p>
    @foreach ($vac as $v)
    <div class="vacancy">
        <p class="name">{{$v->name}}</p><img class="btn" src="img/button_up.png" alt="click me"/>
        <div class="full_vacancy">
            <p class="headers">
                Требования
            </p>
                {{$v->requirenments}}
            <p class="headers">
                Обязанности
            </p>
                {{$v->duties}}
            <p class="headers">
                Условия работы
            </p>
                {{$v->conditions}}
        </div>
    </div>
    @endforeach
</div>


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