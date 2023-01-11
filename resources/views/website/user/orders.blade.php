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
                    Commandes
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
                                            <h5>MesCommandes</h5>
                                        </div>
                                        <div class="card-body">
                                            <table id="example1" class="table table-bordered table-striped">
                                                <thead>
                                                <tr>
                                                    <th>N°</th>
                                                    <th>Nom</th>
                                                    <th>E-mail</th>
                                                    <th>Téléphone</th>
                                                    <th>Total</th>
                                                    <th>Statut</th>
                                                    <th>Date</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($orders as $row)
                                                    <tr>
                                                        <td>{{$row->order_number}}</td>
                                                        <td>{{$row->name}}</td>
                                                        <td>{{$row->email}}</td>
                                                        <td>{{$row->phone}}</td>
                                                        <td>
                                                            @if($row->total == '0')
                                                                Points
                                                            @else
                                                                {{$row->total}} €</td>
                                                        @endif
                                                        <td>
                                                            @if($row->admin_status == '0')
                                                                Nouvelle commande
                                                            @elseif($row->status == '2')
                                                                Annuler
                                                            @else
                                                                Compléter
                                                            @endif
                                                        </td>
                                                        <td>{{$row->created_at->format('d-m-Y')}}</td>
                                                        <td>
                                                            <a href="{{route('user.order.view' , ['id'=>$row->id])}}" class="btn btn-sm btn-primary" data-toggle="tooltip" title="View">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
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
