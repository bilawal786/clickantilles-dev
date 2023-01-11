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
                    Suivi de commande
                </nav>
                <!-- .woocommerce-breadcrumb -->
                <div id="primary" class="content-area">
                    <main id="main" class="site-main">
                        <div class="type-page hentry">
                            <header class="entry-header">
                                <div class="page-header-caption">
                                    <h1 class="entry-title">Suivi de commander</h1>
                                </div>
                            </header>
                            <!-- .entry-header -->
                            <div class="entry-content">
                                <div class="woocommerce">
                                    <form class="track_order" method="post" action="#">
                                        <p>Pour suivre votre commande, veuillez entrer votre ID de commande dans la case ci-dessous et appuyez sur le bouton "Suivre". Celui-ci vous a été remis sur votre reçu et dans l'e-mail de confirmation que vous auriez dû recevoir.</p>
                                        <p class="form-row form-row-first">
                                            <label for="orderid">Numéro de commande</label>
                                            <input type="text" placeholder="Trouvé dans votre e-mail de confirmation de commande." id="orderid" name="orderid" class="input-text">
                                        </p>
                                        <p class="form-row form-row-last">
                                            <label for="order_email">E-mail de facturation</label>
                                            <input type="text" placeholder="Courriel que vous avez utilisé lors du paiement." id="order_email" name="order_email" class="input-text">
                                        </p>
                                        <div class="clear"></div>
                                        <p class="form-row">
                                            <input type="submit" class="button" name="track" value="Piste" />
                                        </p>
                                    </form>
                                    <!-- .track_order -->
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
