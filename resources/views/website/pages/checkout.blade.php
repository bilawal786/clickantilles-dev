@extends('website.layouts.website')
@section('body-type')
    page home page-template-default
@endsection

@section('content')
    <style>
        .card-header {
            background-color: #813181;
            color: white;
        }

        .card-header h4 {
            color: white;
        }

        .card {
            margin-bottom: 30px;
        }
    </style>
    <div id="content" class="site-content">
        <div class="col-full">
            <div class="row">
                <nav class="woocommerce-breadcrumb">
                    <a href="/">Home</a>
                    <span class="delimiter">
                                <i class="tm tm-breadcrumbs-arrow-right"></i>
                            </span>
                    Vérifier
                </nav>
                <!-- .woocommerce-breadcrumb -->
                <div class="content-area" id="primary">
                    <main class="site-main" id="main">
                        <div class="type-page hentry">
                            <div class="entry-content">
                                <div class="woocommerce">
                                    <form action="" class="checkout woocommerce-checkout"
                                          method="post">
                                        @csrf
                                        <div id="customer_details" class="col2-set">
                                            <div class="col-1">
                                                <div class="woocommerce-billing-fields">
                                                    <h3>Shipping Methods</h3>
                                                    <div class="row">
                                                        @foreach($shipping_source as $shipping)
                                                            <div class="col-md-6">
                                                                <div class="card">
                                                                    <div class="card-header">
                                                                        <h4>{{$shipping->name}}</h4>
                                                                    </div>
                                                                    <div class="card-body">
                                                                        <p class="p-3">
                                                                            Prix ​​d'expédition dans votre
                                                                            pays: {{$shipping->price}} €
                                                                            <br>
                                                                            Volume total de {{$shipping->source}}
                                                                            : {{$shipping->volume}} m³
                                                                            <br>
                                                                            Heure de
                                                                            livraison: {{$shipping->time_required}}
                                                                        </p>
                                                                        <div class="p-3">
                                                                            @if($total>0)
                                                                                <a class="button wc-forward text-center" href="{{route('checkout.submit', ['shipping_id' => $shipping->id])}}">
                                                                                    Sélectionnez cette méthode et
                                                                                    continuez
                                                                                </a>
                                                                            @endif</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- .col2-set -->
                                        <h3 id="order_review_heading">Votre commande</h3>
                                        <div class="woocommerce-checkout-review-order" id="order_review">
                                            <div class="order-review-wrapper">
                                                <h3 class="order_review_heading">Votre commande</h3>
                                                <table class="shop_table woocommerce-checkout-review-order-table">
                                                    <thead>
                                                    <tr>
                                                        <th class="product-name">Produit</th>
                                                        <th class="product-total">Total</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($cartitems as $cartitem)
                                                        <tr class="cart_item">
                                                            <td class="product-name">
                                                                <strong class="product-quantity">{{$cartitem->quantity}}
                                                                    ×</strong>
                                                                {{$cartitem->name}}
                                                            </td>
                                                            <td class="product-total">
                                                                        <span class="woocommerce-Price-amount amount">
                                                                            <span
                                                                                class="woocommerce-Price-currencySymbol"></span>{{$cartitem->quantity*$cartitem->price}} €</span>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                    <tfoot>
                                                    <tr class="order-total">
                                                        <th>Total</th>
                                                        <td>
                                                            <strong>
                                                                            <span
                                                                                class="woocommerce-Price-amount amount">
                                                                                <span
                                                                                    class="woocommerce-Price-currencySymbol"></span>{{$total}} €</span>
                                                            </strong>
                                                            <input type="hidden" name="total" value="{{$total}}">
                                                        </td>
                                                    </tr>
                                                    </tfoot>
                                                </table>
                                                {{--                                                <h3>Méthodes de livraison</h3>--}}
                                                {{--                                                <p>Votre volume total de produits : {{$totalVolume}} m³</p>--}}
                                                {{--                                                <div class="woocommerce-checkout-payment" id="payment">--}}
                                                {{--                                                    <ul class="wc_payment_methods payment_methods methods">--}}
                                                {{--                                                        @foreach($shipping_source as $shipping)--}}
                                                {{--                                                            @if($shipping->volume > $totalVolume)--}}
                                                {{--                                                                <li class="wc_payment_method payment_method_bacs">--}}
                                                {{--                                                                    <input type="radio" data-order_button_text=""--}}
                                                {{--                                                                           checked="checked" value="bacs"--}}
                                                {{--                                                                           name="payment_method"--}}
                                                {{--                                                                           class="input-radio"--}}
                                                {{--                                                                           id="payment_method_bacs{{$shipping->id}}">--}}
                                                {{--                                                                    <label--}}
                                                {{--                                                                        for="payment_method_bacs{{$shipping->id}}">{{$shipping->name}}</label>--}}
                                                {{--                                                                    <p class="p-3">--}}
                                                {{--                                                                        Prix ​​d'expédition dans votre pays: {{$shipping->price}} €--}}
                                                {{--                                                                        <br>--}}
                                                {{--                                                                        Volume total de {{$shipping->source}}--}}
                                                {{--                                                                        : {{$shipping->volume}} m³--}}
                                                {{--                                                                        <br>--}}
                                                {{--                                                                        Heure de livraison: {{$shipping->time_required}}--}}
                                                {{--                                                                    </p>--}}
                                                {{--                                                                </li>--}}
                                                {{--                                                            @endif--}}
                                                {{--                                                        @endforeach--}}
                                                {{--                                                    </ul>--}}
                                                {{--                                                    <div class="form-row place-order">--}}
                                                {{--                                                        <p class="form-row terms wc-terms-and-conditions woocommerce-validated">--}}
                                                {{--                                                            <label--}}
                                                {{--                                                                class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">--}}
                                                {{--                                                                <input type="checkbox" id="terms" name="terms"--}}
                                                {{--                                                                       class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox">--}}
                                                {{--                                                                <span>J'ai lu et j'accepte le <a--}}
                                                {{--                                                                        class="woocommerce-terms-and-conditions-link"--}}
                                                {{--                                                                        href="#">termes et conditions</a></span>--}}
                                                {{--                                                                <span class="required">*</span>--}}
                                                {{--                                                            </label>--}}
                                                {{--                                                            <input type="hidden" value="1" name="terms-field">--}}
                                                {{--                                                        </p>--}}
                                                {{--                                                    </div>--}}
                                                {{--                                                </div>--}}
                                                <!-- /.woocommerce-checkout-payment -->
                                            </div>
                                            <!-- /.order-review-wrapper -->
                                        </div>
                                        <!-- .woocommerce-checkout-review-order -->
                                    </form>
                                    <!-- .woocommerce-checkout -->
                                </div>
                                <!-- .woocommerce -->
                            </div>
                            <!-- .entry-content -->
                        </div>
                        <!-- #post-## -->
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
