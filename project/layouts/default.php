<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/project/webroot/style.css">
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


        <div class="btn-holder pull-right media-desktop leftmargin-minier">
            <button type="button"  data-url="https://eurowork.by/wp-content/themes/shabloner_8061//forms/basic.php" class="dialog_open pull-right button button-rounded button-large  button-circle button-circle" >Обратный звонок</button>
        </div>


        <ul class="header-extras">
            <li>
                <i class="i-plain icon-map-marker nomargin color"></i>
                <div class="he-text">
                    Адрес
                    <span class="text-muted">г.Минск Независимости 58, офис 432</span>
                </div>
            </li>

            <li>
                <i class="i-plain icon-call nomargin color"></i>
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
