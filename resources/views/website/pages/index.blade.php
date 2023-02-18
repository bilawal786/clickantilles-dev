@extends('website.layouts.website')
@section('body-type')
    page-template-template-homepage-v1
@endsection
@section('content')

    <div id="content" class="site-content">
        <div class="row">
            <div class="col-md-2">
                <a href="{{route('front.stores')}}">
                    <div class="overlay-div"
                         style="background-color: purple; padding: 20px; color: white; text-align: center; font-weight: bold">
                        <div class="blink">CONCEPT STORE</div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">

            </div>
            <div class="col-md-4">

            </div>

            <div class="col-md-2">
                <a href="{{route('front.index')}}">
                    <div class="overlay-div"
                         style="background-color: purple; padding: 20px; color: white; text-align: center; font-weight: bold">
                        <div class="blink"> PRÊT À PARTIR</div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row" style="background-color: #5f195f; padding: 40px">

            <marquee behavior="scroll" scrollamount="12" width="100%" direction="left"><p
                    style="color: white; font-size: 25px; font-weight: bold; text-align: center !important; padding: 0px; margin: 0px">{{$settings->home_text}}</p>
            </marquee>
        </div>

        <div class="col-full">
            <div class="row">
                <div id="primary" style="max-width: 100% !important;" class="content-area">
                    <main id="main" class="site-main">
                        <br>
                        <section class="section-landscape-products-carousel recently-viewed" id="recently-viewed">
                            <header class="section-header">
                                <h2 class="section-title">Catégories populaires</h2>
                                <nav class="custom-slick-nav"></nav>
                            </header>
                            <div class="products-carousel" data-ride="tm-slick-carousel" data-wrap=".products"
                                 data-slick="{&quot;slidesToShow&quot;:5,&quot;slidesToScroll&quot;:2,&quot;dots&quot;:true,&quot;arrows&quot;:true,&quot;prevArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-right\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;nextArrow&quot;:&quot;&lt;a href=\&quot;#\&quot;&gt;&lt;i class=\&quot;tm tm-arrow-left\&quot;&gt;&lt;\/i&gt;&lt;\/a&gt;&quot;,&quot;appendArrows&quot;:&quot;#recently-viewed .custom-slick-nav&quot;,&quot;responsive&quot;:[{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesToScroll&quot;:2}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1400,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesToScroll&quot;:3}},{&quot;breakpoint&quot;:1700,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesToScroll&quot;:4}}]}">
                                <div class="container-fluid">
                                    <div class="woocommerce columns-5">
                                        <div class="products">
                                            @foreach($categories->whereIn('id', [1,2,3,4,5,6, 7,8,9,16,17,18]) as $category)
                                                <div class="col-sm-2 col-6">
                                                    <a href="{{route('products.filter', ['category_id' => $category->id])}}">
                                                        <div class="team-member">
                                                            <img src="{{asset($category->photo)}}" alt="">
                                                            <div class="profile">
                                                                <h3>{{$category->name}}</h3>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <!-- .woocommerce -->
                                </div>
                                <!-- .container-fluid -->
                            </div>
                            <!-- .products-carousel -->
                        </section>
                        <div class="owl-two owl-carousel">
                            <div>
                                <a href="{{$slides->link_5}}"><img src="{{asset($slides->image6)}}" alt=""></a>
                            </div>
                            <div>
                                <a href="{{$slides->link_6}}"><img src="{{asset($slides->image7)}}" alt=""></a>
                            </div>
                            <div>
                                <a href="{{$slides->link_7}}"><img src="{{asset($slides->image8)}}" alt=""></a>
                            </div>
                        </div>
                        <div class="row" style="text-align: center; display: block"><h2>Meilleures ventes</h2></div>
                        <div class="owl-one owl-carousel">
                            @foreach($products as $product)
                            <div class="p-2">
                                <img src="{{asset($product->photo1)}}" alt="">
                                <p style="text-align: center; padding: 40px; color: black">{{$product->title}}</p>
                            </div>
                            @endforeach
                        </div>
                        <div class="row" style="text-align: center; display: block"><h2>Stock prêt à partir !</h2></div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <a href="{{$slides->link_1}}"><img src="{{asset($slides->image1)}}" alt=""></a>
                            </div>
                            <div class="col-md-6">
                                <a href="{{$slides->link_2}}"><img src="{{asset($slides->image2)}}" alt=""></a>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <a href="{{$slides->link_3}}"><img src="{{asset($slides->image3)}}" alt=""></a>
                            </div>
                            <div class="col-md-4">
                                <a href="{{$slides->link_8}}"><img src="{{asset($slides->image4)}}" alt=""></a>
                            </div>
                            <div class="col-md-4">
                                <a href="{{$slides->link_4}}"><img src="{{asset($slides->image5)}}" alt=""></a>
                            </div>
                        </div>
                        <br>
                        <div class="row" style="text-align: center; display: block"><h2>Meilleures ventes</h2></div>
                        <div class="owl-one owl-carousel">
                            <div>
                                <img src="{{asset('frontend/assets/images/32.png')}}" alt="">
                                <p style="text-align: center; padding: 40px; color: black">Lorem Ipsum is simply dummy
                                    text of the printing and typesetting industry</p>
                            </div>
                            <div>
                                <img src="{{asset('frontend/assets/images/26.png')}}" alt="">
                                <p style="text-align: center; padding: 40px; color: black">Lorem Ipsum is simply dummy
                                    text of the printing and typesetting industry</p>
                            </div>
                            <div>
                                <img src="{{asset('frontend/assets/images/33.png')}}" alt="">
                                <p style="text-align: center; padding: 40px; color: black">Lorem Ipsum is simply dummy
                                    text of the printing and typesetting industry</p>
                            </div>
                            <div>
                                <img src="{{asset('frontend/assets/images/34.png')}}" alt="">
                                <p style="text-align: center; padding: 40px; color: black">Lorem Ipsum is simply dummy
                                    text of the printing and typesetting industry</p>
                            </div>
                            <div>
                                <img src="{{asset('frontend/assets/images/26.png')}}" alt="">
                                <p style="text-align: center; padding: 40px; color: black">Lorem Ipsum is simply dummy
                                    text of the printing and typesetting industry</p>
                            </div>
                        </div>
                        <br>
                        <div class="row" style="text-align: center; display: block"><h2>Click Concept</h2></div>

                        {{--                        <div class="row">--}}
                        {{--                            @foreach($categories->whereIn('id', [1,2,3,4,5,6]) as $category)--}}
                        {{--                                <div class="col-sm-2 col-6">--}}
                        {{--                                    <a href="{{route('products.filter', ['category_id' => $category->id])}}">--}}
                        {{--                                        <div class="team-member">--}}
                        {{--                                            <img src="{{asset($category->photo)}}" alt="">--}}
                        {{--                                            <div class="profile">--}}
                        {{--                                                <h3>{{$category->name}}</h3>--}}
                        {{--                                            </div>--}}
                        {{--                                        </div>--}}
                        {{--                                    </a>--}}
                        {{--                                </div>--}}
                        {{--                            @endforeach--}}
                        {{--                        </div>--}}

                        {{--                        <div class="row">--}}
                        {{--                            @foreach($categories->whereIn('id', [7,8,9,16,17,18]) as $category)--}}
                        {{--                                <div class="col-sm-2 col-6">--}}
                        {{--                                    <a href="{{route('products.filter', ['category_id' => $category->id])}}">--}}
                        {{--                                        <div class="team-member">--}}
                        {{--                                            <img src="{{asset($category->photo??"category-images/06.png")}}" alt="">--}}
                        {{--                                            <div class="profile">--}}
                        {{--                                                <h3>{{$category->name}}</h3>--}}
                        {{--                                            </div>--}}
                        {{--                                        </div>--}}
                        {{--                                    </a>--}}
                        {{--                                </div>--}}
                        {{--                            @endforeach--}}
                        {{--                        </div>--}}
                        {{--                        <div class="home-v4-slider home-slider">--}}
                        {{--                            <div class="slider-1"--}}
                        {{--                                 style="background-image: url({{asset($slides->mainbg)}});">--}}
                        {{--                                <div class="caption">--}}
                        {{--                                    <div class="title">{{$slides->mainbgheading}}--}}
                        {{--                                    </div>--}}
                        {{--                                    <div class="sub-title">{{$slides->mainbgdescription}}--}}
                        {{--                                    </div>--}}
                        {{--                                    <a href="{{$slides->link_8}}">--}}
                        {{--                                        <div class="button">{{$slides->button_text}}--}}
                        {{--                                            <i class="tm tm-long-arrow-right"></i>--}}
                        {{--                                        </div>--}}
                        {{--                                    </a>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        <br>
                        <div class="">
                            <div id="amazonImageSlider"
                                 class="home-v4-slider home-slider slick-initialized slick-slider carousel slide"
                                 data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <a href="https://www.google.com"><img
                                                src="{{$slides->slide1}}" class="d-block w-100"
                                                height="500" alt="slide image 01"></a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="https://www.google.com"><img
                                                src="{{$slides->slide2}}" class="d-block w-100"
                                                height="500" alt="slide image 02"></a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="https://www.google.com"><img
                                                src="{{$slides->slide3}}" class="d-block w-100"
                                                height="500" alt="slide image 03"></a>
                                    </div>
                                    <div class="carousel-item ">
                                        <a href="https://www.google.com"><img
                                                src="{{$slides->slide4}}" class="d-block w-100"
                                                height="500" alt="slide image 04"></a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="https://www.google.com"><img
                                                src="{{$slides->slide5}}" class="d-block w-100"
                                                height="500" alt="slide image 05"></a>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#amazonImageSlider" role="button"
                                   data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#amazonImageSlider" role="button"
                                   data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                                <div class="container mb-5 section-c">
                                    <!-- Prouct Row Starts -->
                                    <div class="row">
                                        @foreach($stores->take(4) as $store)
                                            <div class="col-lg-3">
                                                <div class="card my-2 my-lg-0">
                                                    <h3 class="card-h">{{$store->name}}</h3>
                                                    <div class="card-body d-flex justify-content-center">
                                                        <a href="{{route('store.single', ['id' => $store->id])}}"><img
                                                                src="{{asset($store->photo)}}"
                                                                alt="product image 01"
                                                                class="img-fluid"></a>
                                                    </div>
                                                    <a class="card-link"
                                                       href="{{route('store.single', ['id' => $store->id])}}">Decouvrir</a>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div> <!-- Prouct Row Ends -->
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row" style="text-align: center; display: block"><h2>Actus et tendances</h2></div>
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{asset('frontend/assets/images/35.png')}}" alt="">
                                <p style="text-align: center; padding: 40px; color: black">Lorem Ipsum is simply dummy
                                    text of the printing and typesetting industry</p>
                                <a href=""><p style="text-align: center; color: #d20202">Discover></p></a>
                            </div>
                            <div class="col-md-4">
                                <img src="{{asset('frontend/assets/images/36.png')}}" alt="">
                                <p style="text-align: center; padding: 40px; color: black">Lorem Ipsum is simply dummy
                                    text of the printing and typesetting industry</p>
                                <a href=""><p style="text-align: center; color: #d20202">Discover></p></a>
                            </div>
                            <div class="col-md-4">
                                <img src="{{asset('frontend/assets/images/37.png')}}" alt="">
                                <p style="text-align: center; padding: 40px; color: black">Lorem Ipsum is simply dummy
                                    text of the printing and typesetting industry</p>
                                <a href=""><p style="text-align: center; color: #d20202">Discover></p></a>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-3">
                                <img src="{{asset('frontend/assets/images/38.png')}}" alt="">
                            </div>
                            <div class="col-md-3">
                                <img src="{{asset('frontend/assets/images/39.png')}}" alt="">
                            </div>
                            <div class="col-md-3">
                                <img src="{{asset('frontend/assets/images/40.png')}}" alt="">
                            </div>
                            <div class="col-md-3">
                                <img src="{{asset('frontend/assets/images/41.png')}}" alt="">
                            </div>
                        </div>
                        <br>
                        {{--                        <h1 style="font-weight: bold; letter-spacing: 1px">{{$slides->h1}}</h1>--}}
                        {{--                        <div class="row">--}}
                        {{--                            <div class="col-md-4">--}}
                        {{--                                <a href="{{$slides->link_5}}"><img src="{{asset($slides->image6)}}" alt=""></a>--}}
                        {{--                            </div>--}}
                        {{--                            <div class="col-md-4">--}}
                        {{--                                <a href="{{$slides->link_6}}"><img src="{{asset($slides->image7)}}" alt=""></a>--}}
                        {{--                            </div>--}}
                        {{--                            <div class="col-md-4">--}}
                        {{--                                <a href="{{$slides->link_7}}"> <img src="{{asset($slides->image8)}}" alt=""></a>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
{{--                        <div--}}
{{--                            class="container mb-5 home-v4-slider home-slider slick-initialized slick-slider carousel slide"--}}
{{--                            style="margin-top: 30px; max-width: 100vw !important;">--}}
{{--                            <!-- Prouct Row Starts -->--}}
{{--                            <div class="row amaz-sec">--}}
{{--                                @foreach($categories->whereIn('id', [1,4,7,8]) as $category)--}}
{{--                                    <div class="col-lg-3">--}}
{{--                                        <div class="card my-2 my-lg-0">--}}
{{--                                            <h3 style="padding: 7px; margin: 0px; padding-bottom: 0px">{{$category->name??""}}</h3>--}}
{{--                                            <div class="row">--}}
{{--                                                @foreach($category->subcategories->take(4) as $subcategory)--}}
{{--                                                    <div class="col-md-6 col-6" style="padding: 0px">--}}
{{--                                                        <div class="card-body">--}}
{{--                                                            <a href="{{route('products.subcategory', ['subcategory_id' => $subcategory->id])}}">--}}
{{--                                                                <img src="{{asset($subcategory->photo)}}"--}}
{{--                                                                     alt="product image 01" class="img-fluid">--}}
{{--                                                            </a>--}}
{{--                                                            <a href="{{route('products.subcategory', ['subcategory_id' => $subcategory->id])}}">{{$subcategory->name??""}}</a>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                @endforeach--}}
{{--                                            </div>--}}
{{--                                            <a style="padding: 7px; margin: 0px; padding-top: 0px; color: blue"--}}
{{--                                               href="{{route('products.filter', ['category_id' => $category->id])}}">Voir--}}
{{--                                                Plus</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                @endforeach--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        {{--                        <h1>Les bonnes affaires sur la mode homme</h1>--}}
                        {{--                        <div class="row">--}}
                        {{--                            @foreach($categories->whereIn('id', [10,11,12,13,14,15]) as $category)--}}
                        {{--                                <div class="col-sm-2 col-6">--}}
                        {{--                                    <a href="{{route('products.filter', ['category_id' => $category->id])}}">--}}
                        {{--                                        <div class="team-member">--}}
                        {{--                                            <img src="{{asset($category->photo)}}" alt="">--}}
                        {{--                                            <div class="profile">--}}
                        {{--                                                <h3>{{$category->name}}</h3>--}}
                        {{--                                            </div>--}}
                        {{--                                        </div>--}}
                        {{--                                    </a>--}}
                        {{--                                </div>--}}
                        {{--                            @endforeach--}}
                        {{--                        </div>--}}

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
{{--    <script>--}}
{{--        // Set the date we're counting down to--}}
{{--        var countDownDate = new Date("{{$slides->timer->format('M d, Y H:m')}}").getTime();--}}

{{--        // Update the count down every 1 second--}}
{{--        var x = setInterval(function () {--}}

{{--            // Get today's date and time--}}
{{--            var now = new Date().getTime();--}}

{{--            // Find the distance between now and the count down date--}}
{{--            var distance = countDownDate - now;--}}

{{--            // Time calculations for days, hours, minutes and seconds--}}
{{--            var days = Math.floor(distance / (1000 * 60 * 60 * 24));--}}
{{--            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));--}}
{{--            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));--}}
{{--            var seconds = Math.floor((distance % (1000 * 60)) / 1000);--}}

{{--            // Display the result in the element with id="demo"--}}
{{--            document.getElementById("custom-timer").innerHTML = days + "d " + hours + "h "--}}
{{--                + minutes + "m " + seconds + "s ";--}}

{{--            // If the count down is finished, write some text--}}
{{--            if (distance < 0) {--}}
{{--                clearInterval(x);--}}
{{--                document.getElementById("custom-timer").innerHTML = "EXPIRED";--}}
{{--            }--}}
{{--        }, 1000);--}}
{{--    </script>--}}
@endsection
