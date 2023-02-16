<!DOCTYPE html>
<html lang="en-US" itemscope="itemscope" itemtype="http://schema.org/WebPage">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <title>Click Antilles</title>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>

    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/bootstrap.min.css')}}" media="all"/>
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/font-awesome.min.css')}}" media="all"/>
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/bootstrap-grid.min.css')}}" media="all"/>
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/bootstrap-reboot.min.css')}}"
          media="all"/>
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/font-techmarket.css')}}" media="all"/>
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/slick.css')}}" media="all"/>
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/techmarket-font-awesome.css')}}"
          media="all"/>
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/slick-style.css')}}" media="all"/>
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/animate.min.css')}}" media="all"/>
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/style.css')}}" media="all"/>
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/colors/blue.css')}}" media="all"/>
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,900" rel="stylesheet">
    <link rel="shortcut icon" href="{{asset('frontend/assets/images/fav-icon.png')}}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.2/jquery.ui.touch-punch.min.js"></script>

{{--    !-- jQuery Version Rating(V3) -->--}}
    <link rel="stylesheet" href="{{asset('frontend/assets/raty/lib/jquery.raty.css')}}">
    <script src="{{asset('frontend/assets/raty/lib/jquery.raty.js')}}"></script>
    <link rel="stylesheet" href="{{asset('owl/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('owl/owlcarousel/owl.theme.default.min.css')}}">

    <style>
        .myul {
            width: 100%;
            height: auto;
            margin: 0;
            padding: 0;
            background: #d4effa;
            list-style-type: none;
        }

        .myli {
            padding: 5px 0 5px 10px;
            line-height: 35px;
            color: #113945;
            display: block;
            cursor: pointer;
            border-radius: 5px;
        }

        .myli:hover {
            background: #113945;
            color: #fff;
        }

        .myli .fa {
            margin: 0 30px 0 0;
        }
        .menu-active{
            background-color: #0563d1; color: white
        }
        .single-product .single-product-meta .ribbon {
            height: 32px;
            max-width: 150px;
        }
        .site-header.header-v2{
            background-color: black;
        }
        .site-header.header-v2 .techmarket-sticky-wrap .navbar-primary .nav > li > a {
            color: #fff;
        }
        .site-header.header-v2 .stuck .navbar-primary .nav > li > a {
            color: black;
        }
        #menu-navbar-primary{
            text-align: center;
        }
        .header-v2 .departments-menu button i, .header-v3 .departments-menu button i, .header-v4 .departments-menu button i, .header-v5 .departments-menu button i, .header-v6 .departments-menu button i, .header-v10 .departments-menu button i {
            padding-right: 0.8em;
            text-shadow: #ffffff 0px 1px 0px;
        }
        /*.tm-favorites, #top-cart-wishlist-count, .tm-shopping-bag, .amount, .tm-departments-thin, .tm-login-register{*/
        /*    color: white;*/
        /*}*/
        .navbar-search .search-categories {
            padding-right: 0em;
        }
        .navbar-search .search-categories {
             background-color: white;
        }
        .popover-header {
             border-top-right-radius: calc(0rem - 0px);
        }
        .navbar-search input[type="text"] {
             border-top-left-radius: 0px !important;
             border-bottom-left-radius: 0px !important;
        }
        .site-header{
           z-index: auto;
        }
        .site-header.header-v2 .stuck{
            display: none;
        }
        .btn-primary{
            background-color: purple;
            border: purple;
        }
        .overlay-div{
            margin-bottom: -30px;
            margin-top: -36px
        }
        .profile{
            text-align: center;
        }
        .carousel-control-next, .carousel-control-prev {
            top: -150px;
        }
        .section-c{
            margin-top: -400px; max-width: 100vw !important;
        }
        .amaz-sec{
            background-color: #e3e2e2; padding: 20px;
        }
        .card-h{
            padding: 20px; margin: 0px; padding-bottom: 0px
        }
        .card-link{
            padding: 20px; margin: 0px; padding-top: 0px; color: blue
        }
        .color-black{
            color: black !important;
        }
        .color-white{
            color: white !important;
        }
        .blink {
            animation: blinker 1s step-start infinite;
        }

        @keyframes blinker {
            50% {
                opacity: 0;
            }
        }
        .raty img{
            display: inline-block !important;
        }
        @media only screen and (max-width: 600px) {
            .overlay-div{
                margin-bottom: 0px; margin-top: 0px
            }
            .active-hh-menu .site-content::before {
                background: transparent;
                position: relative;
            }
            .section-c{
                margin-top: -100px; max-width: 100vw !important;
            }
            .amaz-sec{
               padding: 0px;
            }
            .tm-login-register{
                color: white;
            }
        }
        .circle {
            width: 20px;
            height: 20px;
            border: 1px solid black;
            border-radius: 25px;
            display: block;
            cursor: pointer;
        }
        .selectedColor {
            outline: 3px solid black;
        }
        .owl-prev {
            position: absolute;
            top: 40%;
            margin-left: -20px;
            display: block !important;
            border:0px solid black;
            border-radius: 50%;
            height: 50px !important;
            width: 50px !important;
            background-color: #f6f5f0 !important;
        }

        .owl-next {
            position: absolute;
            top: 40%;
            right: -25px;
            display: block !important;
            border:0px solid black;
            border-radius: 50%;
            height: 50px !important;
            width: 50px !important;
            background-color: #f6f5f0 !important;
        }
        .owl-prev i, .owl-next i {color: #000000; font-size: 30px}
    </style>
</head>
<?php
$settings = App\Settings::first();
?>
<body class="woocommerce-active @yield('body-type') can-uppercase">
<div id="app">
    <div id="page" class="hfeed site">

        <div class="top-bar top-bar-v2">
            <div class="col-full">

                <!-- .nav -->
                <ul id="menu-top-bar-left" class="nav menu-top-bar-left">
                    <li class="hidden-sm-down menu-item animate-dropdown">
                        <a title="Track Your Order" >
                            VOTRE ADRESSSE DE LIVRAISON : {{Auth::user()->country??"Pas disponible"}}</a>
                    </li>
                </ul>
                <!-- .nav -->
                <ul id="menu-top-bar-right" class="nav menu-top-bar-right">
                    <li class="hidden-sm-down menu-item animate-dropdown">
                        <a title="Track Your Order" href="{{route('front.track.order')}}">
                            <i class="tm tm-order-tracking"></i>Suivre votre commande</a>
                    </li>
                    @auth
                        <li class="menu-item">
                            <a title="My Account" href="{{route('user.dashboard')}}">
                                <i class="tm tm-login-register"></i>Mon compte</a>
                        </li>
                    @else
                        <li class="menu-item">
                            <a title="My Account" href="{{route('login')}}">
                                <i class="tm tm-login-register"></i>Inscrivez-vous ou connectez-vous</a>
                        </li>
                    @endauth
                </ul>
                <!-- .nav -->
            </div>
            <!-- .col-full -->
        </div>
        <!-- .top-bar-v2 -->
        <header id="masthead" class="site-header header-v2" style="background-image: none; ">
            <div class="col-full desktop-only">
                <div class="row">
                    <div class="site-branding">
                        <a href="/" class="custom-logo-link" rel="home">
                            <img src="{{asset('frontend/assets/images/logo1.png')}}" alt="">
                        </a>
                        <!-- /.custom-logo-link -->
                    </div>
                    <!-- /.site-branding -->
                    <?php
                    $categories = \App\Category::all();
                    ?>
                        <!-- ============================================================= End Header Logo ============================================================= -->
{{--                    <div id="departments-menu" class="dropdown departments-menu">--}}
{{--                        <button class="btn dropdown-toggle btn-block" type="button" data-toggle="dropdown"--}}
{{--                                aria-haspopup="true" aria-expanded="false">--}}
{{--                            <i class="tm tm-departments-thin"></i>--}}
{{--                            <span>All Departments</span>--}}
{{--                        </button>--}}
{{--                        <ul id="menu-departments-menu" class="dropdown-menu yamm departments-menu-dropdown">--}}
{{--                            @foreach($categories as $category)--}}
{{--                                <li class="menu-item animate-dropdown">--}}
{{--                                    <a title="Value of the Day"--}}
{{--                                       href="{{route('products.filter', ['category_id' => $category->id])}}">{{$category->name??""}}</a>--}}
{{--                                </li>--}}
{{--                            @endforeach--}}
{{--                            <li class="highlight menu-item animate-dropdown">--}}
{{--                                <a title="Value of the Day" href="{{route('front.goodies.products')}}">Goodies</a>--}}
{{--                            </li>--}}
{{--                            <li class="highlight menu-item animate-dropdown">--}}
{{--                                <a title="Value of the Day" href="{{route('front.emballeges.products')}}">Emballages</a>--}}
{{--                            </li>--}}
{{--                            <li class="highlight menu-item animate-dropdown">--}}
{{--                                <a title="Value of the Day" href="{{route('front.concept.products')}}">Concept</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
                    <!-- .departments-menu -->
                    <form class="navbar-search" method="get" action="{{route('product.search')}}">
                        <label class="sr-only screen-reader-text" for="search">Search for:</label>
                        <div class="input-group">
                            <div class="input-group-addon search-categories popover-header">
                                <select name='product_category' id='product_cat' class='postform resizeselect'>
                                    <option value='0' selected='selected'>Toutes catégories</option>
                                    @foreach($categories as $category)
                                        <option class="level-0"
                                                value="{{$category->id}}">{{$category->name??""}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <input style="padding: 0rem" type="text" id="search" class="form-control search-field product-search-field"
                                   dir="ltr"
                                   value="" name="search" placeholder="  Rechercher des produits"/>
                            <!-- .input-group-addon -->
                            <div class="input-group-btn input-group-append">
                                <input type="hidden" id="search-param" name="post_type" value="product"/>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-search"></i>
                                    <span class="search-btn">Rechercher</span>
                                </button>
                            </div>
                            <!-- .input-group-btn -->
                        </div>
                        <!-- .input-group -->
                    </form>
                    <!-- .navbar-search -->
                    <!-- .header-compare -->
                    <ul class="header-wishlist nav navbar-nav">
                        <li class="nav-item">
                            <a href="{{route('front.wishlist')}}" class="nav-link">
                                <i class="tm tm-favorites color-white"></i>
                                @auth
                                <?php $wishlist =App\Wishlist::where('user_id', Auth::user()->id)->get();
                                ?>
                                <span id="top-cart-wishlist-count" class="value color-white">{{$wishlist->count()}}</span>
                                @endauth
                            </a>
                        </li>
                    </ul>
                    <!-- .header-wishlist -->
                    <ul id="site-header-cart" class="site-header-cart menu">
                        <li class="animate-dropdown dropdown ">
                            <a class="cart-contents" href="#" data-toggle="dropdown" title="View your shopping cart">
                                <i class="tm tm-shopping-bag color-white"></i>
                                <span id="totalcartitems" class="count"></span>
                                <span class="amount color-white">
                                        <span  style="color: white" class="price-label">Votre panier</span><div class="totalcartamount"></div></span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-mini-cart">
                                <li>
                                    <div class="widget woocommerce widget_shopping_cart">
                                        <div class="widget_shopping_cart_content">
                                            <ul class="woocommerce-mini-cart cart_list product_list_widget items">

                                            </ul>
                                            <!-- .cart_list -->
                                            <p class="woocommerce-mini-cart__total total">
                                                <strong>Total:</strong>
                                                <span class="color-black woocommerce-Price-amount amount">
                                                        <span
                                                            class="color-black woocommerce-Price-currencySymbol totalcartamount"></span></span>
                                            </p>
                                            <p class="woocommerce-mini-cart__buttons buttons">
                                                <a href="{{route('front.cart')}}" class="button wc-forward">Votre
                                                    panier</a>
                                                <a href="{{route('front.checkout')}}" class="button checkout wc-forward">Vérifier</a>
                                            </p>
                                        </div>
                                        <!-- .widget_shopping_cart_content -->
                                    </div>
                                    <!-- .widget_shopping_cart -->
                                </li>
                            </ul>
                            <!-- .dropdown-menu-mini-cart -->
                        </li>
                    </ul>
                    <!-- .site-header-cart -->
                </div>
                <!-- /.row -->
                <div class="techmarket-sticky-wrap">
                    <div class="row">
                        <nav id="navbar-primary" class="navbar-primary" aria-label="Navbar Primary"
                             data-nav="flex-menu">
                            <ul id="menu-navbar-primary" class="nav yamm">
                                <li class="menu-item animate-dropdown">
                                    <a title="ALL CATEGORIES" href="{{route('front.index')}}">ACCUEIL</a>
                                </li>
                                <li class="menu-item animate-dropdown">
                                    <a title="COMPUTERS &amp; LAPTOPS" href="{{route('front.dicounted.products')}}">PRODUITS
                                        À PRIX RÉDUIT</a>
                                </li>
{{--                                <li class="menu-item animate-dropdown">--}}
{{--                                    <a title="COMPUTERS &amp; LAPTOPS" href="{{route('front.pro.products')}}">CLICK--}}
{{--                                        PRO</a>--}}
{{--                                </li>--}}
                                <li class="menu-item animate-dropdown">
                                    <a title="COMPUTERS &amp; LAPTOPS" href="{{route('front.aboutus')}}">À PROPOS DE NOUS</a>
                                </li>
{{--                                <li class="menu-item animate-dropdown">--}}
{{--                                    <a title="COMPUTERS &amp; LAPTOPS" href="#">NOUS CONTACTER</a>--}}
{{--                                </li>--}}
                                <li class="techmarket-flex-more-menu-item dropdown">
                                    <a title="..." href="#" data-toggle="dropdown" class="dropdown-toggle">...</a>
                                    <ul class="overflow-items dropdown-menu"></ul>
                                </li>
                            </ul>
                            <!-- .nav -->
                        </nav>
                        <!-- .navbar-primary -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- .techmarket-sticky-wrap -->
            </div>
            <!-- .col-full -->
            <div class="col-full handheld-only">
                <div class="handheld-header">
                    <div class="row">
                        <div class="site-branding">
                            <a href="/" class="custom-logo-link" rel="home">
                                <img src="{{asset('frontend/assets/images/logo1.png')}}" alt="">
                            </a>
                            <!-- /.custom-logo-link -->
                        </div>
                        <!-- /.site-branding -->
                        <!-- ============================================================= End Header Logo ============================================================= -->
                        <div class="handheld-header-links">
                            <ul class="columns-3">
                                <li class="my-account">
                                    <a href="{{route('login')}}" class="has-icon">
                                        <i class="tm tm-login-register"></i>
                                    </a>
                                </li>
                                <li class="wishlist">
                                    <a href="#" class="has-icon">
                                        <i class="tm tm-favorites color-white"></i>
                                        <span class="count">3</span>
                                    </a>
                                </li>
                            </ul>
                            <!-- .columns-3 -->
                        </div>
                        <!-- .handheld-header-links -->
                    </div>
                    <!-- /.row -->
                    <div class="techmarket-sticky-wrap">
                        <div class="row">
                            <nav id="handheld-navigation" class="handheld-navigation" aria-label="Handheld Navigation">
                                <button class="btn navbar-toggler" type="button">
                                    <i class="tm tm-departments-thin color-white"></i>
                                    <span>Menu</span>
                                </button>
                                <div class="handheld-navigation-menu">
                                    <span class="tmhm-close">Fermer</span>
                                    <ul id="menu-departments-menu-1" class="nav">
                                        <li class="menu-item animate-dropdown">
                                            <a title="ALL CATEGORIES" href="{{route('front.index')}}">ACCUEIL</a>
                                        </li>
                                        <li class="menu-item animate-dropdown">
                                            <a title="COMPUTERS &amp; LAPTOPS" href="{{route('front.dicounted.products')}}">PRODUITS
                                                À PRIX RÉDUIT</a>
                                        </li>
                                        <li class="menu-item animate-dropdown">
                                            <a title="COMPUTERS &amp; LAPTOPS" href="{{route('front.pro.products')}}">CLICK
                                                PRO</a>
                                        </li>
                                        <li class="menu-item animate-dropdown">
                                            <a title="COMPUTERS &amp; LAPTOPS" href="{{route('front.aboutus')}}">À PROPOS DE NOUS</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- .handheld-navigation-menu -->
                            </nav>
                            <!-- .handheld-navigation -->
                            <div class="site-search">
                                <div class="widget woocommerce widget_product_search">
                                    <form role="search" method="get" class="woocommerce-product-search" action="#">
                                        <label class="screen-reader-text" for="woocommerce-product-search-field-0">Rechercher::</label>
                                        <input type="search" id="woocommerce-product-search-field-0"
                                               class="search-field"
                                               placeholder="Search products&hellip;" value="" name="s"/>
                                        <input type="submit" value="Search"/>
                                        <input type="hidden" name="post_type" value="product"/>
                                    </form>
                                </div>
                                <!-- .widget -->
                            </div>
                            <!-- .site-search -->
                            <a class="handheld-header-cart-link has-icon" href="#" title="View your shopping cart">
                                <i class="tm tm-shopping-bag"></i>
                                <span class="count">2</span>
                            </a>
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- .techmarket-sticky-wrap -->
                </div>
                <!-- .handheld-header -->
            </div>
            <!-- .handheld-only -->
        </header>
        <!-- ============================================================= Header End ============================================================= -->

        @yield('content')
        <div class="features-list">
            <div class="features">
                <div class="feature">
                    <div class="media">
                        <i class="feature-icon d-flex mr-3 tm tm-free-delivery"></i>
                        <div class="media-body feature-text">
                            <h5 class="mt-0">Livraison gratuite</h5>
                            <span>à partir de 50 $</span>
                        </div>
                    </div>
                </div>
                <!-- .feature -->
                <div class="feature">
                    <div class="media">
                        <i class="feature-icon d-flex mr-3 tm tm-feedback"></i>
                        <div class="media-body feature-text">
                            <h5 class="mt-0">99 % client</h5>
                            <span>Commentaires</span>
                        </div>
                    </div>
                    <!-- .media -->
                </div>
                <!-- .feature -->
                <div class="feature">
                    <div class="media">
                        <i class="feature-icon d-flex mr-3 tm tm-free-return"></i>
                        <div class="media-body feature-text">
                            <h5 class="mt-0">365 jours</h5>
                            <span>pour un retour gratuit</span>
                        </div>
                    </div>
                    <!-- .media -->
                </div>
                <!-- .feature -->
                <div class="feature">
                    <div class="media">
                        <i class="feature-icon d-flex mr-3 tm tm-safe-payments"></i>
                        <div class="media-body feature-text">
                            <h5 class="mt-0">Paiement</h5>
                            <span>Système sécurisé</span>
                        </div>
                    </div>
                    <!-- .media -->
                </div>
                <!-- .feature -->
                <div class="feature">
                    <div class="media">
                        <i class="feature-icon d-flex mr-3 tm tm-best-brands"></i>
                        <div class="media-body feature-text">
                            <h5 class="mt-0">Seul le meilleur</h5>
                            <span>Marques</span>
                        </div>
                    </div>
                    <!-- .media -->
                </div>
                <!-- .feature -->
            </div>
            <!-- .features -->
        </div>
        <!-- #content -->
        <footer class="site-footer footer-v1">
            <div class="col-full">

                <!-- .before-footer-wrap -->
                <div class="footer-widgets-block">
                    <div class="row">
                        <div class="footer-contact">
                            <div class="footer-logo">
                                <a href="/" class="custom-logo-link" rel="home">
                                    <img src="{{asset($settings->logo)}}" alt="">
                                </a>
                            </div>
                            <!-- .footer-logo -->
                            <div class="contact-payment-wrap">
                                <div class="footer-contact-info">
                                    <div class="media">
                                            <span class="media-left icon media-middle">
                                                <i class="tm tm-call-us-footer"></i>
                                            </span>
                                        <div class="media-body">
                                            <span class="call-us-title">Vous avez des questions ? <br> Appelez-nous 24h/24 et 7j/7!</span>
                                            <span class="call-us-text">{{$settings->phone1}}</span>
                                            <address class="footer-contact-address">{{$settings->address}}
                                            </address>
                                        </div>
                                        <!-- .media-body -->
                                    </div>
                                    <!-- .media -->
                                </div>

                                <!-- .footer-payment-info -->
                            </div>
                            <!-- .contact-payment-wrap -->
                        </div>
                        <!-- .footer-contact -->
                        <div class="footer-widgets">
                            <div class="columns">
                                <aside class="widget clearfix">
                                    <div class="body">
                                        <h4 class="widget-title">Trouvez-le rapidement</h4>
                                        <div class="menu-footer-menu-1-container">
                                            <ul id="menu-footer-menu-1" class="menu">
                                                @foreach($categories->take(6) as $category)
                                                    <li class="menu-item">
                                                        <a href="#">{{$category->name??""}}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <!-- .menu-footer-menu-1-container -->
                                    </div>
                                    <!-- .body -->
                                </aside>
                                <!-- .widget -->
                            </div>
                            <!-- .columns -->
                            <div class="columns">
                                <aside class="widget clearfix">
                                    <div class="body">
                                        <h4 class="widget-title">&nbsp;</h4>
                                        <div class="menu-footer-menu-2-container">
                                            <ul id="menu-footer-menu-2" class="menu">
                                                @foreach($categories[0]->subcategories->take(2) as $subcategory)
                                                    <li class="menu-item">
                                                        <a href="#">{{$subcategory->name??""}}</a>
                                                    </li>
                                                @endforeach
                                                @foreach($categories[1]->subcategories->take(2) as $subcategory)
                                                    <li class="menu-item">
                                                        <a href="#">{{$subcategory->name??""}}</a>
                                                    </li>
                                                @endforeach
                                                @foreach($categories[2]->subcategories->take(2) as $subcategory)
                                                    <li class="menu-item">
                                                        <a href="#">{{$subcategory->name??""}}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <!-- .menu-footer-menu-2-container -->
                                    </div>
                                    <!-- .body -->
                                </aside>
                                <!-- .widget -->
                            </div>
                            <!-- .columns -->
                            <div class="columns">
                                <aside class="widget clearfix">
                                    <div class="body">
                                        <h4 class="widget-title">Client de Service</h4>
                                        <div class="menu-footer-menu-3-container">
                                            <ul id="menu-footer-menu-3" class="menu">
                                                <li class="menu-item">
                                                    <a href="{{route('user.dashboard')}}">Mon compte</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="{{route('front.track.order')}}">Suivi de commande</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="#">Liste de souhaits</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="{{route('front.aboutus')}}">À propos de nous</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="{{route('return.policy')}}">Retours/échange</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="#">FAQs</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- .menu-footer-menu-3-container -->
                                    </div>
                                    <!-- .body -->
                                </aside>
                                <!-- .widget -->
                            </div>
                            <!-- .columns -->
                        </div>
                        <!-- .footer-widgets -->
                    </div>
                    <!-- .row -->
                </div>
                <!-- .footer-widgets-block -->
                <div class="site-info">
                    <div class="col-full">
                        <div class="copyright"><a href="#">{!! $settings->footer !!}</a>. Tous les droits sont
                            réservés.
                        </div>
                        <!-- .credit -->
                    </div>
                    <!-- .col-full -->
                </div>
                <!-- .site-info -->
            </div>
            <!-- .col-full -->
        </footer>
        <!-- .site-footer -->
    </div>
</div>

{{--<script type="text/javascript" src="{{asset('frontend/assets/js/jquery.min.js')}}"></script>--}}
<script type="text/javascript" src="{{asset('frontend/assets/js/tether.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/assets/js/jquery-migrate.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/assets/js/hidemaxlistitem.min.js')}}"></script>
{{--<script type="text/javascript" src="{{asset('frontend/assets/js/jquery-ui.min.js')}}"></script>--}}
<script type="text/javascript" src="{{asset('frontend/assets/js/hidemaxlistitem.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/assets/js/jquery.easing.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/assets/js/scrollup.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/assets/js/jquery.waypoints.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/assets/js/waypoints-sticky.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/assets/js/pace.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/assets/js/slick.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/assets/js/scripts.js')}}"></script>
{{--<script src="{{ asset('js/app.js') }}" defer></script>--}}
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="{{asset('owl/owl.carousel.min.js')}}"></script>
@yield('script')
<script>

    function mycartitems(){
        $('.items').html('<p style="display: none" class="ps-cart-item">Articles du panier</p>');
        var base_url = window.location.origin;
        $.ajax({
            url: "{{route('cartitems')}}",
            type:"GET",
            success:function(response){
                $("#totalcartitems").html(response.quantity);
                $(".totalcartamount").html(response.total+"€");
                $.each(response.data, function(i, item) {
                    $('.items').append(`<li class="woocommerce-mini-cart-item mini_cart_item">
                                                    <a onclick="removecart(`+item.id+`)" class="remove" aria-label="Remove this item"
                                                       data-product_id="65" data-product_sku="">×</a>
                                                    <a>
                                                        <img src="`+base_url+'/'+item.attributes.image+`"
                                                             class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image"
                                                             alt="">`+item.name+`
                                                    </a>
                                                    <span class="quantity">`+item.quantity+` ×
                                                            <span class="color-black woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol"></span>`+item.price+` €</span>
                                                        </span>
                                                </li>`);
                });
            },
        });
    }
    mycartitems();
    function removecart(id){
        let _token   = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            url: "{{route('removecart')}}",
            type:"POST",
            data:{
                id:id,
                _token: _token
            },
            success:function(response){
                if(response) {
                    mycartitems();
                    toastr.info("Retirer du panier avec succès");
                }
            },
        });
    }
</script>
<script>
    @if(Session::has('messege'))
    var type="{{Session::get('alert-type','info')}}"
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('messege') }}");
            break;
        case 'success':
            toastr.success("{{ Session::get('messege') }}");
            break;
        case 'warning':
            toastr.warning("{{ Session::get('messege') }}");
            break;
        case 'error':
            toastr.error("{{ Session::get('messege') }}");
            break;
    }
    @endif
    $(document).ready(function(){
        $(".owl-one").owlCarousel({
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            items: 4,
            loop: false,
            nav:true,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                    nav:true
                },
                600:{
                    items:3,
                    nav:true
                },
                1000:{
                    items:4,
                    nav:true,
                }
            }

        });
    });
</script>
<script>
    $(document).ready(function(){
        $(".owl-two").owlCarousel({
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            items: 1,
            loop: false,
            dots: true,
            nav:true,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                    nav:true
                },
                600:{
                    items:1,
                    nav:true
                },
                1000:{
                    items:1,
                    nav:true,
                }
            }

        });
    });

</script>

<script>
    const circles = document.querySelectorAll('.circle');
    let color;
    circles.forEach(function(circle) {
        circle.addEventListener('click', function() {
            circles.forEach(function(circle) {
                circle.classList.remove('selectedColor');
            });
            this.classList.add('selectedColor');
             color = this.getAttribute('data-color');
            console.log(color);
        });
    });

    $("#color-select0").click();
</script>
</body>
</html>
