@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <p>Ajouter un nouveau produit</p>
                        </div>
                        <form class="forms-sample" method="post" action="{{route('product.update', $product->id)}}"
                              enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputName1">Titre</label>
                                        <input type="text" required class="form-control" value="{{$product->title}}" name="title"
                                               placeholder="Produit Titre">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail3">SKU</label>
                                        <input type="number" class="form-control" name="sku" readonly
                                               value="{{$product->sku}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail3">Catégorie</label>
                                        <select onchange="maincategorychange(this)" required class="form-control"
                                                name="category_id" id="">
                                            <option value="">Choisir une catégorie</option>
                                            @foreach($categories as $category)
                                                <option {{$product->category_id == $category->id ? "selected" : ""}} value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail3">Sous-catégorie</label>
                                        <select class="form-control subcategory" name="subcategory_id" id="">
                                            <option value="">Catégorie enfant</option>
                                            @foreach($product->category->subcategories as $subcat)
                                                <option {{$subcat->id == $product->subcategory_id ? "selected" : ""}} value="{{$subcat->id}}">{{$subcat->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail3">Rubrique produit</label>
                                        <select required class="form-control" name="product_section" id="">
                                            <option {{$product->product_section == "Discounted Product" ? "selected" : ""}} value="Discounted Product">Produit à prix réduit</option>
                                            <option {{$product->product_section == "Click Pro" ? "selected" : ""}} value="Click Pro">Cliquez Pro</option>
                                            <option {{$product->product_section == "Sourcing Product" ? "selected" : ""}} value="Sourcing Product">Sourcing Product</option>
                                            <option {{$product->product_section == "Click Goodies" ? "selected" : ""}} value="Click Goodies">Click Goodies</option>
                                            <option {{$product->product_section == "CLick Emballages" ? "selected" : ""}} value="CLick Emballages">CLick Emballages</option>
                                            <option {{$product->product_section == "Click Concept" ? "selected" : ""}} value="Click Concept">Click Concept</option>
                                            <option {{$product->product_section == "Click Baby" ? "selected" : ""}} value="Click Baby">Click Baby</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail3">Prix</label>
                                        <input required type="number" class="form-control" name="price"
                                               value="{{$product->price}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail3">Ancien prix</label>
                                        <input type="number" class="form-control" name="oldprice"
                                               value="{{$product->oldprice}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail3">Stocker</label>
                                        <input required type="number" class="form-control" name="stock"
                                               value="{{$product->stock}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail3">Produit Unité</label>
                                        <input required type="text" class="form-control" name="unit"
                                               value="{{$product->unit}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail3">Matériau du produit</label>
                                        <input required type="text" class="form-control" name="material"
                                               value="{{$product->material}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail3">Couleur du produit</label>
                                        <input required type="color" class="form-control" name="color"
                                               >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail3">L'image sélectionnée (1000 * 1000)</label>
                                        <input type="file" class="form-control" name="photo1"
                                               >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail3">Galerie (1000 * 1000)</label>
                                        <input type="file" class="form-control" name="gallery[]" multiple
                                               >
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail3">Brève description</label>
                                        <textarea required id="" name="short_description"
                                                  class="form-control summernote" cols="30" rows="5">{{$product->short_description}}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail3">URL YouTube de la vidéo du produit</label>
                                        <input type="url" class="form-control" name="video"
                                               value="{{$product->video}}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail3">Longue description</label>
                                        <textarea name="description" class="form-control summernote" id="" cols="30"
                                                  rows="10">{{$product->description}}</textarea>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success mr-2">Sauver</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        function maincategorychange(elem) {
            $('.subcategory').html('<option value="">Catégorie enfant</option>');
            event.preventDefault();
            let id = elem.value;
            let _token = $('meta[name="csrf-token"]').attr('content');

            $.ajax({
                url: "{{route('fetchsubcategory')}}",
                type: "POST",
                data: {
                    id: id,
                    _token: _token
                },
                success: function (response) {
                    $.each(response, function (i, item) {
                        console.log(item.name);
                        $('.subcategory').append('<option value="' + item.id + '">' + item.name + '</option>');
                    });
                },
            });
        }
    </script>
@endsection
