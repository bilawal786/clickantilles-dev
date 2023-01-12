@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card">
                    <div class="card-header">
                        <h5>Réglage des Pages</h5>
                    </div>
                    <form action="{{route('page.update')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#home">À propos de nous</a></li>
                                <li><a data-toggle="tab" href="#menu1">Termes et conditions</a></li>
                                <li><a data-toggle="tab" href="#menu2">Politique de confidentialité</a></li>
                                <li><a data-toggle="tab" href="#menu3">Aider</a></li>
                                <li><a data-toggle="tab" href="#menu4">Politique de Retour</a></li>
                            </ul>

                            <div class="tab-content">
                                <br>
                                <div id="home" class="tab-pane fade in active">
                                    <textarea class="summernote" name="about" id="about">{{$settings->about}}</textarea>
                                </div>
                                <div id="menu1" class="tab-pane fade">
                                    <textarea class="summernote" name="terms" id="terms">{{$settings->terms}}</textarea>
                                </div>
                                <div id="menu2" class="tab-pane fade">
                                    <textarea class="summernote" name="privacy" id="privacy">{{$settings->privacy}}</textarea>
                                </div>
                                <div id="menu3" class="tab-pane fade">
                                    <textarea class="summernote" name="help" id="help">{{$settings->help}}</textarea>
                                </div>
                                <div id="menu3" class="tab-pane fade">
                                    <textarea class="summernote" name="return" id="return">{{$settings->return}}</textarea>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <input type="submit" value="Mettre à jour" class="btn btn-primary btn-rounded text-center">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
