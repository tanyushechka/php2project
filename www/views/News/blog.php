<!DOCTYPE html>
<html>
<!-- Дмитрий, добрый день! с хвостиком не очень - он отдельно от облака пока живёт, объединить не успеваю  -->

<head lang="en">
    <meta charset="UTF-8">
    <title>Блог большого специалиста</title>
    <link href='http://fonts.googleapis.com/css?family=Andika|Jura&subset=cyrillic-ext,latin' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Neucha|Comfortaa:700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <!--<link type="text/css" rel="stylesheet" href="/style.css"/>-->
    <?php
    $rgb = (isset($_GET['color'])) ? $_GET['color'] : '#ff0000';
    $r = \App\Classes\Application::getR($rgb);
    $g = \App\Classes\Application::getG($rgb);
    $b = \App\Classes\Application::getB($rgb);
    $h = \App\Classes\Application::getH($rgb);
    $s = \App\Classes\Application::getS($rgb);
    $l = \App\Classes\Application::getL($rgb);
    $hNeon = \App\Classes\Application::getH('#0f192a');
    $sNeon = \App\Classes\Application::getS('#0f192a');
    $lNeon = \App\Classes\Application::getL('#0f192a'); ?>
    <style>

        @font-face {
            font-family: "Blog";
            src: url('/Fonts/blog.ttf');
        }


        @font-face {
            font-family: "Park of Victory";
            src: url('/Fonts/park.ttf');
        }

        @font-face {
            font-family: "New Record";
            src: url('/Fonts/newrecord.ttf');
        }

        @font-face {
            font-family: "Fantazyor";
            src: url('/Fonts/fantazyor.ttf');
        }

        @font-face {
            font-family: "Xtreem";
            src: url('/Fonts/xtreem.ttf');
        }

        body, ul, p {
            margin: 0;
            padding: 0;
        }

        #wrapper {
            font-family: Verdana, Helvetica, Arial, sans-serif;
            background-color: #d3d3d3;
            width: 1000px;
            margin: 0 auto;
            text-align: center;

        }

        main {
            width: 80%;
            position: relative;
            float: right;
        }

        .asideL {
            position: relative;
            float: left;
            color: olivedrab;
            padding-top: 0;
            background-color: #50D4FD;
            width: 20%;
        }

        .asideR {
            position: relative;
            float: right;
            color: olivedrab;
            padding-top: 0;
            background-color: #50D4FD;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        ul {

            font-family: sans-serif;
            font-weight: bold;
            font-size: 0.7em;
            list-style-type: none;
            padding: 0;

        }

        .clearfix:before, .clearfix:after {
            content: "";
            display: table;
        }

        .clearfix:after {
            clear: both;
        }

        .box {
            width: 140px;
            padding: 30px;
            background-color: hsl(204.4, 84.9%, 60%);
            word-wrap: break-word;
            position: relative;
            float: left;
            font-size: 3em;
            margin: 20px 10px;
            background-color: hsl(<?php echo $h; ?> , 50%, 60%);
            color: hsl(<?php echo $h; ?> , 50%, 40%);
            box-shadow: 5px 5px 15px hsla(<?php echo $h; ?>, 50%, 30%, 0.8);
            text-shadow: 1px 1px 1px #555;
        }

        .box:hover {
            background-color: hsl(<?php echo $h; ?> , 50%, 55%);
        }

        .box:active {
            top: 1px;
        }

        .inset {
            border-radius: 25px;
            text-shadow: 0px -2px 2px #000, 0px 1px 1px #bbb;
            font-family: 'Microsoft Sans Serif', Tahoma, Arial, Verdana, Sans-Serif;

        }

        .blur {
            color: rgba(<?php echo $r; ?>,<?php echo $g; ?>,<?php echo $b; ?>, .3);
            background-color: hsl(<?php echo $h; ?> , 50%, 20%);
            text-shadow: rgba(<?php echo $r; ?>,<?php echo $g; ?>,<?php echo $b; ?>, .5) 0 0 15px,
            rgba(<?php echo $r; ?>,<?php echo $g; ?>,<?php echo $b; ?>, .5) 0 0 10px;
            transform: rotate(10deg);
            border-radius: 10px;

        }

        .blur:hover {
            background-color: hsl(<?php echo $h; ?> , 50%, 15%);
        }

        .neon {

            background-color: #0f192a;
            box-shadow: 5px 5px 15px hsla(<?php echo $hNeon; ?>, <?php echo $sNeon; ?>%, <?php echo $lNeon; ?>%, 0.8);
            color: <?php echo $rgb; ?>;
            text-shadow: 0 0 5px #fff, 0 0 10px #fff, 0 0 15px #fff, 0 0 20px <?php echo $rgb; ?>,
            0 0 30px <?php echo $rgb; ?>, 0 0 40px <?php echo $rgb; ?>, 0 0 55px <?php echo $rgb; ?>,
            0 0 75px <?php echo $rgb; ?>;
            border-radius: 90px;
        }

        .neon:hover {
            background-color: hsl(<?php echo $hNeon; ?>, <?php echo $sNeon; ?>%, <?php echo $lNeon-25; ?>%);
        }

        .fire {
            width: 200px;
            color: <?php echo $rgb; ?>;
            background-color: #333;
            text-shadow: #fff 0 -1px 4px, #ff0 0 -2px 10px, #ff8000 0 -10px 20px, red 0 -18px 40px;
            transform: skew(-10deg);
            border-radius: 5px;
        }

        .fire:hover {
            background-color: hsl(<?php echo $h; ?> , 50%, 20%);
        }

        h1 {
            /*font-family: "Jura";*/
            font-family: "Comfortaa";
           /*font-family: "Neucha";*/
            font-size: 3em;
            color: hsl(<?php echo $h; ?> , 50%, 20%);
        }

        h3 {
            font-family: "Blog";
            font-size: 2em;
        }

        em {
            font-family: "Xtreem";
            font-size: 1.5em;
        }

        .park {
            font-family: "Park of Victory";
            font-size: 2em;
        }

        .columns2 {
            -webkit-column-count: 2;
            -moz-column-count: 2;
            column-count: 2;
            -webkit-column-gap: 20px;
            -moz-column-gap: 20px;
            column-gap: 20px;
            -webkit-column-rule: 2px dotted gray;
            font-size: 0.8em;
            text-align: justify;
        }

        .columns6 {
            column-count: 6;
            -webkit-column-count: 6;
            font-size: 0.6em;
            text-align: left;
        }

        .comment {
            background-image: url("/images/8.jpg");
            background-repeat: no-repeat;
            background-size: 50px 50px;
            background-position: left top;
            border: 1px solid green;
        }

        .cloud {
            background-color: rgba(211, 211, 211, 0.5);
            background-image: -webkit-linear-gradient(to top, rgba(255, 255, 255, 0.5), rgba(211, 211, 211, 0) 50%);
            background-image: -moz-linear-gradient(to top, rgba(255, 255, 255, 0.5), rgba(211, 211, 211, 0) 50%);
            background-image: -o-linear-gradient(to top, rgba(255, 255, 255, 0.5), rgba(211, 211, 211, 0) 50%);
            background-image: linear-gradient(to top, rgba(255, 255, 255, 0.5), rgba(211, 211, 211, 0) 50%);
            border-radius: 35px;
            margin-top: 0px;
            padding: 5px;
            word-wrap: break-word;
            font-size: .7em;
            word-wrap: break-word;
            margin-left: 80px;
            margin-top: 90px;
            color: hsl(<?php echo $h; ?> , 50%, 40%);
            box-shadow: 5px 5px 15px hsla(<?php echo $h; ?>, 50%, 30%, 0.8);
        }

        .cloud:hover {
            text-shadow: 1px 1px 1px #555;
            position: relative;
            top: -2px;
            left: -2px;
            box-shadow: 5px 7px 15px hsla(<?php echo $h; ?>, 50%, 30%, 0.8);
        }

        article.comment:nth-child(odd) div.cloud {
            background-color: rgba(180, 180, 180, 0.5);
            background-image: -webkit-linear-gradient(to top, rgba(255, 255, 255, 0.5), rgba(180, 180, 180, 0) 50%);
            background-image: -moz-linear-gradient(to top, rgba(255, 255, 255, 0.5), rgba(180, 180, 180, 0) 50%);
            background-image: -o-linear-gradient(to top, rgba(255, 255, 255, 0.5), rgba(180, 180, 180, 0) 50%);
            background-image: linear-gradient(to top, rgba(255, 255, 255, 0.5), rgba(180, 180, 180, 0) 50%);
        }

        .tail {
            height: 0;
            width: 0;
            padding: 0;
            margin-top: 40px;
            position: absolute;
            margin-left: 85px;
            border-width: 0px 60px 60px 0px;
            border-color: transparent transparent rgba(211, 211, 211, 0.5) transparent;
            border-style: solid;
            -moz-transform: scale(0.9) translate(0px, -9px) skew(25deg, 0deg);
            -webkit-transform: scale(0.9) translate(0px, -9px) skew(25deg, 0deg);
            -o-transform: scale(0.9) translate(0px, -9px) skew(25deg, 0deg);
            -ms-transform: scale(0.9) translate(0px, -9px) skew(25deg, 0deg);
            transform: scale(0.9) translate(0px, -9px) skew(42deg, 0deg);
        }
    </style>

