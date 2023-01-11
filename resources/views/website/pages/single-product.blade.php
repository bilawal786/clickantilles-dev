@extends('website.layouts.website')
@section('body-type')
    single-product full-width extended  pace-done
@endsection
@section('content')

    <div id="content" class="site-content" tabindex="-1">
        <div class="col-full">
            <div class="row">
                <nav class="woocommerce-breadcrumb">
                    <a href="{{route('front.index')}}">Accueil </a>
                    <span class="delimiter">
                                <i class="tm tm-breadcrumbs-arrow-right"></i>
                            </span><a href="#">{{$product->category->name??""}}</a>
                    <span class="delimiter">
                                <i class="tm tm-breadcrumbs-arrow-right"></i>
                            </span>{{$product->slug??""}}
                </nav>
                <!-- .woocommerce-breadcrumb -->
                <div id="primary" class="content-area">
                    <main id="main" class="site-main">
                        <div class="product">
                            <div class="single-product-wrapper">
                                <div class="product-images-wrapper thumb-count-4">
{{--                                            <span class="onsale">---}}
{{--                                                <span class="woocommerce-Price-amount amount">--}}
{{--                                                    <span class="woocommerce-Price-currencySymbol">$</span>242.99</span>--}}
{{--                                            </span>--}}
                                    <!-- .onsale -->
                                    <div id="techmarket-single-product-gallery"
                                         class="techmarket-single-product-gallery techmarket-single-product-gallery--with-images techmarket-single-product-gallery--columns-4 images"
                                         data-columns="4">
                                        <div class="techmarket-single-product-gallery-images"
                                             data-ride="tm-slick-carousel"
                                             data-wrap=".woocommerce-product-gallery__wrapper"
                                             data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:1,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:false,&quot;asNavFor&quot;:&quot;#techmarket-single-product-gallery .techmarket-single-product-gallery-thumbnails__wrapper&quot;}">
                                            <div
                                                class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images"
                                                data-columns="4">
                                                <a href="#" class="woocommerce-product-gallery__trigger">🔍</a>
                                                <figure class="woocommerce-product-gallery__wrapper ">
                                                    <div data-thumb="{{$product->photo1}}"
                                                         class="woocommerce-product-gallery__image">
                                                        <a href="{{asset($product->photo1)}}" tabindex="0">
                                                            <img width="600" height="600"
                                                                 src="{{asset($product->photo1)}}"
                                                                 class="attachment-shop_single size-shop_single wp-post-image"
                                                                 alt="">
                                                        </a>
                                                    </div>
                                                    @if(!empty ( $product->gallery ))
                                                        @foreach(json_decode($product->gallery, true) as $images)
                                                            <div data-thumb="{{'product-images/'.$images}}"
                                                                 class="woocommerce-product-gallery__image">
                                                                <a href="{{asset('product-images/'.$images)}}"
                                                                   tabindex="0">
                                                                    <img width="600" height="600"
                                                                         src="{{asset('product-images/'.$images)}}"
                                                                         class="attachment-shop_single size-shop_single wp-post-image"
                                                                         alt="">
                                                                </a>
                                                            </div>
                                                        @endforeach
                                                    @endif
                                                </figure>
                                            </div>
                                            <!-- .woocommerce-product-gallery -->
                                        </div>
                                        {{--                                       sidebar--}}
                                        <div class="techmarket-single-product-gallery-thumbnails"
                                             data-ride="tm-slick-carousel"
                                             data-wrap=".techmarket-single-product-gallery-thumbnails__wrapper"
                                             data-slick="{&quot;infinite&quot;:false,&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:1,&quot;dots&quot;:false,&quot;arrows&quot;:true,&quot;vertical&quot;:true,&quot;verticalSwiping&quot;:true,&quot;focusOnSelect&quot;:true,&quot;touchMove&quot;:true,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-up\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-down\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;asNavFor&quot;:&quot;#techmarket-single-product-gallery .woocommerce-product-gallery__wrapper&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:765,&quot;settings&quot;:{&quot;vertical&quot;:false,&quot;horizontal&quot;:true,&quot;verticalSwiping&quot;:false,&quot;slidesToShow&quot;:4}}]}">
                                            <figure class="techmarket-single-product-gallery-thumbnails__wrapper">
                                                <figure data-thumb="{{$product->photo1}}"
                                                        class="techmarket-wc-product-gallery__image">
                                                    <img width="180" height="180" src="{{asset($product->photo1)}}"
                                                         class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image"
                                                         alt="">
                                                </figure>
                                                @if(!empty ( $product->gallery ))
                                                    @foreach(json_decode($product->gallery, true) as $images)
                                                        <figure data-thumb="{{'product-images/'.$images}}"
                                                                class="techmarket-wc-product-gallery__image">
                                                            <img width="180" height="180" src="{{asset('product-images/'.$images)}}"
                                                                 class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image"
                                                                 alt="">
                                                        </figure>
                                                    @endforeach
                                                @endif
                                            </figure>
                                            <!-- .techmarket-single-product-gallery-thumbnails__wrapper -->
                                        </div>
                                        <!-- .techmarket-single-product-gallery-thumbnails -->
                                    </div>
                                    <!-- .techmarket-single-product-gallery -->
                                </div>
                                <!-- .product-images-wrapper -->
                                <div class="summary entry-summary">
                                    <div class="single-product-header">
                                        <h1 class="product_title entry-title">{{$product->title??""}}</h1>
                                        <a class="add-to-wishlist" href="#"> Ajouter à la liste de souhaits</a>
                                    </div>
                                    <!-- .single-product-header -->
                                    <div class="single-product-meta">
                                        <div class="cat-and-sku">
                                                    <span class="posted_in categories">
                                                        <a rel="tag"
                                                           href="#">{{$product->category->name??""}} &amp; {{$product->subcategory->name??""}}</a>
                                                    </span>
                                            <span class="sku_wrapper">SKU:
                                                        <span class="sku">{{$product->sku??""}}</span>
                                                    </span>
                                        </div>
                                        <div class="product-label">
                                            <div class="ribbon label green-label">
                                                <span>A+</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .single-product-meta -->
                                    <div class="rating-and-sharing-wrapper">
                                        <div class="woocommerce-product-rating">
                                            <div class="star-rating">
                                                        <span style="width:100%">Noté
                                                            <strong class="rating">5.00</strong> sur 5 basé sur
                                                            <span class="rating">1</span> Évaluation du client</span>
                                            </div>
                                            <a rel="nofollow" class="woocommerce-review-link" href="#reviews">(<span
                                                    class="count">1</span> Avis client)</a>
                                        </div>
                                    </div>
                                    <!-- .rating-and-sharing-wrapper -->
                                    <div class="woocommerce-product-details__short-description">
                                        {!! $product->short_description !!}
                                    </div>

                                    <!-- .product-actions-wrapper -->
                                </div>
                                <!-- .entry-summary -->
                                <div class="product-actions-wrapper">
                                    <div class="product-actions">
                                        <div class="availability">
                                            Disponibilité:
                                            <p class="stock in-stock">{{$product->stock}} en stock</p>
                                        </div>
                                        <!-- .availability -->
                                        <div class="additional-info">
                                            <i class="tm tm-free-delivery"></i>Article avec
                                            <strong>Livraison gratuite</strong>
                                        </div>
                                        <!-- .additional-info -->
                                        <p class="price">
                                                    <span class="woocommerce-Price-amount amount">
                                                        <span class="woocommerce-Price-currencySymbol"></span>{{$product->price}} €</span>
                                        </p>
                                        <!-- .price -->
                                        <form class="variations_form cart">
                                            <table class="variations">
                                                <tbody>
                                                {{--                                                <tr>--}}
                                                {{--                                                    <td class="label">--}}
                                                {{--                                                        <label for="pa_screen-size">Screen Size</label>--}}
                                                {{--                                                    </td>--}}
                                                {{--                                                    <td class="value">--}}
                                                {{--                                                        <select data-show_option_none="yes" data-attribute_name="attribute_pa_screen-size" name="attribute_pa_screen-size" class="" id="pa_screen-size">--}}
                                                {{--                                                            <option value="">Choose an option</option>--}}
                                                {{--                                                            <option value="45-inch" class="attached enabled">45 Inch</option>--}}
                                                {{--                                                            <option value="60-inch" class="attached enabled">60 Inch</option>--}}
                                                {{--                                                        </select>--}}
                                                {{--                                                        <a href="#" class="reset_variations" style="visibility: hidden;">Clear</a>--}}
                                                {{--                                                    </td>--}}
                                                {{--                                                </tr>--}}
                                                </tbody>
                                            </table>
                                            <div class="single_variation_wrap">
                                                <div
                                                    class="woocommerce-variation-add-to-cart variations_button woocommerce-variation-add-to-cart-disabled">
                                                    <div class="quantity">
                                                        <label for="quantity-input">Quantité</label>
                                                        <input id="quantity" type="number" name="quantity"
                                                               min="1" value="1" title="Qty" max="{{$product->stock}}" class="input-text qty text"
                                                               size="4">
                                                    </div>
                                                    <button type="button" onclick="addtocart(this, {{$product->id}})"
                                                        class="single_add_to_cart_button button alt wc-variation-selection-needed"
                                                        >Ajouter au panier
                                                    </button>
                                                    <input type="hidden" value="2471" name="add-to-cart">
                                                    <input type="hidden" value="2471" name="product_id">
                                                    <input type="hidden" value="0" class="variation_id"
                                                           name="variation_id">
                                                </div>
                                            </div>
                                            <!-- .single_variation_wrap -->
                                        </form>
                                        <!-- .variations_form -->
                                    </div>
                                    <!-- .product-actions -->
                                </div>
                            </div>
                            <div class="woocommerce-tabs wc-tabs-wrapper">
                                <ul role="tablist" class="nav tabs wc-tabs">
                                    <li class="nav-item description_tab">
                                        <a class="nav-link active" data-toggle="tab" role="tab"
                                           aria-controls="tab-description" href="#tab-description">La description</a>
                                    </li>
                                    <li class="nav-item reviews_tab">
                                        <a class="nav-link" data-toggle="tab" role="tab" aria-controls="tab-reviews"
                                           href="#tab-reviews">Commentaires (1)</a>
                                    </li>
                                </ul>
                                <!-- /.ec-tabs -->
                                <div class="tab-content">
                                    <div class="tab-pane active panel wc-tab" id="tab-description" role="tabpanel">
                                        <h2>La description</h2>
                                        <div class="outer-wrap">
                                            <div class="content-info">
                                                {!! $product->description !!}
                                            </div>
                                        </div>
                                        <br>
                                        @if($product->video)
                                            <div>
                                                <iframe width="854" height="480" allowfullscreen="allowfullscreen"
                                                        src="{{$product->video}}"></iframe>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="tab-pane" id="tab-reviews" role="tabpanel">
                                        <div class="techmarket-advanced-reviews" id="reviews">
                                            <div class="advanced-review row">
                                                <div class="advanced-review-rating">
                                                    <h2 class="based-title">Commentaires (1)</h2>
                                                    <div class="avg-rating">
                                                        <span class="avg-rating-number">5.0</span>
                                                        <div title="Rated 5.0 out of 5" class="star-rating">
                                                            <span style="width:100%"></span>
                                                        </div>
                                                    </div>
                                                    <!-- /.avg-rating -->
                                                    <div class="rating-histogram">
                                                        <div class="rating-bar">
                                                            <div title="Rated 5 out of 5" class="star-rating">
                                                                <span style="width:100%"></span>
                                                            </div>
                                                            <div class="rating-count">1</div>
                                                            <div class="rating-percentage-bar">
                                                                <span class="rating-percentage"
                                                                      style="width:100%"></span>
                                                            </div>
                                                        </div>
                                                        <div class="rating-bar">
                                                            <div title="Rated 4 out of 5" class="star-rating">
                                                                <span style="width:80%"></span>
                                                            </div>
                                                            <div class="rating-count zero">0</div>
                                                            <div class="rating-percentage-bar">
                                                                <span class="rating-percentage" style="width:0%"></span>
                                                            </div>
                                                        </div>
                                                        <div class="rating-bar">
                                                            <div title="Rated 3 out of 5" class="star-rating">
                                                                <span style="width:60%"></span>
                                                            </div>
                                                            <div class="rating-count zero">0</div>
                                                            <div class="rating-percentage-bar">
                                                                <span class="rating-percentage" style="width:0%"></span>
                                                            </div>
                                                        </div>
                                                        <div class="rating-bar">
                                                            <div title="Rated 2 out of 5" class="star-rating">
                                                                <span style="width:40%"></span>
                                                            </div>
                                                            <div class="rating-count zero">0</div>
                                                            <div class="rating-percentage-bar">
                                                                <span class="rating-percentage" style="width:0%"></span>
                                                            </div>
                                                        </div>
                                                        <div class="rating-bar">
                                                            <div title="Rated 1 out of 5" class="star-rating">
                                                                <span style="width:20%"></span>
                                                            </div>
                                                            <div class="rating-count zero">0</div>
                                                            <div class="rating-percentage-bar">
                                                                <span class="rating-percentage" style="width:0%"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /.rating-histogram -->
                                                </div>
                                                <!-- /.advanced-review-rating -->
                                                <div class="advanced-review-comment">
                                                    <div id="review_form_wrapper">
                                                        <div id="review_form">
                                                            <div class="comment-respond" id="respond">
                                                                <h3 class="comment-reply-title" id="reply-title">Ajouter
                                                                    un commentaire</h3>
                                                                <form novalidate="" class="comment-form"
                                                                      id="commentform" method="post" action="#">
                                                                    <div class="comment-form-rating">
                                                                        <label>Votre note</label>
                                                                        <p class="stars">
                                                                            <span><a href="#" class="star-1">1</a><a
                                                                                    href="#" class="star-2">2</a><a
                                                                                    href="#" class="star-3">3</a><a
                                                                                    href="#" class="star-4">4</a><a
                                                                                    href="#" class="star-5">5</a></span>
                                                                        </p>
                                                                    </div>
                                                                    <p class="comment-form-comment">
                                                                        <label for="comment">Votre avis</label>
                                                                        <textarea aria-required="true" rows="8"
                                                                                  cols="45" name="comment"
                                                                                  id="comment"></textarea>
                                                                    </p>
                                                                    <p class="comment-form-author">
                                                                        <label for="author">Nom
                                                                            <span class="required">*</span>
                                                                        </label>
                                                                        <input type="text" aria-required="true"
                                                                               size="30" value="" name="author"
                                                                               id="author">
                                                                    </p>
                                                                    <p class="comment-form-email">
                                                                        <label for="email">Email
                                                                            <span class="required">*</span>
                                                                        </label>
                                                                        <input type="text" aria-required="true"
                                                                               size="30" value="" name="email"
                                                                               id="email">
                                                                    </p>
                                                                    <p class="form-submit">
                                                                        <input type="submit" value="Add Review"
                                                                               class="submit" id="submit" name="submit">
                                                                        <input type="hidden" id="comment_post_ID"
                                                                               value="185" name="comment_post_ID">
                                                                        <input type="hidden" value="0"
                                                                               id="comment_parent"
                                                                               name="comment_parent">
                                                                    </p>
                                                                </form>
                                                                <!-- /.comment-form -->
                                                            </div>
                                                            <!-- /.comment-respond -->
                                                        </div>
                                                        <!-- /#review_form -->
                                                    </div>
                                                    <!-- /#review_form_wrapper -->
                                                </div>
                                                <!-- /.advanced-review-comment -->
                                            </div>
                                            <!-- /.advanced-review -->
                                            <div id="comments">
                                                <ol class="commentlist">
                                                    <li id="li-comment-83"
                                                        class="comment byuser comment-author-admin bypostauthor even thread-even depth-1">
                                                        <div class="comment_container" id="comment-83">
                                                            <div class="comment-text">
                                                                <div class="star-rating">
                                                                            <span style="width:100%">Rated
                                                                                <strong class="rating">5</strong> out of 5</span>
                                                                </div>
                                                                <p class="meta">
                                                                    <strong itemprop="author"
                                                                            class="woocommerce-review__author">first
                                                                        last</strong>
                                                                    <span
                                                                        class="woocommerce-review__dash">&ndash;</span>
                                                                    <time datetime="2017-06-21T08:05:40+00:00"
                                                                          itemprop="datePublished"
                                                                          class="woocommerce-review__published-date">
                                                                        June 21, 2017
                                                                    </time>
                                                                </p>
                                                                <div class="description">
                                                                    <p>Wow great product</p>
                                                                </div>
                                                                <!-- /.description -->
                                                            </div>
                                                            <!-- /.comment-text -->
                                                        </div>
                                                        <!-- /.comment_container -->
                                                    </li>
                                                    <!-- /.comment -->
                                                </ol>
                                                <!-- /.commentlist -->
                                            </div>
                                            <!-- /#comments -->
                                        </div>
                                        <!-- /.techmarket-advanced-reviews -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- .product -->
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
        function addtocart(elem, product_id){
            $(elem).html("Chargement..");

            let quantity = $("#quantity").val();
            let _token   = $('meta[name="csrf-token"]').attr('content');

            $.ajax({
                url: "{{route('addtocart')}}",
                type:"POST",
                data:{
                    product_id:product_id,
                    quantity: quantity,
                    _token: _token
                },
                success:function(response){
                    $(elem).html("Ajouter au panier");
                    toastr.info("Ajouté au panier avec succès");
                    mycartitems();
                },
                error:function (response){
                    $(elem).html("Ajouter au panier");
                    toastr.error("Produit déjà dans le panier");
                },
            });
        }

    </script>
@endsection
