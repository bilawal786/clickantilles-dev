@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card">
                    <div class="card-header">
                        <h5>Des produits</h5>
                        <a href="{{route('product.create')}}">
                            <button class="btn btn-primary float-right">Ajouter nouveau</button>
                        </a>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>SKU</th>
                                <th>Titre</th>
                                <th>Photo</th>
                                <th>Catégorie</th>
                                <th>Prix</th>
                                <th>Rubrique produit</th>
                                <th>Statut de l'offre</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            use Carbon\Carbon;
                            ?>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{$product->id}}</td>
                                    <td>{{$product->sku}}</td>
                                    <td>{{$product->title??""}}</td>
                                    <td><img src="{{asset($product->photo1)}}" alt=""></td>
                                    <td>{{$product->category->name??"Deleted"}}</td>
                                    <td>{{$product->price}} €</td>
                                    <td>{{$product->product_section}}</td>
                                    <?php $dealExpiry = Carbon::parse($product->deal_upto) ?>
                                    <td>{{Carbon::now()->lessThan($dealExpiry) ? 'Active' : 'nulle'}}</td>
                                    <td>
                                        <a href="{{route('product.edit', $product->id)}}"><button class="btn btn-sm btn-primary"  title="edit">
                                            <i class="fa fa-pencil"></i>
                                        </button></a>
                                        <form class="float-left pr-1" action="{{route('product.destroy', $product->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"  class="btn btn-sm btn-danger"  title="delete">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                        <button data-toggle="modal" data-target="#dealModal{{$product->id}}" id="deal" class="btn btn-sm btn-info"  title="Set Deal">
                                            <i class="fa fa-gift"></i>
                                        </button>
                                    </td>
                                    <div class="modal fade" id="dealModal{{$product->id}}" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Deal</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="forms-sample" method="post" action="{{route('product.deal', $product->id)}}">
                                                        @csrf
                                                        <div class="form-group">
                                                            <label for="exampleInputName1">Discount Percentage (%)</label>
                                                            <input required type="text" class="form-control" value="{{$product->deal_percentage}}" name="deal_percentage" id="deal_percentage" placeholder="Deal Percentage">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Deal Upto</label>
                                                            <input type="date" class="form-control" value="{{optional($product->deal_upto)->format('Y-m-d')}}" name="deal_upto" id="deal_upto">
                                                        </div>
                                                        <br>
                                                        <button type="submit" class="btn btn-success mr-2">Sauver</button>
                                                        <button class="btn btn-light" data-dismiss="modal">Annuler</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
