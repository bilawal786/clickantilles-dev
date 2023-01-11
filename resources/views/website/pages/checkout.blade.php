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
                                                                <select autocomplete="country"
                                                                        class="country_to_state country_select select2-hidden-accessible"
                                                                        id="billing_country" name="billing_country"
                                                                        tabindex="-1" aria-hidden="true">
                                                                    <option value="">Select a country…</option>
                                                                    <option value="AX">Åland Islands</option>
                                                                    <option value="AF">Afghanistan</option>
                                                                    <option value="AL">Albania</option>
                                                                    <option value="DZ">Algeria</option>
                                                                    <option value="AS">American Samoa</option>
                                                                    <option value="AD">Andorra</option>
                                                                    <option value="AO">Angola</option>
                                                                    <option value="AI">Anguilla</option>
                                                                    <option value="AQ">Antarctica</option>
                                                                    <option value="AG">Antigua and Barbuda</option>
                                                                    <option value="AR">Argentina</option>
                                                                    <option value="AM">Armenia</option>
                                                                    <option value="AW">Aruba</option>
                                                                    <option value="AU">Australia</option>
                                                                    <option value="AT">Austria</option>
                                                                    <option value="AZ">Azerbaijan</option>
                                                                    <option value="BS">Bahamas</option>
                                                                    <option value="BH">Bahrain</option>
                                                                    <option value="BD">Bangladesh</option>
                                                                    <option value="BB">Barbados</option>
                                                                    <option value="BY">Belarus</option>
                                                                    <option value="PW">Belau</option>
                                                                    <option value="BE">Belgium</option>
                                                                    <option value="BZ">Belize</option>
                                                                    <option value="BJ">Benin</option>
                                                                    <option value="BM">Bermuda</option>
                                                                    <option value="BT">Bhutan</option>
                                                                    <option value="BO">Bolivia</option>
                                                                    <option value="BQ">Bonaire, Saint Eustatius and
                                                                        Saba
                                                                    </option>
                                                                    <option value="BA">Bosnia and Herzegovina</option>
                                                                    <option value="BW">Botswana</option>
                                                                    <option value="BV">Bouvet Island</option>
                                                                    <option value="BR">Brazil</option>
                                                                    <option value="IO">British Indian Ocean Territory
                                                                    </option>
                                                                    <option value="VG">British Virgin Islands</option>
                                                                    <option value="BN">Brunei</option>
                                                                    <option value="BG">Bulgaria</option>
                                                                    <option value="BF">Burkina Faso</option>
                                                                    <option value="BI">Burundi</option>
                                                                    <option value="KH">Cambodia</option>
                                                                    <option value="CM">Cameroon</option>
                                                                    <option value="CA">Canada</option>
                                                                    <option value="CV">Cape Verde</option>
                                                                    <option value="KY">Cayman Islands</option>
                                                                    <option value="CF">Central African Republic</option>
                                                                    <option value="TD">Chad</option>
                                                                    <option value="CL">Chile</option>
                                                                    <option value="CN">China</option>
                                                                    <option value="CX">Christmas Island</option>
                                                                    <option value="CC">Cocos (Keeling) Islands</option>
                                                                    <option value="CO">Colombia</option>
                                                                    <option value="KM">Comoros</option>
                                                                    <option value="CG">Congo (Brazzaville)</option>
                                                                    <option value="CD">Congo (Kinshasa)</option>
                                                                    <option value="CK">Cook Islands</option>
                                                                    <option value="CR">Costa Rica</option>
                                                                    <option value="HR">Croatia</option>
                                                                    <option value="CU">Cuba</option>
                                                                    <option value="CW">Curaçao</option>
                                                                    <option value="CY">Cyprus</option>
                                                                    <option value="CZ">Czech Republic</option>
                                                                    <option value="DK">Denmark</option>
                                                                    <option value="DJ">Djibouti</option>
                                                                    <option value="DM">Dominica</option>
                                                                    <option value="DO">Dominican Republic</option>
                                                                    <option value="EC">Ecuador</option>
                                                                    <option value="EG">Egypt</option>
                                                                    <option value="SV">El Salvador</option>
                                                                    <option value="GQ">Equatorial Guinea</option>
                                                                    <option value="ER">Eritrea</option>
                                                                    <option value="EE">Estonia</option>
                                                                    <option value="ET">Ethiopia</option>
                                                                    <option value="FK">Falkland Islands</option>
                                                                    <option value="FO">Faroe Islands</option>
                                                                    <option value="FJ">Fiji</option>
                                                                    <option value="FI">Finland</option>
                                                                    <option value="FR">France</option>
                                                                    <option value="GF">French Guiana</option>
                                                                    <option value="PF">French Polynesia</option>
                                                                    <option value="TF">French Southern Territories
                                                                    </option>
                                                                    <option value="GA">Gabon</option>
                                                                    <option value="GM">Gambia</option>
                                                                    <option value="GE">Georgia</option>
                                                                    <option value="DE">Germany</option>
                                                                    <option value="GH">Ghana</option>
                                                                    <option value="GI">Gibraltar</option>
                                                                    <option value="GR">Greece</option>
                                                                    <option value="GL">Greenland</option>
                                                                    <option value="GD">Grenada</option>
                                                                    <option value="GP">Guadeloupe</option>
                                                                    <option value="GU">Guam</option>
                                                                    <option value="GT">Guatemala</option>
                                                                    <option value="GG">Guernsey</option>
                                                                    <option value="GN">Guinea</option>
                                                                    <option value="GW">Guinea-Bissau</option>
                                                                    <option value="GY">Guyana</option>
                                                                    <option value="HT">Haiti</option>
                                                                    <option value="HM">Heard Island and McDonald
                                                                        Islands
                                                                    </option>
                                                                    <option value="HN">Honduras</option>
                                                                    <option value="HK">Hong Kong</option>
                                                                    <option value="HU">Hungary</option>
                                                                    <option value="IS">Iceland</option>
                                                                    <option selected="selected" value="IN">India
                                                                    </option>
                                                                    <option value="ID">Indonesia</option>
                                                                    <option value="IR">Iran</option>
                                                                    <option value="IQ">Iraq</option>
                                                                    <option value="IE">Ireland</option>
                                                                    <option value="IM">Isle of Man</option>
                                                                    <option value="IL">Israel</option>
                                                                    <option value="IT">Italy</option>
                                                                    <option value="CI">Ivory Coast</option>
                                                                    <option value="JM">Jamaica</option>
                                                                    <option value="JP">Japan</option>
                                                                    <option value="JE">Jersey</option>
                                                                    <option value="JO">Jordan</option>
                                                                    <option value="KZ">Kazakhstan</option>
                                                                    <option value="KE">Kenya</option>
                                                                    <option value="KI">Kiribati</option>
                                                                    <option value="KW">Kuwait</option>
                                                                    <option value="KG">Kyrgyzstan</option>
                                                                    <option value="LA">Laos</option>
                                                                    <option value="LV">Latvia</option>
                                                                    <option value="LB">Lebanon</option>
                                                                    <option value="LS">Lesotho</option>
                                                                    <option value="LR">Liberia</option>
                                                                    <option value="LY">Libya</option>
                                                                    <option value="LI">Liechtenstein</option>
                                                                    <option value="LT">Lithuania</option>
                                                                    <option value="LU">Luxembourg</option>
                                                                    <option value="MO">Macao S.A.R., China</option>
                                                                    <option value="MK">Macedonia</option>
                                                                    <option value="MG">Madagascar</option>
                                                                    <option value="MW">Malawi</option>
                                                                    <option value="MY">Malaysia</option>
                                                                    <option value="MV">Maldives</option>
                                                                    <option value="ML">Mali</option>
                                                                    <option value="MT">Malta</option>
                                                                    <option value="MH">Marshall Islands</option>
                                                                    <option value="MQ">Martinique</option>
                                                                    <option value="MR">Mauritania</option>
                                                                    <option value="MU">Mauritius</option>
                                                                    <option value="YT">Mayotte</option>
                                                                    <option value="MX">Mexico</option>
                                                                    <option value="FM">Micronesia</option>
                                                                    <option value="MD">Moldova</option>
                                                                    <option value="MC">Monaco</option>
                                                                    <option value="MN">Mongolia</option>
                                                                    <option value="ME">Montenegro</option>
                                                                    <option value="MS">Montserrat</option>
                                                                    <option value="MA">Morocco</option>
                                                                    <option value="MZ">Mozambique</option>
                                                                    <option value="MM">Myanmar</option>
                                                                    <option value="NA">Namibia</option>
                                                                    <option value="NR">Nauru</option>
                                                                    <option value="NP">Nepal</option>
                                                                    <option value="NL">Netherlands</option>
                                                                    <option value="NC">New Caledonia</option>
                                                                    <option value="NZ">New Zealand</option>
                                                                    <option value="NI">Nicaragua</option>
                                                                    <option value="NE">Niger</option>
                                                                    <option value="NG">Nigeria</option>
                                                                    <option value="NU">Niue</option>
                                                                    <option value="NF">Norfolk Island</option>
                                                                    <option value="KP">North Korea</option>
                                                                    <option value="MP">Northern Mariana Islands</option>
                                                                    <option value="NO">Norway</option>
                                                                    <option value="OM">Oman</option>
                                                                    <option value="PK">Pakistan</option>
                                                                    <option value="PS">Palestinian Territory</option>
                                                                    <option value="PA">Panama</option>
                                                                    <option value="PG">Papua New Guinea</option>
                                                                    <option value="PY">Paraguay</option>
                                                                    <option value="PE">Peru</option>
                                                                    <option value="PH">Philippines</option>
                                                                    <option value="PN">Pitcairn</option>
                                                                    <option value="PL">Poland</option>
                                                                    <option value="PT">Portugal</option>
                                                                    <option value="PR">Puerto Rico</option>
                                                                    <option value="QA">Qatar</option>
                                                                    <option value="RE">Reunion</option>
                                                                    <option value="RO">Romania</option>
                                                                    <option value="RU">Russia</option>
                                                                    <option value="RW">Rwanda</option>
                                                                    <option value="ST">São Tomé and Príncipe</option>
                                                                    <option value="BL">Saint Barthélemy</option>
                                                                    <option value="SH">Saint Helena</option>
                                                                    <option value="KN">Saint Kitts and Nevis</option>
                                                                    <option value="LC">Saint Lucia</option>
                                                                    <option value="SX">Saint Martin (Dutch part)
                                                                    </option>
                                                                    <option value="MF">Saint Martin (French part)
                                                                    </option>
                                                                    <option value="PM">Saint Pierre and Miquelon
                                                                    </option>
                                                                    <option value="VC">Saint Vincent and the
                                                                        Grenadines
                                                                    </option>
                                                                    <option value="WS">Samoa</option>
                                                                    <option value="SM">San Marino</option>
                                                                    <option value="SA">Saudi Arabia</option>
                                                                    <option value="SN">Senegal</option>
                                                                    <option value="RS">Serbia</option>
                                                                    <option value="SC">Seychelles</option>
                                                                    <option value="SL">Sierra Leone</option>
                                                                    <option value="SG">Singapore</option>
                                                                    <option value="SK">Slovakia</option>
                                                                    <option value="SI">Slovenia</option>
                                                                    <option value="SB">Solomon Islands</option>
                                                                    <option value="SO">Somalia</option>
                                                                    <option value="ZA">South Africa</option>
                                                                    <option value="GS">South Georgia/Sandwich Islands
                                                                    </option>
                                                                    <option value="KR">South Korea</option>
                                                                    <option value="SS">South Sudan</option>
                                                                    <option value="ES">Spain</option>
                                                                    <option value="LK">Sri Lanka</option>
                                                                    <option value="SD">Sudan</option>
                                                                    <option value="SR">Suriname</option>
                                                                    <option value="SJ">Svalbard and Jan Mayen</option>
                                                                    <option value="SZ">Swaziland</option>
                                                                    <option value="SE">Sweden</option>
                                                                    <option value="CH">Switzerland</option>
                                                                    <option value="SY">Syria</option>
                                                                    <option value="TW">Taiwan</option>
                                                                    <option value="TJ">Tajikistan</option>
                                                                    <option value="TZ">Tanzania</option>
                                                                    <option value="TH">Thailand</option>
                                                                    <option value="TL">Timor-Leste</option>
                                                                    <option value="TG">Togo</option>
                                                                    <option value="TK">Tokelau</option>
                                                                    <option value="TO">Tonga</option>
                                                                    <option value="TT">Trinidad and Tobago</option>
                                                                    <option value="TN">Tunisia</option>
                                                                    <option value="TR">Turkey</option>
                                                                    <option value="TM">Turkmenistan</option>
                                                                    <option value="TC">Turks and Caicos Islands</option>
                                                                    <option value="TV">Tuvalu</option>
                                                                    <option value="UG">Uganda</option>
                                                                    <option value="UA">Ukraine</option>
                                                                    <option value="AE">United Arab Emirates</option>
                                                                    <option value="GB">United Kingdom (UK)</option>
                                                                    <option value="US">United States (US)</option>
                                                                    <option value="UM">United States (US) Minor Outlying
                                                                        Islands
                                                                    </option>
                                                                    <option value="VI">United States (US) Virgin
                                                                        Islands
                                                                    </option>
                                                                    <option value="UY">Uruguay</option>
                                                                    <option value="UZ">Uzbekistan</option>
                                                                    <option value="VU">Vanuatu</option>
                                                                    <option value="VA">Vatican</option>
                                                                    <option value="VE">Venezuela</option>
                                                                    <option value="VN">Vietnam</option>
                                                                    <option value="WF">Wallis and Futuna</option>
                                                                    <option value="EH">Western Sahara</option>
                                                                    <option value="YE">Yemen</option>
                                                                    <option value="ZM">Zambia</option>
                                                                    <option value="ZW">Zimbabwe</option>
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
                                                <!-- /.woocommerce-checkout-review-order-table -->
                                                <div class="woocommerce-checkout-payment" id="payment">
                                                    {{--                                                    <ul class="wc_payment_methods payment_methods methods">--}}
                                                    {{--                                                        <li class="wc_payment_method payment_method_bacs">--}}
                                                    {{--                                                            <input type="radio" data-order_button_text="" checked="checked" value="bacs" name="payment_method" class="input-radio" id="payment_method_bacs">--}}
                                                    {{--                                                            <label for="payment_method_bacs">Direct bank transfer</label>--}}

                                                    {{--                                                        </li>--}}
                                                    {{--                                                        <li class="wc_payment_method payment_method_cheque">--}}
                                                    {{--                                                            <input type="radio" data-order_button_text="" value="cheque" name="payment_method" class="input-radio" id="payment_method_cheque">--}}
                                                    {{--                                                            <label for="payment_method_cheque">Check payments </label>--}}

                                                    {{--                                                        </li>--}}
                                                    {{--                                                        <li class="wc_payment_method payment_method_cod">--}}
                                                    {{--                                                            <input type="radio" data-order_button_text="" value="cod" name="payment_method" class="input-radio" id="payment_method_cod">--}}
                                                    {{--                                                            <label for="payment_method_cod">Cash on delivery </label>--}}

                                                    {{--                                                        </li>--}}
                                                    {{--                                                    </ul>--}}
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
                                                        <button class="button wc-forward text-center">Passer la commande</button>
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
