    <div id="top-banner-and-menu">

    <div class="container">
        <?php $curr = \ishop\App::$app->getProperty('currency'); ?>
        <div class="col-xs-12 col-sm-4 col-md-3 sidemenu-holder">
            <!-- ================================== TOP NAVIGATION ================================== -->
            <div class="side-menu animate-dropdown">
                <div class="head"><i class="fa fa-list"></i>Категории:</div>
                <nav class="yamm megamenu-horizontal" role="navigation" id="desc_menu" >
                    <?php new \app\widgets\menu\Menu([

                        'tpl' => WWW . '/menu/menu.php',
                        'tpl2' => WWW . '/menu/menu2.php',
                        'tpl3' => WWW . '/menu/menu3.php',
                        'tpl_num'=>'1',
                        'cacheKey'=>'ishop',
                        'attrs' => ['class'=>'nav'],
                    ]); ?>
                </nav>
                <nav class="main-nav" role="navigation" id="mob_menu">
                    <input id="main-menu-state" type="checkbox" />
                    <label class="main-menu-btn" for="main-menu-state">
                        <span class="main-menu-btn-icon"></span> Toggle main menu visibility
                    </label>
                    <?php new \app\widgets\menu\Menu([

                        'tpl' => WWW . '/menu/mobile_menu.php',
                        'cacheKey'=>'ishop2',
                        'tpl_num'=>'1',
                        'attrs' => ['class'=>'sm sm-blue sm-vertical','id'=>'main-menu'],
                    ]); ?>
                </nav>



            </div>


            <!-- ================================== TOP NAVIGATION : END ================================== -->
        </div><!-- /.sidemenu-holder -->


        <div class="col-xs-12 col-sm-8 col-md-9 homebanner-holder">
            <!-- ========================================== SECTION – HERO ========================================= -->
            <div id="hero">
                <?php if($brands): ?>
                <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
                    <?php foreach($brands as $brand): ?>
                    <div class="item" style="background-image: url('images/<?=$brand->slider_img;?>');">
                        <div class="container-fluid">
                            <div class="caption vertical-center text-left">


                                <div class="excerpt fadeInDown-2">
                                   <?=$brand->slider_text;?>
                                </div>

                                <div class="button-holder fadeInDown-3">
                                    <a href="product/<?=$brand->alias;?>" class="big le-button ">Подробнее</a>
                                </div>
                            </div><!-- /.caption -->
                        </div><!-- /.container-fluid -->
                    </div><!-- /.item -->
                    <?php endforeach; ?>


                </div><!-- /.owl-carousel -->
                <?php endif; ?>
            </div>
            <!-- ========================================= SECTION – HERO : END ========================================= -->
        </div><!-- /.homebanner-holder -->
    </div><!-- /.container -->
</div><!-- /#top-banner-and-menu -->

<!-- ========================================= HOME BANNERS ========================================= -->
<section id="banner-holder" class="wow fadeInUp">
    <div class="container">
        <div class="col-xs-12 col-lg-6 no-margin banner">
            <a href="category-grid-2.html">
                <div class="banner-text theblue">
                    <h1>New Life</h1>
                    <span class="tagline">Introducing New Category</span>
                </div>
                <img class="banner-image" alt="" src="assets/images/blank.gif" data-echo="images/banner-narrow-01.jpg" />
            </a>
        </div>
        <div class="col-xs-12 col-lg-6 no-margin text-right banner">
            <a href="category-grid-2.html">
                <div class="banner-text right">
                    <h1>Time &amp; Style</h1>
                    <span class="tagline">Checkout new arrivals</span>
                </div>
                <img class="banner-image" alt="" src="assets/images/blank.gif" data-echo="images/banner-narrow-02.jpg" />
            </a>
        </div>
    </div><!-- /.container -->
</section><!-- /#banner-holder -->
<!-- ========================================= HOME BANNERS : END ========================================= -->



<!-- ========================================= BEST SELLERS ========================================= -->

<section id="bestsellers" class="color-bg wow fadeInUp">
    <div class="container">
        <h1 class="section-title">Новинки</h1>

        <div class="product-grid-holder medium">

            <div class="col-xs-12 col-md-12 no-margin">
                <?php if($hits): ?>
                <div class="row no-margin">

                     <?php foreach($hits as $hit): ?>



                        <div class="col-xs-12 col-sm-2 no-margin product-item-holder size-medium hover">
                            <div class="product-item">
                                <div class="image">
                                    <a href="product/<?=$hit->alias;?>">   <img alt="" style="max-height: 143px; min-height: 143px; margin: 0 auto;" src="assets/images/blank.gif" data-echo="images/<?=$hit->img;?>" /> </a>
                                </div>
                                <div class="body">
                                    <div class="label-discount clear"></div>
                                    <div class="title">
                                        <a href="product/<?=$hit->alias;?>"><?=$hit->title;?></a>
                                    </div>
                                    <div class="brand"><?=$hit->brand_title ?></div>

                                </div>
                                <div class="prices">
                                    <div class="price-current text-right"><?=$curr['symbol_left'];?><?=number_format($hit->price * $curr['value'], 0, ',', ' ');?><?=$curr['symbol_right'];?></div>

                                </div>
                                <div class="hover-area">
                                    <div class="add-cart-button">
                                        <a data-id="<?=$hit->id;?>" href="cart/add?id=<?=$hit->id;?>" class="add-to-cart-link le-button">Купить</a>
                                    </div>

                                </div>
                            </div>
                        </div>


                    <?php endforeach; ?>






                </div><!-- /.row -->
                <?php endif; ?>
            </div><!-- /.col -->

    </div><!-- /.container -->
