<?php

//Afisarea erorilor, settings
ini_set('display_errorss',1);
error_reporting(E_ALL);

//Adaugam fisier la proiect
define('ROOT',dirname(__FILE__));
require_once(ROOT.'/php/components/Router.php');


//Cream un obiect router
$router = new Router();
$router->run();

//require_once 'php/DB.php';

//$subject = 'sdsd 12 23344 045000040 2333 4';
//$pattern = '/[0-9]+/';
//
//$result = preg_match($pattern, $subject, $matches);
//var_dump($result);
//echo "<br>";
//var_dump($matches);
//echo "<br>";
//exit();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TEABERRY</title>
    <link rel="icon" href="images/tea_main/logo.png">
    <!--Adaptive-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="fonts/Gilroy-Bold/style.css">
    <link rel="stylesheet" href="fonts/Gilroy-Light/style.css">
    <link rel="stylesheet" href="fonts/Gilroy-Medium/style.css">
    <link rel="stylesheet" href="fonts/Gilroy-Regular/style.css">
    <link rel="stylesheet" href="fonts/MarkerFelt-Thin/style.css">

    <link rel="stylesheet" type="text/css" href="js/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="js/slick/slick-theme.css"/>
    <link rel="stylesheet" type="text/css" href="css/animate.min.css"/>

    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/defaultCSS.css">
    <link rel="stylesheet" href="css/adaptive.css">
</head>
<body>

<div id="scroll-percent"></div>

<div class="left_menu__open">⍟</div>
<div class="opacity_fon" id="js_of">
    <div class="left_menu">
        <div class="left_menu__header">
            <a href="#" class="left_menu__main-icon"><img src="images/tea_main/logo.png" alt=""></a>
            <div class="left_menu__close" id="js_lmc">⍟</div>
        </div>
        <div class="left_menu__content">
            <a href="pages/tea_assorts.php" class="left_menu__body">Ассортименты</a>
            <a href="pages/tea_picking.php" class="left_menu__body">Сбор чая</a>
            <a href="pages/tea_discount.php" class="left_menu__body">Акции</a>
            <a href="pages/tea_properties.php" class="left_menu__body">Своиства</a>
            <a href="pages/tea_contacts.php" class="left_menu__body">Контакты</a>
        </div>
    </div>
</div>

<div id="fon">
    <div id="header">
        <div id="menu">
            <div id="burger">☰</div>
            <div id="menu-item-logo-second">
                <a href="#" class="menu-item"><img src="images/tea_main/logo.png" alt=""></a>
            </div>
            <div id="menu-items">
                <div id="menu-items-container">
                    <div id="menu-close">✖</div>
                    <a href="#carousel" class="menu-item">Ассортимент</a>
                    <a href="#collect" class="menu-item">Как мы собираем чай</a>
                    <a href="#shares" class="menu-item">Наши акции</a>
                    <div id="menu-item-logo-first">
                        <a href="#" class="menu-item"><img src="images/tea_main/logo.png" alt=""></a>
                    </div>
                    <a href="#properties" class="menu-item">Полезные свойства</a>
                    <a href="#footer" class="menu-item">Контакты</a>
                </div>
            </div>
        </div>
    </div>
    <div id="main">
        <img id="smoke-fon" src="images/tea_main/smoke_fon.png" alt="">
        <div id="main-content" class="wow animate__bounceInRight">
            <h1 id="main-h1">
                Эксклюзивный чай
            </h1>
            <h2 class="text-header">из разных уголков планеты</h2>
            <div id="main-text">
                У нас вы сможете найти чай со всего мира, самых невообразимых вкусов и ароматов
            </div>
            <a href="#carousel">
                <button type="button" class="main-button btn">
                    Выбрать чай
                    <img src="images/tea_main/teaButton.png" alt="">
                </button>
            </a>
        </div>
    </div>
</div>
<div id="strengths">
    <img id="leaves1" src="images/tea_main/startLeaves.png" alt="">
    <img id="leaves2" src="images/tea_main/endLeaves.png" alt="">
    <h2 class="text-header">
        Почему выбирают нас?
    </h2>
    <div id="strengths-container">
        <div class="strength-item wow animate__fadeInUp">
            <div class="strItem-firstText" id="fir-stTop">Доставка</div>
            <div class="strItem-img">
                <img src="images/tea_main/truck.png" alt="">
            </div>
            <div class="strItem-secondText" id="fir-stBot">в любую точку России</div>
        </div>
        <div class="strength-item wow animate__fadeInUp">
            <div class="strItem-firstText" id="sec-ndTop">Дисконтная программа</div>
            <div class="strItem-img">
                <img src="images/tea_main/box.png" alt="">
            </div>
            <div class="strItem-secondText" id="sec-ndBot">и регулярные акции</div>
        </div>
        <div class="strength-item wow animate__fadeInUp">
            <div class="strItem-firstText" id="thi-rdTop">Эксклюзивные</div>
            <div class="strItem-img">
                <img src="images/tea_main/jewel.png" alt="">
            </div>
            <div class="strItem-secondText" id="thi-rdBot">чайные миксы</div>
        </div>
        <div class="strength-item wow animate__fadeInUp">
            <div class="strItem-firstText" id="fou-thTop">Многообразие</div>
            <div class="strItem-img">
                <img src="images/tea_main/supermarket.png" alt="">
            </div>
            <div class="strItem-secondText" id="fou-thBot">сортов чая</div>
        </div>
    </div>
</div>

<div id="info">
    <div id="info-leaves">
        <img class="first" src="images/tea_main/info-leave1.png" alt="">
        <img class="second" src="images/tea_main/info-leave2.png" alt="">
        <img class="third" src="images/tea_main/info-leave3.png" alt="">
    </div>
    <h2 class="text-header">
        У нас вы найдете
    </h2>
    <div id="info-container" class="wow animate__rollIn">
        <div class="block-content info-block1">
            <div class="content-image">
                <div class="circle"></div>
                <img src="images/tea_main/infoTea1.png" alt="">
            </div>
            <div class="content-text text-block1">
                <h3 class="header">
                    Качественный и свежий чай
                </h3>
                <div class="text">
                    Мы завариваем и дегустируем чай снова и снова, пока не найдем идеальный вкус, поэтому в нашем
                    каталоге собраны лучшие сорта с самых известных плантаций мира
                </div>
            </div>
        </div>
        <div class="block-content info-block2">
            <img class="fifth" src="images/tea_main/info-leave5.png" alt="">
            <div class="content-image">
                <div class="circle"></div>
                <img src="images/tea_main/infoTea2.png" alt="">
            </div>
            <div class="content-text text-block2">
                <h3 class="header">
                    Подарочные наборы
                </h3>
                <div class="text">
                    Мы соберем в красивую упаковку именной подарочный набор для ваших близких, чтобы они могли по
                    достоинству оценить вашу заботу и все вкусовые качества нашего чая
                </div>
            </div>
        </div>
        <div class="block-content info-block3">
            <img class="fourth" src="images/tea_main/info-leave4.png" alt="">
            <div class="content-image order2">
                <div class="circle"></div>
                <img src="images/tea_main/infoTea3.png" alt="">
            </div>
            <div class="content-text order1 text-block3">
                <h3 class="header">
                    Эксклюзивные чайные миксы
                </h3>
                <div class="text">
                    Попробуйте наши миксы, созданные на основе кулинарных тенденций, миксологии и вдохновения
                </div>
            </div>
        </div>
        <div class="block-content info-block4">
            <img class="info-leaves" src="images/tea_main/info-leaves.png" alt="">
            <div class="content-image order2">
                <div class="circle"></div>
                <img src="images/tea_main/infoTea4.png" alt="">
            </div>
            <div class="content-text order1 text-block4">
                <h3 class="header">
                    Чайные аксессуары
                </h3>
                <div class="text">
                    У нас вы найдете всю необходимую посуду для правильного хранения, заваривания и подачи чая
                </div>
            </div>
        </div>
    </div>
</div>

