@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card">
                    <div class="card-header">
                        <h5>Utilisateurs</h5>
{{--                        <button data-toggle="modal" data-target="#myModal" class="btn btn-primary float-right">Ajouter nouveau</button>--}}
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Photo</th>
                                <th>Prénom</th>
                                <th>Type</th>
{{--                                @if($users->role == 2)--}}
                                <th>Subscribed</th>
{{--                                @endif--}}
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>
                                        <img src="{{$user->photo}}" alt="">
                                    </td>
                                    <td>{{$user->fname??""}}</td>
                                    <td>{{$user->role == 1 ? 'User' : 'Pro'}}</td>
{{--                                    @if($user->role == 2)--}}
                                    <td>{{$user->pro_subscribed == 0 ? 'No' : 'Yes'}}</td>
{{--                                    @endif--}}
                                    <td>
                                        <button data-toggle="modal" data-target="#editModal{{$user->id}}" id="edit" class="btn btn-sm btn-primary"  title="edit">
                                            <i class="fa fa-pencil"></i>
                                        </button>
{{--                                        <form class="float-left pr-1" action="{{route('category.destroy', $user->id)}}" method="post">--}}
{{--                                            @csrf--}}
{{--                                            @method('DELETE')--}}
{{--                                            <button type="submit"  class="btn btn-sm btn-danger"  title="delete">--}}
{{--                                                <i class="fa fa-trash"></i>--}}
{{--                                            </button>--}}
{{--                                        </form>--}}
                                    </td>
                                    <div class="modal fade" id="editModal{{$user->id}}" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Editer Utilisateur</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="forms-sample" enctype="multipart/form-data" method="post" action="{{route('category.update', $user->id)}}">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="form-group">
                                                            <label for="exampleInputName1">First Name</label>
                                                            <input required type="text" class="form-control" value="{{$user->fname}}" name="fname" id="exampleInputName1" placeholder="Name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputName1">Last Name</label>
                                                            <input required type="text" class="form-control" value="{{$user->lname}}" name="lname" id="exampleInputName1" placeholder="Name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputName1">Email</label>
                                                            <input required type="text" class="form-control" value="{{$user->lname}}" name="lname" id="exampleInputName1" placeholder="Name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputName1">Phone</label>
                                                            <input required type="text" class="form-control" value="{{$user->lname}}" name="lname" id="exampleInputName1" placeholder="Name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputName1">Address</label>
                                                            <input required type="text" class="form-control" value="{{$user->lname}}" name="lname" id="exampleInputName1" placeholder="Name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputName1">Country</label>
                                                            <input required type="text" class="form-control" value="{{$user->lname}}" name="lname" id="exampleInputName1" placeholder="Name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Image de catégorie (220*197)</label>
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
{{--                        {{$user->links()}}--}}
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
                    <form class="forms-sample" method="post" enctype="multipart/form-data" action="{{route('category.store')}}">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputName1">Nom de catégorie</label>
                            <input type="text" required class="form-control" name="name" id="exampleInputName1" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label>Image de catégorie (220*197)</label>
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
