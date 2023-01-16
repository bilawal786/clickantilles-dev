@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card">
                    <div class="card-header">
                        <button data-toggle="modal" data-target="#myModal" class="btn btn-primary float-right">Ajouter nouveau</button>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nom</th>
                                <th>Photo</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($stores as $store)
                                <tr>
                                    <td>{{$store->id}}</td>
                                    <td>{{$store->name??""}}</td>
                                    <td>
                                        <img src="{{$store->photo}}" alt="">
                                    </td>
                                    <td>
                                        <button data-toggle="modal" data-target="#editModal{{$store->id}}" id="edit" class="btn btn-sm btn-primary"  title="edit">
                                            <i class="fa fa-pencil"></i>
                                        </button>
                                        <form class="float-left pr-1" action="{{route('click_concept.destroy', $store->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"  class="btn btn-sm btn-danger"  title="delete">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                    <div class="modal fade" id="editModal{{$store->id}}" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Editer store</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="forms-sample" enctype="multipart/form-data" method="post" action="{{route('click_concept.update', $store->id)}}">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="form-group">
                                                            <label for="exampleInputName1">Nom</label>
                                                            <input required type="text" class="form-control" value="{{$store->name}}" name="name" id="exampleInputName1" placeholder="Name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Image (1000*450)</label>
                                                            <input class="form-control" type="file" accept="image/*" name="photo" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Description</label>
                                                            <textarea name="description" class="form-control" id="" cols="30" rows="10">{{$store->description}}</textarea>
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
                        {{$stores->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Ajouter une nouvelle concept store</h4>
                </div>
                <div class="modal-body">
                    <form class="forms-sample" method="post" enctype="multipart/form-data" action="{{route('click_concept.store')}}">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputName1">Nom</label>
                            <input type="text" required class="form-control" name="name" id="exampleInputName1" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label>Image (1000*450)</label>
                            <input class="form-control" required type="file" accept="image/*" name="photo" >
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-success mr-2">Sauver</button>
                        <button class="btn btn-light" data-dismiss="modal">Annuler</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