</section><!-- /#bestsellers -->
<!-- ========================================= BEST SELLERS : END ========================================= -->

<!-- ========================================= RECENTLY VIEWED ========================================= -->
    <?php if($recentlyViewed): ?>
        <section id="recently-reviewd-2" class="wow fadeInUp">
            <div class="container">
                <div class="carousel-holder hover">

                    <div class="title-nav">

                        <h2 class="h1">Ранее просмотренное</h2>
                        <div class="nav-holder">
                            <a href="#prev" data-target="#owl-recently-viewed-2" class="slider-prev btn-prev fa fa-angle-left"></a>
                            <a href="#next" data-target="#owl-recently-viewed-2" class="slider-next btn-next fa fa-angle-right"></a>
                        </div>
                    </div><!-- /.title-nav -->


                    <div id="owl-recently-viewed-2" class="owl-carousel product-grid-holder">
                        <?php foreach($recentlyViewed as $item): ?>
                            <div class="no-margin carousel-item product-item-holder size-small hover">

                                <div class="product-item">
                                    <div class="ribbon red"><span>sale</span></div>
                                    <div class="image">
                                        <a href="product/<?=$item['alias'];?>">
                                            <img alt="product/<?=$item['alias'];?>" src="assets/images/blank.gif" style="max-height: 143px; margin: 0 auto;" data-echo="images/<?=$item['img'];?>" />
                                        </a>
                                    </div>
                                    <div class="body">
                                        <div class="title">
                                            <a href="product/<?=$item['alias'];?>"><?=$item['title'];?></a>
                                        </div>
                                        <div class="brand">Sharp</div>
                                    </div>
                                    <div class="prices">
                                        <div class="price-current text-right"><?=$curr['symbol_left'];?><?=$item['price'] * $curr['value'];?><?=$curr['symbol_right'];?></div>
                                    </div>
                                    <div class="hover-area">
                                        <div class="add-cart-button">
                                            <a href="cart/add?id=<?=$item['id'];?>" class="le-button">В корзину</a>
                                        </div>

                                    </div>
                                </div><!-- /.product-item -->
                            </div><!-- /.product-item-holder -->


                        <?php endforeach; ?>

                    </div><!-- /#recently-carousel -->


                </div><!-- /.carousel-holder -->
            </div><!-- /.container -->
        </section><!-- /#recently-reviewd -->
    <?php endif; ?>
<!-- ========================================= RECENTLY VIEWED : END ========================================= -->

<!-- ========================================= TOP BRANDS ========================================= -->
<section id="top-brands" class="wow fadeInUp">
    <div class="container">
        <div class="carousel-holder" >

            <div class="title-nav">
                <h1>Top Brands</h1>
                <div class="nav-holder">
                    <a href="#prev" data-target="#owl-brands" class="slider-prev btn-prev fa fa-angle-left"></a>
                    <a href="#next" data-target="#owl-brands" class="slider-next btn-next fa fa-angle-right"></a>
                </div>
            </div><!-- /.title-nav -->

            <div id="owl-brands" class="owl-carousel brands-carousel">

                <div class="carousel-item">
                    <a href="#">
                        <img alt="" src="assets/images/brands/brand-01.jpg" />
                    </a>
                </div><!-- /.carousel-item -->

                <div class="carousel-item">
                    <a href="#">
                        <img alt="" src="assets/images/brands/brand-02.jpg" />
                    </a>
                </div><!-- /.carousel-item -->

                <div class="carousel-item">
                    <a href="#">
                        <img alt="" src="assets/images/brands/brand-03.jpg" />
                    </a>
                </div><!-- /.carousel-item -->

                <div class="carousel-item">
                    <a href="#">
                        <img alt="" src="assets/images/brands/brand-04.jpg" />
                    </a>
                </div><!-- /.carousel-item -->

                <div class="carousel-item">
                    <a href="#">
                        <img alt="" src="assets/images/brands/brand-01.jpg" />
                    </a>
                </div><!-- /.carousel-item -->

                <div class="carousel-item">
                    <a href="#">
                        <img alt="" src="assets/images/brands/brand-02.jpg" />
                    </a>
                </div><!-- /.carousel-item -->

                <div class="carousel-item">
                    <a href="#">
                        <img alt="" src="assets/images/brands/brand-03.jpg" />
                    </a>
                </div><!-- /.carousel-item -->

                <div class="carousel-item">
                    <a href="#">
                        <img alt="" src="assets/images/brands/brand-04.jpg" />
                    </a>
                </div><!-- /.carousel-item -->

            </div><!-- /.brands-caresoul -->

        </div><!-- /.carousel-holder -->
    </div><!-- /.container -->
</section><!-- /#top-brands -->