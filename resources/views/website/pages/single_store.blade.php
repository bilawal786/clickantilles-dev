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
                    {{$store->name??""}}
                </nav>
                <!-- .woocommerce-breadcrumb -->
                <div id="primary" class="content-area">
                    <main id="main" class="site-main" style="text-align: center">
                        <div class="container">
                            <h1 style="text-align: center">{{$store->name??""}}</h1>
                            <div style="text-align: center">
                                <img style="display: inline-block" class="center" src="{{asset($store->photo)}}" alt="">
                                <p class="pt-3">{{$store->description}}</p>
                            </div>
                            <h1 style="text-align: center; padding: 20px">Products</h1>
                            <div id="list-view" class="tab-pane active show" role="tabpanel">
                                <div class="woocommerce columns-1">
                                    <div class="products">
                                        @if($store->products->count() > 0)
                                            @foreach($store->products as $product)
                                                <div class="product list-view ">
                                                    <div class="media">
                                                        <img width="224" height="197" alt=""
                                                             class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                             src="{{asset($product->photo1)}}">
                                                        <div class="media-body">
                                                            <div class="product-info">
                                                                <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link"
                                                                   href="{{route('front.single.product', ['slug' => $product->slug, 'id' => $product->id])}}">
                                                                    <h2 class="woocommerce-loop-product__title">{{$product->title}}</h2>
                                                                    <div class="techmarket-product-rating">
                                                                        <div title="Rated 5.00 out of 5"
                                                                             class="star-rating">
                                                                            <span style="width:100%">
                                                                                <strong class="rating">5.00</strong> out of 5</span>
                                                                        </div>
                                                                        <span class="review-count">(1)</span>
                                                                    </div>
                                                                </a>
                                                                <div
                                                                    class="woocommerce-product-details__short-description">
                                                                    {!! $product->short_description !!}
                                                                </div>
                                                                <!-- .woocommerce-product-details__short-description -->
                                                            </div>
                                                            <!-- .product-info -->
                                                            <div class="product-actions">
                                                                <div class="availability">
                                                                    Disponibilité:
                                                                    <p class="stock in-stock">{{$product->stock}} en
                                                                        stock</p>
                                                                </div>
                                                                <span class="price">
                                                                    <span
                                                                        class="color-black woocommerce-Price-amount amount">
                                                                      {{$product->price}} <span
                                                                            class="color-black woocommerce-Price-currencySymbol">€</span></span>
                                                                </span>
                                                                <a onclick="addtocart(this, {{$product->id}})"
                                                                   class="button add_to_cart_button">Ajouter à
                                                                    Panier</a>
                                                            </div>
                                                            <!-- .product-actions -->
                                                        </div>
                                                        <!-- .media-body -->
                                                    </div>
                                                    <!-- .media -->
                                                </div>
                                            @endforeach
                                        @else
                                            <p style="text-align: center">No Product Found</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
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
        function addtocart(elem, product_id) {
            $(elem).html("Chargement..");

            let quantity = '1';
            let _token = $('meta[name="csrf-token"]').attr('content');

            $.ajax({
                url: "{{route('addtocart')}}",
                type: "POST",
                data: {
                    product_id: product_id,
                    quantity: quantity,
                    _token: _token
                },
                success: function (response) {
                    $(elem).html("Ajouter au panier");
                    toastr.info("Ajouté au panier avec succès");
                    mycartitems();
                },
                error: function (response) {
                    $(elem).html("Ajouter au panier");
                    toastr.error("Produit déjà dans le panier");
                },
            });
        }

    </script>
@endsection
