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
                                <th>Nom</th>
                                <th>Livraison à partir de</th>
                                <th>Livraison à</th>
                                <th>Source</th>
                                <th>Volume (m³)</th>
                                <th>Temps requis</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($sources as $source)
                                <tr>
                                    <td>{{$source->name}}</td>
                                    <td>{{$source->deliver_from}}</td>
                                    <td>{{$source->deliver_to}}</td>
                                    <td>{{$source->source}}</td>
                                    <td>{{$source->volume}} m³</td>
                                    <td>{{$source->time_required}}</td>
                                    <td>
                                        <button data-toggle="modal" data-target="#editModal{{$source->id}}" id="edit" class="btn btn-sm btn-primary"  title="edit">
                                            <i class="fa fa-pencil"></i>
                                        </button>
                                        <form class="float-left pr-1" action="{{route('shipping_source.destroy', $source->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"  class="btn btn-sm btn-danger"  title="delete">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                    <div class="modal fade" id="editModal{{$source->id}}" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Editer catégorie</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="forms-sample" enctype="multipart/form-data" method="post" action="{{route('shipping_source.update', $source->id)}}">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="form-group">
                                                            <label for="exampleInputName1">Name</label>
                                                            <input required type="text" class="form-control" value="{{$source->name}}" name="name" id="name" placeholder="Nom">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputName1">Livraison à partir de</label>
                                                            <select class="form-control" name="deliver_from" id="deliver_from">
                                                                <option value="China">China</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputName1">Livraison à</label>
                                                            <select class="form-control" name="deliver_to" id="deliver_to">
                                                                <option value="Martinique" {{$source->deliver_to == 'Martinique' ? 'selected' : ''}}>Martinique</option>
                                                                <option value="Guadeloupe" {{$source->deliver_to == 'Guadeloupe' ? 'selected' : ''}}>Guadeloupe</option>
                                                                <option value="France" {{$source->deliver_to == 'France' ? 'selected' : ''}}>France</option>
                                                                <option value="French Guiana" {{$source->deliver_to == 'French Guiana' ? 'selected' : ''}}>French Guiana</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputName1">Source</label>
                                                            <select class="form-control" name="source" id="source">
                                                                <option value="Container" {{$source->source == 'Container' ? 'selected' : ''}}>Container</option>
                                                                <option value="Boat" {{$source->source == 'Boat' ? 'selected' : ''}}>Boat</option>
                                                                <option value="Airplane" {{$source->source == 'Airplane' ? 'selected' : ''}}>Airplane</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputName1">Volume (m³)</label>
                                                            <input required type="number" class="form-control" value="{{$source->volume}}" name="volume" id="volume" placeholder="Volume">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputName1">Temps requis</label>
                                                            <input required type="text" class="form-control" value="{{$source->time_required}}" name="time_required" id="time_required" placeholder="Temps requis">
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
                    <h4 class="modal-title">Ajouter une nouvelle source</h4>
                </div>
                <div class="modal-body">
                    <form class="forms-sample" method="post" enctype="multipart/form-data" action="{{route('shipping_source.store')}}">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputName1">Name</label>
                            <input required type="text" class="form-control" name="name" id="name" placeholder="Nom">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Livraison à partir de</label>
                            <select class="form-control" name="deliver_from" id="deliver_from">
                                <option value="China">China</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Livraison à</label>
                            <select class="form-control" name="deliver_to" id="deliver_to">
                                <option value="Martinique">Martinique</option>
                                <option value="Guadeloupe">Guadeloupe</option>
                                <option value="France">France</option>
                                <option value="French Guiana">French Guiana</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Source</label>
                            <select class="form-control" name="source" id="source">
                                <option value="Container">Container</option>
                                <option value="Boat">Boat</option>
                                <option value="Airplane">Airplane</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Volume (m³)</label>
                            <input required type="number" class="form-control" name="volume" id="volume" placeholder="Volume">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Temps requis</label>
                            <input required type="text" class="form-control" name="time_required" id="time_required" placeholder="Temps requis">
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
