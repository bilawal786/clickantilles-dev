@extends('website.layouts.website')
@section('body-type')
    page home page-template-default
@endsection
@section('content')
    <style>
        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked + .slider {
            background-color: #2196F3;
        }

        input:focus + .slider {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked + .slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }

        /* Rounded sliders */
        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }
        .prodiv{
            display: none;
        }
    </style>
    <div id="content" class="site-content">
        <div class="col-full">
            <div class="row">
                <nav class="woocommerce-breadcrumb">
                    <a href="/">Accueil</a>
                    <span class="delimiter">
                                <i class="tm tm-breadcrumbs-arrow-right"></i>
                            </span>Mon compte
                </nav>
                <!-- .woocommerce-breadcrumb -->
                <div id="primary" class="content-area">
                    <main id="main" class="site-main">
                        <div class="type-page hentry">
                            <div class="entry-content">
                                <div class="woocommerce">
                                    <div class="customer-login-form">
                                        <span class="or-text">ou</span>
                                        <div id="customer_login" class="u-columns col2-set">
                                            <div class="u-column1 col-1">
                                                <h2>Connexion</h2>
                                                <form method="post" action="{{route('login')}}"
                                                      class="woocomerce-form woocommerce-form-login login">
                                                    @csrf
                                                    @error('email')
                                                    <p style="color: red">
                                                        <strong>{{ $message }}</strong>
                                                    </p>
                                                    @enderror
                                                    @error('password')
                                                    <p style="color: red">
                                                        <strong>{{ $message }}</strong>
                                                    </p>
                                                    @enderror

                                                    <p class="before-login-text">
                                                        Connectez-vous à votre compte, vérifiez les commandes et passez
                                                        d'autres commandes </p>
                                                    <p class="form-row form-row-wide">
                                                        <label for="username">Nom d'utilisateur ou adresse e-mail
                                                            <span class="required">*</span>
                                                        </label>
                                                        <input type="text" class="input-text" name="email" id="username"
                                                               value=""/>
                                                    </p>
                                                    <p class="form-row form-row-wide">
                                                        <label for="password">Mot de passe
                                                            <span class="required">*</span>
                                                        </label>
                                                        <input class="input-text" type="password" name="password"
                                                               id="password"/>
                                                    </p>
                                                    <p class="form-row">
                                                        <input class="woocommerce-Button button" type="submit"
                                                               value="Connexion" name="login">
                                                        <label for="rememberme"
                                                               class="woocommerce-form__label woocommerce-form__label-for-checkbox inline">
                                                            <input
                                                                class="woocommerce-form__input woocommerce-form__input-checkbox"
                                                                name="rememberme" type="checkbox" id="rememberme"
                                                                value="forever"/> Souviens-toi de moi
                                                        </label>
                                                    </p>
                                                    <p class="woocommerce-LostPassword lost_password">
                                                        <a href="#">Mot de passe perdu?</a>
                                                    </p>
                                                </form>
                                                <!-- .woocommerce-form-login -->
                                            </div>
                                            <!-- .col-1 -->
                                            <div class="u-column2 col-2">
                                                <h2>S'inscrire</h2>
                                                <form class="register" method="post" action="{{route('register')}}">
                                                    @csrf
                                                    <p class="before-register-text">
                                                        Créez un nouveau compte aujourd'hui pour profiter des avantages
                                                        d'une expérience d'achat personnalisée
                                                    </p>
                                                    @error('fname')
                                                    <p style="color: red">
                                                        <strong>{{ $message }}</strong>
                                                    </p>
                                                    @enderror
                                                    <p class="form-row form-row-wide">
                                                        <label for="reg_email">First name
                                                            <span class="required">*</span>
                                                        </label>
                                                        <input type="text" value="" id="reg_email" name="fname"
                                                               class="woocommerce-Input woocommerce-Input--text input-text">
                                                    </p>
                                                    @error('lname')
                                                    <p style="color: red">
                                                        <strong>{{ $message }}</strong>
                                                    </p>
                                                    @enderror
                                                    <p class="form-row form-row-wide">
                                                        <label for="reg_email">Last Name
                                                            <span class="required">*</span>
                                                        </label>
                                                        <input type="text" value="" id="reg_email" name="lname"
                                                               class="woocommerce-Input woocommerce-Input--text input-text">
                                                    </p>

                                                    @error('email')
                                                    <p style="color: red">
                                                        <strong>{{ $message }}</strong>
                                                    </p>
                                                    @enderror
                                                    <p class="form-row form-row-wide">
                                                        <label for="reg_email">Email
                                                            <span class="required">*</span>
                                                        </label>
                                                        <input type="email" value="" id="reg_email" name="email"
                                                               class="woocommerce-Input woocommerce-Input--text input-text">
                                                    </p>
                                                    <p class="form-row form-row-wide">
                                                        <label for="reg_email">Pays
                                                            <span class="required">*</span>
                                                        </label>
                                                        <select class="form-control" name="country" id="deliver_to">
                                                            <option value="Guadeloupe">Guadeloupe</option>
                                                            <option value="Martinique">Martinique</option>
                                                            <option value="France">France</option>
                                                            <option value="French Guiana">French Guiana</option>
                                                        </select>
                                                    </p>
                                                    <p class="form-row form-row-wide">
                                                        <label for="reg_email">Telephone
                                                            <span class="required">*</span>
                                                        </label>
                                                        <input required type="text" name="phone"
                                                               class="woocommerce-Input woocommerce-Input--text input-text">
                                                    </p>
                                                    <p class="form-row form-row-wide">
                                                        <label for="reg_email">Adresse
                                                            <span class="required">*</span>
                                                        </label>
                                                        <input type="text" name="address"
                                                               class="woocommerce-Input woocommerce-Input--text input-text">
                                                    </p>

                                                    <p class="form-row form-row-wide">
                                                        <label for="reg_email">Ville
                                                            <span class="required">*</span>
                                                        </label>
                                                        <input type="text" name="city"
                                                               class="woocommerce-Input woocommerce-Input--text input-text">
                                                    </p>
                                                    @error('password')
                                                    <p style="color: red">
                                                        <strong>{{ $message }}</strong>
                                                    </p>
                                                    @enderror
                                                    <p class="form-row form-row-wide">
                                                        <label for="reg_password">Mot de passe
                                                            <span class="required">*</span>
                                                        </label>
                                                        <input type="password" id="reg_password" name="password"
                                                               class="woocommerce-Input woocommerce-Input--text input-text">
                                                    </p>
                                                    <p class="form-row form-row-wide">
                                                        <label for="reg_password">Conform Password
                                                            <span class="required">*</span>
                                                        </label>
                                                        <input type="password" id="reg_password"
                                                               name="password_confirmation"
                                                               class="woocommerce-Input woocommerce-Input--text input-text">
                                                    </p>
                                                    <p class="form-row">
                                                        <input type="submit" class="woocommerce-Button button"
                                                               name="register" value="S'inscrire"/>
                                                    </p>
                                                    <div class="register-benefits">
                                                        <h3>Inscrivez-vous aujourd'hui et vous pourrez :</h3>
                                                        <ul>
                                                            <li>Accélérez votre passage à la caisse</li>
                                                            <li>Suivez facilement vos commandes</li>
                                                            <li>Gardez une trace de tous vos achats</li>
                                                        </ul>
                                                    </div>
                                                </form>
                                                <!-- .register -->
                                            </div>
                                            <!-- .col-2 -->
                                        </div>
                                        <!-- .col2-set -->
                                    </div>
                                    <!-- .customer-login-form -->
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
@section('script')
    <script>
        jQuery(document).ready(function () {
            jQuery('#checkp').change(function () {
                if ($(this).prop('checked')) {
                    $(".prodiv").show();
                } else {
                    $(".prodiv").hide();
                }
            });
        });
    </script>
@endsection
