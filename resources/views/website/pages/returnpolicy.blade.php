@extends('website.layouts.website')
@section('body-type')
    page home page-template-default
@endsection

@section('content')
    <?php $settings = App\Settings::first(); ?>

    <div id="content" class="site-content">
        <div class="col-full">
            <div class="row">
                <nav class="woocommerce-breadcrumb">
                    <a href="/">Home</a>
                    <span class="delimiter">
                                <i class="tm tm-breadcrumbs-arrow-right"></i>
                            </span>
                    Retours/échange
                </nav>
                <!-- .woocommerce-breadcrumb -->
                <div id="primary" class="content-area">
                    <main id="main" class="site-main">
                        <div class="type-page hentry">
                            <header class="entry-header">
                                <div class="page-header-caption">
                                    <h1 class="entry-title">Retours/échange</h1>
                                </div>
                            </header>
                            <!-- .entry-header -->
                            <div class="entry-content">
                                <div class="woocommerce">
                                    <p>{!! $settings->return !!}</p>
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
