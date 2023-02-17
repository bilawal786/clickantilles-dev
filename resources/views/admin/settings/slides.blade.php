@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card">
                    <div class="card-header">
                        <h5>Réglages généraux</h5>
                    </div>
                    <form action="{{route('update.slides')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
{{--                                <div class="col-md-6">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label for="exampleInputFile">Main SLide Image [1920*650]</label>--}}
{{--                                        <div class="">--}}
{{--                                            <div class="custom-file">--}}
{{--                                                <input type="file" class="custom-file-input" name="mainbg">--}}
{{--                                                <label class="custom-file-label" for="exampleInputFile">Choose Image</label>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <img style="height:60px;width:157px" class="mt-1" alt="logo" src="{{asset($slides->mainbg)}}">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Slide 1 [1920*650]</label>
                                        <div class="">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="slide1">
                                                <label class="custom-file-label" for="exampleInputFile">Choose Image</label>
                                            </div>
                                        </div>
                                        <img style="height:60px;width:157px" class="mt-1" alt="logo" src="{{asset($slides->slide1)}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Slide 2 [1920*650]</label>
                                        <div class="">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="slide2">
                                                <label class="custom-file-label" for="exampleInputFile">Choose Image</label>
                                            </div>
                                        </div>
                                        <img style="height:60px;width:157px" class="mt-1" alt="logo" src="{{asset($slides->slide2)}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Slide 3 [1920*650]</label>
                                        <div class="">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="slide3">
                                                <label class="custom-file-label" for="exampleInputFile">Choose Image</label>
                                            </div>
                                        </div>
                                        <img style="height:60px;width:157px" class="mt-1" alt="logo" src="{{asset($slides->slide3)}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Slide 4 [1920*650]</label>
                                        <div class="">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="slide4">
                                                <label class="custom-file-label" for="exampleInputFile">Choose Image</label>
                                            </div>
                                        </div>
                                        <img style="height:60px;width:157px" class="mt-1" alt="logo" src="{{asset($slides->slide4)}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Slide 5 [1920*650]</label>
                                        <div class="">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="slide5">
                                                <label class="custom-file-label" for="exampleInputFile">Choose Image</label>
                                            </div>
                                        </div>
                                        <img style="height:60px;width:157px" class="mt-1" alt="logo" src="{{asset($slides->slide5)}}">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Link</label>
                                        <input type="text" class="form-control" required name="link_1" value="{{$slides->link_1}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Image [855 x 473]</label>
                                        <div class="">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="image1">
                                                <label class="custom-file-label" for="exampleInputFile">Choose Image</label>
                                            </div>
                                        </div>
                                        <img style="height:60px;" class="mt-1" alt="logo" src="{{asset($slides->image1)}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Link</label>
                                        <input type="text" class="form-control" required name="link_2" value="{{$slides->link_2}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Image [855 x 473]</label>
                                        <div class="">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="image2">
                                                <label class="custom-file-label" for="exampleInputFile">Choose Image</label>
                                            </div>
                                        </div>
                                        <img style="height:60px;" class="mt-1" alt="logo" src="{{asset($slides->image2)}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Link</label>
                                        <input type="text" class="form-control" required name="link_3" value="{{$slides->link_3}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Image [560 x 469]</label>
                                        <div class="">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="image3">
                                                <label class="custom-file-label" for="exampleInputFile">Choose Image</label>
                                            </div>
                                        </div>
                                        <img style="height:60px;" class="mt-1" alt="logo" src="{{asset($slides->image3)}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Link</label>
                                        <input type="text" class="form-control" required name="link_8" value="{{$slides->link_8}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Image [560 x 469]</label>
                                        <div class="">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="image4">
                                                <label class="custom-file-label" for="exampleInputFile">Choose Image</label>
                                            </div>
                                        </div>
                                        <img style="height:60px;" class="mt-1" alt="logo" src="{{asset($slides->image4)}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Link</label>
                                        <input type="text" class="form-control" required name="link_4" value="{{$slides->link_4}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Image [560 x 469]</label>
                                        <div class="">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="image5">
                                                <label class="custom-file-label" for="exampleInputFile">Choose Image</label>
                                            </div>
                                        </div>
                                        <img style="height:60px;" class="mt-1" alt="logo" src="{{asset($slides->image5)}}">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Image [1740 x 539]</label>
                                        <div class="">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="image6">
                                                <label class="custom-file-label" for="exampleInputFile">Choose Image</label>
                                            </div>
                                        </div>
                                        <img style="height:60px;" class="mt-1" alt="logo" src="{{asset($slides->image6)}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Link</label>
                                        <input type="text" class="form-control" required name="link_5" value="{{$slides->link_5}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Image [1740 x 539]</label>
                                        <div class="">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="image7">
                                                <label class="custom-file-label" for="exampleInputFile">Choose Image</label>
                                            </div>
                                        </div>
                                        <img style="height:60px;" class="mt-1" alt="logo" src="{{asset($slides->image7)}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Link</label>
                                        <input type="text" class="form-control" required name="link_6" value="{{$slides->link_6}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Image [1740 x 539]</label>
                                        <div class="">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="image8">
                                                <label class="custom-file-label" for="exampleInputFile">Choose Image</label>
                                            </div>
                                        </div>
                                        <img style="height:60px;" class="mt-1" alt="logo" src="{{asset($slides->image8)}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Link</label>
                                        <input type="text" class="form-control" required name="link_7" value="{{$slides->link_7}}">
                                    </div>
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
