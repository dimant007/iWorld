<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" type="text/css" href="bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="index.css" />
    <link rel="stylesheet" type="text/css" href="media.css" />
    <script type="text/javascript" src="jquery-2.1.4.js"></script>
    <script type="text/javascript" src="index2.js"></script>
    <script type="text/javascript" src="scrolltop.js"></script>
    <?php
        require_once 'index2.php';
    ?>
</head>
<body>
<div class="header">
    <div class="container">
        <div class="row header-block">
            <div class="col-sm-2">
                <div id="leftBar"><img src="img/logo-logo.png"></div>
            </div>
            <div class="col-sm-8">
                <div class="menuBar">
                    <ul>
                        <li>
                            <a href="#">Главная</a>
                        </li>
                        <li>
                            <a href="#">Схема работы</a>
                        </li>
                        <li>
                            <a href="#">О нас</a>
                        </li>
                        <li>
                            <a href="#">FAQ</a>
                        </li>
                        <li>
                            <a href="#">Отзывы</a>
                        </li>
                        <li>
                            <a href="#">Блог</a>
                        </li>
                        <li>
                            <a href="#">Контакты</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-2">
                <div id="rightBar">
                    <div>
                        <div id="rightBarIcon">
                            <img src="img/iPhone potrait.png">
                        </div>
                        <div id="rightBarPhones">
                            +38 (063) 864-54-03<br/>
                            +38 (068) 624-13-11
                        </div>
                    </div>
                    <div id="workingDays">
                        мы работаем: пн-пт 10:00-18:00
                    </div>
                    <div id="callback">
                        <a href="#">заказать обратный звонок</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="summary">
<div id = "tree">
    <p>Главная > Оценка устройства iphone 5 бу > Продажа / обмен iPhone 5</p>
</div>

<div class="container">
    <div class="row">
        <div class = "exchange">
            <p id="exchange-title">Продажа / обмен iPhone 5</p>
        </div>
    </div>
    <div class="row summary-row">
        <ul class="exchange-table">
            <li class="col-lg-4 info-header">
                <div class = "exchange-circle"><div class = "numbers">1</div></div>
                <div class="exchange-text">Заполняем информацию о вашем гаджете</div>
                <div class="arrow"></div>
            </li>
            <li class="col-lg-4 info-header">
                <div class = "exchange-circle"><div class = "numbers">2</div></div>
                <div class="exchange-text">Узнайте оценочную стоимость вашего гаджета</div>
                <div class="arrow"></div>
            </li>
            <li class="col-lg-4 info-header">
                <div class = "exchange-circle"><div class = "numbers">3</div></div>
                <div class="exchange-text">Получите деньги или новое устройство apple</div>
            </li>
        </ul>
    </div>
</div>

<div class = "result-check">
    <div class = "rectangle">
        <div id = "rectangle-title">
            Оценочная стоимость Вашего гаджета:
        </div>
        <div class = "rectangle-info">
            <div>Модель: iPhone5 32 GB</div>
            <div>Оценка сосстояния: 2</div>
            <div>Ваш уникальный номер: 01112455</div>
        </div>
        <div class="rectangle-cost">
            Стоимость: <div>2500 грн</div>
        </div>
        <div class="rectangle-button">
            <a href="#"><button>ПОЛУЧИТЬ ДЕНЬГИ</button></a>
        </div>
    </div>
</div>
<div class="container">
<div class="row">
    <div id="goods-title">
        Выбери модель для обмена и получи подарок
    </div>
