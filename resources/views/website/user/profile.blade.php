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
                    Profil
                </nav>
                <!-- .woocommerce-breadcrumb -->
                <div id="primary" class="content-area">
                    <main id="main" class="site-main">
                        <div class="type-page hentry">
                            <div class="row">
                                <div class="col-md-3">
                                    @include('website.include.user-sidebar')
                                </div>
                                <div class="col-md-8">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Profil</h5>
                                        </div>
                                        <div class="card-body">
                                            <form action="{{route('profile.update')}}" method="POST" class="kenne-form"
                                                  accept-charset="UTF-8" enctype="multipart/form-data">
                                                @csrf
                                               <div class="row">
                                                   <div class="col-md-6">
                                                       <label for="">Prénom</label>
                                                       <input type="text" required name="fname" value="{{$user->fname}}" class="form-control">
                                                   </div>
                                                   <div class="col-md-6">
                                                       <label for="">Nom de famille</label>
                                                       <input type="text" required name="lname" value="{{$user->lname}}" class="form-control">
                                                   </div>
                                                   <div class="col-md-6">
                                                       <label for="">Email</label>
                                                       <input type="text" required name="email" readonly value="{{$user->email}}" class="form-control">
                                                   </div>
                                                   <div class="col-md-6">
                                                       <label for="">Téléphone</label>
                                                       <input type="text" required name="phone" value="{{$user->phone}}" class="form-control">
                                                   </div>
                                                   <div class="col-md-6">
                                                       <label for="">Adresse</label>
                                                       <input type="text" required name="address" value="{{$user->address}}" class="form-control">
                                                   </div>
                                                   <div class="col-md-6">
                                                       <label for="">Ville</label>
                                                       <input type="text" required name="city" value="{{$user->city}}" class="form-control">
                                                   </div>
                                                   <div class="col-md-6">
                                                       <label for="">Pays</label>
                                                       <input type="text" required name="country" value="{{$user->country}}" class="form-control">
                                                   </div>
                                                   <div class="col-md-6">
                                                       <label for="">Nouveau mot de passe</label>
                                                       <input type="text" name="password" class="form-control">
                                                   </div>
                                                   <div class="col-md-6">
                                                       <br>
                                                       <button class="btn btn-primary">Mettre à jour</button>
                                                   </div>

                                               </div>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
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