</head>
<body>
<div id="wrapper">
    <header role="banner">
        <h1>Блог большого специалиста</h1>

        <p class="park">Субъективный взгляд на мир: мысли о работе и, иногда, о жизни…</p>
        <em>PS все написанное является личной точкой зрения автора и никоим образом не может трактоваться как
            официальная
            позиция моего работодателя.</em>
        <nav class="clearfix">
            <ul>

                <li>
                    <div class="box inset"><a href="/">Статьи</a></div>
                    <!-- Все статьи блога, отсортированные по дате -->
                </li>
                <li>
                    <div class="box blur"><a href="/">Ссылки</a></div>
                    <!-- Полезные ссылки на сторонние ресурсы -->
                </li>
                <li>
                    <div class="box neon">
                        <a href="/">Книги</a> <!-- Полезные книги - краткая хараетеристика и ссылка на ресурс -->
                    </div>
                </li>
                <li>
                    <div class="box fire"><a href="/">Контакты</a></div>
                    <!-- Профессиональный путь, область интересов и компетенции -->
                </li>
            </ul>
        </nav>

        <!------   форма для выбора цвета кнопок главного меню    ------------->

        <form id="formColor" action="" method="get">
            <input type="color" name="color" value="<?php $_GET['color']; ?>"/>
            <input type="submit"/>
        </form>

    </header>
    <br><br>

    <aside class="asideL">
        <nav>
            <p>Рубрикатор</p>
            <ul>
                <li>Банковская розница</li>
                <li>Банковские карты</li>
                <li>Большие продажи</li>
                <li>Маркетинг</li>
                <li>Путевые заметки</li>
            </ul>
        </nav>
        <section>
            <p>Это интересно</p>
            <ul>
                <li>Выбор программного обеспечения для построения процессингового центра</li>
                <li>Банковское самообслуживание для розничных клиентов</li>
                <li>Современный банк может быть персональным</li>
                <li>SMS- и мобильный банк: возможности и необходимость</li>
            </ul>
        </section>
        <section>
            <p>Свежие комментарии</p>
            <ul>
                <li>Andrew к записи Конец ОРСа?</li>
                <li>alex_sandler к записи Процессинговые центры в России</li>
            </ul>
        </section>
    </aside>

    <main role="main">
        <section>
            <article>
                <header>
                    <h3>Процессинговые центры в России</h3>
                    <time datetime="2008-04-14">14 апреля 2008</time>
                </header>

                <section class="columns2">
                    Несколько лет я веду статистику российских процессинговых центров, обслуживающих международные
                    карты.
                    По моим данным сейчас функционируют или находятся в стадии запуска 110 процессинговых центров (я не
                    учитывал
                    процессинговые центры локальных платежных систем). Эти процессинговые центры обслуживают порядка 500
                    российских
                    банков-участников МПС VISA и MasterCard (это оценочное число, так как точное количество участников
                    МПС
                    мне ни
                    разу не встречалось — платежные системы почему-то не хвастаются полным списком своих участников).
                    Таким образом каждый четвертый (!!!) российский банк имеет собственный процессинговый центр (чаще
                    всего
                    в
                    форме in-house). С уверенностью можно утверждать, что процессинговый аутсорсинг у нас не в моде.
                </section>
                <section>
                    <p>В России существует 12 независимых (чаще всего очень относительно «независимых») процессинговых
                        компаний:</p>
                    <table></table>
                </section>
                <section>
                    <p>А также 98 in-house процессинговых центров.</p>

                    <div class="columns6">
                        Абсолютбанк: Way4
                        Аверс: ОСТ-24
                        Агроимпульс: Way4
                        Ак Барс: BASE24 + Way4
                        Алемар: Way4
                        Алмазэргиэнбанк: TranzWare
                        Альфа-Банк: SmartVista
                        АМИ-Банк: Софит
                        Балтийский: STEPS + TranzWare
                        Банк «Санкт-Петербург»: TranzWare
                        Зенит: Way4
                        Банк Москвы: Way4
                        Банк Развития Региона: Софит
                        Банк24.ру: TranzWare
                        ВТБ-24: Way4
                        ВТБ Северо-Запад: BASE24
                        ВЭБ: TransMaster
                        Возрождение: Way4
                        ВБРР: Way4
                        ГранКомБанк: Way4
                        Гута-банк: Way4
                        Девон-кредит: TP-II
                        Денизбанк Москва: SmartVista
                        Джи И Мани Банк: TransMaster
                        Желдорбанк: SmartVista
                        ЗапСибКомБанк: CTL + TranzWare
                        Инвестиционный Городской Банк: TranzWare
                        ИНГ Банк (Евразия): SmartVista
                        Казанский: Софит
                        Кедр: SmartVista
                        Кольцо Урала: TranzWare
                        Кредит Европа Банк: BankSoft
                        Кредитный Агропромбанк: Way4
                        Курскпромбанк: TranzWare
                        Липецккомбанк: TranzWare
                        МАК-Банк: TransMaster
                        Мастер-Банк: Way4
                        МБТС-Банк: TranzWare
                        МДМ-Банк: Way4
                        Межпромбанк: Way4
                        Метракомбанк: TranzWare
                        МБРР: TransMaster
                        МИнБ: TranzWare
                        МКБ: CTL
                        МоскомПриватбанк: TranzWare
                        Национальный Стандарт: Софит
                        НОМОС-Банк: TranzWare
                        ПЧРБ: SmartVista
                        Петрокоммерц: Way4
                        Платина: CTL
                        Приморье: TranzWare
                        Пробизнесбанк: Way4
                        Промсвязьбанк: Way4
                        Райффайзенбанк Австрия: CTL
                        Ренессанс Капитал: Way4
                        Росбанк: Way4
                        Россельхозбанк: BASE24
                        Русский Банк Развития: SmartVista
                        Русский Инвестиционный Клуб: SmartVista
                        Русский Стандарт: TransMaster
                        Русь-банк: SmartVista
                        Сбербанк России: SmartVista + Way4
                        СДМ-Банк: ОСТ-24
                        Севергазбанк: SmartVista
                        Cеверная Казна: TranzWare
                        Сибнефтебанк: 3Card-F
                        СКБ-Банк: 3Card-F
                        Славинвестбанк: Way4
                        Славянский Банк: CTL
                        Собинбанк: TranzWare
                        Солидарность (Самара): Way4
                        Стройкредит: Way4
                        Судостроительный банк: ОСТ-24
                        Сургутнефтегазбанк: BASE24
                        СЭБ Банк: TranzWare
                        Татфондбанк: SmartVista
                        Тинькофф Кредитные Системы: CTL
                        Транспортный: TranzWare
                        Трансинвестбанк: ОСТ-24
                        ТРАСТ: Way4
                        Тюменьэнергобанк: Софит
                        Уралприватбанк: TranzWare
                        Уралсиб: Way4
                        Уралтрансбанк: TranzWare
                        УБРиР: TranzWare
                        Урал-ФД: SmartVista
                        УРСА: SmartVista
                        ФондСервисБанк: SmartVista
                        ХМБ: Way4
                        Центр-инвест: TranzWare
                        Челиндбанк: CTL
                        Экспобанк: Way4
                        Экопромбанк: TP-II
                        Электроника: TP-II
                        Югра: Way4
                        Юниаструм-банк: ОСТ-24 + SmartVista
                        Юникор: Софит
                    </div>
                </section>
                <section>
                    Прежде всего меня интересовало какие программные продукты эксплуатируют различные процессинги.
                    Не так уж и редко один процессинговый центр эксплуатирует несколько процессинговых систем от
                    различных
                    поставщиков (либо между ними каким-то образом распределяется функциональность, либо происходит
                    постепенная
                    миграция с одного решения на другое).
                    Если подвести итоги соцсоревнования между поставщиками хостовых систем по количеству клиентов,
                    эксплуатирующих их системы, то первые три места распределятся между компаниями

                    <details>
                        <summary>OpenWay Group,</summary>
                        <p>
                            OpenWay Group was founded over 15 years ago. We develop WAY4, an innovative e-payment
                            processing framework for banks, payment processors, telcos and petrol companies.
                            OpenWay was initially headquartered in Brussels, Belgium with one R&D team there and another
                            in St. Petersburg, Russia. Today we are a global company with 10 offices and 130 customers
                            around the world.
                            Our portfolio consists of WAY4 Card and Merchant Management, Financial Switching,
                            Personalised
                            Channel Banking, Prepaid Cards, E-Commerce, Mobile Payments, Digital Wallet, DCC, Fuel
                            Cards,
                            and other solutions.
                            WAY4 live installations consistently demonstrate high performance; for example, 90 million
                            cards issued and authorized on a single platform and 12 million POS/ATM clearing
                            transactions
                            processed daily by a single acquirer.
                            OpenWay, known for its commitment to long-term relationships, both serves customers locally
                            and provides global support. Today our team unites approximately 500 payment business,
                            digital technology, and security professionals.
                        </p>
                    </details>
                    <details>
                        <summary>Compass Plus и</summary>
                        <p>
                            Являясь легко интегрируемой и высокопроизводительной авторизационной системой,
                            TranzWare Online предоставляет единую платформу по обработке транзакций, выполняемых с
                            использованием платежных карт всех типов через различные каналы обслуживания, а также по
                            управлению работой и мониторингу состояния больших сетей терминальных устройств.
                            Помимо традиционного для большинства процессинговых систем функционала, TranzWare Online
                            предоставляет множество уникальных возможностей, призванных существенно облегчить процесс
                            карточных продуктов для конечных пользователей. Дополнительные модули, такие как Algorithmix
                            (инструмент, позволяющий скриптами менять логику обработки транзакций, в том числе
                            предотвращать
                            мошеннические операции) и FIMI (не только удобный для пользователя Web-интерфейс для
                            обеспечения
                            удаленного доступа к ресурсам процессингового центра финансового института, но и
                            интеграционный
                            интерфейс с богатейшими возможностями), значительно расширяют возможности пользователей,
                            превращая
                            их в истинных владельцев системы. TranzWare Online оправдывает вложенные средства, поскольку
                            расширение функциональности системы не ограничено практически ничем, а система легко
                            адаптируется
                            к любым используемым аппаратным средствам, операционным системам, сетям и хостовым системам,
                            финансовым продуктам, типам транзакций и их источникам, а также действующему
                            законодательству.
                        </p>
                    </details>
                    <details>
                        <summary>Банковский Производственный Центр (БПЦ):</summary>
                        <p>
                            Компания БПЦ занимается реализацией сложных интеграционных проектов в сфере электронных
                            платежей
                            и розничного банковского бизнеса на базе перспективных и апробированных мировой практикой
                            решений.
                            Мы разрабатываем и внедряем решения для ключевых подсистем розничного бизнеса:
                            процессинговых
                            центров национального и регионального масштаба, филиалов банковского самообслуживания,
                            платежных
                            систем, систем электронной и мобильной коммерции, корпоративных систем электронного бизнеса.
                            За годы работы на рынке мы прошли путь от системного интегратора до поставщика собственных
                            решений
                            мирового класса, превратившись в международную компанию с представительствами в Амстердаме,
                            Сингапуре, Дубае и Киеве и с широкой сетью партнеров на территории Европы, Юго-Восточной
                            Азии и
                            Ближнего Востока.
                            Сохраняя приверженность выбранному направлению, мы постоянно совершенствуем наши продукты и
                            предлагаем новые решения в соответствии с тенденциями развития международного рынка
                            розничных
                            финансовых услуг, удовлетворяя потребности заказчиков в комплексных технологических решениях
                            и
                            обеспечивая защиту их инвестиций.
                        </p>
                    </details>


                    <p>
                        Несмотря на то, что на российском рынке представлено 15 процессинговых решений эти 3 компании
                        лидируют со значительным отрывом от остальных конкурентов и в совокупности занимают 65% рынка:
                    </p>
                    <figure>
                        <img src="/images/quantity.jpg" alt="Диаграмма">
                        <figcaption>Крупнейшие вендоры на российском рынке ПЦ</figcaption>
                    </figure>

                </section>
                PS. Я не претендую на 100%-ную достоверность данной информации и буду признателен за указания на
                отдельные
                неточности. Тем не менее считаю, что общая картина отражена верно.
                <footer>
                    <p>Автор: marketologue</p>

                    <p>Теги: работа, плюсы, минусы</p>
                    <a href="#comments">2 комментария</a>
                </footer>
            </article>

            <section>
                <h3>Комментарии:</h3>
                <article class="comment">
                    <div class="tail"></div>
                    <div class="cloud">
                        <header>
                            <time datetime="2015-04-23T10:22">23 апреля в 10:22</time>
                            <h6>Комментарий от user1</h6>
                        </header>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid enim error facilis saepe
                            tempore! Consequuntur, cumque dolor dolores facere hic impedit inventore molestias
                            necessitatibus nisi odit placeat provident quidem unde?
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aspernatur autem commodi
                            cupiditate delectus eius eligendi eum incidunt itaque minus molestiae neque nihil odit quos,
                            rerum ut veniam voluptates. Aut!</p>
                    </div>
                </article>
                <article class="comment">
                    <div class="tail"></div>
                    <div class="cloud">
                        <header>
                            <time datetime="2015-04-23T10:30">23 апреля в 10:30</time>
                            <h6>Комментарий от qwerty</h6>
                        </header>
                        <p>Неплохо</p>
                    </div>
                </article>
                <article class="comment">
                    <div class="tail"></div>
                    <div class="cloud">
                        <header>
                            <time datetime="2015-04-23T10:22">23 апреля в 10:22</time>
                            <h6>Комментарий от user1</h6>
                        </header>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid enim error facilis saepe
                            tempore! Consequuntur, cumque dolor dolores facere hic impedit inventore molestias
                            necessitatibus nisi odit placeat provident quidem unde?
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aspernatur autem commodi
                            cupiditate delectus eius eligendi eum incidunt itaque minus molestiae neque nihil odit quos,
                            rerum ut veniam voluptates. Aut!</p>
                    </div>
                </article>
                <article class="comment">
                    <div class="tail"></div>
                    <div class="cloud">
                        <header>
                            <time datetime="2015-04-23T10:30">23 апреля в 10:30</time>
                            <h6>Комментарий от qwerty</h6>
                        </header>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, culpa cupiditate dolore
                            eligendi est quo veniam voluptates. Accusantium at, eveniet explicabo incidunt ipsa maiores
                            vel velit voluptatibus? Iste magnam, qui.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda atque eos minima minus
                            molestias perspiciatis quasi tempore vitae voluptatem? Beatae cum cupiditate expedita, harum
                            quidem repudiandae sit ullam. Iure, voluptatem.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad culpa delectus et
                            iure maiores nam quaerat qui quisquam! A explicabo molestiae nam nobis provident quia
                            ratione repellat saepe sunt.</p>
                    </div>
                </article>
            </section>

        </section>

        <form action="/" method="GET">
            <h3>Новый комментарий:</h3>

            <p>
                <label for="id_name">Имя*:</label>
                <input type="text" name="name" id="id_name" required>
            </p>

            <p>
                <label for="id_email">E-mail:</label>
                <input type="email" name="email" id="id_email">
            </p>

            <p>
                <label for="id_url">URL:</label>
                <input type="url" name="url" id="id_url">
            </p>

            <p>
                <label for="id_comment">Комментарий*:</label>
                <textarea name="comment" cols="35" rows="6" id="id_comment" required></textarea>
            </p>

            <p>
                <input type="submit" name="submit" value="Отправить"/>
            </p>

            <p>* - поля, обязательные для заполнения</p>

        </form>
    </main>
    <footer>
        <nav>
            <ul>
                <li><a href="/edit/editing/">edit</a></li>
                <li><a href="/edit/delete/<?php echo $_SESSION['pageid']; ?>">delete</a></li>
                <li><a href="/">home</a></li>
            </ul>
        </nav>

        <address>our address is: some text</address>
        <br><br>

        <p>no rights reserved</p>
        <copyright>
    </footer>
</div>
</body>

</html>