</div>
<div class="row summary-row">

    <div class="col-md-6 choice-block">
        <figure>
            <img alt="iPhone 5c" title="iPhone 5c" src="img/5c.png">
        </figure>
        <div class="model-title">
            iPhone 5 c
        </div>
        <div class="choice-model-info">
            <form class="choice-form" method="POST">
                <div class="choice-model-color">
                    <p class="row-label">Цвет корпуса:</p>
                    <div class="choice-model-color-block">
                        <div class="choice-color-button">
                            <input value="1" type="radio" name="color"  id="item-68-95" checked="checked">
                            <label style=" background-color: Blue " class="checkbox" for="item-68-95"></label>
                        </div>
                        <div class="choice-color-button">
                            <input value="2" type="radio" name="color"  id="item-68-96">
                            <label style=" background-color: GreenYellow " class="checkbox" for="item-68-96"></label>
                        </div>
                        <div class="choice-color-button">
                            <input value="3" type="radio" name="color"  id="item-68-97">
                            <label style=" background-color: Yellow " class="checkbox" for="item-68-97"></label>
                        </div>
                        <div class="choice-color-button">
                            <input value="4" type="radio" name="color"  id="item-68-98">
                            <label style=" background-color: AliceBlue" class="checkbox" for="item-68-98"></label>
                        </div>
                        <div class="choice-color-button">
                            <input value="5" type="radio" name="color"  id="item-68-99">
                            <label style=" background-color: Magenta" class="checkbox" for="item-68-99"></label>
                        </div>
                    </div>
                </div>
                <div class="choice-model-memory">
                    <p class="row-label">Обьем памяти:</p>
                    <div class="choice-model-memory-size">
                        <div class="choice-model-memory-block">
                            <input class="size" value="1" type="radio" name="type"  id="type-9" checked="checked">
                            <label class="checkbox type-label" for="type-9">8gb</label>
                        </div>
                        <div class="choice-model-memory-block">
                            <input class="size" value="2" type="radio" name="type"  id="type-10">
                            <label class="checkbox type-label" for="type-10">16gb</label>
                        </div>
                        <div class="choice-model-memory-block">
                            <input class="size" value="3" type="radio" name="type"  id="type-11">
                            <label class="checkbox type-label" for="type-11">32gb</label>
                        </div>
                    </div>
                </div>
                <div class="choice-model-surcharge">
                    <p class="row-label">Сумма доплаты:</p>
                    <span class="new-sum">1100</span>
                </div>
                <div class="choice-model-button"><button>обменять</button></div>
            </form>
        </div>
    </div>

    <div class="col-md-6 choice-block">
        <figure>
            <img alt="iPhone 5s" title="iPhone 5s" src="img/5s.png">
        </figure>
        <div class="model-title">
            iPhone 5s
        </div>
        <div class="choice-model-info">
            <form class="choice-form" method="POST">
                <div class="choice-model-color">
                    <p class="row-label">Цвет корпуса:</p>
                    <div class="choice-model-color-block">
                        <div class="choice-color-button">
                            <input value="6" type="radio" name="color"  id="item-66-100" checked="checked">
                            <label style=" background-color: Gray " class="checkbox" for="item-66-100"></label>
                        </div>
                        <div class="choice-color-button">
                            <input value="7" type="radio" name="color"  id="item-66-101">
                            <label style=" background-color: AliceBlue" class="checkbox" for="item-66-101"></label>
                        </div>
                        <div class="choice-color-button">
                            <input value="8" type="radio" name="color"  id="item-66-102">
                            <label style=" background-color: Khaki " class="checkbox" for="item-66-102"></label>
                        </div>
                    </div>
                </div>
                <div class="choice-model-memory">
                    <p class="row-label">Обьем памяти:</p>
                    <div class="choice-model-memory-size">
                        <div class="choice-model-memory-block">
                            <input class="size" value="4" type="radio" name="type"  id="type-12" checked="checked">
                            <label class="checkbox type-label" for="type-12">16gb</label>
                        </div>
                        <div class="choice-model-memory-block">
                            <input class="size" value="5" type="radio" name="type"  id="type-13">
                            <label class="checkbox type-label" for="type-13">32gb</label>
                        </div>
                        <div class="choice-model-memory-block">
                            <input class="size" value="6" type="radio" name="type"  id="type-14">
                            <label class="checkbox type-label" for="type-14">64gb</label>
                        </div>
                    </div>
                </div>
                <div class="choice-model-surcharge">
                    <p class="row-label">Сумма доплаты:</p>
                    <span class="new-sum">2600</span>
                </div>
                <div class="choice-model-button"><button onclick="">обменять</button></div>
            </form>
        </div>
    </div>

