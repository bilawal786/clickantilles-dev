@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card">
                    <div class="card-header">
{{--                        <h5>{{$title}}</h5>--}}
                        <div class="form-control">
                            <label for="" class="mr-4">Type de commande</label>
                            <select class="chosen-select col-md-3" onchange="ordersType()" name="order_type" id="order_type">
                                <option {{$orderType == 0 ? 'selected' : ''}} value="0">New</option>
                                <option {{$orderType == 1 ? 'selected' : ''}} value="1">Complété</option>
                                <option {{$orderType == 2 ? 'selected' : ''}} value="2">Annulé</option>
                                <option {{$orderType == 3 ? 'selected' : ''}} value="3">En Attente</option>
                                <option {{$orderType == 4 ? 'selected' : ''}} value="4">En Attente de Paiement</option>
                                <option {{$orderType == 5 ? 'selected' : ''}} value="5">Traitement</option>
                                <option {{$orderType == 6 ? 'selected' : ''}} value="6">Remboursé</option>

{{--                                {{$orders->admin_status == 0 ? 'selected' : ''}} value="0">New</option>--}}
{{--                                <option {{$orders->admin_status == 1 ? 'selected' : ''}} value="1">Complété</option>--}}
{{--                                <option {{$orders->admin_status == 2 ? 'selected' : ''}} value="2">Annulé</option>--}}
{{--                                <option {{$orders->admin_status == 3 ? 'selected' : ''}} value="3">En Attente</option>--}}
{{--                                <option {{$orders->admin_status == 4 ? 'selected' : ''}} value="4">En Attente de Paiement</option>--}}
{{--                                <option {{$orders->admin_status == 5 ? 'selected' : ''}} value="5">Traitement</option>--}}
{{--                                <option {{$orders->admin_status == 6 ? 'selected' : ''}}--}}
                            </select>
                        </div>
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
                                        <a href="{{route('order.view' , ['id'=>$row->id])}}" class="btn btn-sm btn-primary" data-toggle="tooltip" title="View">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <br>
                        {{$orders->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
