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
                <i class="i-plain icon-map-marker nomargin color"></i>
                <div class="he-text">
                    Адрес
                    <span class="text-muted">г.Минск Независимости 58, офис 432</span>
                </div>
            </li>

            <li>
                <i class="fa-solid fa-phone"></i>
                <div class="he-text">
                    Телефон
                    <span class="text-muted">+375 29 893 18 79</span>
                </div>
            </li>
        </ul>
    </div>

</header><!-- / block_179600 -->
<div class="container">
    <aside class="sidebar left">
        левый сайдбар
    </aside>
    <main>
        <?= $content ?>
    </main>
<!--    <aside class="sidebar right">-->
<!--        правый сайдбар-->
<!--    </aside>-->
</div>
<footer>
    футер сайта
</footer>
</body>
</html>
