@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card">
                    <div class="card-header">
                        <h5>Réglages généraux</h5>
                    </div>
                    <form action="{{route('update.settings')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Nom du Site</label>
                                <input type="text" class="form-control" name="sitename" id="sitename" value="{{$settings->sitename}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Logo [1108X342]</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="logo" name="logo">
                                        <label class="custom-file-label" for="exampleInputFile">Choose logo</label>
                                    </div>
                                </div>
                                <img style="height:44px;width:157px" class="mt-1" alt="logo" src="{{$settings->logo}}"
                            </div>
                            <div class="form-group mt-3">
                                <label for="">Adresse</label>
                                <input type="text" class="form-control" id="address" value="{{$settings->address}}" name="address" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">E-mail</label>
                                <input type="text" class="form-control" id="email" value="{{$settings->email}}" name="email" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="">Numéro de contact</label>
                                <input type="text" class="form-control" id="phone1" value="{{$settings->phone1}}" name="phone1" placeholder="">
                                <input type="text" class="form-control mt-1" id="phone2" value="{{$settings->phone2}}" name="phone2" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="">Liens sociaux</label>
                                <input type="text" class="form-control" id="facebook" value="{{$settings->facebook}}" name="facebook" placeholder="">
                                <input type="text" class="form-control mt-1" id="instagram" value="{{$settings->instagram}}" name="instagram" placeholder="">
                                <input type="text" class="form-control mt-1" id="twitter" value="{{$settings->twitter}}" name="twitter" placeholder="">
                                <input type="text" class="form-control mt-1" id="utube" value="{{$settings->utube}}" name="utube" placeholder="">
                            </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Bas de page</label>
                                    <textarea required id="footer" name="footer"
                                              class="form-control summernote" cols="30" rows="5">{{$settings->footer}}</textarea>
                                </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <input type="submit" value="Mettre à jour" class="btn btn-primary btn-block">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
