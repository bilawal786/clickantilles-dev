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
                <a href="{{route('front.pro.products')}}">
                    <div class="overlay-div"
                         style="background-color: purple; padding: 20px; color: white; text-align: center; font-weight: bold">
                        CLICK
                        PRO
                    </div>
                </a>
            </div>
        </div>
        <div class="row" style="background-color: #5f195f; padding: 40px">

            <marquee behavior="scroll" scrollamount="12" width="100%" direction="left"><p
                    style="color: white; font-size: 25px; font-weight: bold; text-align: center !important; padding: 0px; margin: 0px">
                    BIENVENUE SUR CLICK ANTILLES POURL’OUVERTURE DU SITE NOUS T’OFFRONS -20% SUR TOUT LE
                    CATALOGUE!</p>
            </marquee>
        </div>

        <div class="col-full">
            <div class="row">
                <div id="primary" style="max-width: 100% !important;" class="content-area">
                    <main id="main" class="site-main">
                        <div class="row">
                            @foreach($categories->whereIn('id', [1,2,3,4,5,6]) as $category)
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
                        <div class="home-v4-slider home-slider">
                            <div class="slider-1"
                                 style="background-image: url({{asset($slides->mainbg)}});">
                                <div class="caption">
                                    <div class="title">{{$slides->mainbgheading}}
                                    </div>
                                    <div class="sub-title">{{$slides->mainbgdescription}}
                                    </div>
                                    <div class="button">Obtenez le vôtre maintenant
                                        <i class="tm tm-long-arrow-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @foreach($categories->whereIn('id', [7,8,9]) as $category)
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
                        <br>
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
                            </div>
                            <div class="container mb-5 section-c">
                                <!-- Prouct Row Starts -->
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="card my-2 my-lg-0">
                                            <h3 class="card-h">{{$slides->heading_1}}</h3>
                                            <div class="card-body d-flex justify-content-center">
                                                <a href="{{$slides->link_1}}"><img src="{{asset($slides->image1)}}"
                                                                                   alt="product image 01"
                                                                                   class="img-fluid"></a>
                                            </div>
                                            <a class="card-link"
                                               href="{{$slides->link_1}}">En Savoir plus</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="card my-2 my-lg-0">
                                            <h3 class="card-h">{{$slides->heading_2}}</h3>
                                            <div class="card-body d-flex justify-content-center">
                                                <a href="{{$slides->link_2}}"><img src="{{asset($slides->image2)}}"
                                                                                   alt="product image 01"
                                                                                   class="img-fluid"></a>
                                            </div>
                                            <a class="card-link"
                                               href="{{$slides->link_2}}">Decouvrir</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="card my-2 my-lg-0">
                                            <h3 class="card-h">{{$slides->heading_3}}</h3>
                                            <div class="card-body d-flex justify-content-center">
                                                <a href="{{$slides->link_3}}"><img src="{{asset($slides->image3)}}"
                                                                                   alt="product image 01"
                                                                                   class="img-fluid"></a>
                                            </div>
                                            <a class="card-link"
                                               href="{{$slides->link_3}}">Decouvrir</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="card my-2 my-lg-0">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <h3 class="card-h">
                                                        {{$slides->heading_4}}</h3>
                                                    <a class="card-link"
                                                       href="{{$slides->link_4}}">En Savoir plus</a>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="card-body d-flex justify-content-center">
                                                        <a href="#"><img
                                                                src="{{asset($slides->image4)}}"
                                                                alt="product image 01" class="img-fluid"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body d-flex justify-content-center">
                                                <a href="{{$slides->link_4}}"><img src="{{asset($slides->image5)}}"
                                                                                   alt="product image 01"
                                                                                   class="img-fluid"></a>
                                            </div>
                                        </div>
                                    </div>

                                </div> <!-- Prouct Row Ends -->
                            </div>
                        </div>
                        <h1 style="font-weight: bold; letter-spacing: 1px">CLICK LOCAL</h1>
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{asset($slides->image6)}}" alt="">
                            </div>
                            <div class="col-md-4">
                                <img src="{{asset($slides->image7)}}" alt="">
                            </div>
                            <div class="col-md-4">
                                <img src="{{asset($slides->image8)}}" alt="">
                            </div>
                        </div>
                        <div
                            class="container mb-5 home-v4-slider home-slider slick-initialized slick-slider carousel slide"
                            style="margin-top: 30px; max-width: 100vw !important;">
                            <!-- Prouct Row Starts -->
                            <div class="row amaz-sec">
                                @foreach($categories->whereIn('id', [4,7,8,9]) as $category)
                                    <div class="col-lg-3">
                                        <div class="card my-2 my-lg-0">
                                            <h3 style="padding: 7px; margin: 0px; padding-bottom: 0px">{{$category->name??""}}</h3>
                                            <div class="row">
                                                @foreach($category->subcategories->take(4) as $subcategory)
                                                    <div class="col-md-6 col-6" style="padding: 0px">
                                                        <div class="card-body">
                                                            <a href="#">
                                                                <img src="{{asset($subcategory->photo)}}"
                                                                     alt="product image 01" class="img-fluid">
                                                            </a>
                                                            <a href="">{{$subcategory->name??""}}</a>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <a style="padding: 7px; margin: 0px; padding-top: 0px; color: blue"
                                               href="">Voir Plus</a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <h1>Les bonnes affaires sur la mode homme</h1>
                        <div class="row">
                            @foreach($categories->whereIn('id', [10,11,12,13,14,15]) as $category)
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
