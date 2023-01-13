@extends('website.layouts.website')
@section('body-type')
    page home page-template-default
@endsection
@section('content')
    <div id="content" class="site-content">
        <div class="col-full">
            <div class="row">
                <nav class="woocommerce-breadcrumb">
                    <a href="/">Accueil</a>
                    <span class="delimiter">
                                <i class="tm tm-breadcrumbs-arrow-right"></i>
                            </span>
                    Panier
                </nav>
                <!-- .woocommerce-breadcrumb -->
                <div id="primary" class="content-area">
                    <main id="main" class="site-main">
                        <div class="type-page hentry">
                            <div class="entry-content">
                                <div class="woocommerce">
                                    <div class="cart-wrapper">
                                        <form method="post" action="#" class="woocommerce-cart-form">
                                            <table class="shop_table shop_table_responsive cart">
                                                <thead>
                                                <tr>
                                                    <th class="product-remove">&nbsp;</th>
                                                    <th class="product-thumbnail">&nbsp;</th>
                                                    <th class="product-name">Produit</th>
                                                    <th>Name</th>
                                                    <th class="product-price">Prix</th>
                                                    <th class="product-remove"> </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($products as $product)
                                                    <tr>
                                                        <td class="product-remove">
                                                            <a class="remove" href="{{route('front.removewish', ['id' => $product->id])}}">×</a>
                                                        </td>
                                                        <td class="product-thumbnail">
                                                            <a href="{{asset($product->photo1)}}">
                                                                <img width="180" height="180" alt="" class="wp-post-image" src="{{asset($product->photo1)}}">
                                                            </a>
                                                        </td>
                                                        <td data-title="Product" class="product-name">
                                                            <div class="media cart-item-product-detail">
                                                                <a href="{{asset($product->photo1)}}">
                                                                    <img width="180" height="180" alt="" class="wp-post-image" src="{{asset($product->photo1)}}">
                                                                </a>
                                                            </div>
                                                        </td>
                                                        <td>{{$product->title}}</td>
                                                        <td> € {{$product->price}} </td>
                                                        <td>
                                                            <a title="Remove this item" class="remove" href="{{route('front.removewish', ['id' => $product->id])}}">×</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                            <!-- .shop_table shop_table_responsive -->
                                        </form>
                                        <!-- .woocommerce-cart-form -->
{{--                                        <div class="cart-collaterals">--}}
{{--                                            <div class="cart_totals">--}}
{{--                                                <h2>Totaux du panier</h2>--}}
{{--                                                <table class="shop_table shop_table_responsive">--}}
{{--                                                    <tbody>--}}
{{--                                                    <tr class="cart-subtotal">--}}
{{--                                                        <th>Total</th>--}}
{{--                                                        <td data-title="Subtotal">--}}
{{--                                                                        <span class="woocommerce-Price-amount amount">--}}
{{--                                                                            <span class="woocommerce-Price-currencySymbol"></span>{{$total}} €</span>--}}
{{--                                                        </td>--}}
{{--                                                    </tr>--}}
{{--                                                    <tr class="shipping">--}}
{{--                                                        <th>Expédition</th>--}}
{{--                                                        <td data-title="Shipping"></td>--}}
{{--                                                    </tr>--}}
{{--                                                    <tr class="order-total">--}}
{{--                                                        <th>Total</th>--}}
{{--                                                        <td data-title="Total">--}}
{{--                                                            <strong>--}}
{{--                                                                            <span class="woocommerce-Price-amount amount">--}}
{{--                                                                                <span class="woocommerce-Price-currencySymbol"></span>{{$total}} €</span>--}}
{{--                                                            </strong>--}}
{{--                                                        </td>--}}
{{--                                                    </tr>--}}
{{--                                                    </tbody>--}}
{{--                                                </table>--}}
{{--                                                <!-- .shop_table shop_table_responsive -->--}}
{{--                                                <div class="wc-proceed-to-checkout">--}}
{{--                                                    <a class="checkout-button button alt wc-forward" href="{{route('front.checkout')}}">--}}
{{--                                                        Passer à la caisse</a>--}}
{{--                                                    <a class="back-to-shopping" href="/">Retour aux achats</a>--}}
{{--                                                </div>--}}
{{--                                                <!-- .wc-proceed-to-checkout -->--}}
{{--                                            </div>--}}
{{--                                            <!-- .cart_totals -->--}}
{{--                                        </div>--}}
                                        <!-- .cart-collaterals -->
                                    </div>
                                    <!-- .cart-wrapper -->
                                </div>
                                <!-- .woocommerce -->
                            </div>
                            <!-- .entry-content -->
                        </div>
                        <!-- .hentry -->
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
