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
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{$product->id}}</td>
                                    <td>{{$product->sku}}</td>
                                    <td>{{$product->title??""}}</td>
                                    <td><img src="{{asset($product->photo1)}}" alt=""></td>
                                    <td>{{$product->category->name??"Deleted"}}</td>
                                    <td>{{$product->price}} €</td>
                                    <td>{{$product->product_section}}</td>
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
                                    </td>
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
