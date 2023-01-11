@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card">
                    <div class="card-header">
                        <h5>{{$title}}</h5>
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
