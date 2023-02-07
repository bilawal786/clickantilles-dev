@extends('layouts.app')

@section('content')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-primary">
                            <div class="inner">
                                <h3>{{$users}}</h3>

                                <p>Client Total</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-folder-plus"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>{{$products}}</h3>

                                <p>Produits d'administration</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-folder-plus"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>{{$complete_orders->count()}}</h3>

                                <p>Commandes complètes</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-folder-plus"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>{{$neworders}}</h3>

                                <p>Admin Nouvelles commandes</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-folder-plus"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>{{$click_concept}}</h3>

                                <p>Cliquez sur Concept Stores</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-folder-plus"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-dark">
                            <div class="inner">
                                <h3>{{$complete_orders->sum('total')}}€</h3>

                                <p style="color: white">Revenu total</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-folder-plus"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