</div>
<div class="row summary-row">

    <div class="col-md-6 choice-block">
        <figure>
            <img width="" height="" alt="iPhone 6" title="iPhone 6" src="img/6.png">
        </figure>
        <div class="model-title">
            iPhone 6
        </div>
        <div class="choice-model-info">
            <form class="choice-form" method="POST">
                <div class="choice-model-color">
                    <p class="row-label">Цвет корпуса:</p>
                    <div class="choice-model-color-block">
                        <div class="choice-color-button">
                            <input class="size" value="9" type="radio" name="color"  id="item-65-103" checked="checked">
                            <label style="background-color: Gray" class="checkbox" for="item-65-103"></label>
                        </div>
                        <div class="choice-color-button">
                            <input class="size" value="10" type="radio" name="color"  id="item-65-104">
                            <label style="background-color: AliceBlue" class="checkbox" for="item-65-104"></label>
                        </div>
                        <div class="choice-color-button">
                            <input class="size" value="11" type="radio" name="color"  id="item-65-105">
                            <label style="background-color: Khaki" class="checkbox" for="item-65-105"></label>
                        </div>
                    </div>
                </div>
                <div class="choice-model-memory">
                    <p class="row-label">Обьем памяти:</p>
                    <div class="choice-model-memory-size">
                        <div class="choice-model-memory-block">
                            <input class="size" value="7" type="radio" name="type" id="type-15" checked="checked">
                            <label class="checkbox type-label" for="type-15">16gb</label>
                        </div>
                        <div class="choice-model-memory-block">
                            <input class="size" value="8" type="radio" name="type" id="type-16">
                            <label class="checkbox type-label" for="type-16">64gb</label>
                        </div>
                        <div class="choice-model-memory-block">
                            <input class="size" value="9" type="radio" name="type" id="type-17">
                            <label class="checkbox type-label" for="type-17">128gb</label>
                        </div>
                    </div>
                </div>
                <div class="choice-model-surcharge">
                    <p class="row-label">Сумма доплаты:</p>
                    <span class="new-sum">3500</span>
                </div>
                <div class="choice-model-button"><button onclick="">обменять</button></div>
            </form>
        </div>
    </div>

    <div class="col-md-6 choice-block">
        <figure>
            <img alt="iPhone 6 plus" title="iPhone 6 plus" src="img/6+.png">
        </figure>
        <div class="model-title">
            iPhone 6 plus
        </div>
        <div class="choice-model-info">
            <form class="choice-form" method="POST">
                <div class="choice-model-color">
                    <p class="row-label">Цвет корпуса:</p>
                    <div class="choice-model-color-block">
                        <div class="choice-color-button">
                            <input class="color" value="12" type="radio" name="color"  id="item-64-106" checked="checked">
                            <label style="background-color: >{{ colors1 }}" class="checkbox" for="item-64-106"></label>
                        </div>
                        <div class="choice-color-button">
                            <input class="color" value="13" type="radio" name="color"  id="item-64-107" >
                            <label style="background-color: {{ colors2 }}" class="checkbox" for="item-64-107"></label>
                        </div>
                        <div class="choice-color-button">
                            <input class="color" value="14" type="radio" name="color"  id="item-64-108">
                            <label style="background-color: {{ colors3 }}" class="checkbox" for="item-64-108"></label>
                        </div>
                    </div>
                </div>
                <div class="choice-model-memory">
                    <p class="row-label">Обьем памяти:</p>
                    <div class="choice-model-memory-size">
                        <div class="choice-model-memory-block">
                            <input class="size" value="10" type="radio" name="type"  id="type-18" checked="checked">
                            <label class="checkbox type-label" for="type-18">16gb</label>
                        </div>
                        <div class="choice-model-memory-block">
                            <input class="size" value="11" type="radio" name="type"  id="type-19">
                            <label class="checkbox type-label" for="type-19">64gb</label>
                        </div>
                        <div class="choice-model-memory-block">
                            <input class="size" value="12" type="radio" name="type"  id="type-20">
                            <label class="checkbox type-label" for="type-20">128gb</label>
                        </div>
                    </div>
                </div>
                <div class="choice-model-surcharge">
                    <p class="row-label">Сумма доплаты:</p>
                    <span class="new-sum">4400</span>
                </div>
                <div class="choice-model-button"><button onclick="">обменять</button></div>
            </form>
        </div>
    </div>

</div>
</div>

<div class="container">
    <div class="row">

        <div id="other-title">
            Другие устройства apple для обмена
        </div>
    </div>
    <div class="row summary-row">

        <div class = "col-md-6 choice-block-mac">
            <figure>
                <img alt="Macbook Air 11" title="Macbook Air 11" src="img/мак.png">
            </figure>
            <div class="model-title-mac">
                MacBook Air 11"(Z0NX0016S)
            </div>
            <div class="choice-model-info">
                <form class="choice-form">
                    <div class="choice-model-color">
                        <p class="row-label">Год выпуска:</p>
                        <div class="choice-model-year">
                        </div>
                    </div>
                    <div class="choice-model-surcharge">
                        <p class="row-label">Сумма доплаты:</p>
                        <span data-sum="8000" class="new-sum">3200 грн</span>
                    </div>
                    <div class="choice-model-text">
                        <p>На юге Франции 24 марта разбился самолет Airbus A320
                            авиакомпании Germanwings, следовавший рейсом 9525 из
                            Барселоны в Дюссельдорф. Незадолго до крушения в Альпах
                            второй пилот самолета Андреас Любиц заперся в кабине,
                            воспользовавшись тем, что капитан отлучился; после этого
                            самолет начал снижение.</p>
                    </div>
                    <div class="choice-model-button-mac"><button onclick="">обменять</button></div>
                </form>
            </div>
        </div>

        <div class = "col-md-6 choice-block-mac">
            <figure>
                <img alt="Macbook Air 11" title="Macbook Air 11" src="img/мак.png">
            </figure>
            <div class="model-title-mac">
                MacBook Air 11"(Z0NX0016S)
            </div>
            <div class="choice-model-info">
                <form class="choice-form">
                    <div class="choice-model-color">
                        <p class="row-label">Год выпуска:</p>
                        <div class="choice-model-year">
                        </div>
                    </div>
                    <div class="choice-model-surcharge">
                        <p class="row-label">Сумма доплаты:</p>
                        <span data-sum="8000" class="new-sum">3200 грн</span>
                    </div>
                    <div class="choice-model-text">
                        <p>На юге Франции 24 марта разбился самолет Airbus A320
                            авиакомпании Germanwings, следовавший рейсом 9525 из
                            Барселоны в Дюссельдорф. Незадолго до крушения в Альпах
                            второй пилот самолета Андреас Любиц заперся в кабине,
                            воспользовавшись тем, что капитан отлучился; после этого
                            самолет начал снижение.</p>
                    </div>
                    <div class="choice-model-button-mac"><button onclick="">обменять</button></div>
                </form>
            </div>
        </div>
    </div>

