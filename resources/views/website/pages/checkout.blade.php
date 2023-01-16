@extends('website.layouts.website')
@section('body-type')
    page home page-template-default
@endsection

@section('content')
    <div id="content" class="site-content">
        <div class="col-full">
            <div class="row">
                <nav class="woocommerce-breadcrumb">
                    <a href="/">Home</a>
                    <span class="delimiter">
                                <i class="tm tm-breadcrumbs-arrow-right"></i>
                            </span>
                    Checkout
                </nav>
                <!-- .woocommerce-breadcrumb -->
                <div class="content-area" id="primary">
                    <main class="site-main" id="main">
                        <div class="type-page hentry">
                            <div class="entry-content">
                                <div class="woocommerce">
                                    <form action="{{route('checkout.submit')}}" class="checkout woocommerce-checkout"
                                          method="post">
                                        @csrf
                                        <div id="customer_details" class="col2-set">
                                            <div class="col-1">
                                                <div class="woocommerce-billing-fields">
                                                    <h3>Billing Details</h3>
                                                    <div class="woocommerce-billing-fields__field-wrapper-outer">
                                                        <div class="woocommerce-billing-fields__field-wrapper">
                                                            <p id="billing_first_name_field"
                                                               class="form-row form-row-first validate-required woocommerce-invalid woocommerce-invalid-required-field">
                                                                <label class="" for="billing_first_name">Prénom
                                                                    <abbr title="required" class="required">*</abbr>
                                                                </label>
                                                                <input type="text" value="" placeholder=""
                                                                       id="billing_first_name" name="fname" required
                                                                       class="input-text ">
                                                            </p>
                                                            <p id="billing_last_name_field"
                                                               class="form-row form-row-last validate-required">
                                                                <label class="" for="billing_last_name">Nom de famille
                                                                    <abbr title="required" class="required">*</abbr>
                                                                </label>
                                                                <input type="text" value="" placeholder=""
                                                                       id="billing_last_name" name="lname" required
                                                                       class="input-text ">
                                                            </p>
                                                            <p id="billing_phone_field"
                                                               class="form-row form-row-last validate-required validate-phone">
                                                                <label class="" for="billing_phone">Téléphone
                                                                    <abbr title="required" class="required">*</abbr>
                                                                </label>
                                                                <input type="tel" value="" placeholder=""
                                                                       id="billing_phone" name="phone" required
                                                                       class="input-text ">
                                                            </p>
                                                            <p id="billing_email_field"
                                                               class="form-row form-row-first validate-required validate-email">
                                                                <label class="" for="billing_email">Email
                                                                    <abbr title="required" class="required">*</abbr>
                                                                </label>
                                                                <input type="email" value="" placeholder=""
                                                                       id="billing_email" name="email" required
                                                                       class="input-text ">
                                                            </p>
                                                            <div class="clear"></div>
                                                            <p id="billing_country_field"
                                                               class="form-row form-row-wide validate-required validate-email">
                                                                <label class="" for="billing_country">Pays
                                                                    <abbr title="required" class="required">*</abbr>
                                                                </label>
                                                                <select class="form-control" name="country"
                                                                        id="deliver_to">
                                                                    <option value="Guadeloupe">Guadeloupe</option>
                                                                    <option value="Martinique">Martinique</option>
                                                                    <option value="France">France</option>
                                                                    <option value="French Guiana">French Guiana</option>
                                                                </select>
                                                            </p>
                                                            <p id="billing_address_1_field"
                                                               class="form-row form-row-wide address-field validate-required">
                                                                <label class="" for="billing_address_1">Adresse de rue
                                                                    <abbr title="required" class="required">*</abbr>
                                                                </label>
                                                                <input type="text" value="" placeholder="Street address"
                                                                       id="billing_address_1" required name="address"
                                                                       class="input-text ">
                                                            </p>
                                                            <p id="billing_city_field"
                                                               class="form-row form-row-wide address-field validate-required"
                                                               data-o_class="form-row form-row form-row-wide address-field validate-required">
                                                                <label class="" for="billing_city">Ville
                                                                    <abbr title="required" class="required">*</abbr>
                                                                </label>
                                                                <input type="text" value="" placeholder=""
                                                                       id="billing_city" name="city" required
                                                                       class="input-text ">
                                                            </p>
                                                            <div class="clear"></div>
                                                            <p id="billing_postcode_field"
                                                               class="form-row form-row-wide address-field validate-postcode validate-required"
                                                               data-o_class="form-row form-row form-row-last address-field validate-required validate-postcode">
                                                                <label class="" for="billing_postcode">Code postal
                                                                    <abbr title="required" class="required">*</abbr>
                                                                </label>
                                                                <input type="text" value="" placeholder=""
                                                                       id="billing_postcode" name="postal_code" required
                                                                       class="input-text ">
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <!-- .woocommerce-billing-fields__field-wrapper-outer -->
                                                </div>
                                            </div>
                                            <!-- .col-1 -->
                                            <div class="col-2">
                                                <div class="woocommerce-additional-fields">
                                                    <div class="woocommerce-additional-fields__field-wrapper">
                                                        <p id="order_comments_field" class="form-row notes">
                                                            <label class="" for="order_comments">Notes d'ordre</label>
                                                            <textarea cols="5" rows="2"
                                                                      placeholder="Remarques concernant votre commande, par ex. notes spéciales pour la livraison."
                                                                      id="comments" class="input-text "
                                                                      name="notes"></textarea>
                                                        </p>
                                                    </div>
                                                    <!-- .woocommerce-additional-fields__field-wrapper-->
                                                </div>
                                                <!-- .woocommerce-additional-fields -->
                                            </div>
                                            <!-- .col-2 -->
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
                                                <h3>Méthodes de livraison</h3>
                                                <p>Votre volume total de produits : {{$totalVolume}} m³</p>
                                                <div class="woocommerce-checkout-payment" id="payment">
                                                    <ul class="wc_payment_methods payment_methods methods">
                                                        @foreach($shipping_source as $shipping)
                                                            @if($shipping->volume > $totalVolume)
                                                                <li class="wc_payment_method payment_method_bacs">
                                                                    <input type="radio" data-order_button_text=""
                                                                           checked="checked" value="bacs"
                                                                           name="payment_method"
                                                                           class="input-radio"
                                                                           id="payment_method_bacs{{$shipping->id}}">
                                                                    <label
                                                                        for="payment_method_bacs{{$shipping->id}}">{{$shipping->name}}</label>
                                                                    <p class="p-3">
                                                                        Prix ​​d'expédition dans votre pays: {{$shipping->price}} €
                                                                        <br>
                                                                        Volume total de {{$shipping->source}}
                                                                        : {{$shipping->volume}} m³
                                                                        <br>
                                                                        Heure de livraison: {{$shipping->time_required}}
                                                                    </p>
                                                                </li>
                                                            @endif
                                                        @endforeach
                                                    </ul>
                                                    <div class="form-row place-order">
                                                        <p class="form-row terms wc-terms-and-conditions woocommerce-validated">
                                                            <label
                                                                class="woocommerce-form__label woocommerce-form__label-for-checkbox checkbox">
                                                                <input type="checkbox" id="terms" name="terms"
                                                                       class="woocommerce-form__input woocommerce-form__input-checkbox input-checkbox">
                                                                <span>J'ai lu et j'accepte le <a
                                                                        class="woocommerce-terms-and-conditions-link"
                                                                        href="#">termes et conditions</a></span>
                                                                <span class="required">*</span>
                                                            </label>
                                                            <input type="hidden" value="1" name="terms-field">
                                                        </p>
                                                        @if($total>0)
                                                            <button class="button wc-forward text-center">Passer la commande </button>
                                                        @endif
                                                    </div>
                                                </div>
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
