<?php
use Project\Klass\UserInfo\UserInfo;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/project/webroot/style.css">
    <link rel="stylesheet" href="https://eurowork.by/wp-content/themes/shabloner_8061/css/bootstrap.css?_1637782698" type="text/css" />
    <link rel="stylesheet" href="https://eurowork.by/wp-content/themes/shabloner_8061/base.css?_1637782698" type="text/css" />
    <link rel="stylesheet" href="https://eurowork.by/wp-content/themes/shabloner_8061/css/swiper.css?_1637782698" type="text/css" />

    <link rel="stylesheet" href="https://eurowork.by/wp-content/themes/shabloner_8061/css/dark.css?_1637782698" type="text/css" />
    <link rel="stylesheet" href="https://eurowork.by/wp-content/themes/shabloner_8061/css/font-icons.css?_1637782698" type="text/css" />
    <link rel="stylesheet" href="https://eurowork.by/wp-content/themes/shabloner_8061/css/et-line.css?_1637782698" type="text/css" />
    <link rel="stylesheet" href="https://eurowork.by/wp-content/themes/shabloner_8061/css/animate.css?_1637782698" type="text/css" />
    <link rel="stylesheet" href="https://eurowork.by/wp-content/themes/shabloner_8061/css/magnific-popup.css?_1637782698" type="text/css" />

    <!--Цветовая схема-->
    <link rel="stylesheet" href="https://eurowork.by/wp-content/themes/shabloner_8061/css/palette.css?_1637782698" type="text/css" />

    <link rel="stylesheet" href="https://eurowork.by/wp-content/themes/shabloner_8061/css/fonts.css?_1637782698" type="text/css" />
    <link rel="stylesheet" href="https://eurowork.by/wp-content/themes/shabloner_8061/css/blocks.css?_1637782698" type="text/css" />

    <link rel="stylesheet" href="https://eurowork.by/wp-content/themes/shabloner_8061/custom.css?_1637782698" type="text/css" />
    <link rel="stylesheet" href="https://eurowork.by/wp-content/themes/shabloner_8061/css/responsive.css?_1637782698" type="text/css" />
    <link rel="stylesheet" href="https://eurowork.by/wp-content/themes/shabloner_8061/style.css?_1637782698" type="text/css" />

    <!--Шрифты-->
    <link rel="stylesheet" href="https://eurowork.by/wp-content/themes/shabloner_8061/fonts/roboto.css?_1637782698" type="text/css" />
    <link rel="stylesheet" href="https://eurowork.by/wp-content/themes/shabloner_8061/fonts/roboto.css?_1637782698" type="text/css" />
    <script src="https://kit.fontawesome.com/f227339774.js" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/9a8b3abb1d.js"></script>

    <title><?= $title?></title>
</head>
<body>
<header id="header" class="cv-head-1  no-sticky " style="[style]">
    <!-- Primary Navigation
    ============================================= -->
    <div id="page-menu" class="no-sticky ">

        <div id="page-menu-wrap">

            <div class="container clearfix">

                <nav class="with-arrows">
                </nav>

                <div id="page-submenu-trigger"><i class="icon-reorder"></i></div>

            </div>

        </div>

    </div>

    <div class="container clearfix bottompadding-xs toppadding-xs">

        <!-- Logo
        ============================================= -->
        <div id="logo">

            <div class='logo_desc'>
                <div class="toppadding-xs" id="site_name"><a href="https://eurowork.by/">EuroWork.by</a></div>
                <div class="" id="site_description">Ваши новые возможности</div>
            </div>
        </div><!-- #logo end -->

        <ul class="header-extras">
            <li>
<!--                <i class="i-plain icon-map-marker nomargin color"></i>-->
                <div class="he-text">
                    Адрес
                    <span class="text-muted">г.Минск Независимости 58, офис 432</span>
                </div>
            </li>

            <li>
<!--                <i class="fa-solid fa-phone"></i>-->
                <div class="he-text">
                    Телефон
                    <span class="text-muted">+375 29 893 18 79</span>
                </div>
            </li>
        </ul>
    </div>

</header><!-- / block_179600 -->
<div class="container">
<!--    <aside class="sidebar left">-->
<!--        левый сайдбар-->
<!--    </aside>-->
    <main>
        <? echo (!empty($_SESSION['id']))?((new UserInfo())->userInfo($_SESSION['id'])):'Вы не авторизованы';?>
        <?= $content ?>
    </main>
<!--    <aside class="sidebar right">-->
<!--        правый сайдбар-->
<!--    </aside>-->
</div>
<footer id="footer" class="dark footer_5" style="">
    <div class="overfill" style="background-color: rgba(0, 0, 0, 0.85);	"></div>

    <div class="container z1000">

        <!-- Footer Widgets
        ============================================= -->
        <div class="footer-widgets-wrap clearfix">

            <div class="col_one_third ">

                <div class="widget clearfix" style="margin-bottom: -20px;">
                    <div class="fancy-title title-bottom-border">
                        <h3 class="editable block_179604 item-option_934776 field_title">EuroWork.by</h3>
                    </div>
                    <p class="editable block_179604 item-option_3 field_text">ООО "Оранжевый Экспресс"
                        Официальное трудоустройство за рубежом
                        лицензия 33030/28210000066445 от 15.01.2021
                        выдана Министерством внутренних дел
                        УНП 691527607 Зарегистрировано 15.11.2012
                        Минским райисполкомом
                    </p>

                </div>




            </div>

            <div class="col_one_third ">

                <div class="widget clearfix" style="margin-bottom: -20px;">
                    <div class="fancy-title title-bottom-border">
                        <h3 class="editable block_179604 item-option_530964 field_social_title">Подписывайтесь на нас</h3>
                    </div>

                    <div class="socials_list">

                        <table>

                            <tr><td><i class="icon-instagram "></i></td><td><a href="https://www.instagram.com/eurowork.by/" class="">Instagram</a></td></tr>

                        </table>

                    </div>

                </div>

            </div>

            <div class="col_one_third col_last">

                <div class="widget clearfix" style="margin-bottom: -20px;">

                    <div class="fancy-title title-bottom-border">
                        <h3 class="editable block_179604 item-option_953385 field_contact_title">Контакты</h3>
                    </div>

                    <div class=" icons_block">
                        <div class="socials_list">
                            <table>
                                <tr>
                                    <td><i class="icon-phone color"></i></td>
                                    <td><span class="editable block_179604 item-option_354878 field_phone">+375 29 893 18 79</span>
                                </tr>
                                <tr>
                                    <td><i class="icon-map-marker color"></i></td>
                                    <td><span class="editable block_179604 item-option_169905 field_address">г.Минск Независимости 58, офис 432 <br> пн-пт с 9:00 до 18:00 <br> сб-вс - выходной</span>
                                </tr>
                                <tr>
                                    <td><i class="icon-line-mail color"></i></td>
                                    <td><span class="editable block_179604 item-option_235652 field_email">go@eurowork.by</span>
                                </tr>
                            </table>
                        </div>
                    </div>

                </div>

            </div>


        </div><!-- .footer-widgets-wrap end -->

    </div>

    <!-- Copyrights
    ============================================= -->
    <div id="copyrights">

        <div class="container clearfix center">

            <span class="editable block_179604 item-option_517051 field_footer_text">EuroWork.by © 2022  | Все права защищены   <img src="https://eurowork.by/wp-content/img/logopay.svg"></span>

        </div>

    </div><!-- #copyrights end -->

</footer><!-- #footer end -->
</body>
</html>