<div id="carousel" class="wow animate__bounceIn">
    <h2 class="text-header">
        Наш ассортимент чая
    </h2>
    <div id="choose-container">
        <div class="choose font" data-id="white-container">Белый чай
            <div class="active-bar bottom-bar"></div>
        </div>
        <div class="choose" data-id="black-container">Чёрный чай
            <div class="active-bar"></div>
        </div>
        <div class="choose" data-id="green-container">Зелёный чай
            <div class="active-bar"></div>
        </div>
        <div class="choose" data-id="mixes-container">Эксклюзивные миксы
            <div class="active-bar"></div>
        </div>
        <div class="choose" data-id="oolong-container">Улун
            <div class="active-bar"></div>
        </div>
    </div>
    <!--     1     -->
    <div id="white-container" class="products-container">
        <div class="products">
            <div class="product">
                <div class="product-image">
                    <img src="images/tea_fromdb/white1.png" alt="">
                </div>
                <div class="product-content">
                    <div class="product-content-title">Baihao Yinzhen</div>
                    <div class="product-content-text">
                        Серебряные Иглы с Белым Ворсом. Самый элитный белый чай.
                    </div>
                    <div class="product-content-cash">100 гр / 310 руб.</div>
                    <div class="product-content-submit">
                        <img class="submit-image" src="images/tea_main/carousel-button-leaves.png" alt="">
                        <button type="button" class="open-modal" id="white1" data-value="Baihao Yinzhen">Купить</button>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="product-image">
                    <img src="images/tea_fromdb/white2.png" alt="">
                </div>
                <div class="product-content">
                    <div class="product-content-title">Bai Mudan</div>
                    <div class="product-content-text">
                        Имеет выраженный вкус сухофруктов и полезных трав и мёда.
                    </div>
                    <div class="product-content-cash">100 гр / 330 руб.</div>
                    <div class="product-content-submit">
                        <img class="submit-image" src="images/tea_main/carousel-button-leaves.png" alt="">
                        <button type="button" class="open-modal" id="white2" data-value="Bai Mudan">Купить</button>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="product-image">
                    <img src="images/tea_fromdb/white3.png" alt="">
                </div>
                <div class="product-content">
                    <div class="product-content-title">Shoumei & Gong Mei</div>
                    <div class="product-content-text">
                        Тонизирует, освежает, снимает стресс. Укрепляет иммунитет, выводит шлаки и токсины.
                    </div>
                    <div class="product-content-cash">100 гр / 360 руб.</div>
                    <div class="product-content-submit">
                        <img class="submit-image" src="images/tea_main/carousel-button-leaves.png" alt="">
                        <button type="button" class="open-modal" id="white3" data-value="Shoumei & Gong Mei">Купить
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="products-nav">
            <div class="product-nav"></div>
            <div class="product-nav"></div>
            <div class="product-nav"></div>
        </div>
    </div>

    <!--    2      -->
    <div id="black-container" class="products-container">
        <div class="products">
            <div class="product">
                <div class="product-image">
                    <img src="images/tea_fromdb/black1.png" alt="">
                </div>
                <div class="product-content">
                    <div class="product-content-title">Ассам</div>
                    <div class="product-content-text">
                        Сладковатый, терпкий вкус. Напиток оранжево-коричневой окраски отлично тонизирует и дарит
                        бодрость на весь день.
                    </div>
                    <div class="product-content-cash">100 гр / 450 руб.</div>
                    <div class="product-content-submit">
                        <img class="submit-image" src="images/tea_main/carousel-button-leaves.png" alt="">
                        <button type="button" class="open-modal" id="black1" data-value="Ассам">Купить</button>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="product-image">
                    <img src="images/tea_fromdb/black2.png" alt="">
                </div>
                <div class="product-content">
                    <div class="product-content-title">Кимун</div>
                    <div class="product-content-text">
                        Выделяется своим вкусом с легким сочетанием винных, фруктовых и сосновых ноток.
                    </div>
                    <div class="product-content-cash">100 гр / 420 руб.</div>
                    <div class="product-content-submit">
                        <img class="submit-image" src="images/tea_main/carousel-button-leaves.png" alt="">
                        <button type="button" class="open-modal" id="black2" data-value="Кимун">Купить</button>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="product-image">
                    <img src="images/tea_fromdb/black3.png" alt="">
                </div>
                <div class="product-content">
                    <div class="product-content-title">Дянь Хун</div>
                    <div class="product-content-text">
                        Сладковатый легкий аромат личи, розы и лонгана. Качественный чай золотисто-оранжевого цвета.
                    </div>
                    <div class="product-content-cash">100 гр / 460 руб.</div>
                    <div class="product-content-submit">
                        <img class="submit-image" src="images/tea_main/carousel-button-leaves.png" alt="">
                        <button type="button" class="open-modal" id="black3" data-value="Дянь Хун">Купить</button>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="product-image">
                    <img src="images/tea_fromdb/black4.png" alt="">
                </div>
                <div class="product-content">
                    <div class="product-content-title">Эрл Грей</div>
                    <div class="product-content-text">
                        Классика английского черного чая с маслом.
                    </div>
                    <div class="product-content-cash">100 гр / 430 руб.</div>
                    <div class="product-content-submit">
                        <img class="submit-image" src="images/tea_main/carousel-button-leaves.png" alt="">
                        <button type="button" class="open-modal" id="black4" data-value="Эрл Грей">Купить</button>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="product-image">
                    <img src="images/tea_fromdb/black5.png" alt="">
                </div>
                <div class="product-content">
                    <div class="product-content-title">Махараджа</div>
                    <div class="product-content-text">
                        Напиток темно-бордовой окраски обладает бархатным вкусом с приятным цветочно-медовым ароматом.
                    </div>
                    <div class="product-content-cash">100 гр / 470 руб.</div>
                    <div class="product-content-submit">
                        <img class="submit-image" src="images/tea_main/carousel-button-leaves.png" alt="">
                        <button type="button" class="open-modal" id="black5" data-value="Махараджа">Купить</button>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="product-image">
                    <img src="images/tea_fromdb/black6.png" alt="">
                </div>
                <div class="product-content">
                    <div class="product-content-title">Лапсан Сяо Чжун</div>
                    <div class="product-content-text">
                        Поражает своим уникальным привкусом и дивным смолистым ароматом.
                    </div>
                    <div class="product-content-cash">100 гр / 440 руб.</div>
                    <div class="product-content-submit">
                        <img class="submit-image" src="images/tea_main/carousel-button-leaves.png" alt="">
                        <button type="button" class="open-modal" id="black6" data-value="Лапсан Сяо Чжун">Купить
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="products-nav">
            <div class="product-nav"></div>
            <div class="product-nav"></div>
            <div class="product-nav"></div>
            <div class="product-nav"></div>
            <div class="product-nav"></div>
            <div class="product-nav"></div>
        </div>
    </div>

    <!--    3      -->
    <div id="green-container" class="products-container">
        <div class="products">
            <div class="product">
                <div class="product-image">
                    <img src="images/tea_fromdb/green1.png" alt="">
                </div>
                <div class="product-content">
                    <div class="product-content-title">Колодец дракона</div>
                    <div class="product-content-text">
                        Чай высшего сорта Лун Цзин, имеет жёлто-зелёный цвет, выраженный аромат, сладкий привкус.
                    </div>
                    <div class="product-content-cash">100 гр / 390 руб.</div>
                    <div class="product-content-submit">
                        <img class="submit-image" src="images/tea_main/carousel-button-leaves.png" alt="">
                        <button type="button" class="open-modal" id="green1" data-value="Колодец дракона">Купить
                        </button>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="product-image">
                    <img src="images/tea_fromdb/green2.png" alt="">
                </div>
                <div class="product-content">
                    <div class="product-content-title">Подарок царя</div>
                    <div class="product-content-text">
                        Мягкий, гладкий настой с отчетливым вкусом. Вкус сочный, сбалансированный, освежает и оставляет
                        приятное ощущение гладкости.
                    </div>
                    <div class="product-content-cash">100 гр / 490 руб.</div>
                    <div class="product-content-submit">
                        <img class="submit-image" src="images/tea_main/carousel-button-leaves.png" alt="">
                        <button type="button" class="open-modal" id="green2" data-value="Подарок царя">Купить</button>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="product-image">
                    <img src="images/tea_fromdb/green3.png" alt="">
                </div>
                <div class="product-content">
                    <div class="product-content-title">Одна нежность и три свежести</div>
                    <div class="product-content-text">
                        Нежно-изумрудный прозрачный настой с выразительным ароматом и сладковатым вкусом.
                    </div>
                    <div class="product-content-cash">100 гр / 460 руб.</div>
                    <div class="product-content-submit">
                        <img class="submit-image" src="images/tea_main/carousel-button-leaves.png" alt="">
                        <button type="button" class="open-modal" id="green3" data-value="Одна нежность и три свежести">
                            Купить
                        </button>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="product-image">
                    <img src="images/tea_fromdb/green4.png" alt="">
                </div>
                <div class="product-content">
                    <div class="product-content-title">Жёлтые горы</div>
                    <div class="product-content-text">
                        Лёгкий зелёный чай, с травяным, цветочным вкусом и ощущённым ароматом глотка свежего воздуха.
                    </div>
                    <div class="product-content-cash">100 гр / 440 руб.</div>
                    <div class="product-content-submit">
                        <img class="submit-image" src="images/tea_main/carousel-button-leaves.png" alt="">
                        <button type="button" class="open-modal" id="green4" data-value="Жёлтые горы">Купить</button>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="product-image">
                    <img src="images/tea_fromdb/green5.png" alt="">
                </div>
                <div class="product-content">
                    <div class="product-content-title">Свежесть бамбуковых листьев</div>
                    <div class="product-content-text">
                        Чай оставит после себя нежный, медовый, цветочный, терпкий привкус.
                    </div>
                    <div class="product-content-cash">100 гр / 450 руб.</div>
                    <div class="product-content-submit">
                        <img class="submit-image" src="images/tea_main/carousel-button-leaves.png" alt="">
                        <button type="button" class="open-modal" id="green5" data-value="Свежесть бамбуковых листьев">
                            Купить
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="products-nav">
            <div class="product-nav"></div>
            <div class="product-nav"></div>
            <div class="product-nav"></div>
            <div class="product-nav"></div>
            <div class="product-nav"></div>
        </div>
    </div>

    <!--    4      -->
    <div id="mixes-container" class="products-container">
        <div class="products">
            <div class="product">
                <div class="product-image">
                    <img src="images/tea_fromdb/mix1.png" alt="">
                </div>
                <div class="product-content">
                    <div class="product-content-title">Любителям необычных вкусов</div>
                    <div class="product-content-text">
                        Свежий крепкий микс с не менее крепким и необычным вкусом. Насыщенный вкус свежих специй хорошо
                        дополняет сладкая мална.
                    </div>
                    <div class="product-content-cash">100 гр / 460 руб.</div>
                    <div class="product-content-submit">
                        <img class="submit-image" src="images/tea_main/carousel-button-leaves.png" alt="">
                        <button type="button" class="open-modal" id="mixes1" data-value="Любителям необычных вкусов">
                            Купить
                        </button>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="product-image">
                    <img src="images/tea_fromdb/mix2.png" alt="">
                </div>
                <div class="product-content">
                    <div class="product-content-title">Чай со вкусом шампанского</div>
                    <div class="product-content-text">
                        Черный крупнолистовой чай со вкусом шампанского.
                    </div>
                    <div class="product-content-cash">100 гр / 490 руб.</div>
                    <div class="product-content-submit">
                        <img class="submit-image" src="images/tea_main/carousel-button-leaves.png" alt="">
                        <button type="button" class="open-modal" id="mixes2" data-value="Чай со вкусом шампанского">
                            Купить
                        </button>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="product-image">
                    <img src="images/tea_fromdb/mix3.png" alt="">
                </div>
                <div class="product-content">
                    <div class="product-content-title">Домашний очаг</div>
                    <div class="product-content-text">
                        Смесь улуна, женьшеня и целебных растений. Тонизирующий чай с ярким живым вкусом и долгим
                        сладковатым послевкусием.
                    </div>
                    <div class="product-content-cash">100 гр / 410 руб.</div>
                    <div class="product-content-submit">
                        <img class="submit-image" src="images/tea_main/carousel-button-leaves.png" alt="">
                        <button type="button" class="open-modal" id="mixes3" data-value="Домашний очаг">Купить</button>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="product-image">
                    <img src="images/tea_fromdb/mix4.png" alt="">
                </div>
                <div class="product-content">
                    <div class="product-content-title">Сладкий апельсин</div>
                    <div class="product-content-text">
                        Согревающий бленд на основе китайской сенчи и пряной смеси апельсина, корицы и гвоздики.
                    </div>
                    <div class="product-content-cash">100 гр / 450 руб.</div>
                    <div class="product-content-submit">
                        <img class="submit-image" src="images/tea_main/carousel-button-leaves.png" alt="">
                        <button type="button" class="open-modal" id="mixes4" data-value="Сладкий апельсин">Купить
                        </button>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="product-image">
                    <img src="images/tea_fromdb/mix5.png" alt="">
                </div>
                <div class="product-content">
                    <div class="product-content-title">Лимонный напиток</div>
                    <div class="product-content-text">
                        Пряный вкус гвоздики с нотками имбиря. Ледяное яблоко с лайм-лимоном, свежий вкус с легкими
                        нотками кислинки.
                    </div>
                    <div class="product-content-cash">100 гр / 430 руб.</div>
                    <div class="product-content-submit">
                        <img class="submit-image" src="images/tea_main/carousel-button-leaves.png" alt="">
                        <button type="button" class="open-modal" id="mixes5" data-value="Лимонный напиток">Купить
                        </button>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="product-image">
                    <img src="images/tea_fromdb/mix6.png" alt="">
                </div>
                <div class="product-content">
                    <div class="product-content-title">Чай для успокаивание желудка</div>
                    <div class="product-content-text">
                        Ароматный и освежающий чай, позволяет приводить мысли в порядок.
                    </div>
                    <div class="product-content-cash">100 гр / 390 руб.</div>
                    <div class="product-content-submit">
                        <img class="submit-image" src="images/tea_main/carousel-button-leaves.png" alt="">
                        <button type="button" class="open-modal" id="mixes6" data-value="Чай для успокаивание желудка">
                            Купить
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="products-nav">
            <div class="product-nav"></div>
            <div class="product-nav"></div>
            <div class="product-nav"></div>
            <div class="product-nav"></div>
            <div class="product-nav"></div>
            <div class="product-nav"></div>
        </div>
    </div>

    <!--    5      -->
    <div id="oolong-container" class="products-container">
        <div class="products">
            <div class="product">
                <div class="product-image">
                    <img src="images/tea_fromdb/oolong1.png" alt="">
                </div>
                <div class="product-content">
                    <div class="product-content-title">Формоза</div>
                    <div class="product-content-text">
                        Аромат классического Формоза улуна, в сухой заварке, должен отчётливо напоминать нотки мёда и
                        спелых фруктов.
                    </div>
                    <div class="product-content-cash">100 гр / 520 руб.</div>
                    <div class="product-content-submit">
                        <img class="submit-image" src="images/tea_main/carousel-button-leaves.png" alt="">
                        <button type="button" class="open-modal" id="oolong1" data-value="Формоза">Купить</button>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="product-image">
                    <img src="images/tea_fromdb/oolong2.png" alt="">
                </div>
                <div class="product-content">
                    <div class="product-content-title">Железная Гуанинь</div>
                    <div class="product-content-text">
                        Восхитительный чай высокого качества. Разделить на 4 основных типа, с разными
                        привкусами. Чистый,плотный,цветочный,зрелый аромат.
                    </div>
                    <div class="product-content-cash">100 гр / 470 руб.</div>
                    <div class="product-content-submit">
                        <img class="submit-image" src="images/tea_main/carousel-button-leaves.png" alt="">
                        <button type="button" class="open-modal" id="oolong2" data-value="Железная Гуанинь">Купить
                        </button>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="product-image">
                    <img src="images/tea_fromdb/oolong3.png" alt="">
                </div>
                <div class="product-content">
                    <div class="product-content-title">Напиток долголетия</div>
                    <div class="product-content-text">
                        Успокаивающий чай, имеющий специфический земляной аромат и вкус, а также
                        характерный сладковатый привкус.
                    </div>
                    <div class="product-content-cash">100 гр / 540 руб.</div>
                    <div class="product-content-submit">
                        <img class="submit-image" src="images/tea_main/carousel-button-leaves.png" alt="">
                        <button type="button" class="open-modal" id="oolong3" data-value="Напиток долголетия">Купить
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="products-nav">
            <div class="product-nav"></div>
            <div class="product-nav"></div>
            <div class="product-nav"></div>
        </div>
    </div>
