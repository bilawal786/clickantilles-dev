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
                    </main>
                    <!-- #main -->
                </div>
                <?php
                $categories = \App\Category::all();
                ?>
                    <!-- #primary -->
                <div id="secondary" class="widget-area shop-sidebar" role="complementary">
                    <div class="widget woocommerce widget_product_categories techmarket_widget_product_categories"
                         id="techmarket_product_categories_widget-2">
                        <ul class="product-categories ">
                            <li class="product_cat">
                                <span>Parcourir les catégories</span>
                                <ul>
                                    @foreach($categories as $category)
                                        <li class="cat-item">
                                            <a href="{{route('products.filter', ['category_id' => $category->id])}}">
                                                <span class="no-child"></span>{{$category->name}}</a>
                                        </li>
                                    @endforeach
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
