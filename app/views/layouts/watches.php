<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta -->

    <?=$this->getMeta();?>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <base href="/">
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet"  type="text/css" href="assets/css/bootstrap.min.css" media="all">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Customizable CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/colors/orange.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl.transitions.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">

    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <link rel="stylesheet" href="css/jquery-ui.structure.min.css">
    <link rel="stylesheet" href="css/jquery-ui.theme.min.css">
    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Icons/Glyphs -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon5.ico">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="smartmenus-1.1.0/css/sm-core-css.css">
    <link rel="stylesheet" href="smartmenus-1.1.0/css/sm-blue/sm-blue.css">



    <!-- HTML5 elements and media queries Support for IE8 : HTML5 shim and Respond.js -->
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>

    <![endif]-->
</head>

<body>


<div class="wrapper">
    <!-- ============================================================= TOP NAVIGATION ============================================================= -->
    <nav class="top-bar animate-dropdown">
        <div class="container">
            <div class="col-xs-12 col-sm-6 no-margin">
                <ul>
                    <li><a href="<?php PATH ?>">Домой</a></li>

                    <li><a href="blog.html">Блог</a></li>
                    <li><a href="faq.html">FAQ</a></li>
                    <li><a href="contact.html">Контакты</a></li>

                </ul>
            </div><!-- /.col -->

            <div class="col-xs-12 col-sm-6 no-margin">
                <ul class="right">


                    <?php if(!empty($_SESSION['user'])): ?>
                        <li><a href="#">Добро пожаловать, <?=h($_SESSION['user']['name']);?></a></li>
                        <li><a href="user/logout">Выход</a></li>
                    <?php else: ?>
                        <li><a href="user/login">Вход</a></li>
                        <li><a href="user/signup">Регистрация</a></li>
                    <?php endif; ?>
                </ul>
            </div><!-- /.col -->
        </div><!-- /.container -->
    </nav><!-- /.top-bar -->
    <!-- ============================================================= TOP NAVIGATION : END ============================================================= -->

    <!-- ============================================================= HEADER ============================================================= -->
    <header>
        <div class="container no-padding">
            <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
                <!-- ============================================================= LOGO ============================================================= -->
                <div class="logo">
                    <a href="<?=PATH;?>">
                        <!--<img alt="logo" src="assets/images/logo.svg" width="233" height="54"/>-->
                        <!--<object id="sp" type="image/svg+xml" data="assets/images/logo.svg" width="233" height="54"></object>-->
                        <svg width="233" height="80" viewBox="0 0 611 131" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="611" height="131" rx="5" fill="#F27A24"/>
                            <circle cx="121" cy="72" r="23.5" stroke="white" stroke-width="15"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M50 38.2959C50 33.9562 45.0062 31.8628 42.3823 35.3195C34.6116 45.5566 30 58.3231 30 72.1668C30 86.0105 34.6116 98.7771 42.3823 109.014C45.0062 112.471 50 110.377 50 106.038V94.247C50 93.457 49.8083 92.6804 49.4679 91.9675C46.6036 85.9704 45 79.2559 45 72.1668C45 65.0777 46.6036 58.3632 49.4679 52.3662C49.8083 51.6533 50 50.8767 50 50.0867V38.2959Z" fill="white"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M70 39.7307C70 35.4821 65.1653 33.3417 62.4887 36.641C54.6794 46.2671 50 58.5355 50 71.8968C50 85.2581 54.6794 97.5265 62.4887 107.153C65.1653 110.452 70 108.311 70 104.063V92.8118C70 91.9737 69.7837 91.1518 69.4049 90.4041C66.5876 84.8444 65 78.556 65 71.8968C65 65.2376 66.5876 58.9492 69.4049 53.3895C69.7837 52.6419 70 51.82 70 50.9818V39.7307Z" fill="white"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M90 41.1328C90 36.9883 85.3476 34.7988 82.6172 37.9168C74.7612 46.8883 70 58.6381 70 71.5C70 84.3619 74.7612 96.1117 82.6172 105.083C85.3476 108.201 90 106.012 90 101.867V91.1833C90 90.287 89.752 89.4111 89.3251 88.623C86.5665 83.5307 85 77.6983 85 71.5C85 65.3017 86.5665 59.4692 89.3251 54.377C89.752 53.5889 90 52.713 90 51.8167V41.1328Z" fill="white"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M192 38.2959C192 33.9562 196.994 31.8628 199.618 35.3195C207.388 45.5566 212 58.3231 212 72.1668C212 86.0105 207.388 98.7771 199.618 109.014C196.994 112.471 192 110.377 192 106.038V94.247C192 93.457 192.192 92.6804 192.532 91.9675C195.396 85.9704 197 79.2559 197 72.1668C197 65.0777 195.396 58.3632 192.532 52.3662C192.192 51.6533 192 50.8767 192 50.0867V38.2959Z" fill="white"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M172 39.7307C172 35.4821 176.835 33.3417 179.511 36.641C187.321 46.2671 192 58.5355 192 71.8968C192 85.2581 187.321 97.5265 179.511 107.153C176.835 110.452 172 108.311 172 104.063V92.8118C172 91.9737 172.216 91.1518 172.595 90.4041C175.412 84.8444 177 78.556 177 71.8968C177 65.2376 175.412 58.9492 172.595 53.3895C172.216 52.6419 172 51.82 172 50.9818V39.7307Z" fill="white"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M152 41.1328C152 36.9883 156.652 34.7988 159.383 37.9168C167.239 46.8883 172 58.6381 172 71.5C172 84.3619 167.239 96.1117 159.383 105.083C156.652 108.201 152 106.012 152 101.867V91.1833C152 90.287 152.248 89.4111 152.675 88.623C155.434 83.5307 157 77.6983 157 71.5C157 65.3017 155.434 59.4692 152.675 54.377C152.248 53.5889 152 52.713 152 51.8167V41.1328Z" fill="white"/>
                            <path d="M272.375 83.1875H277.75V99.9062H272.719V88H238.281V42.3125H243.594V83.1875H267.062V42.3125H272.375V83.1875ZM289.562 53.75V75.4688L289.344 81.1562L289.25 82.9375L307.781 53.75H314.25V88H309.406V67.0625L309.5 62.9375L309.656 58.875L291.156 88H284.688V53.75H289.562ZM361.938 70.8438C361.938 76.0312 360.458 80.1667 357.5 83.25C354.562 86.3125 350.448 88.0625 345.156 88.5V103.375H340.031V88.5C334.865 88.1042 330.781 86.3333 327.781 83.1875C324.781 80.0417 323.281 75.9271 323.281 70.8438C323.281 65.6562 324.771 61.5312 327.75 58.4688C330.75 55.4062 334.906 53.6667 340.219 53.25V39.375H345.156V53.25C350.385 53.7292 354.49 55.5312 357.469 58.6562C360.448 61.7812 361.938 65.8438 361.938 70.8438ZM328.719 70.8438C328.719 74.8438 329.635 77.9792 331.469 80.25C333.302 82.5208 336.219 83.8438 340.219 84.2188V57.5938C336.365 57.9479 333.479 59.2083 331.562 61.375C329.667 63.5208 328.719 66.6771 328.719 70.8438ZM356.562 70.8438C356.562 62.8646 352.76 58.4688 345.156 57.6562V84.2188C349.115 83.8229 352 82.4896 353.812 80.2188C355.646 77.9479 356.562 74.8229 356.562 70.8438ZM386.938 88.625C384.708 88.625 382.667 88.2188 380.812 87.4062C378.979 86.5729 377.438 85.3021 376.188 83.5938H375.812C376.062 85.5938 376.188 87.4896 376.188 89.2812V103.375H371V53.75H375.219L375.938 58.4375H376.188C377.521 56.5625 379.073 55.2083 380.844 54.375C382.615 53.5417 384.646 53.125 386.938 53.125C391.479 53.125 394.979 54.6771 397.438 57.7812C399.917 60.8854 401.156 65.2396 401.156 70.8438C401.156 76.4688 399.896 80.8438 397.375 83.9688C394.875 87.0729 391.396 88.625 386.938 88.625ZM386.188 57.5312C382.688 57.5312 380.156 58.5 378.594 60.4375C377.031 62.375 376.229 65.4583 376.188 69.6875V70.8438C376.188 75.6562 376.99 79.1042 378.594 81.1875C380.198 83.25 382.771 84.2812 386.312 84.2812C389.271 84.2812 391.583 83.0833 393.25 80.6875C394.938 78.2917 395.781 74.9896 395.781 70.7812C395.781 66.5104 394.938 63.2396 393.25 60.9688C391.583 58.6771 389.229 57.5312 386.188 57.5312ZM438.156 65.0938C438.156 72.9896 436.906 78.8854 434.406 82.7812C431.927 86.6771 428.125 88.625 423 88.625C418.083 88.625 414.344 86.6354 411.781 82.6562C409.219 78.6562 407.938 72.8021 407.938 65.0938C407.938 57.1354 409.177 51.2292 411.656 47.375C414.135 43.5208 417.917 41.5938 423 41.5938C427.958 41.5938 431.719 43.6042 434.281 47.625C436.865 51.6458 438.156 57.4688 438.156 65.0938ZM413.188 65.0938C413.188 71.7396 413.969 76.5833 415.531 79.625C417.094 82.6458 419.583 84.1562 423 84.1562C426.458 84.1562 428.958 82.625 430.5 79.5625C432.062 76.4792 432.844 71.6562 432.844 65.0938C432.844 58.5312 432.062 53.7292 430.5 50.6875C428.958 47.625 426.458 46.0938 423 46.0938C419.583 46.0938 417.094 47.6042 415.531 50.625C413.969 53.625 413.188 58.4479 413.188 65.0938ZM467.5 58.1875H452.062V88H446.875V53.75H467.5V58.1875ZM490.25 88.625C488.021 88.625 485.979 88.2188 484.125 87.4062C482.292 86.5729 480.75 85.3021 479.5 83.5938H479.125C479.375 85.5938 479.5 87.4896 479.5 89.2812V103.375H474.312V53.75H478.531L479.25 58.4375H479.5C480.833 56.5625 482.385 55.2083 484.156 54.375C485.927 53.5417 487.958 53.125 490.25 53.125C494.792 53.125 498.292 54.6771 500.75 57.7812C503.229 60.8854 504.469 65.2396 504.469 70.8438C504.469 76.4688 503.208 80.8438 500.688 83.9688C498.188 87.0729 494.708 88.625 490.25 88.625ZM489.5 57.5312C486 57.5312 483.469 58.5 481.906 60.4375C480.344 62.375 479.542 65.4583 479.5 69.6875V70.8438C479.5 75.6562 480.302 79.1042 481.906 81.1875C483.51 83.25 486.083 84.2812 489.625 84.2812C492.583 84.2812 494.896 83.0833 496.562 80.6875C498.25 78.2917 499.094 74.9896 499.094 70.7812C499.094 66.5104 498.25 63.2396 496.562 60.9688C494.896 58.6771 492.542 57.5312 489.5 57.5312ZM534.625 88L533.594 83.125H533.344C531.635 85.2708 529.927 86.7292 528.219 87.5C526.531 88.25 524.417 88.625 521.875 88.625C518.479 88.625 515.812 87.75 513.875 86C511.958 84.25 511 81.7604 511 78.5312C511 71.6146 516.531 67.9896 527.594 67.6562L533.406 67.4688V65.3438C533.406 62.6562 532.823 60.6771 531.656 59.4062C530.51 58.1146 528.667 57.4688 526.125 57.4688C523.271 57.4688 520.042 58.3438 516.438 60.0938L514.844 56.125C516.531 55.2083 518.375 54.4896 520.375 53.9688C522.396 53.4479 524.417 53.1875 526.438 53.1875C530.521 53.1875 533.542 54.0938 535.5 55.9062C537.479 57.7188 538.469 60.625 538.469 64.625V88H534.625ZM522.906 84.3438C526.135 84.3438 528.667 83.4583 530.5 81.6875C532.354 79.9167 533.281 77.4375 533.281 74.25V71.1562L528.094 71.375C523.969 71.5208 520.99 72.1667 519.156 73.3125C517.344 74.4375 516.438 76.1979 516.438 78.5938C516.438 80.4688 517 81.8958 518.125 82.875C519.271 83.8542 520.865 84.3438 522.906 84.3438ZM578.938 99.8438H573.906V88H549.969V99.8438H544.969V83.5312H547.656C550.448 79.7396 552.635 75.2917 554.219 70.1875C555.802 65.0833 556.625 59.6042 556.688 53.75H574.031V83.5312H578.938V99.8438ZM569.031 83.5312V57.8438H561.344C561.073 62.4688 560.177 67.1562 558.656 71.9062C557.156 76.6354 555.281 80.5104 553.031 83.5312H569.031Z" fill="white"/>
                            <path d="M404.75 94.4062H441.344V97.5938H404.75V94.4062Z" fill="white"/>
                        </svg>

                    </a>


                </div><!-- /.logo -->
                <!-- ============================================================= LOGO : END ============================================================= -->
            </div><!-- /.logo-holder -->

            <div class="col-xs-12 col-sm-12 col-md-6 top-search-holder no-margin">
                <div class="contact-row">
                    <div class="phone inline">
                        <i class="fa fa-phone"></i> (+7996) 950 99 93
                    </div>
                    <div class="contact inline">
                        <i class="fa fa-envelope"></i> islamgagiev69@<span class="le-color">gmail.com</span>
                    </div>

                </div><!-- /.contact-row -->

                <!-- ============================================================= SEARCH AREA ============================================================= -->
                <div class="search-area" >

                        <div class="control-group" >
                            <form class="ui-widget" name="search" action="search" method="get" autocomplete="off">
                                <label for="search"></label>
                            <input  class="search-field " id="search" name="s" placeholder="Поиск"  />



                                   <a class="search-button" href="javascript: document.search.submit();" ></a>



                        </div>
                    </form>
                </div><!-- /.search-area -->
                <!-- ============================================================= SEARCH AREA : END ============================================================= -->
            </div><!-- /.top-search-holder -->

            <div class="col-xs-12 col-sm-12 col-md-3 top-cart-row no-margin" id="main_cart">
                <div class="top-cart-row-container">
                    <div style="opacity: 0; user-select: none" class="wishlist-compare-holder">
                        <div class="wishlist ">
                            <p><i class="fa fa-heart"></i> wishlist <span class="value">(21)</span> </p>
                        </div>
                        <div class="compare">
                           <p><i class="fa fa-exchange"></i> compare <span class="value">(2)</span> </p>
                        </div>
                    </div>

                    <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->
                    <div class="top-cart-holder dropdown animate-dropdown">
                        <div class="basket" >
                            <a class="dropdown-toggle" data-toggle="dropdown" href="cart/show" onclick="getCart(); return false;">
                                <div class="basket-item-count">
                                    <?php if(isset($_SESSION['cart'])): ?>
                                    <span class="count"><?=$_SESSION['cart.qty'];?></span>
                                    <?php else: ?>
                                    <span class="count">0</span>
                                    <?php endif; ?>
                                    <img src="assets/images/icon-cart.png" alt="" />
                                </div>

                                <div class="total-price-basket">
                                    <span class="lbl">Корзина:</span>

                                   <span class="total_count total-price">

                                         <?php if(!empty($_SESSION['cart'])): ?>
                                         <span class="value session_cart cart_price"><?= $_SESSION['cart.currency']['symbol_left'] . $_SESSION['cart.sum'] . $_SESSION['cart.currency']['symbol_right'];?></span>
                                         <?php else: ?>
                                      <span class="value">Пусто</span>
                                         <?php endif; ?>
                                        </span>
                                </div>
                            </a>

                            <ul class="dropdown-menu">








                            </ul>
                        </div><!-- /.basket -->
                    </div><!-- /.top-cart-holder -->
                </div><!-- /.top-cart-row-container -->
                <!-- ============================================================= SHOPPING CART DROPDOWN : END ============================================================= -->
            </div><!-- /.top-cart-row -->
        </div><!-- /.container -->
    </header>
    <!-- ============================================================= HEADER : END ============================================================= -->



    <?=$content;?>
    <!-- ========================================= TOP BRANDS : END ========================================= -->

    <!-- ============================================================= FOOTER ============================================================= -->
    <footer id="footer" class="color-bg">


        <div class="sub-form-row">
            <div class="container">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2 no-padding">
                    <form role="form">
                        <input placeholder="Подпишитесь для получения новостей о скидках">
                        <button class="le-button" >ок</button>
                    </form>
                </div>
            </div><!-- /.container -->
        </div><!-- /.sub-form-row -->

        <div class="link-list-row">
            <div class="container no-padding">
                <div class="col-xs-12 col-md-4 ">
                    <!-- ============================================================= CONTACT INFO ============================================================= -->
                    <div class="contact-info">
                        <div class="footer-logo">
                            <svg width="233" height="80" viewBox="0 0 611 131" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="611" height="131" rx="5" fill="#F27A24"/>
                                <circle cx="121" cy="72" r="23.5" stroke="white" stroke-width="15"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M50 38.2959C50 33.9562 45.0062 31.8628 42.3823 35.3195C34.6116 45.5566 30 58.3231 30 72.1668C30 86.0105 34.6116 98.7771 42.3823 109.014C45.0062 112.471 50 110.377 50 106.038V94.247C50 93.457 49.8083 92.6804 49.4679 91.9675C46.6036 85.9704 45 79.2559 45 72.1668C45 65.0777 46.6036 58.3632 49.4679 52.3662C49.8083 51.6533 50 50.8767 50 50.0867V38.2959Z" fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M70 39.7307C70 35.4821 65.1653 33.3417 62.4887 36.641C54.6794 46.2671 50 58.5355 50 71.8968C50 85.2581 54.6794 97.5265 62.4887 107.153C65.1653 110.452 70 108.311 70 104.063V92.8118C70 91.9737 69.7837 91.1518 69.4049 90.4041C66.5876 84.8444 65 78.556 65 71.8968C65 65.2376 66.5876 58.9492 69.4049 53.3895C69.7837 52.6419 70 51.82 70 50.9818V39.7307Z" fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M90 41.1328C90 36.9883 85.3476 34.7988 82.6172 37.9168C74.7612 46.8883 70 58.6381 70 71.5C70 84.3619 74.7612 96.1117 82.6172 105.083C85.3476 108.201 90 106.012 90 101.867V91.1833C90 90.287 89.752 89.4111 89.3251 88.623C86.5665 83.5307 85 77.6983 85 71.5C85 65.3017 86.5665 59.4692 89.3251 54.377C89.752 53.5889 90 52.713 90 51.8167V41.1328Z" fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M192 38.2959C192 33.9562 196.994 31.8628 199.618 35.3195C207.388 45.5566 212 58.3231 212 72.1668C212 86.0105 207.388 98.7771 199.618 109.014C196.994 112.471 192 110.377 192 106.038V94.247C192 93.457 192.192 92.6804 192.532 91.9675C195.396 85.9704 197 79.2559 197 72.1668C197 65.0777 195.396 58.3632 192.532 52.3662C192.192 51.6533 192 50.8767 192 50.0867V38.2959Z" fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M172 39.7307C172 35.4821 176.835 33.3417 179.511 36.641C187.321 46.2671 192 58.5355 192 71.8968C192 85.2581 187.321 97.5265 179.511 107.153C176.835 110.452 172 108.311 172 104.063V92.8118C172 91.9737 172.216 91.1518 172.595 90.4041C175.412 84.8444 177 78.556 177 71.8968C177 65.2376 175.412 58.9492 172.595 53.3895C172.216 52.6419 172 51.82 172 50.9818V39.7307Z" fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M152 41.1328C152 36.9883 156.652 34.7988 159.383 37.9168C167.239 46.8883 172 58.6381 172 71.5C172 84.3619 167.239 96.1117 159.383 105.083C156.652 108.201 152 106.012 152 101.867V91.1833C152 90.287 152.248 89.4111 152.675 88.623C155.434 83.5307 157 77.6983 157 71.5C157 65.3017 155.434 59.4692 152.675 54.377C152.248 53.5889 152 52.713 152 51.8167V41.1328Z" fill="white"/>
                                <path d="M272.375 83.1875H277.75V99.9062H272.719V88H238.281V42.3125H243.594V83.1875H267.062V42.3125H272.375V83.1875ZM289.562 53.75V75.4688L289.344 81.1562L289.25 82.9375L307.781 53.75H314.25V88H309.406V67.0625L309.5 62.9375L309.656 58.875L291.156 88H284.688V53.75H289.562ZM361.938 70.8438C361.938 76.0312 360.458 80.1667 357.5 83.25C354.562 86.3125 350.448 88.0625 345.156 88.5V103.375H340.031V88.5C334.865 88.1042 330.781 86.3333 327.781 83.1875C324.781 80.0417 323.281 75.9271 323.281 70.8438C323.281 65.6562 324.771 61.5312 327.75 58.4688C330.75 55.4062 334.906 53.6667 340.219 53.25V39.375H345.156V53.25C350.385 53.7292 354.49 55.5312 357.469 58.6562C360.448 61.7812 361.938 65.8438 361.938 70.8438ZM328.719 70.8438C328.719 74.8438 329.635 77.9792 331.469 80.25C333.302 82.5208 336.219 83.8438 340.219 84.2188V57.5938C336.365 57.9479 333.479 59.2083 331.562 61.375C329.667 63.5208 328.719 66.6771 328.719 70.8438ZM356.562 70.8438C356.562 62.8646 352.76 58.4688 345.156 57.6562V84.2188C349.115 83.8229 352 82.4896 353.812 80.2188C355.646 77.9479 356.562 74.8229 356.562 70.8438ZM386.938 88.625C384.708 88.625 382.667 88.2188 380.812 87.4062C378.979 86.5729 377.438 85.3021 376.188 83.5938H375.812C376.062 85.5938 376.188 87.4896 376.188 89.2812V103.375H371V53.75H375.219L375.938 58.4375H376.188C377.521 56.5625 379.073 55.2083 380.844 54.375C382.615 53.5417 384.646 53.125 386.938 53.125C391.479 53.125 394.979 54.6771 397.438 57.7812C399.917 60.8854 401.156 65.2396 401.156 70.8438C401.156 76.4688 399.896 80.8438 397.375 83.9688C394.875 87.0729 391.396 88.625 386.938 88.625ZM386.188 57.5312C382.688 57.5312 380.156 58.5 378.594 60.4375C377.031 62.375 376.229 65.4583 376.188 69.6875V70.8438C376.188 75.6562 376.99 79.1042 378.594 81.1875C380.198 83.25 382.771 84.2812 386.312 84.2812C389.271 84.2812 391.583 83.0833 393.25 80.6875C394.938 78.2917 395.781 74.9896 395.781 70.7812C395.781 66.5104 394.938 63.2396 393.25 60.9688C391.583 58.6771 389.229 57.5312 386.188 57.5312ZM438.156 65.0938C438.156 72.9896 436.906 78.8854 434.406 82.7812C431.927 86.6771 428.125 88.625 423 88.625C418.083 88.625 414.344 86.6354 411.781 82.6562C409.219 78.6562 407.938 72.8021 407.938 65.0938C407.938 57.1354 409.177 51.2292 411.656 47.375C414.135 43.5208 417.917 41.5938 423 41.5938C427.958 41.5938 431.719 43.6042 434.281 47.625C436.865 51.6458 438.156 57.4688 438.156 65.0938ZM413.188 65.0938C413.188 71.7396 413.969 76.5833 415.531 79.625C417.094 82.6458 419.583 84.1562 423 84.1562C426.458 84.1562 428.958 82.625 430.5 79.5625C432.062 76.4792 432.844 71.6562 432.844 65.0938C432.844 58.5312 432.062 53.7292 430.5 50.6875C428.958 47.625 426.458 46.0938 423 46.0938C419.583 46.0938 417.094 47.6042 415.531 50.625C413.969 53.625 413.188 58.4479 413.188 65.0938ZM467.5 58.1875H452.062V88H446.875V53.75H467.5V58.1875ZM490.25 88.625C488.021 88.625 485.979 88.2188 484.125 87.4062C482.292 86.5729 480.75 85.3021 479.5 83.5938H479.125C479.375 85.5938 479.5 87.4896 479.5 89.2812V103.375H474.312V53.75H478.531L479.25 58.4375H479.5C480.833 56.5625 482.385 55.2083 484.156 54.375C485.927 53.5417 487.958 53.125 490.25 53.125C494.792 53.125 498.292 54.6771 500.75 57.7812C503.229 60.8854 504.469 65.2396 504.469 70.8438C504.469 76.4688 503.208 80.8438 500.688 83.9688C498.188 87.0729 494.708 88.625 490.25 88.625ZM489.5 57.5312C486 57.5312 483.469 58.5 481.906 60.4375C480.344 62.375 479.542 65.4583 479.5 69.6875V70.8438C479.5 75.6562 480.302 79.1042 481.906 81.1875C483.51 83.25 486.083 84.2812 489.625 84.2812C492.583 84.2812 494.896 83.0833 496.562 80.6875C498.25 78.2917 499.094 74.9896 499.094 70.7812C499.094 66.5104 498.25 63.2396 496.562 60.9688C494.896 58.6771 492.542 57.5312 489.5 57.5312ZM534.625 88L533.594 83.125H533.344C531.635 85.2708 529.927 86.7292 528.219 87.5C526.531 88.25 524.417 88.625 521.875 88.625C518.479 88.625 515.812 87.75 513.875 86C511.958 84.25 511 81.7604 511 78.5312C511 71.6146 516.531 67.9896 527.594 67.6562L533.406 67.4688V65.3438C533.406 62.6562 532.823 60.6771 531.656 59.4062C530.51 58.1146 528.667 57.4688 526.125 57.4688C523.271 57.4688 520.042 58.3438 516.438 60.0938L514.844 56.125C516.531 55.2083 518.375 54.4896 520.375 53.9688C522.396 53.4479 524.417 53.1875 526.438 53.1875C530.521 53.1875 533.542 54.0938 535.5 55.9062C537.479 57.7188 538.469 60.625 538.469 64.625V88H534.625ZM522.906 84.3438C526.135 84.3438 528.667 83.4583 530.5 81.6875C532.354 79.9167 533.281 77.4375 533.281 74.25V71.1562L528.094 71.375C523.969 71.5208 520.99 72.1667 519.156 73.3125C517.344 74.4375 516.438 76.1979 516.438 78.5938C516.438 80.4688 517 81.8958 518.125 82.875C519.271 83.8542 520.865 84.3438 522.906 84.3438ZM578.938 99.8438H573.906V88H549.969V99.8438H544.969V83.5312H547.656C550.448 79.7396 552.635 75.2917 554.219 70.1875C555.802 65.0833 556.625 59.6042 556.688 53.75H574.031V83.5312H578.938V99.8438ZM569.031 83.5312V57.8438H561.344C561.073 62.4688 560.177 67.1562 558.656 71.9062C557.156 76.6354 555.281 80.5104 553.031 83.5312H569.031Z" fill="white"/>
                                <path d="M404.75 94.4062H441.344V97.5938H404.75V94.4062Z" fill="white"/>
                            </svg>

                        </div><!-- /.footer-logo -->

                        <p class="regular-bold"> Feel free to contact us via phone,email or just send us mail.</p>

                        <p>
                            17 Princess Road, London, Greater London NW1 8JR, UK
                            1-888-8MEDIA (1-888-892-9953)
                        </p>

                        <div class="social-icons">
                            <h3>Get in touch</h3>
                            <ul>
                                <li><a href="http://facebook.com/transvelo" class="fa fa-facebook"></a></li>
                                <li><a href="#" class="fa fa-twitter"></a></li>
                                <li><a href="#" class="fa fa-pinterest"></a></li>
                                <li><a href="#" class="fa fa-linkedin"></a></li>
                                <li><a href="#" class="fa fa-stumbleupon"></a></li>
                                <li><a href="#" class="fa fa-dribbble"></a></li>
                                <li><a href="#" class="fa fa-vk"></a></li>
                            </ul>
                        </div><!-- /.social-icons -->

                    </div>
                    <!-- ============================================================= CONTACT INFO : END ============================================================= -->
                </div>

                <div class="col-xs-12 col-md-8 no-margin">
                    <!-- ============================================================= LINKS FOOTER ============================================================= -->
                    <div class="link-widget">
                        <div class="widget">
                            <h3>Карта сайта</h3>
                            <ul>
                                <li><a href="category-grid.html">laptops &amp; computers</a></li>
                                <li><a href="category-grid.html">Cameras &amp; Photography</a></li>
                                <li><a href="category-grid.html">Smart Phones &amp; Tablets</a></li>
                                <li><a href="category-grid.html">Video Games &amp; Consoles</a></li>
                                <li><a href="category-grid.html">TV &amp; Audio</a></li>
                                <li><a href="category-grid.html">Gadgets</a></li>
                                <li><a href="category-grid.html">Car Electronic &amp; GPS</a></li>
                                <li><a href="category-grid.html">Accesories</a></li>
                            </ul>
                        </div><!-- /.widget -->
                    </div><!-- /.link-widget -->

                    <div class="link-widget">
                        <div class="widget">
                            <h3>Информация</h3>
                            <ul>
                                <li><a href="category-grid.html">Find a Store</a></li>
                                <li><a href="category-grid.html">About Us</a></li>
                                <li><a href="category-grid.html">Contact Us</a></li>
                                <li><a href="category-grid.html">Weekly Deals</a></li>
                                <li><a href="category-grid.html">Gift Cards</a></li>
                                <li><a href="category-grid.html">Recycling Program</a></li>
                                <li><a href="category-grid.html">Community</a></li>
                                <li><a href="category-grid.html">Careers</a></li>

                            </ul>
                        </div><!-- /.widget -->
                    </div><!-- /.link-widget -->

                    <div class="link-widget">
                        <div class="widget">
                            <h3>Information</h3>
                            <ul>
                                <li><a href="category-grid.html">My Account</a></li>
                                <li><a href="category-grid.html">Order Tracking</a></li>
                                <li><a href="category-grid.html">Wish List</a></li>
                                <li><a href="category-grid.html">Customer Service</a></li>
                                <li><a href="category-grid.html">Returns / Exchange</a></li>
                                <li><a href="category-grid.html">FAQs</a></li>
                                <li><a href="category-grid.html">Product Support</a></li>
                                <li><a href="category-grid.html">Extended Service Plans</a></li>
                            </ul>
                        </div><!-- /.widget -->
                    </div><!-- /.link-widget -->
                    <!-- ============================================================= LINKS FOOTER : END ============================================================= -->
                </div>
            </div><!-- /.container -->
        </div><!-- /.link-list-row -->

        <div class="copyright-bar">
            <div class="container">
                <div class="col-xs-12 col-sm-6 no-margin">

                </div>
                <div class="col-xs-12 col-sm-6 no-margin">
                    <div class="payment-methods ">
                        <ul>
                            <li><img alt="" src="assets/images/payments/payment-visa.png"></li>
                            <li><img alt="" src="assets/images/payments/payment-master.png"></li>
                            <li><img alt="" src="assets/images/payments/payment-paypal.png"></li>
                            <li><img alt="" src="assets/images/payments/payment-skrill.png"></li>
                        </ul>
                    </div><!-- /.payment-methods -->
                </div>
            </div><!-- /.container -->
        </div><!-- /.copyright-bar -->
    </footer><!-- /#footer -->
    <div class="preloader"><img src="images/ring.svg" alt=""></div>
    <!-- ============================================================= FOOTER : END ============================================================= -->