</div>

<div id="shares">
    <img class="shares-bgabsolute" src="images/tea_main/shares-bgabsolute.png" alt="">
    <div id="shares-container" class="wow animate__flipInX">
        <div id="shares-leaves">
            <img class="shares-absolute-img" src="images/tea_main/shares-absolute-img.png" alt="">
        </div>
        <h2 class="text-header">
            Акция для новых клиентов
        </h2>
        <div id="shares-content">
            <img class="shares-relative-img" src="images/tea_main/shares-relative-img.png" alt="">
            <div class="shares-relative-content">
                <div class="info-discount">
                    Дарим скидку <span class="green-bold-span">5%</span> на первый заказ!
                </div>
                <div class="info-discount">
                    Скопируйте промокод из письма и ставьте чайник
                </div>
                <div class="shares-form-block">
                    <div id="shares-true-discount">
                        <span>Мы отправили промокод на указанную почту</span>
                    </div>
                    <form action="" id="shares-form">
                        <div class="shares-input-block">
                            <input type="email" placeholder="example@gmail.com" name="discount" class="shares-input">
                            <p class="text-error">Заполните поле!</p>
                        </div>
                        <button type="button" class="shares-button btn">
                            Получить скидку
                            <img src="images/tea_main/teaButton.png" alt="">
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="properties">
    <h2 class="text-header">
        Полезные свойства чая
    </h2>
    <div id="properties-container" class="wow animate__rotateIn">
        <div id="center-container">
            <div id="properties-circle-768">
                <div class="circle-max" id="property1">
                    <div class="animation-circle-max"></div>
                    <div class="circle-min">
                        <svg class="layer" height="512" viewBox="0 0 512 512" width="512"
                             xmlns="http://www.w3.org/2000/svg" data-name="Layer 1">
                            <path d="m264.053 129.834a5.978 5.978 0 0 0 4.243-1.757l32.937-32.937a6 6 0 1 0 -8.485-8.486l-32.937 32.938a6 6 0 0 0 4.242 10.242z"/>
                            <path d="m203.624 92.7a6.1 6.1 0 0 0 .859.062 6 6 0 0 0 5.931-5.15l7.534-52.535a6 6 0 1 0 -11.878-1.7l-7.534 52.535a6 6 0 0 0 5.088 6.788z"/>
                            <path d="m128.077 259.811a6 6 0 0 0 -8.485 0l-32.938 32.937a6 6 0 1 0 8.486 8.485l32.937-32.933a6 6 0 0 0 0-8.489z"/>
                            <path d="m92.7 203.624a6 6 0 0 0 -6.791-5.088l-52.539 7.534a6 6 0 0 0 .844 11.94 6.115 6.115 0 0 0 .859-.061l52.536-7.534a6 6 0 0 0 5.091-6.791z"/>
                            <path d="m125.548 134.377a6 6 0 0 0 8.486-8.485l-37.477-37.476a6 6 0 0 0 -8.485 8.484z"/>
                            <path d="m255.891 325.2-1.53-4.8a6 6 0 0 0 -11.434 3.643l1.53 4.8a6 6 0 0 0 11.434-3.644z"/>
                            <path d="m272.958 418.271a6 6 0 1 0 11.433-3.644l-21.512-67.5a6 6 0 1 0 -11.433 3.643z"/>
                            <path d="m396.394 347.491 73.748-59.036a16.393 16.393 0 0 0 6.2-14.673 15.954 15.954 0 0 0 -11-13.319l-106.522-33.9a6 6 0 0 0 -3.64 11.437l106.52 33.9a4 4 0 0 1 1.266 6.935l-79.282 63.465a6 6 0 0 0 -.51 8.913l88.605 89.175-31.394 31.394-89.175-88.609a6 6 0 0 0 -4.229-1.743c-.113 0-.227 0-.341.009a6 6 0 0 0 -4.343 2.241l-63.464 79.281a4 4 0 0 1 -6.935-1.287l-88.534-278.338 129.817 41.3a6 6 0 0 0 7.819-5.721 6 6 0 0 0 -4.181-5.718l-129.819-41.297a12.01 12.01 0 0 0 -15.095 15.073l88.559 278.338a16 16 0 0 0 27.736 5.149l59.289-74.066 84.436 83.9a12.022 12.022 0 0 0 16.943-.028l31.394-31.394a12 12 0 0 0 .027-16.943z"/>
                        </svg>
                    </div>
                </div>
                <div class="circle-max" id="property2">
                    <div class="animation-circle-max"></div>
                    <div class="circle-min">
                        <svg class="layer" height="512" viewBox="0 0 512 512" width="512"
                             xmlns="http://www.w3.org/2000/svg" data-name="Layer 2">
                            <path d="m264.053 129.834a5.978 5.978 0 0 0 4.243-1.757l32.937-32.937a6 6 0 1 0 -8.485-8.486l-32.937 32.938a6 6 0 0 0 4.242 10.242z"/>
                            <path d="m203.624 92.7a6.1 6.1 0 0 0 .859.062 6 6 0 0 0 5.931-5.15l7.534-52.535a6 6 0 1 0 -11.878-1.7l-7.534 52.535a6 6 0 0 0 5.088 6.788z"/>
                            <path d="m128.077 259.811a6 6 0 0 0 -8.485 0l-32.938 32.937a6 6 0 1 0 8.486 8.485l32.937-32.933a6 6 0 0 0 0-8.489z"/>
                            <path d="m92.7 203.624a6 6 0 0 0 -6.791-5.088l-52.539 7.534a6 6 0 0 0 .844 11.94 6.115 6.115 0 0 0 .859-.061l52.536-7.534a6 6 0 0 0 5.091-6.791z"/>
                            <path d="m125.548 134.377a6 6 0 0 0 8.486-8.485l-37.477-37.476a6 6 0 0 0 -8.485 8.484z"/>
                            <path d="m255.891 325.2-1.53-4.8a6 6 0 0 0 -11.434 3.643l1.53 4.8a6 6 0 0 0 11.434-3.644z"/>
                            <path d="m272.958 418.271a6 6 0 1 0 11.433-3.644l-21.512-67.5a6 6 0 1 0 -11.433 3.643z"/>
                            <path d="m396.394 347.491 73.748-59.036a16.393 16.393 0 0 0 6.2-14.673 15.954 15.954 0 0 0 -11-13.319l-106.522-33.9a6 6 0 0 0 -3.64 11.437l106.52 33.9a4 4 0 0 1 1.266 6.935l-79.282 63.465a6 6 0 0 0 -.51 8.913l88.605 89.175-31.394 31.394-89.175-88.609a6 6 0 0 0 -4.229-1.743c-.113 0-.227 0-.341.009a6 6 0 0 0 -4.343 2.241l-63.464 79.281a4 4 0 0 1 -6.935-1.287l-88.534-278.338 129.817 41.3a6 6 0 0 0 7.819-5.721 6 6 0 0 0 -4.181-5.718l-129.819-41.297a12.01 12.01 0 0 0 -15.095 15.073l88.559 278.338a16 16 0 0 0 27.736 5.149l59.289-74.066 84.436 83.9a12.022 12.022 0 0 0 16.943-.028l31.394-31.394a12 12 0 0 0 .027-16.943z"/>
                        </svg>
                    </div>
                </div>
                <div class="circle-max" id="property3">
                    <div class="animation-circle-max"></div>
                    <div class="circle-min">
                        <svg class="layer" height="512" viewBox="0 0 512 512" width="512"
                             xmlns="http://www.w3.org/2000/svg" data-name="Layer 3">
                            <path d="m264.053 129.834a5.978 5.978 0 0 0 4.243-1.757l32.937-32.937a6 6 0 1 0 -8.485-8.486l-32.937 32.938a6 6 0 0 0 4.242 10.242z"/>
                            <path d="m203.624 92.7a6.1 6.1 0 0 0 .859.062 6 6 0 0 0 5.931-5.15l7.534-52.535a6 6 0 1 0 -11.878-1.7l-7.534 52.535a6 6 0 0 0 5.088 6.788z"/>
                            <path d="m128.077 259.811a6 6 0 0 0 -8.485 0l-32.938 32.937a6 6 0 1 0 8.486 8.485l32.937-32.933a6 6 0 0 0 0-8.489z"/>
                            <path d="m92.7 203.624a6 6 0 0 0 -6.791-5.088l-52.539 7.534a6 6 0 0 0 .844 11.94 6.115 6.115 0 0 0 .859-.061l52.536-7.534a6 6 0 0 0 5.091-6.791z"/>
                            <path d="m125.548 134.377a6 6 0 0 0 8.486-8.485l-37.477-37.476a6 6 0 0 0 -8.485 8.484z"/>
                            <path d="m255.891 325.2-1.53-4.8a6 6 0 0 0 -11.434 3.643l1.53 4.8a6 6 0 0 0 11.434-3.644z"/>
                            <path d="m272.958 418.271a6 6 0 1 0 11.433-3.644l-21.512-67.5a6 6 0 1 0 -11.433 3.643z"/>
                            <path d="m396.394 347.491 73.748-59.036a16.393 16.393 0 0 0 6.2-14.673 15.954 15.954 0 0 0 -11-13.319l-106.522-33.9a6 6 0 0 0 -3.64 11.437l106.52 33.9a4 4 0 0 1 1.266 6.935l-79.282 63.465a6 6 0 0 0 -.51 8.913l88.605 89.175-31.394 31.394-89.175-88.609a6 6 0 0 0 -4.229-1.743c-.113 0-.227 0-.341.009a6 6 0 0 0 -4.343 2.241l-63.464 79.281a4 4 0 0 1 -6.935-1.287l-88.534-278.338 129.817 41.3a6 6 0 0 0 7.819-5.721 6 6 0 0 0 -4.181-5.718l-129.819-41.297a12.01 12.01 0 0 0 -15.095 15.073l88.559 278.338a16 16 0 0 0 27.736 5.149l59.289-74.066 84.436 83.9a12.022 12.022 0 0 0 16.943-.028l31.394-31.394a12 12 0 0 0 .027-16.943z"/>
                        </svg>
                    </div>
                </div>
                <div class="circle-max" id="property4">
                    <div class="animation-circle-max"></div>
                    <div class="circle-min">
                        <svg class="layer" height="512" viewBox="0 0 512 512" width="512"
                             xmlns="http://www.w3.org/2000/svg" data-name="Layer 4">
                            <path d="m264.053 129.834a5.978 5.978 0 0 0 4.243-1.757l32.937-32.937a6 6 0 1 0 -8.485-8.486l-32.937 32.938a6 6 0 0 0 4.242 10.242z"/>
                            <path d="m203.624 92.7a6.1 6.1 0 0 0 .859.062 6 6 0 0 0 5.931-5.15l7.534-52.535a6 6 0 1 0 -11.878-1.7l-7.534 52.535a6 6 0 0 0 5.088 6.788z"/>
                            <path d="m128.077 259.811a6 6 0 0 0 -8.485 0l-32.938 32.937a6 6 0 1 0 8.486 8.485l32.937-32.933a6 6 0 0 0 0-8.489z"/>
                            <path d="m92.7 203.624a6 6 0 0 0 -6.791-5.088l-52.539 7.534a6 6 0 0 0 .844 11.94 6.115 6.115 0 0 0 .859-.061l52.536-7.534a6 6 0 0 0 5.091-6.791z"/>
                            <path d="m125.548 134.377a6 6 0 0 0 8.486-8.485l-37.477-37.476a6 6 0 0 0 -8.485 8.484z"/>
                            <path d="m255.891 325.2-1.53-4.8a6 6 0 0 0 -11.434 3.643l1.53 4.8a6 6 0 0 0 11.434-3.644z"/>
                            <path d="m272.958 418.271a6 6 0 1 0 11.433-3.644l-21.512-67.5a6 6 0 1 0 -11.433 3.643z"/>
                            <path d="m396.394 347.491 73.748-59.036a16.393 16.393 0 0 0 6.2-14.673 15.954 15.954 0 0 0 -11-13.319l-106.522-33.9a6 6 0 0 0 -3.64 11.437l106.52 33.9a4 4 0 0 1 1.266 6.935l-79.282 63.465a6 6 0 0 0 -.51 8.913l88.605 89.175-31.394 31.394-89.175-88.609a6 6 0 0 0 -4.229-1.743c-.113 0-.227 0-.341.009a6 6 0 0 0 -4.343 2.241l-63.464 79.281a4 4 0 0 1 -6.935-1.287l-88.534-278.338 129.817 41.3a6 6 0 0 0 7.819-5.721 6 6 0 0 0 -4.181-5.718l-129.819-41.297a12.01 12.01 0 0 0 -15.095 15.073l88.559 278.338a16 16 0 0 0 27.736 5.149l59.289-74.066 84.436 83.9a12.022 12.022 0 0 0 16.943-.028l31.394-31.394a12 12 0 0 0 .027-16.943z"/>
                        </svg>
                    </div>
                </div>
                <div class="circle-max" id="property5">
                    <div class="animation-circle-max"></div>
                    <div class="circle-min">
                        <svg class="layer" height="512" viewBox="0 0 512 512" width="512"
                             xmlns="http://www.w3.org/2000/svg" data-name="Layer 5">
                            <path d="m264.053 129.834a5.978 5.978 0 0 0 4.243-1.757l32.937-32.937a6 6 0 1 0 -8.485-8.486l-32.937 32.938a6 6 0 0 0 4.242 10.242z"/>
                            <path d="m203.624 92.7a6.1 6.1 0 0 0 .859.062 6 6 0 0 0 5.931-5.15l7.534-52.535a6 6 0 1 0 -11.878-1.7l-7.534 52.535a6 6 0 0 0 5.088 6.788z"/>
                            <path d="m128.077 259.811a6 6 0 0 0 -8.485 0l-32.938 32.937a6 6 0 1 0 8.486 8.485l32.937-32.933a6 6 0 0 0 0-8.489z"/>
                            <path d="m92.7 203.624a6 6 0 0 0 -6.791-5.088l-52.539 7.534a6 6 0 0 0 .844 11.94 6.115 6.115 0 0 0 .859-.061l52.536-7.534a6 6 0 0 0 5.091-6.791z"/>
                            <path d="m125.548 134.377a6 6 0 0 0 8.486-8.485l-37.477-37.476a6 6 0 0 0 -8.485 8.484z"/>
                            <path d="m255.891 325.2-1.53-4.8a6 6 0 0 0 -11.434 3.643l1.53 4.8a6 6 0 0 0 11.434-3.644z"/>
                            <path d="m272.958 418.271a6 6 0 1 0 11.433-3.644l-21.512-67.5a6 6 0 1 0 -11.433 3.643z"/>
                            <path d="m396.394 347.491 73.748-59.036a16.393 16.393 0 0 0 6.2-14.673 15.954 15.954 0 0 0 -11-13.319l-106.522-33.9a6 6 0 0 0 -3.64 11.437l106.52 33.9a4 4 0 0 1 1.266 6.935l-79.282 63.465a6 6 0 0 0 -.51 8.913l88.605 89.175-31.394 31.394-89.175-88.609a6 6 0 0 0 -4.229-1.743c-.113 0-.227 0-.341.009a6 6 0 0 0 -4.343 2.241l-63.464 79.281a4 4 0 0 1 -6.935-1.287l-88.534-278.338 129.817 41.3a6 6 0 0 0 7.819-5.721 6 6 0 0 0 -4.181-5.718l-129.819-41.297a12.01 12.01 0 0 0 -15.095 15.073l88.559 278.338a16 16 0 0 0 27.736 5.149l59.289-74.066 84.436 83.9a12.022 12.022 0 0 0 16.943-.028l31.394-31.394a12 12 0 0 0 .027-16.943z"/>
                        </svg>
                    </div>
                </div>
                <div class="circle-max" id="property6">
                    <div class="animation-circle-max"></div>
                    <div class="circle-min">
                        <svg class="layer" height="512" viewBox="0 0 512 512" width="512"
                             xmlns="http://www.w3.org/2000/svg" data-name="Layer 6">
                            <path d="m264.053 129.834a5.978 5.978 0 0 0 4.243-1.757l32.937-32.937a6 6 0 1 0 -8.485-8.486l-32.937 32.938a6 6 0 0 0 4.242 10.242z"/>
                            <path d="m203.624 92.7a6.1 6.1 0 0 0 .859.062 6 6 0 0 0 5.931-5.15l7.534-52.535a6 6 0 1 0 -11.878-1.7l-7.534 52.535a6 6 0 0 0 5.088 6.788z"/>
                            <path d="m128.077 259.811a6 6 0 0 0 -8.485 0l-32.938 32.937a6 6 0 1 0 8.486 8.485l32.937-32.933a6 6 0 0 0 0-8.489z"/>
                            <path d="m92.7 203.624a6 6 0 0 0 -6.791-5.088l-52.539 7.534a6 6 0 0 0 .844 11.94 6.115 6.115 0 0 0 .859-.061l52.536-7.534a6 6 0 0 0 5.091-6.791z"/>
                            <path d="m125.548 134.377a6 6 0 0 0 8.486-8.485l-37.477-37.476a6 6 0 0 0 -8.485 8.484z"/>
                            <path d="m255.891 325.2-1.53-4.8a6 6 0 0 0 -11.434 3.643l1.53 4.8a6 6 0 0 0 11.434-3.644z"/>
                            <path d="m272.958 418.271a6 6 0 1 0 11.433-3.644l-21.512-67.5a6 6 0 1 0 -11.433 3.643z"/>
                            <path d="m396.394 347.491 73.748-59.036a16.393 16.393 0 0 0 6.2-14.673 15.954 15.954 0 0 0 -11-13.319l-106.522-33.9a6 6 0 0 0 -3.64 11.437l106.52 33.9a4 4 0 0 1 1.266 6.935l-79.282 63.465a6 6 0 0 0 -.51 8.913l88.605 89.175-31.394 31.394-89.175-88.609a6 6 0 0 0 -4.229-1.743c-.113 0-.227 0-.341.009a6 6 0 0 0 -4.343 2.241l-63.464 79.281a4 4 0 0 1 -6.935-1.287l-88.534-278.338 129.817 41.3a6 6 0 0 0 7.819-5.721 6 6 0 0 0 -4.181-5.718l-129.819-41.297a12.01 12.01 0 0 0 -15.095 15.073l88.559 278.338a16 16 0 0 0 27.736 5.149l59.289-74.066 84.436 83.9a12.022 12.022 0 0 0 16.943-.028l31.394-31.394a12 12 0 0 0 .027-16.943z"/>
                        </svg>
                    </div>
                </div>
            </div>
            <div id="property-center">
                <img src="images/tea_main/property-center.png" alt="">
            </div>
            <div id="properties-show-text-container">
                <div class="text-left-container">
                    <div class="text-left">
                        Чай богат полезными микроэлементами
                    </div>
                </div>
                <div class="text-left-container">
                    <div class="text-left">
                        Чай бодрит дух, повышает активность мозга, улучшает память
                    </div>
                </div>
                <div class="text-left-container">
                    <div class="text-left">
                        Чай нормализует деятельность сердца, кровеносных сосудов, пищеварительной системы
                    </div>
                </div>
                <div class="text-right-container">
                    <div class="text-right">
                        Чай эффективно предотвращает кариес
                    </div>
                </div>
                <div class="text-right-container">
                    <div class="text-right">
                        Чай снимает усталость и стимулирует обмен веществ
                    </div>
                </div>
                <div class="text-right-container">
                    <div class="text-right">
                        Чай подавляет рост злокачественных опухолей, и существенно снижает риск перерождения клеток
                        в раковые
                    </div>
                </div>
                <div id="property-circle-pulse"></div>
            </div>
        </div>

        <div id="properties-content-circle">
            <div class="content-circle-left first">
                <div class="text-left">
                    Чай богат полезными микроэлементами
                </div>
                <div class="left-bar">
                    <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="262.5px" height="55.5px">
                        <path fill-rule="evenodd" stroke="rgb(128, 165, 6)" stroke-width="1px" stroke-linecap="butt"
                              stroke-linejoin="miter" fill="none"
                              d="M261.500,1.500 L222.500,54.500 L0.500,54.500 "/>
                    </svg>
                    <div class="circle-max">
                        <div class="circle-min"></div>
                    </div>
                </div>
            </div>
            <div class="content-circle-left second">
                <div class="text-left">
                    Чай бодрит дух, повышает активность мозга, улучшает память
                </div>
                <div class="left-bar">
                    <svg class="second-svg-1200"
                         xmlns="http://www.w3.org/2000/svg"
                         width="322.5px" height="55.5px">
                        <path fill-rule="evenodd" stroke="rgb(128, 165, 6)" stroke-width="1px" stroke-linecap="butt"
                              stroke-linejoin="miter" fill="none"
                              d="M321.500,1.500 L282.500,54.500 L0.500,54.500 "/>
                    </svg>
                    <svg class="second-svg-1024"
                         xmlns="http://www.w3.org/2000/svg"
                         width="322.5px" height="55.5px">
                        <path fill-rule="evenodd" stroke="rgb(128, 165, 6)" stroke-width="1px" stroke-linecap="butt"
                              stroke-linejoin="miter" fill="none"
                              d="M221.500,1.500 L190.500,54.500 L0.500,54.500 "/>
                    </svg>
                    <div class="circle-max">
                        <div class="circle-min"></div>
                    </div>
                </div>
            </div>
            <div class="content-circle-left third">
                <div class="text-left">
                    Чай нормализует деятельность сердца, кровеносных сосудов, пищеварительной системы
                </div>
                <div class="left-bar">
                    <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="352.5px" height="55.5px">
                        <path fill-rule="evenodd" stroke="rgb(128, 165, 6)" stroke-width="1px" stroke-linecap="butt"
                              stroke-linejoin="miter" fill="none"
                              d="M351.500,1.500 L312.500,54.500 L0.500,54.500 "/>
                    </svg>
                    <div class="circle-max">
                        <div class="circle-min"></div>
                    </div>
                </div>
            </div>
            <div class="content-circle-right first">
                <div class="text-right">
                    Чай эффективно предотвращает кариес
                </div>
                <div class="right-bar">
                    <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="284.5px" height="42.5px">
                        <path fill-rule="evenodd" stroke="rgb(128, 165, 6)" stroke-width="1px" stroke-linecap="butt"
                              stroke-linejoin="miter" fill="none"
                              d="M1.500,0.500 L32.500,40.500 L283.500,40.500 "/>
                    </svg>
                    <div class="circle-max">
                        <div class="circle-min"></div>
                    </div>
                </div>
            </div>
            <div class="content-circle-right second">
                <div class="text-right">
                    Чай снимает усталость и стимулирует обмен веществ
                </div>
                <div class="right-bar">
                    <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="324.5px" height="55.5px">
                        <path fill-rule="evenodd" stroke="rgb(128, 165, 6)" stroke-width="1px" stroke-linecap="butt"
                              stroke-linejoin="miter" fill="none"
                              d="M1.500,0.500 L40.500,53.500 L323.500,53.500 "/>
                    </svg>
                    <div class="circle-max">
                        <div class="circle-min"></div>
                    </div>
                </div>
            </div>
            <div class="content-circle-right third">
                <div class="text-right">
                    Чай подавляет рост злокачественных опухолей, и существенно снижает риск перерождения клеток в
                    раковые
                </div>
                <div class="right-bar">
                    <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="410.5px" height="55.5px">
                        <path fill-rule="evenodd" stroke="rgb(128, 165, 6)" stroke-width="1px" stroke-linecap="butt"
                              stroke-linejoin="miter" fill="none"
                              d="M1.500,0.500 L40.500,53.500 L409.500,53.500 "/>
                    </svg>
                    <div class="circle-max">
                        <div class="circle-min"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="collect">
    <h2 class="text-header">
        Как мы собираем наш чай
    </h2>
    <img class="collect-leaves" src="images/tea_main/collect-leaves.png" alt="">
    <div id="collect-container" class="wow animate__jackInTheBox">
        <div id="collect-video">
            <iframe src="https://www.youtube.com/embed/lQLCZthzbEQ"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
            </iframe>
            <div id="collect-photo-video">
                <div class="click-triangle-max-circle">
                    <div class="click-triangle-min-circle">
                        <img src="images/tea_main/click-triangle.png" alt="" id="click-triangle">
                    </div>
                </div>
            </div>

            <div class="rightbot-image">
                <div class="collect-circle">
                    <img src="images/tea_main/carousel-button-leaves.png" alt="">
                </div>
            </div>
        </div>
        <div id="collect-content">
            <div class="collect-text">
                Чайные листочки мы собираем столько раз в году, сколько раз чай вегетирует – то есть, дает новые побеги
                с листочками. В <span>Индонезии</span>, <span>Шри-Ланке</span>, <span>Кении</span>, на юге
                <span>Индии</span> и <span>Китая</span>, где всегда лето – круглый год.
            </div>
            <div class="collect-text">
                Чем дальше на север расположены плантации, тем меньше сезон сбора чая – в северо-восточной Индии он
                продолжается восемь месяцев, на севере Китая чайные листья собирают не более четырех раз в году, с
                апреля по сентябрь.
            </div>
            <div class="collect-text">
                Мы <span>собираем чай вручную</span>, обрывая не все листья, а лишь несколько самых молодых и сочных
                листочков с
                частью стебелька, на котором они укреплены, и так называемую почку (или типс) – нераспустившийся листок
                на кончике побега. Всё для того, чтобы вы пили только <span>самый вкусный и свежий чай!</span>
            </div>
        </div>
    </div>
