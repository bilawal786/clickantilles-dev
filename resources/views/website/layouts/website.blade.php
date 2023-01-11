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
                <ul id="menu-top-bar-right" class="nav menu-top-bar-right">
                    <li class="hidden-sm-down menu-item animate-dropdown">
                        <a title="Track Your Order" href="{{route('front.track.order')}}">
                            <i class="tm tm-order-tracking"></i>Suivre votre commande</a>
                    </li>
                    @auth
                        <li class="menu-item">
                            <a title="My Account" href="{{route('user.dashboard')}}">
                                <i class="tm tm-login-register"></i>Tableau de bord</a>
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
                            <img src="{{$settings->logo}}" alt="">
                        </a>
                        <!-- /.custom-logo-link -->
                    </div>
                    <!-- /.site-branding -->
                    <?php
                    $categories = \App\Category::all();
                    ?>
                        <!-- ============================================================= End Header Logo ============================================================= -->
                    <div id="departments-menu" class="dropdown departments-menu">
                        <button class="btn dropdown-toggle btn-block" type="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                            <i class="tm tm-departments-thin"></i>
                            <span>All Departments</span>
                        </button>
                        <ul id="menu-departments-menu" class="dropdown-menu yamm departments-menu-dropdown">
                            @foreach($categories as $category)
                                <li class="menu-item animate-dropdown">
                                    <a title="Value of the Day"
                                       href="{{route('products.filter', ['category_id' => $category->id])}}">{{$category->name??""}}</a>
                                </li>
                            @endforeach
                            <li class="highlight menu-item animate-dropdown">
                                <a title="Value of the Day" href="{{route('front.goodies.products')}}">Goodies</a>
                            </li>
                            <li class="highlight menu-item animate-dropdown">
                                <a title="Value of the Day" href="{{route('front.emballeges.products')}}">Emballages</a>
                            </li>
                            <li class="highlight menu-item animate-dropdown">
                                <a title="Value of the Day" href="{{route('front.concept.products')}}">Concept</a>
                            </li>
                        </ul>
                    </div>
                    <!-- .departments-menu -->
                    <form class="navbar-search" method="get" action="{{route('product.search')}}">
                        <label class="sr-only screen-reader-text" for="search">Search for:</label>
                        <div class="input-group">
                            <input type="text" id="search" class="form-control search-field product-search-field"
                                   dir="ltr"
                                   value="" name="search" placeholder="Rechercher des produits"/>
                            <div class="input-group-addon search-categories popover-header">
                                <select name='product_category' id='product_cat' class='postform resizeselect'>
                                    <option value='0' selected='selected'>Aoutes catégories</option>
                                    @foreach($categories as $category)
                                        <option class="level-0"
                                                value="{{$category->id}}">{{$category->name??""}}</option>
                                    @endforeach
                                </select>
                            </div>
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
                            <a href="#" class="nav-link">
                                <i class="tm tm-favorites"></i>
                                <span id="top-cart-wishlist-count" class="value">3</span>
                            </a>
                        </li>
                    </ul>
                    <!-- .header-wishlist -->
                    <ul id="site-header-cart" class="site-header-cart menu">
                        <li class="animate-dropdown dropdown ">
                            <a class="cart-contents" href="#" data-toggle="dropdown" title="View your shopping cart">
                                <i class="tm tm-shopping-bag"></i>
                                <span id="totalcartitems" class="count"></span>
                                <span class="amount">
                                        <span class="price-label">Votre panier</span><div class="totalcartamount"></div>€</span>
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
                                                <span class="woocommerce-Price-amount amount">
                                                        <span
                                                            class="woocommerce-Price-currencySymbol totalcartamount"></span>€</span>
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
                                <li class="menu-item animate-dropdown">
                                    <a title="COMPUTERS &amp; LAPTOPS" href="{{route('front.pro.products')}}">CLICK
                                        PRO</a>
                                </li>
                                <li class="menu-item animate-dropdown">
                                    <a title="COMPUTERS &amp; LAPTOPS" href="{{route('front.sourcing.products')}}">SOURCING
                                        PRODUCTS</a>
                                </li>
                                <li class="menu-item animate-dropdown">
                                    <a title="COMPUTERS &amp; LAPTOPS" href="#">À PROPOS DE NOUS</a>
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
                                <img src="{{asset('frontend/assets/images/logo.png')}}" alt="">
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
                                        <i class="tm tm-favorites"></i>
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
                                    <i class="tm tm-departments-thin"></i>
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
                                            <a title="COMPUTERS &amp; LAPTOPS" href="{{route('front.sourcing.products')}}">SOURCING
                                                PRODUCTS</a>
                                        </li>
                                        <li class="menu-item animate-dropdown">
                                            <a title="COMPUTERS &amp; LAPTOPS" href="#">À PROPOS DE NOUS</a>
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

        <!-- #content -->
        <footer class="site-footer footer-v1">
            <div class="col-full">
                <div class="before-footer-wrap">
                    <div class="col-full">
                        <div class="footer-newsletter">
                            <div class="media">
                                <i class="footer-newsletter-icon tm tm-newsletter"></i>
                                <div class="media-body">
                                    <div class="clearfix">
                                        <div class="newsletter-header">
                                            <h5 class="newsletter-title">Inscrivez-vous à la newsletter</h5>
                                            <span class="newsletter-marketing-text">...et recevoir
                                                    <strong>Coupon de 20 $ pour le premier achat</strong>
                                                </span>
                                        </div>
                                        <!-- .newsletter-header -->
                                        <div class="newsletter-body">
                                            <form class="newsletter-form">
                                                <input type="text" placeholder="Enter your email address">
                                                <button class="button" type="button">S'inscrire</button>
                                            </form>
                                        </div>
                                        <!-- .newsletter body -->
                                    </div>
                                    <!-- .clearfix -->
                                </div>
                                <!-- .media-body -->
                            </div>
                            <!-- .media -->
                        </div>
                        <!-- .footer-newsletter -->
                        <div class="footer-social-icons">
                            <ul class="social-icons nav">
                                <li class="nav-item">
                                    <a class="sm-icon-label-link nav-link" href="{{$settings->facebook}}">
                                        <i class="fa fa-facebook"></i> Facebook</a>
                                </li>
                                <li class="nav-item">
                                    <a class="sm-icon-label-link nav-link" href="{{$settings->twitter}}">
                                        <i class="fa fa-twitter"></i> Twitter</a>
                                </li>
                                <li class="nav-item">
                                    <a class="sm-icon-label-link nav-link" href="{{$settings->instagram}}">
                                        <i class="fa fa-instagram"></i> Instagram</a>
                                </li>
                                <li class="nav-item">
                                    <a class="sm-icon-label-link nav-link" href="{{$settings->utube}}">
                                        <i class="fa fa-youtube"></i> Youtube</a>
                                </li>
                            </ul>
                        </div>
                        <!-- .footer-social-icons -->
                    </div>
                    <!-- .col-full -->
                </div>
                <!-- .before-footer-wrap -->
                <div class="footer-widgets-block">
                    <div class="row">
                        <div class="footer-contact">
                            <div class="footer-logo">
                                <a href="/" class="custom-logo-link" rel="home">
                                    <img src="{{$settings->logo}}" alt="">
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
                                            <span class="call-us-title">Vous avez des questions ? Appelez-nous 24h/24 et 7j/7!</span>
                                            <span class="call-us-text">{{$settings->phone1}}, {{$settings->phone2}}</span>
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
                                                    <a href="#">Mon compte</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="#">Suivi de commande</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="#">Magasin</a>
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
<script type="text/javascript" src="{{asset('frontend/assets/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/assets/js/tether.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/assets/js/jquery-migrate.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/assets/js/hidemaxlistitem.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/assets/js/jquery-ui.min.js')}}"></script>
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
                $(".totalcartamount").html(response.total);
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
                                                            <span class="woocommerce-Price-amount amount">
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

</script>
</body>
</html>
