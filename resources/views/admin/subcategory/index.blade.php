@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card">
                    <div class="card-header">
                        <h5>Sous-catégories</h5>
                        <button data-toggle="modal" data-target="#myModal" class="btn btn-primary float-right">Ajouter nouveau</button>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nom</th>
                                <th>Photo</th>
                                <th>Catégorie principale</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($subcategories as $category)
                                <tr>
                                    <td>{{$category->id}}</td>
                                    <td>{{$category->name??""}}</td>
                                    <td>
                                        <img src="{{$category->photo}}" alt="">
                                    </td>
                                    <td>
                                        {{$category->category->name??""}}
                                    </td>
                                    <td>
                                        <button data-toggle="modal" data-target="#editModal{{$category->id}}" id="edit" class="btn btn-sm btn-primary"  title="edit">
                                            <i class="fa fa-pencil"></i>
                                        </button>
                                        <form class="float-left pr-1" action="{{route('subcategory.destroy', $category->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"  class="btn btn-sm btn-danger"  title="delete">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                    <div class="modal fade" id="editModal{{$category->id}}" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Editer catégorie</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="forms-sample" enctype="multipart/form-data" method="post" action="{{route('subcategory.update', $category->id)}}">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="form-group">
                                                            <label for="exampleInputName1">Nom de catégorie</label>
                                                            <input required type="text" class="form-control" value="{{$category->name}}" name="name" id="exampleInputName1" placeholder="Name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputName1">Catégorie principale</label>
                                                            <select required name="category_id" class="form-control" id="">
                                                                @foreach($categories as $catego)
                                                                    <option {{$catego->id ==  $category->category_id ? "selected" : ""}} value="{{$catego->id}}">{{$catego->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Image de catégorie (578 * 450)</label>
                                                            <input class="form-control" required type="file" accept="image/*" name="photo" >
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
                        {{$subcategories->links()}}
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
                    <h4 class="modal-title">Ajouter une nouvelle catégorie</h4>
                </div>
                <div class="modal-body">
                    <form class="forms-sample" method="post" enctype="multipart/form-data" action="{{route('subcategory.store')}}">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputName1">Nom de catégorie</label>
                            <input required type="text" class="form-control" name="name" id="exampleInputName1" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Catégorie principale</label>
                            <select required name="category_id" class="form-control" id="">
                                @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Image de catégorie (578 * 450)</label>
                            <input class="form-control" required type="file" accept="image/*" name="photo" >
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
