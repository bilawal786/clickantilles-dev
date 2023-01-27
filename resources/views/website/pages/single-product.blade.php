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
                                                {{--                                                <a href="#" class="woocommerce-product-gallery__trigger">🔍</a>--}}
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
                                                            <div data-thumb="{{asset($images)}}"
                                                                 class="woocommerce-product-gallery__image">
                                                                <a href="{{asset($images)}}"
                                                                   tabindex="0">
                                                                    <img width="600" height="600"
                                                                         src="{{asset($images)}}"
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
                                                        <figure data-thumb="{{asset($images)}}"
                                                                class="techmarket-wc-product-gallery__image">
                                                            <img
                                                                 src="{{asset($images)}}"
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
                                        <a class="add-to-wishlist" onclick="addtowishlist(this, {{$product->id}})">
                                            Ajouter à la liste de souhaits</a>
                                    </div>
                                    <!-- .single-product-header -->
                                    <div class="single-product-meta">
                                        <div class="cat-and-sku">
                                                    <span class="posted_in categories">
                                                        <a rel="tag"
                                                           href="#">{{$product->category->name??""}} & {{$product->subcategory->name??""}}</a>
                                                    </span>
                                            <span class="sku_wrapper">SKU:
                                                        <span class="sku">{{$product->sku??""}}</span>
                                                    </span>
                                        </div>
                                        <div class="product-label">
                                            <div class="ribbon label green-label">
                                                <span>{{$product->product_section??""}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .single-product-meta -->
                                    <div class="rating-and-sharing-wrapper">
                                        <div class="woocommerce-product-rating">
                                            <div class="raty" data-score={{$product->reviews->avg('rating')}} data-read-only="true"></div>
                                            <a rel="nofollow" class="woocommerce-review-link" href="#reviews">(<span
                                                    class="count">{{$product->reviews->count()}}</span> Avis client)</a>
                                        </div>
                                    </div>
                                    <!-- .rating-and-sharing-wrapper -->
                                    <div class="woocommerce-product-details__short-description">
                                        {!! $product->short_description !!}
                                    </div>
                                    <img src="" id="blah" alt="">

                                    @if($product->product_section == 'Click Pro')
                                        <div>
                                            <br>
                                            <hr>
                                            <button type="button"
                                                    class="single_add_to_cart_button button alt wc-variation-selection-needed"
                                                    data-toggle="modal"
                                                    data-target="#myModal">Personnalisation de produit
                                            </button>
                                        </div>
                                    @endif

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
                                            <?php
                                            use Carbon\Carbon;
                                            $dealExpiry = Carbon::parse($product->deal_upto)
                                            ?>
                                            @if(Carbon::now()->lessThan($dealExpiry))
                                                <del>
                                                            <span class="woocommerce-Price-amount amount">
                                                               {{$product->price}} €</span>
                                                </del>
                                            @elseif($product->oldprice)
                                                <del>
                                                            <span class="woocommerce-Price-amount amount">
                                                               {{$product->oldprice}} €</span>
                                                </del>
                                            @endif
                                            <span id="Price-amount" class="woocommerce-Price-amount amount">
                                            @if($product->deal_percentage && Carbon::now()->lessThan($dealExpiry))
                                                        {{$product->price - ($product->price* $product->deal_percentage/100)}}
                                            @else
                                                        {{$product->price}}
                                            @endif
                                            </span> €
                                        </p>
                                        <?php
                                        $availableclr = explode(',', $product->color);
                                        $availableSize = explode(',', $product->size);
                                        ?>


                                        <!-- .price -->
                                        <form class="variations_form cart">
{{--                                            <table class="variations">--}}
{{--                                                <tbody>--}}
{{--                                                                                                <tr>--}}
{{--                                                                                                    <td class="label">--}}
{{--                                                                                                        <label for="pa_screen-size">Screen Size</label>--}}
{{--                                                                                                    </td>--}}
{{--                                                                                                    <td class="value">--}}
{{--                                                                                                        <select data-show_option_none="yes" data-attribute_name="attribute_pa_screen-size" name="attribute_pa_screen-size" class="" id="pa_screen-size">--}}
{{--                                                                                                            <option value="">Choose an option</option>--}}
{{--                                                                                                            <option value="45-inch" class="attached enabled">45 Inch</option>--}}
{{--                                                                                                            <option value="60-inch" class="attached enabled">60 Inch</option>--}}
{{--                                                                                                        </select>--}}
{{--                                                                                                        <a href="#" class="reset_variations" style="visibility: hidden;">Clear</a>--}}
{{--                                                                                                    </td>--}}
{{--                                                                                                </tr>--}}
{{--                                                </tbody>--}}
{{--                                            </table>--}}
                                            <label for=""><strong> Sélectionnez la Couleur </strong></label>
                                            <div style="display: flex;">
                                                @foreach($availableclr as $key=> $color)
                                                    <div id="color-select{{$key}}" class="circle mr-3" data-color="{{$color}}" style="background-color: {{$color}}"></div>
                                                @endforeach
                                            </div>
                                            <label for="" class="mt-3"><strong>Sélectionnez la Taille</strong></label>
                                            <select name="size" id="size">
                                                @foreach($availableSize as $size)
                                                    <option value="{{$size}}">{{$size}}</option>
                                                @endforeach
                                            </select>

                                            <div class="single_variation_wrap">
                                                <div
                                                    class="woocommerce-variation-add-to-cart variations_button woocommerce-variation-add-to-cart-disabled">
                                                    <div class="quantity">
                                                        <label for="quantity-input">Quantité</label>
                                                        <input id="quantity" type="number" name="quantity"
                                                               min="1" value="1" title="Qty" max="{{$product->stock}}"
                                                               class="input-text qty text"
                                                               size="4">
                                                    </div>
                                                    <input type="hidden" value="" id="customize-image"
                                                           name="customize_image">
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
                                           href="#tab-reviews">Commentaires ({{$product->reviews->count()}})</a>
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
                                                    <h2 class="based-title">Commentaires ({{$product->reviews->count()}})</h2>
                                                    <div class="avg-rating">
                                                        <span class="avg-rating-number">{{$product->reviews->avg('rating')}}</span>
                                                        <div data-score="{{$product->reviews->avg('rating')}}" class="raty"
                                                             data-read-only="true" style="width:100%"></div>
                                                    </div>
                                                    <!-- /.avg-rating -->
                                                    <div class="rating-histogram">
                                                        <div class="rating-bar">
                                                            <div title="Rated 5 out of 5" class="star-rating">
                                                                <span style="width:100%"></span>
                                                            </div>
                                                            <div
                                                                class="rating-count">{{$product->reviews->where('rating', 5)->count()}}</div>
                                                            <div class="rating-percentage-bar">
                                                                <span class="rating-percentage"
                                                                      style="width:100%"></span>
                                                            </div>
                                                        </div>
                                                        <div class="rating-bar">
                                                            <div title="Rated 4 out of 5" class="star-rating">
                                                                <span style="width:80%"></span>
                                                            </div>
                                                            <div
                                                                class="rating-count zero">{{$product->reviews->where('rating', 4)->count()}}</div>
                                                            <div class="rating-percentage-bar">
                                                                <span class="rating-percentage" style="width:0%"></span>
                                                            </div>
                                                        </div>
                                                        <div class="rating-bar">
                                                            <div title="Rated 3 out of 5" class="star-rating">
                                                                <span style="width:60%"></span>
                                                            </div>
                                                            <div
                                                                class="rating-count zero">{{$product->reviews->where('rating', 3)->count()}}</div>
                                                            <div class="rating-percentage-bar">
                                                                <span class="rating-percentage" style="width:0%"></span>
                                                            </div>
                                                        </div>
                                                        <div class="rating-bar">
                                                            <div title="Rated 2 out of 5" class="star-rating">
                                                                <span style="width:40%"></span>
                                                            </div>
                                                            <div
                                                                class="rating-count zero">{{$product->reviews->where('rating', 2)->count()}}</div>
                                                            <div class="rating-percentage-bar">
                                                                <span class="rating-percentage" style="width:0%"></span>
                                                            </div>
                                                        </div>
                                                        <div class="rating-bar">
                                                            <div title="Rated 1 out of 5" class="star-rating">
                                                                <span style="width:20%"></span>
                                                            </div>
                                                            <div
                                                                class="rating-count zero">{{$product->reviews->where('rating', 1)->count()}}</div>
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
                                                                @auth
                                                                    <form novalidate="" class="comment-form"
                                                                          id="commentform" method="post"
                                                                          action="{{route('front.product.review')}}">
                                                                        @csrf
                                                                        <input type="hidden" name="product_id"
                                                                               value="{{$product->id}}">
                                                                        <input type="hidden" name="user_id"
                                                                               value="{{Auth::user()->id}}">
                                                                        {{--                                                                    <div class="comment-form-rating">--}}
                                                                        <label>Votre Note</label>
                                                                        <div class="raty" style="width:100%"></div>

                                                                        <p class="comment-form-comment">
                                                                            <label for="comment">Votre avis</label>
                                                                            <textarea aria-required="true" rows="8"
                                                                                      cols="45" name="review"
                                                                                      id="review"></textarea>
                                                                        </p>
                                                                        <p class="form-submit">
                                                                            <input type="submit"
                                                                                   value="Ajouter un commentaire"
                                                                                   class="submit" id="submit"
                                                                                   name="submit">
                                                                            <input type="hidden" id="comment_post_ID"
                                                                                   value="185" name="comment_post_ID">
                                                                            <input type="hidden" value="0"
                                                                                   id="comment_parent"
                                                                                   name="comment_parent">
                                                                        </p>
                                                                    </form>
                                                                @else
                                                                    <h2>Connectez-vous pour poster un commentaire</h2>
                                                                @endauth
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


                                                            @foreach($product->reviews as $review)
                                                                <div class="comment-text">
                                                                    <div data-score="{{$review->rating}}" class="raty"
                                                                         data-read-only="true" style="width:100%"></div>
                                                                    <p class="meta">
                                                                        <strong itemprop="author"
                                                                                class="woocommerce-review__author">{{$review->user->fname}} {{$review->user->lname}}</strong>
                                                                        <span
                                                                            class="woocommerce-review__dash">&ndash;</span>
                                                                        <time datetime="2017-06-21T08:05:40+00:00"
                                                                              itemprop="datePublished"
                                                                              class="woocommerce-review__published-date">
                                                                            {{$review->created_at->format('d-m-Y')}}
                                                                        </time>
                                                                    </p>
                                                                    <div class="description">
                                                                        <p>{{$review->review}}</p>
                                                                    </div>
                                                                    <!-- /.description -->
                                                                </div>
                                                            @endforeach
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
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg" style="max-width: 1000px;">
            <div class="modal-content">
                <div class="modal-body">
                    <div id="clothe-tshirt-maker"></div>
                    <link rel="stylesheet" type="text/css" href="{{asset('image-maker/imageMaker.min.css')}}">


                    <script src="{{asset('image-maker/imageMaker.min.js')}}"></script>
                    <script>
                        $(document).ready(function () {
                            $('#clothe-tshirt-maker').imageMaker({
                                merge_images: [],
                                templates: [
                                    {url: '{{asset($product->photo1)}}', title: '{{$product->title}}'},
                                ],
                                text_boxes_count: 0,
                                downloadGeneratedImage: false,
                                i18n: {
                                    fontFamilyText: 'Font Family',
                                    enterTextText: 'Enter Text',
                                    topText: 'Top Text',
                                    bottomText: 'Bottom Text',
                                    sizeText: 'Size',
                                    uperCaseText: 'UperCase',
                                    mergeImageText: 'Télécharger le logo',
                                    drawText: 'Draw',
                                    addTextBoxText: 'Add TextBox',
                                    previewText: 'Preview',
                                    addTemplateText: 'Add template',
                                    resetText: 'Dégager',
                                    imageGeneratorText: 'Confirmer',
                                    stopBrushingText: 'Stop Brushing',
                                    canvasLoadingText: 'Canvas Loading'
                                },
                                onGenerate: function (data, formData) {
                                    $("#customize-image").val(data.amm_canvas)
                                    $('#myModal').modal('hide');
                                    toastr.success("L'image est personnalisée, sélectionnez la quantité à ajouter au panier");
                                },


                            });
                        });
                    </script>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        function addtowishlist(elem, id) {
            let _token = $('meta[name="csrf-token"]').attr('content');

            $.ajax({
                url: "{{route('addtowishlist')}}",
                type: "POST",
                data: {
                    id: id,
                    _token: _token
                },
                success: function (response) {
                    let count = parseInt($('#top-cart-wishlist-count').text()) + 1 ;
                    $('#top-cart-wishlist-count').html(count);
                    toastr.info("Ajouté à la liste de souhaits avec succès");
                },
                error: function (response) {
                    toastr.error("Produit déjà dans la liste de souhaits");
                },
            });
        }

        function addtocart(elem, product_id) {
            $(elem).html("Chargement..");
            let quantity = $("#quantity").val();
            let price = $("#Price-amount").text();
            let size = $("#size").val();
            let image = $("#customize-image").val();
            let _token = $('meta[name="csrf-token"]').attr('content');

            $.ajax({
                url: "{{route('addtocart')}}",
                type: "POST",
                data: {
                    product_id: product_id,
                    image: image,
                    quantity: quantity,
                    price: price,
                    color: color,
                    size: size,
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

        $('.raty').raty({
            starOff: '{{asset('frontend/assets/raty/lib/images/star-off.png')}}',
            starOn: '{{asset('frontend/assets/raty/lib/images/star-on.png')}}'
        });


    </script>

@endsection
