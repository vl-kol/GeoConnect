<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Главная</title>
        <link href="/template/css/bootstrap.min.css" rel="stylesheet">
        <link href="/template/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Russo+One&amp;subset=cyrillic" rel="stylesheet">
        <link href="/template/css/prettyPhoto.css" rel="stylesheet">
        <link href="/template/css/price-range.css" rel="stylesheet">
        <link href="/template/css/animate.css" rel="stylesheet">
        <link href="/template/css/main.css" rel="stylesheet">
        <link href="/template/css/responsive.css" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="/template/js/html5shiv.js"></script>
        <script src="/template/js/respond.min.js"></script>
        <![endif]-->
        <link rel="shortcut icon" href="images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    </head><!--/head-->

    <body>
        <header id="header"><!--header-->
            <div class="header_top"><!--header_top-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="contactinfo">
                                <ul class="nav navbar-nav collapse navbar-collapse">
                                    <li><a href="/">Главная</a></li>
                                    <li class="dropdown"><a href="#">Магазин<i class="fa fa-angle-down"></i></a>
                                        <ul role="menu" class="sub-menu">
                                            <li><a href="/catalog/">Каталог товаров</a></li>
                                            <li><a href="/cart/">Корзина</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="/about/">О магазине</a></li>
                                    <li><a href="/contacts/">Контакты</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-3 pull-right">
                            <div class="telephone pull-right"><i class="fa fa-phone"></i> +7 (812) 433-34-88</div>
                        </div>
                    </div>
                </div>
            </div><!--/header_top-->

            <div class="header-middle"><!--header-middle-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="logo pull-left">
                                <a href="/"><img src="/template/images/home/logo.svg" alt="" /></a>
                            </div>
                            <div class="slogan">
                                <h2>Умные решения</br>вашего дома!</h2>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="shop-menu pull-right">
                                <ul class="nav navbar-nav">
                                    <li>
                                            <a href="/cart">
                                                <i class="fa fa-plus-square"></i> Товаров
                                                (<span id="cart-count"><?php echo Cart::countItems();?></span>)
                                            </a>
                                    </li>
                                    <?php if (User::isGuest()): ?>
                                        <li><a href="/user/login/"><i class="fa fa-key"></i> Вход</a></li>
                                        <li><a href="/user/register/"><i class="fa fa-id-badge"></i> Регистрация</a></li>
                                    <?php else: ?>
                                        <li><a href="/cabinet/edit/"><i class="fa fa-id-badge"></i> Аккаунт</a></li>
                                        <li><a href="/user/logout/"><i class="fa fa-unlock"></i> Выход</a></li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header-middle-->

            <hr>

        </header><!--/header-->