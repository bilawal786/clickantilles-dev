@extends('website.layouts.website')
@section('body-type')
    left-sidebar
@endsection
@section('content')
    <div id="content" class="site-content" tabindex="-1">
        <div class="col-full">
            <div class="row">
                <nav class="woocommerce-breadcrumb">
                    <a href="{{route('front.index')}}">Domicile</a>
                    <span class="delimiter">
                                <i class="tm tm-breadcrumbs-arrow-right"></i>
                            </span>{{$title}}
                </nav>
                <!-- .woocommerce-breadcrumb -->
                <div id="primary" class="content-area">
                    <main id="main" class="site-main">
                        @if(Auth::user()->pro_subscribed == 1)
                            <div class="shop-archive-header">
                                <div class="jumbotron">
                                    <div class="jumbotron-caption">
                                        <h3 class="jumbo-title">Abonnement utilisateurs professionnels 50 €</h3>
                                        <p class="jumbo-subtitle">
                                            <b>Les utilisateurs Pro obtiendront ces fonctionnalités avec un abonnement
                                                mensuel: </b>
                                            <br>
                                            <br>
                                            Mauris efficitur magna orci, et dignissim lacus scelerisque sit amet.
                                            Proin malesuada tincidunt nisl ac commodo. Vivamus eleifend porttitor ex sit
                                            amet suscipit. Vestibulum at ullamcorper lacus, vel facilisis arcu. Aliquam
                                            erat
                                            volutpat.
                                            <br>
                                            <br>Maecenas in sodales nisl. Pellentesque ac nibh mi. Ut lobortis odio
                                            nulla,
                                            congue rhoncus risus facilisis eget. Orci varius natoque penatibus et magnis
                                            dis
                                            parturient montes, nascetur ridiculus mus.
                                            <a href="{{route('pro.subscribed')}}">Devenu membre<i
                                                    class="tm tm-long-arrow-right"></i></a>
                                        </p>
{{--                                        <h3>Avantages</h3>--}}
                                    </div>
{{--                                    <div style="padding: 0px 50px 50px 50px" class="row">--}}
{{--                                        <div class="col-md-4">--}}
{{--                                            <div class="single-image">--}}
{{--                                                <img alt="" class="" src="{{asset('frontend/assets/images/products/3column1.jpg')}}">--}}
{{--                                            </div>--}}
{{--                                            <!-- .single_image -->--}}
{{--                                            <div class="text-block">--}}
{{--                                                <h2 class="align-top">What we really do?</h2>--}}
{{--                                                <p>Donec libero dolor, tincidunt id laoreet vitae,ullamcorper eu tortor. Maecenas pellentesque,dui vitae iaculis mattis, tortor nisi faucibus magna,vitae ultrices lacus purus vitae metus.</p>--}}
{{--                                            </div>--}}
{{--                                            <!-- .text_block -->--}}
{{--                                        </div>--}}
{{--                                        <!-- .col -->--}}
{{--                                        <div class="col-md-4">--}}
{{--                                            <div class="single-image">--}}
{{--                                                <img alt="" class="" src="{{asset('frontend/assets/images/products/3column1.jpg')}}">--}}
{{--                                            </div>--}}
{{--                                            <!-- .single_image -->--}}
{{--                                            <div class="text-block">--}}
{{--                                                <h2 class="align-top">Our Vision</h2>--}}
{{--                                                <p>Donec libero dolor, tincidunt id laoreet vitae,ullamcorper eu tortor. Maecenas pellentesque,dui vitae iaculis mattis, tortor nisi faucibus magna,vitae ultrices lacus purus vitae metus.</p>--}}
{{--                                            </div>--}}
{{--                                            <!-- .text_block -->--}}
{{--                                        </div>--}}
{{--                                        <!-- .col -->--}}
{{--                                        <div class="col-md-4">--}}
{{--                                            <div class="single-image">--}}
{{--                                                <img alt="" class="" src="{{asset('frontend/assets/images/products/3column1.jpg')}}">--}}
{{--                                            </div>--}}
{{--                                            <!-- .single_image -->--}}
{{--                                            <div class="text-block">--}}
{{--                                                <h2 class="align-top">History of Beginning</h2>--}}
{{--                                                <p>Donec libero dolor, tincidunt id laoreet vitae,ullamcorper eu tortor. Maecenas pellentesque,dui vitae iaculis mattis, tortor nisi faucibus magna,vitae ultrices lacus purus vitae metus.</p>--}}
{{--                                            </div>--}}
{{--                                            <!-- .text_block -->--}}
{{--                                        </div>--}}
{{--                                        <!-- .col -->--}}
{{--                                    </div>--}}
                                    <!-- .jumbotron-caption -->
                                </div>
                                <!-- .jumbotron -->
                            </div>
                        @else
                            <!-- .shop-archive-header -->
                            <div class="shop-control-bar">
                                <!-- .handheld-sidebar-toggle -->
                                <h1 class="woocommerce-products-header__title page-title">{{$title}}</h1>
                                <br>
                                <br>
                            </div>
                            <!-- .shop-control-bar -->
                            <div class="tab-content">
                                <div id="grid" class="tab-pane active" role="tabpanel">
                                    <div class="woocommerce columns-5">
                                        <div class="products">
                                            @if($products->count() > 0)
                                                @foreach($products as $product)
                                                    @include('website.include.product-widget')
                                                @endforeach
                                            @else
                                                <p style="text-align: center !important; padding: 30px">Aucun produit
                                                    trouvé</p>
                                            @endif
                                        </div>
                                    </div>
                                    <!-- .woocommerce -->
                                </div>
                                <!-- .tab-pane -->
                            </div>
                            <!-- .tab-content -->
                            <div class="shop-control-bar-bottom">
                                <!-- .form-techmarket-wc-ppp -->

                                <!-- .woocommerce-result-count -->
                                <nav class="woocommerce-pagination">

                                    {{$products->links()}}
                                    <!-- .page-numbers -->
                                </nav>
                                <!-- .woocommerce-pagination -->
                            </div>
                            <!-- .shop-control-bar-bottom -->
                        @endif

                    </main>
                    <!-- #main -->
                </div>
                <div id="secondary" class="widget-area shop-sidebar" role="complementary">
                    <div class="widget woocommerce widget_product_categories techmarket_widget_product_categories"
                         id="techmarket_product_categories_widget-2">
                        <ul class="product-categories ">
                            <li class="product_cat">
                                <span>Parcourir les catégories Pro</span>
                                <ul>
                                    <li class="cat-item">
                                        <a href="{{route('pro.filter.products', ['section' => 'Click Selection'])}}">
                                            <span class="no-child"></span>Click Selection</a>
                                    </li>
                                    <li class="cat-item">
                                        <a href="{{route('pro.filter.products', ['section' => 'Click Destockage'])}}">
                                            <span class="no-child"></span>Click Destockage</a>
                                    </li>
                                    <li class="cat-item">
                                        <a href="{{route('pro.filter.products', ['section' => 'Click Home'])}}">
                                            <span class="no-child"></span>Click Home</a>
                                    </li>
                                    <li class="cat-item">
                                        <a href="{{route('pro.filter.products', ['section' => 'Click Kitchen'])}}">
                                            <span class="no-child"></span>Click Kitchen</a>
                                    </li>
                                    <li class="cat-item">
                                        <a href="{{route('pro.filter.products', ['section' => 'Click Bathroom'])}}">
                                            <span class="no-child"></span>Click Bathroom</a>
                                    </li>
                                    <li class="cat-item">
                                        <a href="{{route('pro.filter.products', ['section' => 'Click Office'])}}">
                                            <span class="no-child"></span>Click Office</a>
                                    </li>
                                    <li class="cat-item">
                                        <a href="{{route('pro.filter.products', ['section' => 'Click Event'])}}">
                                            <span class="no-child"></span>Click Event</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div id="techmarket_products_filter-3" class="widget widget_techmarket_products_filter">
                        <span class="gamma widget-title">Filtres</span>
                        <div class="widget woocommerce widget_price_filter" id="woocommerce_price_filter-2">
                            <p>
                                <span class="gamma widget-title">Filtrer par prix</span>
                            <div class="price_slider_amount">
                                <input id="amount" type="text" placeholder="Min price" data-min="6" value="33"
                                       name="min_price" style="display: none;">
                                <button class="button" type="submit">Filtrer</button>
                            </div>
                            <div id="slider-range" class="price_slider"></div>
                        </div>
                    </div>
                    <!-- #secondary -->
                </div>
                <!-- .row -->
            </div>
            <!-- .col-full -->
        </div>
@endsection
