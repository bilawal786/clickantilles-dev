<div class="product">
    <!-- .yith-wcwl-add-to-wishlist -->
    <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link"
       href="{{route('front.single.product', ['slug' => $product->slug, 'id' => $product->id])}}">
        <?php
        use Carbon\Carbon;
        $dealExpiry = Carbon::parse($product->deal_upto)
        ?>
        @if(Carbon::now()->lessThan($dealExpiry))
        <span class="onsale">
            <span class="woocommerce-Price-amount amount">
                <span
                    class="woocommerce-Price-currencySymbol"></span>{{$product->deal_percentage}}</span>% off
{{--            ceil((($product->price - $product->deal_price) / $product->price)*100)--}}
        </span>
        @endif
        <img width="224" height="197" alt="" class="attachment-shop_catalog size-shop_catalog wp-post-image"
             src="{{asset($product->photo1)}}">
        @auth
        <span class="price">
            <span class="woocommerce-Price-amount amount">
                @if(Carbon::now()->lessThan($dealExpiry))
            <ins>
                <span class="amount"> {{$product->price - ($product->price* $product->deal_percentage/100)}} €</span>
            </ins>
            <del>
                <span class="amount">{{$product->price}} €</span>
            </del>
            <span class="amount"> </span>
            @else
                <span class="woocommerce-Price-currencySymbol"></span>{{$product->price}} €</span>
        @endif

        </span>
        @endauth
        <h2 class="woocommerce-loop-product__title">{{$product->title??""}}
            <p style="color: #18bef1" id="custom-timer{{$product->id}}"></p>
        </h2>
    </a>
    <!-- .woocommerce-LoopProduct-link -->
    <div class="hover-area">
        <a class="button" href="{{route('front.single.product', ['slug' => $product->slug, 'id' => $product->id])}}">Voir
            le produit</a>
    </div>
    <!-- .hover-area -->
</div>
@if($product->deal_upto)
    <script>
        // Set the date we're counting down to
        var countDownDate{{$product->id}} = new Date("{{$product->deal_upto->format('M d, Y H:m')}}").getTime();

        // Update the count down every 1 second
        var x{{$product->id}} = setInterval(function () {

            // Get today's date and time
            var now{{$product->id}} = new Date().getTime();

            // Find the distance between now and the count down date
            var distance{{$product->id}} = countDownDate{{$product->id}} - now{{$product->id}};

            // Time calculations for days, hours, minutes and seconds
            var days{{$product->id}} = Math.floor(distance{{$product->id}} / (1000 * 60 * 60 * 24));
            var hours{{$product->id}} = Math.floor((distance{{$product->id}} % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes{{$product->id}} = Math.floor((distance{{$product->id}} % (1000 * 60 * 60)) / (1000 * 60));
            var seconds{{$product->id}} = Math.floor((distance{{$product->id}} % (1000 * 60)) / 1000);

            // Display the result in the element with id="demo"
            document.getElementById("custom-timer{{$product->id}}").innerHTML = days{{$product->id}} + "d " + hours{{$product->id}} + "h "
                + minutes{{$product->id}} + "m " + seconds{{$product->id}} + "s ";

            // If the countdown is finished, write some text
            if (distance{{$product->id}} < 0) {
                clearInterval(x{{$product->id}});
                document.getElementById("custom-timer{{$product->id}}").innerHTML = "";
            }
        }, 1000);
    </script>
@endif