</div>

<div id="footer">
    <div id="footer-container">
        <img class="footer-flower" src="images/tea_main/footer-flower.png" alt="">
        <div id="footer-logo">
            <img src="images/tea_main/logo.png" alt="">
        </div>
        <div id="pickup">
            <div class="content">
                <h3>
                    Пункты самовывоза:
                </h3>
                <div class="item">
                    г. Москва, Люберцы, ул. Озерная, 5
                </div>
                <div class="item">
                    г. Москва, ТЦ «Метрополь», 2 этаж
                </div>
                <div class="item">
                    г. Москва, пр-т Некрасова, 25
                </div>
            </div>
        </div>
        <span class="rights">Все права защищены, 2022</span>
        <div id="worktime">
            <div class="content">
                <h3>
                    Режим работы:
                </h3>
                <div class="item">
                    Пн-Пт с 10:00 до 20:00
                </div>
                <div class="item">
                    Сб-Вс с 10:00 до 18:00
                </div>
            </div>
        </div>
        <span class="studio">Разработка сайта: студия Designer</span>
        <div id="numbers">
            <div class="content">
                <h3>
                    Телефоны:
                </h3>
                <div class="item">
                    +7 (495) 384-66-76
                </div>
                <div class="item">
                    +7 (495) 584-76-86
                </div>
            </div>
        </div>
        <div id="networks">
            <div class="networks-content">
                <a href="https://www.instagram.com/tea/" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.00096 512.00096">
                        <path d="m373.40625 0h-234.8125c-76.421875 0-138.59375 62.171875-138.59375 138.59375v234.816406c0 76.417969 62.171875 138.589844 138.59375 138.589844h234.816406c76.417969 0 138.589844-62.171875 138.589844-138.589844v-234.816406c0-76.421875-62.171875-138.59375-138.59375-138.59375zm108.578125 373.410156c0 59.867188-48.707031 108.574219-108.578125 108.574219h-234.8125c-59.871094 0-108.578125-48.707031-108.578125-108.574219v-234.816406c0-59.871094 48.707031-108.578125 108.578125-108.578125h234.816406c59.867188 0 108.574219 48.707031 108.574219 108.578125zm0 0"/>
                        <path d="m256 116.003906c-77.195312 0-139.996094 62.800782-139.996094 139.996094s62.800782 139.996094 139.996094 139.996094 139.996094-62.800782 139.996094-139.996094-62.800782-139.996094-139.996094-139.996094zm0 249.976563c-60.640625 0-109.980469-49.335938-109.980469-109.980469 0-60.640625 49.339844-109.980469 109.980469-109.980469 60.644531 0 109.980469 49.339844 109.980469 109.980469 0 60.644531-49.335938 109.980469-109.980469 109.980469zm0 0"/>
                        <path d="m399.34375 66.285156c-22.8125 0-41.367188 18.558594-41.367188 41.367188 0 22.8125 18.554688 41.371094 41.367188 41.371094s41.371094-18.558594 41.371094-41.371094-18.558594-41.367188-41.371094-41.367188zm0 52.71875c-6.257812 0-11.351562-5.09375-11.351562-11.351562 0-6.261719 5.09375-11.351563 11.351562-11.351563 6.261719 0 11.355469 5.089844 11.355469 11.351563 0 6.257812-5.09375 11.351562-11.355469 11.351562zm0 0"/>
                    </svg>
                </a>
                <a href="https://www.facebook.com/" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="m75 512h167v-182h-60v-60h60v-75c0-41.355469 33.644531-75 75-75h75v60h-60c-16.542969 0-30 13.457031-30 30v60h87.292969l-10 60h-77.292969v182h135c41.355469 0 75-33.644531 75-75v-362c0-41.355469-33.644531-75-75-75h-362c-41.355469 0-75 33.644531-75 75v362c0 41.355469 33.644531 75 75 75zm-45-437c0-24.8125 20.1875-45 45-45h362c24.8125 0 45 20.1875 45 45v362c0 24.8125-20.1875 45-45 45h-105v-122h72.707031l20-120h-92.707031v-30h90v-120h-105c-57.898438 0-105 47.101562-105 105v45h-60v120h60v122h-137c-24.8125 0-45-20.1875-45-45zm0 0"/>
                    </svg>
                </a>
                <a href="https://www.youtube.com/" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -62 512.00199 512">
                        <path d="m334.808594 170.992188-113.113282-61.890626c-6.503906-3.558593-14.191406-3.425781-20.566406.351563-6.378906 3.78125-10.183594 10.460937-10.183594 17.875v122.71875c0 7.378906 3.78125 14.046875 10.117188 17.832031 3.308594 1.976563 6.976562 2.96875 10.652344 2.96875 3.367187 0 6.742187-.832031 9.847656-2.503906l113.117188-60.824219c6.714843-3.613281 10.90625-10.59375 10.9375-18.222656.027343-7.628906-4.113282-14.640625-10.808594-18.304687zm-113.859375 63.617187v-91.71875l84.539062 46.257813zm0 0"/>
                        <path d="m508.234375 91.527344-.023437-.234375c-.433594-4.121094-4.75-40.777344-22.570313-59.421875-20.597656-21.929688-43.949219-24.59375-55.179687-25.871094-.929688-.105469-1.78125-.203125-2.542969-.304688l-.894531-.09375c-67.6875-4.921874-169.910157-5.5937495-170.933594-5.59765575l-.089844-.00390625-.089844.00390625c-1.023437.00390625-103.246094.67578175-171.542968 5.59765575l-.902344.09375c-.726563.097657-1.527344.1875-2.398438.289063-11.101562 1.28125-34.203125 3.949219-54.859375 26.671875-16.972656 18.445312-21.878906 54.316406-22.382812 58.347656l-.058594.523438c-.152344 1.714844-3.765625 42.539062-3.765625 83.523437v38.3125c0 40.984375 3.613281 81.808594 3.765625 83.527344l.027344.257813c.433593 4.054687 4.746093 40.039062 22.484375 58.691406 19.367187 21.195312 43.855468 24 57.027344 25.507812 2.082031.238282 3.875.441406 5.097656.65625l1.183594.164063c39.082031 3.71875 161.617187 5.550781 166.8125 5.625l.15625.003906.15625-.003906c1.023437-.003907 103.242187-.675781 170.929687-5.597657l.894531-.09375c.855469-.113281 1.816406-.214843 2.871094-.324218 11.039062-1.171875 34.015625-3.605469 54.386719-26.019532 16.972656-18.449218 21.882812-54.320312 22.382812-58.347656l.058594-.523437c.152344-1.71875 3.769531-42.539063 3.769531-83.523438v-38.3125c-.003906-40.984375-3.617187-81.804687-3.769531-83.523437zm-26.238281 121.835937c0 37.933594-3.3125 77-3.625 80.585938-1.273438 9.878906-6.449219 32.574219-14.71875 41.5625-12.75 14.027343-25.847656 15.417969-35.410156 16.429687-1.15625.121094-2.226563.238282-3.195313.359375-65.46875 4.734375-163.832031 5.460938-168.363281 5.488281-5.082032-.074218-125.824219-1.921874-163.714844-5.441406-1.941406-.316406-4.039062-.558594-6.25-.808594-11.214844-1.285156-26.566406-3.042968-38.371094-16.027343l-.277344-.296875c-8.125-8.464844-13.152343-29.6875-14.429687-41.148438-.238281-2.710937-3.636719-42.238281-3.636719-80.703125v-38.3125c0-37.890625 3.304688-76.914062 3.625-80.574219 1.519532-11.636718 6.792969-32.957031 14.71875-41.574218 13.140625-14.453125 26.996094-16.054688 36.160156-17.113282.875-.101562 1.691407-.195312 2.445313-.292968 66.421875-4.757813 165.492187-5.464844 169.046875-5.492188 3.554688.023438 102.589844.734375 168.421875 5.492188.808594.101562 1.691406.203125 2.640625.3125 9.425781 1.074218 23.671875 2.699218 36.746094 16.644531l.121094.128906c8.125 8.464844 13.152343 30.058594 14.429687 41.75.226563 2.558594 3.636719 42.171875 3.636719 80.71875zm0 0"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>

