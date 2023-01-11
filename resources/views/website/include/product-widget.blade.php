<div class="product">
    <!-- .yith-wcwl-add-to-wishlist -->
    <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="{{route('front.single.product', ['slug' => $product->slug, 'id' => $product->id])}}">
        <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image"
             src="{{asset($product->photo1)}}">
        <span class="price">
                                                            <span class="woocommerce-Price-amount amount">
                                                                <span class="woocommerce-Price-currencySymbol"></span>{{$product->price}} €</span>
                                                        </span>
        <h2 class="woocommerce-loop-product__title">{{$product->title??""}}</h2>
    </a>
    <!-- .woocommerce-LoopProduct-link -->
    <div class="hover-area">
        <a class="button" href="{{route('front.single.product', ['slug' => $product->slug, 'id' => $product->id])}}">Voir le produit</a>
    </div>
    <!-- .hover-area -->
</div>
