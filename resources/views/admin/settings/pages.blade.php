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
                                <li class="btn btn-primary mr-2"><a data-toggle="tab" style="color: white;text-decoration: none" href="#about">À propos de nous</a></li>
                                <li class="btn btn-primary mr-2"><a data-toggle="tab" style="color: white;text-decoration: none" href="#terms">Termes et conditions</a></li>
                                <li class="btn btn-primary mr-2"><a data-toggle="tab" style="color: white;text-decoration: none" href="#privacy">Politique de confidentialité</a></li>
                                <li class="btn btn-primary mr-2"><a data-toggle="tab" style="color: white;text-decoration: none" href="#help">Aider</a></li>
                                <li class="btn btn-primary mr-2"><a data-toggle="tab" style="color: white;text-decoration: none" href="#return">Politique de Retour</a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="about" class="tab-pane fade in active">
                                    <h3>À propos de nous</h3>
                                    <textarea class="summernote" name="about" id="about">{{$settings->about}}</textarea>
                                </div>
                                <div id="terms" class="tab-pane fade">
                                    <h3>Termes et conditions</h3>
                                    <textarea class="summernote" name="terms" id="terms">{{$settings->terms}}</textarea>
                                </div>
                                <div id="privacy" class="tab-pane fade">
                                    <h3>Politique de confidentialité</h3>
                                    <textarea class="summernote" name="privacy" id="privacy">{{$settings->privacy}}</textarea>
                                </div>
                                <div id="help" class="tab-pane fade">
                                    <h3>Aider</h3>
                                    <textarea class="summernote" name="help" id="help">{{$settings->help}}</textarea>
                                </div>
                                <div id="return" class="tab-pane fade">
                                    <h3>Politique de Retour</h3>
                                    <textarea class="summernote" name="return" id="return">{{$settings->return}}</textarea>
                                </div>
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