</div><!-- /.wrapper -->
<script>
    var path = '<?=PATH;?>',
        course = <?=$curr['value'];?>,
        symboleLeft = '<?=$curr['symbol_left'];?>',
        symboleRight = '<?=$curr['symbol_right'];?>';

</script>

<!-- JavaScripts placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="assets/js/jquery-migrate-1.2.1.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/gmap3.min.js"></script>
<script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/css_browser_selector.min.js"></script>
<script src="assets/js/echo.min.js"></script>
<script src="assets/js/jquery.easing-1.3.min.js"></script>
<script src="assets/js/bootstrap-slider.min.js"></script>
<script src="assets/js/jquery.raty.min.js"></script>
<script src="assets/js/jquery.prettyPhoto.min.js"></script>
<script src="assets/js/jquery.customSelect.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/buttons.js"></script>
<script src="assets/js/scripts.js"></script>



<script src="js/jquery-ui.min.js"></script>
<script src="assets/js/validator.min.js"></script>
<script src="js/main.js"></script>

    <script>
        $( function() {
    
            $( "#search" ).autocomplete({
    
                source:   "http://govno/search/typeahead",
                minLength: 3,
                select: function( event, ui ) {
                    console.log(ui.id);
                    window.location =  'http://govno/product/' + encodeURIComponent(ui.item.id);
                }
            });
        } );
    </script>
    <script>$(function(){
            $('.dropdown').hover(function() {
                    $(this).addClass('open');
                },
                function() {
                    $(this).removeClass('open');
                });
        });</script>
