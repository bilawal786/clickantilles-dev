@extends('website.layouts.website')
@section('body-type')
    page-template-template-homepage-v1
@endsection
@section('content')

    <div id="content" class="site-content">
        <div class="col-full">
            <div class="row">
                <div id="primary" style="max-width: 100% !important;" class="content-area">
                    <main id="main" class="site-main">
                        <div class="home-v4-slider home-slider">
                            <div class="slider-1"
                                 style="background-image: url({{asset('frontend/assets/images/01.png')}});">
                                <div class="caption">
                                    <div class="title">Le cadeau qu'ils sont
                                        <br>souhaiter est ici
                                    </div>
                                    <div class="sub-title">L'écran incurvé a un niveau de courbure équivalent à celui
                                        d'un cercle, suit mieux la forme arrondie des yeux
                                    </div>
                                    <div class="button">Obtenez le vôtre maintenant
                                        <i class="tm tm-long-arrow-right"></i>
                                    </div>
                                    <div class="bottom-caption">Livraison gratuite sur US Terority</div>
                                </div>
                            </div>
                        </div>

                        <div class="features-list">
                            <div class="features">
                                <div class="feature">
                                    <div class="media">
                                        <i class="feature-icon d-flex mr-3 tm tm-free-delivery"></i>
                                        <div class="media-body feature-text">
                                            <h5 class="mt-0">Livraison gratuite</h5>
                                            <span>à partir de 50 €</span>
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
                        <!-- /.features list -->
                        <div class="section-deals-carousel-and-products-carousel-tabs row">
                            <section class="column-1 deals-carousel" id="sale-with-timer-carousel">
                                <div class="deals-carousel-inner-block">
                                    <header class="section-header">
                                        <h2 class="section-title">
                                            <strong>Deal</strong> of the week</h2>
                                        <nav class="custom-slick-nav"></nav>
                                    </header>
                                    <!-- /.section-header -->
                                    <div class="sale-products-with-timer-carousel deals-carousel-v1">
                                        <div class="products-carousel">
                                            <div class="container-fluid">
                                                <div class="woocommerce columns-1">
                                                    <div class="products" data-ride="tm-slick-carousel"
                                                         data-wrap=".products"
                                                         data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:true,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-left\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-right\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;appendArrows&quot;:&quot;#sale-with-timer-carousel .custom-slick-nav&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:767,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1}},{&quot;breakpoint&quot;:1023,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}}]}">
                                                        <div class="sale-product-with-timer product">
                                                            <a class="woocommerce-LoopProduct-link"
                                                               href="#">
                                                                <div class="sale-product-with-timer-header">
                                                                    <div class="price-and-title">
                                                                                <span class="price">
                                                                                    <ins>
                                                                                        <span
                                                                                            class="woocommerce-Price-amount amount">
                                                                                            <span
                                                                                                class="woocommerce-Price-currencySymbol">$</span>425.89</span>
                                                                                    </ins>
                                                                                    <del>
                                                                                        <span
                                                                                            class="woocommerce-Price-amount amount">
                                                                                            <span
                                                                                                class="woocommerce-Price-currencySymbol">$</span>545.89</span>
                                                                                    </del>
                                                                                </span>
                                                                        <!-- /.price -->
                                                                        <h2 class="woocommerce-loop-product__title">
                                                                            Tablet Red EliteBook Revolve</h2>
                                                                    </div>
                                                                    <!-- /.price-and-title -->
                                                                    <div class="sale-label-outer">
                                                                        <div class="sale-saved-label">
                                                                            <span class="saved-label-text">Save</span>
                                                                            <span class="saved-label-amount">
                                                                                        <span
                                                                                            class="woocommerce-Price-amount amount">
                                                                                            <span
                                                                                                class="woocommerce-Price-currencySymbol">$</span>120.00</span>
                                                                                    </span>
                                                                        </div>
                                                                        <!-- /.sale-saved-label -->
                                                                    </div>
                                                                    <!-- /.sale-label-outer -->
                                                                </div>
                                                                <!-- /.sale-product-with-timer-header -->
                                                                <img width="224" height="197" alt=""
                                                                     class="wp-post-image"
                                                                     src="{{asset('frontend/assets/images/products/1.jpg')}}">
                                                                <div class="deal-progress">
                                                                    <div class="deal-stock">
                                                                        <div class="stock-sold">Already Sold:
                                                                            <strong>0</strong>
                                                                        </div>
                                                                        <div class="stock-available">Available:
                                                                            <strong>1000</strong>
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.deal-stock -->
                                                                    <div class="progress">
                                                                        <span style="width:0%"
                                                                              class="progress-bar">0</span>
                                                                    </div>
                                                                    <!-- /.progress -->
                                                                </div>
                                                                <!-- /.deal-progress -->
                                                                <div class="deal-countdown-timer">
                                                                    <div class="marketing-text">
                                                                        <span class="line-1">Hurry up!</span>
                                                                        <span class="line-2">Offers ends in:</span>
                                                                    </div>
                                                                    <!-- /.marketing-text -->
                                                                    <span class="deal-time-diff" style="display:none;">28800</span>
                                                                    <div class="deal-countdown countdown"></div>
                                                                </div>
                                                                <!-- /.deal-countdown-timer -->
                                                            </a>
                                                            <!-- /.woocommerce-LoopProduct-link -->
                                                        </div>
                                                        <!-- /.sale-product-with-timer -->
                                                    </div>
                                                    <!-- /.products -->
                                                </div>
                                                <!-- /.woocommerce -->
                                            </div>
                                            <!-- /.container-fluid -->
                                        </div>
                                        <!-- /.slick-list -->
                                    </div>
                                </div>
                                <!-- /.deals-carousel-inner-block -->
                            </section>
                            <!-- /.deals-carousel -->
                            <section class="column-2 section-products-carousel-tabs tab-carousel-1">
                                <div class="section-products-carousel-tabs-wrap">
                                    <header class="section-header">
                                        <ul role="tablist" class="nav justify-content-end">
                                            <li class="nav-item">
                                                <a class="nav-link active" href="#tab-59f89f0881f930" data-toggle="tab">Nouveau
                                                    Arrivées</a>
                                            </li>
                                        </ul>
                                    </header>
                                    <!-- .section-header -->
                                    <div class="tab-content">
                                        <div id="tab-59f89f0881f930" class="tab-pane active" role="tabpanel">
                                            <div class="products-carousel" data-ride="tm-slick-carousel"
                                                 data-wrap=".products"
                                                 data-slick="{&quot;infinite&quot;:false,&quot;rows&quot;:2,&quot;slidesPerRow&quot;:5,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:true,&quot;arrows&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:1023,&quot;settings&quot;:{&quot;slidesPerRow&quot;:2}},{&quot;breakpoint&quot;:1169,&quot;settings&quot;:{&quot;slidesPerRow&quot;:4}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesPerRow&quot;:3}}]}">
                                                <div class="container-fluid">
                                                    <div class="woocommerce">
                                                        <div class="products">
                                                            @if($products->count() > 0)
                                                                @foreach($products as $product)
                                                                    @include('website.include.product-widget')
                                                                @endforeach
                                                            @else
                                                                <p style="text-align: center !important; padding: 30px">Aucun produit trouvé</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <!-- .woocommerce -->
                                                </div>
                                                <!-- .container-fluid -->
                                            </div>
                                            <!-- .products-carousel -->
                                        </div>
                                    </div>
                                    <!-- .tab-content -->
                                </div>
                                <!-- .section-products-carousel-tabs-wrap -->
                            </section>
                            <!-- .section-products-carousel-tabs -->
                        </div>

                        <!-- .fullwidth-notice -->
                        <section class="section-top-categories section-categories-carousel" id="categories-carousel-1">
                            <header class="section-header">
                                <h4 class="pre-title">Mis en exergue</h4>
                                <h2 class="section-title">Catégories principales
                                </h2>
                                <nav class="custom-slick-nav"></nav>
                                <!-- .custom-slick-nav -->
                                <a class="readmore-link" href="#">Full Catalog</a>
                            </header>
                            <!-- .section-header -->
                            <div class="product-categories-1 product-categories-carousel" data-ride="tm-slick-carousel"
                                 data-wrap=".products"
                                 data-slick="{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:true,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-left\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-right\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;appendArrows&quot;:&quot;#categories-carousel-1 .custom-slick-nav&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}}]}">
                                <div class="woocommerce columns-5">
                                    <div class="products">
                                        @foreach($categories as $category)
                                            <div class="product-category product">
                                                <a href="{{route('products.filter', ['category_id' => $category->id])}}">
                                                    <img width="224" height="197" alt="Audio &amp; Music"
                                                         src="{{asset($category->photo)}}">
                                                    <h2 class="woocommerce-loop-category__title">
                                                        {{$category->name}}
                                                    </h2>
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                    <!-- .products -->
                                </div>
                                <!-- .woocommerce -->
                            </div>
                            <!-- .product-categories-carousel -->
                        </section>

                    </main>
                    <!-- #main -->
                </div>
                <!-- #primary -->
            </div>
            <!-- .row -->
        </div>
        <!-- .col-full -->
    </div>

@endsection
