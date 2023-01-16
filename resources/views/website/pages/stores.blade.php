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
                    Click Concept
                </nav>
                <!-- .woocommerce-breadcrumb -->
                <div id="primary" class="content-area">
                    <main id="main" class="site-main">
                       <div class="row">
                           @foreach($stores as $store)
                           <div class="col-md-6">
                               <div class="card">
                                   <div class="card-header">
                                       <h3>{{$store->name}}</h3>
                                   </div>
                                   <div class="card-body">
                                       <img src="{{$store->photo??""}}" alt="">
                                       <p class="pt-3">{{Str::limit($store->description, 100)}}</p>
                                   </div>
                                   <div class="card-footer">
                                       <a href="{{route('store.single', ['id' => $store->id])}}"><button class="btn btn-primary">Voir les équipements</button></a>
                                   </div>
                               </div>
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
