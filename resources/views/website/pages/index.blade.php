@extends('website.layouts.website')
@section('body-type')
    page-template-template-homepage-v1
@endsection
@section('content')

    <div id="content" class="site-content">
        <div class="row">
            <div class="col-md-2">
                <div class="overlay-div"
                     style="background-color: purple; padding: 20px; color: white; text-align: center; font-weight: bold">
                    CONCEPT STORE
                </div>
            </div>
            <div class="col-md-4">

            </div>
            <div class="col-md-4">

            </div>
            <div class="col-md-2">
                <div class="overlay-div"
                     style="background-color: purple; padding: 20px; color: white; text-align: center; font-weight: bold">
                    CLICK
                    PRO
                </div>
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
                            <div class="col-sm-2 col-6">
                                <div class="team-member">
                                    <img src="{{asset('category-images/01.png')}}" alt="">
                                    <div class="profile">
                                        <h3>Goodies
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2 col-6">
                                <div class="team-member">
                                    <img src="{{asset('category-images/06.png')}}" alt="">
                                    <div class="profile">
                                        <h3>Sports & Exterieur
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2 col-6">
                                <div class="team-member">
                                    <img src="{{asset('category-images/02.png')}}" alt="">
                                    <div class="profile">
                                        <h3>High Tech
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2 col-6">
                                <div class="team-member">
                                    <img src="{{asset('category-images/03.png')}}" alt="">
                                    <div class="profile">
                                        <h3>Maison
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2 col-6">
                                <div class="team-member">
                                    <img src="{{asset('category-images/04.png')}}" alt="">
                                    <div class="profile">
                                        <h3>Cusisine
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2 col-6">
                                <div class="team-member">
                                    <img src="{{asset('category-images/05.png')}}" alt="">
                                    <div class="profile">
                                        <h3>Mode & Accessories
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="home-v4-slider home-slider">
                            <div class="slider-1"
                                 style="background-image: url({{asset('frontend/assets/images/01.png')}});">
                                <div class="caption">
                                    <div class="title">Le cadeau qu'ils sont
                                        <br>souhaiter est ici
                                    </div>
                                    <div class="sub-title">L'écran incurvé a un niveau de courbure équivalent à celui
                                        d'un cercle, suit mieux la forme arrondie des yeux
                                    </div>
                                    <div class="button">Obtenez le vôtre maintenant
                                        <i class="tm tm-long-arrow-right"></i>
                                    </div>
                                    <div class="bottom-caption">Livraison gratuite sur US Terority</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2 col-6">
                                <div class="team-member">
                                    <img src="{{asset('category-images/01.png')}}" alt="">
                                    <div class="profile">
                                        <h3>Goodies
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2 col-6">
                                <div class="team-member">
                                    <img src="{{asset('category-images/06.png')}}" alt="">
                                    <div class="profile">
                                        <h3>Sports & Exterieur
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2 col-6">
                                <div class="team-member">
                                    <img src="{{asset('category-images/02.png')}}" alt="">
                                    <div class="profile">
                                        <h3>High Tech
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2 col-6">
                                <div class="team-member">
                                    <img src="{{asset('category-images/03.png')}}" alt="">
                                    <div class="profile">
                                        <h3>Maison
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2 col-6">
                                <div class="team-member">
                                    <img src="{{asset('category-images/04.png')}}" alt="">
                                    <div class="profile">
                                        <h3>Cusisine
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2 col-6">
                                <div class="team-member">
                                    <img src="{{asset('category-images/05.png')}}" alt="">
                                    <div class="profile">
                                        <h3>Mode & Accessories
                                        </h3>
                                    </div>
                                </div>
                            </div>
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
                                                src="https://m.media-amazon.com/images/I/61BvxKSpy3L._SX3000_.jpg" class="d-block w-100"
                                                height="500" alt="slide image 01"></a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="https://www.google.com"><img
                                                src="https://m.media-amazon.com/images/I/71qid7QFWJL._SX3000_.jpg" class="d-block w-100"
                                                height="500" alt="slide image 02"></a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="https://www.google.com"><img
                                                src="https://m.media-amazon.com/images/I/71tIrZqybrL._SX3000_.jpg" class="d-block w-100"
                                                height="500" alt="slide image 03"></a>
                                    </div>
                                    <div class="carousel-item ">
                                        <a href="https://www.google.com"><img
                                                src="https://m.media-amazon.com/images/I/61TD5JLGhIL._SX3000_.jpg" class="d-block w-100"
                                                height="500" alt="slide image 04"></a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="https://www.google.com"><img
                                                src="https://m.media-amazon.com/images/I/61jovjd+f9L._SX3000_.jpg" class="d-block w-100"
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
                                            <h3 style="padding: 20px; margin: 0px; padding-bottom: 0px">Ventes Flash
                                                d'hiver</h3>

                                            <div class="card-body d-flex justify-content-center">
                                                <a href="#"><img src="{{asset('frontend/assets/images/02.png')}}"
                                                                 alt="product image 01" class="img-fluid"></a>
                                            </div>

                                            <a style="padding: 20px; margin: 0px; padding-top: 0px; color: blue"
                                               href="">En Savoir plus</a>
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="card my-2 my-lg-0">
                                            <h3 style="padding: 20px; margin: 0px; padding-bottom: 0px">Blink Outdoor,
                                                seulement 64,99</h3>

                                            <div class="card-body d-flex justify-content-center">
                                                <a href="#"><img src="{{asset('frontend/assets/images/03.png')}}"
                                                                 alt="product image 01" class="img-fluid"></a>
                                            </div>

                                            <a style="padding: 20px; margin: 0px; padding-top: 0px; color: blue"
                                               href="">Decouvrir</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="card my-2 my-lg-0">
                                            <h3 style="padding: 20px; margin: 0px; padding-bottom: 0px">Offres Star</h3>

                                            <div class="card-body d-flex justify-content-center">
                                                <a href="#"><img src="{{asset('frontend/assets/images/04.png')}}"
                                                                 alt="product image 01" class="img-fluid"></a>
                                            </div>

                                            <a style="padding: 20px; margin: 0px; padding-top: 0px; color: blue"
                                               href="">Decouvrir</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="card my-2 my-lg-0">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <h3 style="padding: 20px; margin: 0px; padding-bottom: 0px">
                                                        Preservation de la biodiversity</h3>
                                                    <a style="padding: 20px; margin: 0px; padding-top: 0px; color: blue"
                                                       href="">En Savoir plus</a>

                                                </div>
                                                <div class="col-md-4">
                                                    <div class="card-body d-flex justify-content-center">
                                                        <a href="#"><img
                                                                src="{{asset('frontend/assets/images/05.png')}}"
                                                                alt="product image 01" class="img-fluid"></a>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="card-body d-flex justify-content-center">
                                                <a href="#"><img src="{{asset('frontend/assets/images/06.png')}}"
                                                                 alt="product image 01" class="img-fluid"></a>
                                            </div>
                                        </div>
                                    </div>

                                </div> <!-- Prouct Row Ends -->
                            </div>
                        </div>
                        <h1 style="font-weight: bold; letter-spacing: 1px">CLICK LOCAL</h1>
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{asset('frontend/assets/images/07.png')}}" alt="">
                            </div>
                            <div class="col-md-4">
                                <img src="{{asset('frontend/assets/images/08.png')}}" alt="">
                            </div>
                            <div class="col-md-4">
                                <img src="{{asset('frontend/assets/images/09.png')}}" alt="">
                            </div>
                        </div>
                        <div
                            class="container mb-5 home-v4-slider home-slider slick-initialized slick-slider carousel slide"
                            style="margin-top: 30px; max-width: 100vw !important;">
                            <!-- Prouct Row Starts -->
                            <div class="row amaz-sec">
                                <div class="col-lg-3">
                                    <div class="card my-2 my-lg-0">
                                        <h3 style="padding: 7px; margin: 0px; padding-bottom: 0px">Maison</h3>
                                        <div class="row">
                                            <div class="col-md-6 col-6" style="padding: 0px">
                                                <div class="card-body">
                                                    <a href="#">
                                                        <img src="{{asset('frontend/assets/images/10.png')}}"
                                                             alt="product image 01" class="img-fluid">
                                                    </a>
                                                    <a href="">Couettes</a>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-6" style="padding: 0px">
                                                <div class="card-body">
                                                    <a href="#"><img src="{{asset('frontend/assets/images/11.png')}}"
                                                                     alt="product image 01" class="img-fluid"></a>
                                                    <a href="">Bougies</a>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-6" style="padding: 0px">
                                                <div class="card-body">
                                                    <a href="#"><img src="{{asset('frontend/assets/images/12.png')}}"
                                                                     alt="product image 01" class="img-fluid"></a>
                                                    <a href="">Fers a reasser</a>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-6" style="padding: 0px">
                                                <div class="card-body">
                                                    <a href="#"><img src="{{asset('frontend/assets/images/13.png')}}"
                                                                     alt="product image 01" class="img-fluid"></a>
                                                    <a href="">Poubelles</a>
                                                </div>
                                            </div>
                                        </div>
                                        <a style="padding: 7px; margin: 0px; padding-top: 0px; color: blue"
                                           href="">Voir Plus</a>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card my-2 my-lg-0">
                                        <h3 style="padding: 7px; margin: 0px; padding-bottom: 0px">Papeterie</h3>
                                        <div class="row">
                                            <div class="col-md-6 col-6" style="padding: 0px">
                                                <div class="card-body">
                                                    <a href="#">
                                                        <img src="{{asset('frontend/assets/images/14.png')}}"
                                                             alt="product image 01" class="img-fluid">
                                                    </a>
                                                    <a href="">Organiseurs</a>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-6" style="padding: 0px">
                                                <div class="card-body">
                                                    <a href="#"><img src="{{asset('frontend/assets/images/15.png')}}"
                                                                     alt="product image 01" class="img-fluid"></a>
                                                    <a href="">Peintures</a>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-6" style="padding: 0px">
                                                <div class="card-body">
                                                    <a href="#"><img src="{{asset('frontend/assets/images/16.png')}}"
                                                                     alt="product image 01" class="img-fluid"></a>
                                                    <a href="">Agrafes</a>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-6" style="padding: 0px">
                                                <div class="card-body">
                                                    <a href="#"><img src="{{asset('frontend/assets/images/17.png')}}"
                                                                     alt="product image 01" class="img-fluid"></a>
                                                    <a href="">Crayons</a>
                                                </div>
                                            </div>
                                        </div>
                                        <a style="padding: 7px; margin: 0px; padding-top: 0px; color: blue"
                                           href="">Voir Plus</a>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card my-2 my-lg-0">
                                        <h3 style="padding: 7px; margin: 0px; padding-bottom: 0px">Livres et
                                            manuels</h3>
                                        <div class="row">
                                            <div class="col-md-6 col-6" style="padding: 0px">
                                                <div class="card-body">
                                                    <a href="#">
                                                        <img src="{{asset('frontend/assets/images/18.png')}}"
                                                             alt="product image 01" class="img-fluid">
                                                    </a>
                                                    <a href="">Jeunesse</a>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-6" style="padding: 0px">
                                                <div class="card-body">
                                                    <a href="#"><img src="{{asset('frontend/assets/images/19.png')}}"
                                                                     alt="product image 01" class="img-fluid"></a>
                                                    <a href="">Scolaires</a>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-6" style="padding: 0px">
                                                <div class="card-body">
                                                    <a href="#"><img src="{{asset('frontend/assets/images/20.png')}}"
                                                                     alt="product image 01" class="img-fluid"></a>
                                                    <a href="">Best-Sellers</a>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-6" style="padding: 0px">
                                                <div class="card-body">
                                                    <a href="#"><img src="{{asset('frontend/assets/images/21.png')}}"
                                                                     alt="product image 01" class="img-fluid"></a>
                                                    <a href="">Livres Audio</a>
                                                </div>
                                            </div>
                                        </div>
                                        <a style="padding: 7px; margin: 0px; padding-top: 0px; color: blue"
                                           href="">Voir Plus</a>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card my-2 my-lg-0">
                                        <h3 style="padding: 7px; margin: 0px; padding-bottom: 0px">Jeux Video</h3>
                                        <div class="row">
                                            <div class="col-md-6 col-6" style="padding: 0px">
                                                <div class="card-body">
                                                    <a href="#">
                                                        <img src="{{asset('frontend/assets/images/22.png')}}"
                                                             alt="product image 01" class="img-fluid">
                                                    </a>
                                                    <a href="">Meilleures Ventes</a>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-6" style="padding: 0px">
                                                <div class="card-body">
                                                    <a href="#"><img src="{{asset('frontend/assets/images/23.png')}}"
                                                                     alt="product image 01" class="img-fluid"></a>
                                                    <a href="">Consoles de Jeux</a>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-6" style="padding: 0px">
                                                <div class="card-body">
                                                    <a href="#"><img src="{{asset('frontend/assets/images/24.png')}}"
                                                                     alt="product image 01" class="img-fluid"></a>
                                                    <a href="">Precommandes</a>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-6" style="padding: 0px">
                                                <div class="card-body">
                                                    <a href="#"><img src="{{asset('frontend/assets/images/25.png')}}"
                                                                     alt="product image 01" class="img-fluid"></a>
                                                    <a href="">Abonnements et cartes prepayees</a>
                                                </div>
                                            </div>
                                        </div>
                                        <a style="padding: 7px; margin: 0px; padding-top: 0px; color: blue"
                                           href="">Voir Plus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h1>Les bonnes affaires sur la mode homme</h1>
                        <div class="row">
                            <div class="col-sm-2">
                                <div class="team-member">
                                    <img src="{{asset('category-images/07.png')}}" alt="">
                                    <div class="profile">
                                        <h3>Vetements
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="team-member">
                                    <img src="{{asset('category-images/08.png')}}" alt="">
                                    <div class="profile">
                                        <h3>Chaussures
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="team-member">
                                    <img src="{{asset('category-images/09.png')}}" alt="">
                                    <div class="profile">
                                        <h3>Montres
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="team-member">
                                    <img src="{{asset('category-images/10.png')}}" alt="">
                                    <div class="profile">
                                        <h3>Sacs
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="team-member">
                                    <img src="{{asset('category-images/11.png')}}" alt="">
                                    <div class="profile">
                                        <h3>Accessoires
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="team-member">
                                    <img src="{{asset('category-images/12.png')}}" alt="">
                                    <div class="profile">
                                        <h3>Bagages
                                        </h3>
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