<div id="reservation-container">
    <div id="reservation">
        <div id="reservation-cancel">
            <img id="reservation-cancel-close" src="images/tea_main/buytea-close.png" alt="">
        </div>
        <div id="reservation-content">
            <h2 class="text-header">
                Оформление заказа
            </h2>
            <form action="" id="reserve" method="post">
                <div class="reserve-input" id="fir-input">
                    <input type="text" class="shares-input" name="order" placeholder="Ваш заказ" id="order">
                    <p class="reserve-error">
                        Заполните поле
                    </p>
                    <div class="reserve-first-select">
                        <div class="select-item" id="white-reserve">Белый чай
                            <button type="button" class="shares-input select-button">
                                <img class="reserve-select-right" src="images/tea_main/reserve-select-right.png" alt="">
                            </button>
                            <div class="select-item-internBlock">
                                <div class="text-select-item">Baihao Yinzhen</div>
                                <div class="text-select-item">Bai Mudan</div>
                                <div class="text-select-item">Shoumei & Gong Mei</div>
                            </div>
                        </div>
                        <div class="select-item" id="black-reserve">Чёрный чай
                            <button type="button" class="shares-input select-button">
                                <img class="reserve-select-right" src="images/tea_main/reserve-select-right.png" alt="">
                            </button>
                            <div class="select-item-internBlock">
                                <div class="text-select-item">Ассам</div>
                                <div class="text-select-item">Кимун</div>
                                <div class="text-select-item">Дянь Хун</div>
                                <div class="text-select-item">Эрл Грей</div>
                                <div class="text-select-item">Махараджа</div>
                                <div class="text-select-item">Лапсан Сяо Чжун</div>
                            </div>
                        </div>
                        <div class="select-item" id="green-reserve">Зелёный чай
                            <button type="button" class="shares-input select-button">
                                <img class="reserve-select-right" src="images/tea_main/reserve-select-right.png" alt="">
                            </button>
                            <div class="select-item-internBlock">
                                <div class="text-select-item">Колодец дракона</div>
                                <div class="text-select-item">Подарок царя</div>
                                <div class="text-select-item">Одна нежность и три свежести</div>
                                <div class="text-select-item">Жёлтые горы</div>
                                <div class="text-select-item">Свежесть бамбуковых листьев</div>
                            </div>
                        </div>
                        <div class="select-item" id="mixes-reserve">Эксклюзивные миксы
                            <button type="button" class="shares-input select-button">
                                <img class="reserve-select-right" src="images/tea_main/reserve-select-right.png" alt="">
                            </button>
                            <div class="select-item-internBlock">
                                <div class="text-select-item">Любителям необычных вкусов</div>
                                <div class="text-select-item">Чай со вкусом шампанского</div>
                                <div class="text-select-item">Домашний очаг</div>
                                <div class="text-select-item">Сладкий апельсин</div>
                                <div class="text-select-item">Лимонный напиток</div>
                                <div class="text-select-item">Чай для успокаивание желудка</div>
                            </div>
                        </div>
                        <div class="select-item" id="oolong-reserve">Улун
                            <button type="button" class="shares-input select-button">
                                <img class="reserve-select-right" src="images/tea_main/reserve-select-right.png" alt="">
                            </button>
                            <div class="select-item-internBlock">
                                <div class="text-select-item">Формоза</div>
                                <div class="text-select-item">Железная Гуанинь</div>
                                <div class="text-select-item">Напиток долголетия</div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="shares-input" id="order-button">
                        <img class="reserve-select-right" src="images/tea_main/reserve-select-right.png" alt="">
                    </button>
                </div>
                <div class="reserve-input" id="sec-input">
                    <input type="number" class="shares-input" name="count" placeholder="Кол-во грамм" id="count">
                    <p class="reserve-error">
                        Заполните поле
                    </p>
                </div>
                <div class="reserve-input" id="thr-input">
                    <input type="text" class="shares-input" name="name" placeholder="Ваше имя" id="name">
                    <p class="reserve-error">
                        Заполните поле
                    </p>
                </div>
                <div class="reserve-input" id="fou-input">
                    <input type="text" class="shares-input" name="phone" placeholder="Ваш телефон" id="phone">
                    <p class="reserve-error">
                        Заполните поле
                    </p>
                </div>
            </form>
            <div id="reserve-button">
                <button type="button" class="main-button btn">
                    Оформить заказ
                    <img src="images/tea_main/teaButton.png" alt="">
                </button>
            </div>
        </div>

        <div id="reservation-sent">
            <h2 class="text-header">
                Спасибо!
            </h2>
            <div class="reservation-sent-text">
                Мы начали собирать ваш заказ. Наш менеджер свяжется с вами в течение 15 минут.
            </div>
        </div>
    </div>
</div>

<script src="js/wow.min.js"></script>
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/slick/slick.min.js"></script>
<script src="js/circletype.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>