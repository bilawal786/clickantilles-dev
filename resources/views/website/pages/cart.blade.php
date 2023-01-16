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
                                                    <th class="product-price">Quantité</th>
                                                    <th class="product-price">Prix</th>
                                                    <th class="product-subtotal">Total</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($cartitems as $cartitem)
                                                <tr>
                                                    <td class="product-remove">
                                                        <a class="remove" href="{{route('removecartweb', ['id' => $cartitem->id])}}">×</a>
                                                    </td>
                                                    <td class="product-thumbnail">
                                                        <a href="{{asset($cartitem->attributes->image)}}">
                                                            <img width="180" height="180" alt="" class="wp-post-image" src="{{asset($cartitem->attributes->image)}}">
                                                        </a>
                                                    </td>
                                                    <td data-title="Product" class="product-name">
                                                        <div class="media cart-item-product-detail">
                                                            <a href="{{asset($cartitem->attributes->image)}}">
                                                                <img width="180" height="180" alt="" class="wp-post-image" src="{{asset($cartitem->attributes->image)}}">
                                                            </a>
                                                            <div class="media-body align-self-center">
                                                                <a>{{$cartitem->name}}</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td data-title="Price" class="product-price">
                                                                    <span class="color-black woocommerce-Price-amount amount">
                                                                        <span class="color-black woocommerce-Price-currencySymbol"></span>{{$cartitem->quantity}}
                                                                    </span>
                                                    </td>
                                                    <td data-title="Price" class="product-price">
                                                                    <span class="color-black woocommerce-Price-amount amount">
                                                                        <span class="woocommerce-Price-currencySymbol"></span>{{$cartitem->price}} €
                                                                    </span>
                                                    </td>
                                                    <td data-title="Total" class="product-subtotal">
                                                                    <span class="color-black woocommerce-Price-amount amount">
                                                                        <span class="color-black woocommerce-Price-currencySymbol"></span>{{$cartitem->price * $cartitem->quantity}} €
                                                                    </span>
                                                        <a title="Remove this item" class="remove" href="{{route('removecartweb', ['id' => $cartitem->id])}}">×</a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                            <!-- .shop_table shop_table_responsive -->
                                        </form>
                                        <!-- .woocommerce-cart-form -->
                                        <div class="cart-collaterals">
                                            <div class="cart_totals">
                                                <h2>Totaux du panier</h2>
                                                <table class="shop_table shop_table_responsive">
                                                    <tbody>
                                                    <tr class="cart-subtotal">
                                                        <th>Total</th>
                                                        <td data-title="Subtotal">
                                                                        <span class="color-black woocommerce-Price-amount amount">
                                                                            <span class="color-black woocommerce-Price-currencySymbol"></span>{{$total}} €</span>
                                                        </td>
                                                    </tr>
                                                    <tr class="shipping">
                                                        <th>Expédition</th>
                                                        <td data-title="Shipping"></td>
                                                    </tr>
                                                    <tr class="order-total">
                                                        <th>Total</th>
                                                        <td data-title="Total">
                                                            <strong>
                                                                            <span class="color-black woocommerce-Price-amount amount">
                                                                                <span class="color-black woocommerce-Price-currencySymbol"></span>{{$total}} €</span>
                                                            </strong>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <!-- .shop_table shop_table_responsive -->
                                                <div class="wc-proceed-to-checkout">
                                                    <a class="checkout-button button alt wc-forward" href="{{route('front.checkout')}}">
                                                        Passer à la caisse</a>
                                                    <a class="back-to-shopping" href="/">Retour aux achats</a>
                                                </div>
                                                <!-- .wc-proceed-to-checkout -->
                                            </div>
                                            <!-- .cart_totals -->
                                        </div>
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