<script src="smartmenus-1.1.0/jquery.smartmenus.min.js"></script>
<script>// SmartMenus init
    $(function() {
        $('#main-menu').smartmenus({
            subMenusSubOffsetX: 1,
            subMenusSubOffsetY: -8
        });
    });

    // SmartMenus mobile menu toggle button
    $(function() {
        var $mainMenuState = $('#main-menu-state');
        if ($mainMenuState.length) {
            // animate mobile menu
            $mainMenuState.change(function(e) {
                var $menu = $('#main-menu');
                if (this.checked) {
                    $menu.hide().slideDown(250, function() { $menu.css('display', ''); });
                } else {
                    $menu.show().slideUp(250, function() { $menu.css('display', ''); });
                }
            });
            // hide mobile menu beforeunload
            $(window).bind('beforeunload unload', function() {
                if ($mainMenuState[0].checked) {
                    $mainMenuState[0].click();
                }
            });
        }
    });</script>

<script>
    if(window.innerWidth <= 768) {
        var body = (document.getElementById("desc_menu"));
        body.style.display = 'none';
    }
        else if(window.innerWidth >768)
    {
        var body = (document.getElementById("mob_menu"));
        body.style.display = 'none';
    }
</script>
</body>
<?php
$logs = \R::getDatabaseAdapter()
    ->getDatabase()
    ->getLogger();

debug( $logs->grep( 'SELECT' ) );
?>
</html>
