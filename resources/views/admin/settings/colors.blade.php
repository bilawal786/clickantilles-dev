@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card">
                    <div class="card-header">
                        <h5>Couleurs</h5>
                        <button data-toggle="modal" data-target="#myModal" class="btn btn-primary float-right">Ajouter nouveau</button>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nom</th>
                                <th>Couleur</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($colors as $color)
                                <tr>
                                    <td>{{$color->id}}</td>
                                    <td>{{$color->name}}</td>
                                    <td><input type="color" value="{{$color->color}}" style="width: 80px;height: 50px" disabled></td>
                                    <td>
                                        <button data-toggle="modal" data-target="#editModal{{$color->id}}" id="edit" class="btn btn-sm btn-primary"  title="edit">
                                            <i class="fa fa-pencil"></i>
                                        </button>
                                        <form class="float-left pr-1" action="{{route('settings.removecolor', $color->id)}}" method="post">
                                            @csrf
{{--                                            @method('DELETE')--}}
                                            <button type="submit"  class="btn btn-sm btn-danger"  title="delete">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                    <div class="modal fade" id="editModal{{$color->id}}" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Editer Couleurs</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="forms-sample" method="post" action="{{route('settings.editcolor', $color->id)}}">
                                                        @csrf
{{--                                                        @method('PUT')--}}
                                                        <div class="form-group">
                                                            <label for="exampleInputName1">Nom</label>
                                                            <input type="text" value="{{$color->name}}" class="form-control" name="name" id="name" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputName1">Sélectionnez la couleur</label>
                                                            <input type="color" class="form-control" name="color" id="color" value="{{$color->color}}">
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
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Ajouter une nouvelle couleur</h4>
                </div>
                <div class="modal-body">
                    <form class="forms-sample" method="post" action="{{route('settings.addcolor')}}">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputName1">Nom</label>
                            <input type="text" class="form-control" name="name" id="name" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Sélectionnez la couleur</label>
                            <input type="color" class="form-control" name="color" id="color">
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
