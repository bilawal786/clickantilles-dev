@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card">
                    <div class="card-header py-3">
                        <div class="row g-3 align-items-center">
                            <div class="col-12 col-lg-4 col-md-6 me-auto">
                                <h5 class="mb-1">{{$order->updated_at}}</h5>
                                <p class="mb-0">Commande {{$order->order_number}}</p>
                            </div>
{{--                            @if($order->admin_status == 0)--}}
                                <select class="chosen-select col-md-3" onchange="orderStatus({{$order->id}})" name="admin_status" id="admin_status">
                                    <option {{$order->admin_status == 0 ? 'selected' : ''}} value="0">New</option>
                                    <option {{$order->admin_status == 2 ? 'selected' : ''}} value="2">Annulé</option>
                                    <option {{$order->admin_status == 1 ? 'selected' : ''}} value="1">Complété</option>
                                    <option {{$order->admin_status == 3 ? 'selected' : ''}} value="3">En Attente</option>
                                    <option {{$order->admin_status == 4 ? 'selected' : ''}} value="4">En attente</option>
                                    <option {{$order->admin_status == 5 ? 'selected' : ''}} value="5">En Attente de Paiement</option>
                                    <option {{$order->admin_status == 6 ? 'selected' : ''}} value="6">Traitement</option>
                                    <option {{$order->admin_status == 7 ? 'selected' : ''}} value="7">Remboursé</option>
                                </select>

{{--                            <a href="{{route('order.status', ['id' => $order->id])}}">--}}
{{--                                <button class="btn alert-success radius-30 px-4">Marquer la commande comme terminée--}}
{{--                                </button>--}}
{{--                            </a>--}}
{{--                            @endif--}}
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card border shadow-none radius-10">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="icon-box bg-light-primary border-0">
                                                <i class="bi bi-person text-primary"></i>
                                            </div>
                                            <div class="info">
                                                <h6 class="mb-2">Client</h6>
                                                <p class="mb-1">{{$order->name}}</p>
                                                <p class="mb-1">{{$order->email}}</p>
                                                <p class="mb-1">{{$order->phone}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card border shadow-none radius-10">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="icon-box bg-light-success border-0">
                                                <i class="bi bi-truck text-success"></i>
                                            </div>
                                            <div class="info">
                                                <h6 class="mb-2">Info commande</h6>
                                                <p class="mb-1"><strong>Livraison</strong> : Colissimo</p>
                                                <p class="mb-1"><strong>Pay Method</strong> : {{$order->payment_method}}
                                                </p>
                                                <p class="mb-1"><strong>Status</strong> : @if($order->admin_status == '0')
                                                        Nouvelle commande
                                                    @else
                                                        Compléter
                                                    @endif</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card border shadow-none radius-10">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="icon-box bg-light-danger border-0">
                                                <i class="bi bi-geo-alt text-danger"></i>
                                            </div>
                                            <div class="info">
                                                <h6 class="mb-2">Livraison</h6>
                                                <p class="mb-1"><strong>Note</strong> : {{$order->notes}}</p>
                                                <p class="mb-1"><strong>Source</strong> : {{$order->resource}}</p>
                                                <p class="mb-1"><strong>Adresse</strong>
                                                    : {{$order->address}} {{$order->country}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--end row-->

                        <div class="row">
                            <div class="col-12 col-lg-8">
                                <div class="card border shadow-none radius-10">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table align-middle mb-0">
                                                <thead class="table-light">
                                                <tr>
                                                    <th>Produit</th>
                                                    <th>Quantité</th>
                                                    <th>Color</th>
                                                    <th>Size</th>
                                                    <th>Prix</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach(json_decode($order->products) as $item)
                                                    <tr>
                                                        <td>
                                                            <div class="orderlist">
                                                                <a class="d-flex align-items-center gap-2"
                                                                   href="javascript:;">
                                                                    <div>
                                                                        <p class="mb-0 product-title"><a target="_blank"
                                                                                                         > {{\App\Products::find($item->id)->title??'Produit Supreme'}}</a>
                                                                        </p>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </td>
                                                        <td>{{$item->quantity}}</td>
                                                        <td>
                                                            <div class="circle selectedColor" style="background-color: {{$item->attributes->color}}"></div>
                                                        </td>
                                                        <td>{{$item->attributes->size}}</td>
                                                        <td>{{$item->price.'€'}}</td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="card border shadow-none bg-light radius-10">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-4">
                                            <div>
                                                <h5 class="mb-0">Résumé de la commande</h5>
                                            </div>
                                            <div class="ms-auto">
                                                <!--<button type="button" class="btn alert-success radius-30 px-4">Confirmed</button>-->
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mb-3">
                                            <div>
                                                <p class="mb-0">TVA (8.5%)</p>
                                            </div>
                                            <div class="ms-auto">
                                                <h5 class="mb-0"> à venir </h5>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mb-3">
                                            <div>
                                                <p class="mb-0">Sous total</p>
                                            </div>
                                            <div class="ms-auto">
                                                <h5 class="mb-0">{{$order->total.'€'}}</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
{{--                            <div class="col-12 col-lg-12">--}}
{{--                                <a href="{{route('order.download',['id'=>$order->id])}}" style="float:right;"--}}
{{--                                   class="btn btn-warning"><i class="fas fa-print"></i> Télécharger la facture</a>--}}
{{--                                <a href="{{route('order.print',['id'=>$order->id])}}"--}}
{{--                                   style="float:right;margin-right: 20px;" class="btn btn-success"><i--}}
{{--                                        class="fas fa-print"></i> Print</a>--}}
{{--                            </div>--}}
                        </div>

                        <!--end row-->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
