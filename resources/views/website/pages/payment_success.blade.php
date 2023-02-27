@extends('website.layouts.website')
@section('body-type')
    page-template-default woocommerce-checkout woocommerce-page woocommerce-order-received can-uppercase woocommerce-active
@endsection

@section('content')
    <div id="content" class="site-content" tabindex="-1">
        <div class="col-full">
            <div class="row">
                <nav class="woocommerce-breadcrumb">
                    <a href="{{route('user.dashboard')}}">Tableau de bord</a>
                    <span class="delimiter"><i class="tm tm-breadcrumbs-arrow-right"></i></span>
                    <a href="{{route('user.orders')}}">Mes commandes</a>
                    <span class="delimiter"><i class="tm tm-breadcrumbs-arrow-right"></i></span>Ordre reçu
                </nav>
                <!-- .woocommerce-breadcrumb -->

                <div id="primary" class="content-area">
                    <main id="main" class="site-main">
                        <div class="page hentry">

                            <div class="entry-content">
                                <div class="woocommerce">
                                    <div class="woocommerce-order">

                                        <p class="woocommerce-notice woocommerce-notice--success woocommerce-thankyou-order-received">
                                            Merci. votre commande a été reçue. <br>
                                            Un commerciale va vous recontacter afin de finaliser votre commande dans les 24h à la réception de votre commande.

                                        </p>

                                        <ul class="woocommerce-order-overview woocommerce-thankyou-order-details order_details">

                                            <li class="woocommerce-order-overview__order order">
                                                Numéro de commande:<strong>{{$order->order_number}}</strong>
                                            </li>

                                            <li class="woocommerce-order-overview__date date">
                                                Date:<strong>{{$order->created_at->format('d, M Y')}}</strong>
                                            </li>


                                            <li class="woocommerce-order-overview__total total">
                                                Total:<strong><span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol"></span>{{$order->total}} €</span></strong>
                                            </li>

{{--                                            <li class="woocommerce-order-overview__payment-method method">--}}
{{--                                                Mode de paiement: <strong>{{$order->payment_method??""}}</strong>--}}
{{--                                            </li>--}}

                                        </ul>
                                        <!-- .woocommerce-order-overview -->


                                        <section class="woocommerce-order-details">
                                            <h2 class="woocommerce-order-details__title">Détails de la commande</h2>

                                            <table
                                                class="woocommerce-table woocommerce-table--order-details shop_table order_details">

                                                <thead>
                                                <tr>
                                                    <th class="woocommerce-table__product-name product-name">Produit
                                                    </th>
                                                    <th class="woocommerce-table__product-table product-total">Total
                                                    </th>
                                                </tr>
                                                </thead>

                                                <tbody>
                                                @foreach(json_decode($order->products) as $item)
                                                    <tr>
                                                    <tr class="woocommerce-table__line-item order_item">
                                                        <td class="woocommerce-table__product-name product-name">
                                                            <a>{{$item->name}}</a>
                                                            <strong
                                                                class="product-quantity">× {{$item->quantity}}</strong>
                                                            @if($item->attributes->color) <br>
                                                            Selected color &nbsp &nbsp <span class="circle selectedColor" style="display: inline-block;background-color: {{$item->attributes->color}}"></span>@endif
                                                            @if($item->attributes->size) <br>
                                                            Size &nbsp &nbsp <strong>{{$item->attributes->size}}</strong>@endif
                                                        </td>
                                                        <td class="woocommerce-table__product-total product-total">
                                                            <span class="woocommerce-Price-amount amount"><span
                                                                    class="woocommerce-Price-currencySymbol">$</span>{{$item->quantity*$item->price}}</span>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                                <tfoot>
                                                <tr>
                                                    <th scope="row">Total:</th>
                                                    <td><span class="woocommerce-Price-amount amount"><span
                                                                class="woocommerce-Price-currencySymbol"></span>{{$order->total}} €</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Mode de paiement:</th>
                                                    <td>{{$order->payment_method??""}}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Total:</th>
                                                    <td><span class="woocommerce-Price-amount amount"><span
                                                                class="woocommerce-Price-currencySymbol"></span>{{$order->total}} €</span>
                                                    </td>
                                                </tr>
                                                </tfoot>
                                            </table>
                                            <!-- .woocommerce-table -->
                                        </section>
                                        <!-- .woocommerce-order-details -->


                                    </div>
                                    <!-- .woocommerce-order -->
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