</div>

<div class="presents-wrapper">

    <div class="container">

        <div id="presents-title">
            При обмене устройств apple мы дарим подарки

        </div>

        <div class = "row presents">

            <div class="col-sm-3">
                <div class="presents-block">
                    <figure>
                        <img src="img/1_cilrle_3_block.png">
                    </figure>
                    <p>ПЕРЕНОС ДАННЫХ СО<br>СТАРОГО УСТРОЙСТВА<br>APPLE НА НОВОЕ</p>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="presents-block">
                    <figure>
                        <img src="img/2_cilrle_3_block.png">
                    </figure>
                    <p>УСТАНОВКА ПАКЕТА<br>ПРИЛОЖЕНИЙ<br>«ПРЕМИУМ»</p>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="presents-block">
                    <figure>
                        <img src="img/3_cilrle_3_block.png">
                    </figure>
                    <p>ОБРЕЗАНИЕ SIM-КАРТЫ<br>ПОД ВАШЕ НОВОЕ<br>УСТРОЙСТВО</p>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="presents-block">
                    <figure>
                        <img src="img/4_cilrle_3_block.png">
                    </figure>
                    <p>ПОКЛЕЙКА ЗАЩИТНОЙ<br>ПЛЕНКИ НА НОВОЕ<br>УСТРОЙСТВО</p>
                </div>
            </div>
        </div>
    </div>
    <div id="top"><img src="img/Слой 8.png"></div>
</div>
</div>
<div class="footer">
    <div class="container">
        <div class="row footer-blocks">

            <div class="col-sm-3">
                <div class="footer-title">О СОТРУДНИЧЕСТВЕ</div>
                <hr>
                <p><a href="#">О компании</a></p><br>
                <p><a href="#">Продажа, обмен устройств apple</a></p><br>
                <p><a href="#">Схема работы</a></p><br>
                <p><a href="#">Частозадаваемые вопросы</a></p><br>
                <p><a href="#">Отзывы</a></p><br>
                <p><a href="#">Блог</a></p>
            </div>

            <div class="col-sm-3">
                <div class="footer-title">НАШИ ПРЕДЛОЖЕНИЯ</div>
                <hr>
                <p><a href="#">Продажа iPhone и обмен</a></p><br>
                <p><a href="#">Продажа iPad и обмен</a></p><br>
                <p><a href="#">Продажа iPod и обмен</a></p><br>
                <p><a href="#">Продажа MacBook и обмен</a></p>
            </div>

            <div class="col-sm-3">
                <div class="footer-title">САМОЕ ПОПУЛЯРНОЕ</div>
                <hr>
                <p><a href="#">Обмен iPhone 5 на iPhone 6</a></p><br>
                <p><a href="#">Поменять iPhone 5s на iPhone 6</a></p><br>
                <p><a href="#">Продажа iPhone 4s</a></p><br>
                <p><a href="#">Продажа iPad 2 64gb + 3G</a></p><br>
                <p><a href="#">Обмен iPad 4 на iPad Air 2</a></p><br>
                <p><a href="#">Продажа MacBook</a></p><br>
                <p><a href="#">Продажа MacBook Air 2010-2013г</a></p>
            </div>

            <div class="col-sm-3">
                <div class="footer-title">НАШИ КОНТАКТЫ</div>
                <hr>
            </div>

        </div>
    </div>
</div>
</body>
</html>
