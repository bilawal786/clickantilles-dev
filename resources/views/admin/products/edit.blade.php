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
                                        <select onchange="changeProductSection(this)" required class="form-control" name="product_section" id="">
                                            <option {{$product->product_section == "General" ? "selected" : ""}} value="General">Général</option>
                                            <option {{$product->product_section == "Best Selling" ? "selected" : ""}} value="Best Selling">Meilleures ventes</option>
                                            <option {{$product->product_section == "Unavoidable" ? "selected" : ""}} value="Unavoidable">Les Incontournables</option>
                                            <option {{$product->product_section == "Ready To Go" ? "selected" : ""}} value="Ready To Go">Prêt à partir</option>
{{--                                            <option {{$product->product_section == "Click Pro" ? "selected" : ""}} value="Click Pro">Cliquez Pro</option>--}}
{{--                                            <option {{$product->product_section == "Sourcing Product" ? "selected" : ""}} value="Sourcing Product">Sourcing Product</option>--}}
{{--                                            <option {{$product->product_section == "Click Goodies" ? "selected" : ""}} value="Click Goodies">Click Goodies</option>--}}
{{--                                            <option {{$product->product_section == "CLick Emballages" ? "selected" : ""}} value="CLick Emballages">CLick Emballages</option>--}}
                                            <option {{$product->product_section == "Click Concept" ? "selected" : ""}} value="Click Concept">Click Concept</option>
{{--                                            <option {{$product->product_section == "Click Baby" ? "selected" : ""}} value="Click Baby">Click Baby</option>--}}
                                        </select>
                                    </div>
                                </div>
                                @if($product->pro_category)
                                <div class="col-md-6 pro_category">
                                    <div class="form-group">
                                        <label for="exampleInputEmail3">Catégorie Pro</label>
                                        <select  class="form-control pro-attr" name="pro_category" id="">
                                            <option value="">Sélectionnez Catégorie Pro</option>
                                            <option {{$product->pro_category == "Click Selection" ? "selected" : ""}} value="Click Selection">Click Selection</option>
                                            <option {{$product->pro_category == "Click Destockage" ? "selected" : ""}} value="Click Destockage">Click Destockage</option>
                                            <option {{$product->pro_category == "Click Kitchen" ? "selected" : ""}} value="Click Kitchen">Click Kitchen</option>
                                            <option {{$product->pro_category == "Click Bathroom" ? "selected" : ""}} value="Click Bathroom">Click Bathroom</option>
                                            <option {{$product->pro_category == "CLick Office" ? "selected" : ""}} value="CLick Office">CLick Office</option>
                                            <option {{$product->pro_category == "Click Event" ? "selected" : ""}} value="Click Event">Click Event</option>
                                        </select>
                                    </div>
                                </div>
                                @endif
                                @if($product->click_concept)
                                <div class="col-md-6 click_concept">
                                    <div class="form-group">
                                        <label for="exampleInputEmail3">Sélectionnez le magasin</label>
                                        <select  class="form-control click_concept" name="click_concept" id="">
                                            <option value="">Sélectionnez Click Concept</option>
                                            @foreach($stores as $store)
                                                <option {{$product->click_concept == $store->id ? "selected" : ""}} value="{{$store->id}}">{{$store->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                @endif
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
                                        <label for="exampleInputEmail3">Montant minimum de commande</label>
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
                                        <label for="exampleInputEmail3">Produit Volume m³</label>
                                        <input required type="number" class="form-control" name="volume"
                                               value="{{$product->volume}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail3">Matériau du produit</label>
                                        <input required type="text" class="form-control" name="material"
                                               value="{{$product->material}}">
                                    </div>
                                </div>
                                <?php $implodedclr = $product->color;
                                      $selectedclr = explode(',', $implodedclr);
                                ?>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail3">Couleur du produit</label>
                                        <select class="form-control chosen-select" multiple name="color[]" style="width: 100%" id="color[]" data-placeholder="Sélectionnez les couleurs disponibles">
                                            @foreach($colors as $color)
                                                <option value="{{$color->color}}" {{ in_array($color->color, $selectedclr) ? 'selected' : ''}}>{{$color->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row col-md-12 field_wrapper">
                                    @if($product->size)
                                    <div class="row col-md-6 form-group"><a href="javascript:void(0);"
                                                                  class="btn btn-sm ml-3 btn-primary add_button">Add New Size</a></div>
                                        <?php
                                            $sizes = explode(',', $product->size);
                                            ?>
                                    @foreach($sizes as $size)
                                    <div class="row col-md-8">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label for="exampleInputName1">Taille du produit</label>
                                                <input type="text" value="{{$size}}" class="form-control" name="size[]" placeholder="Produit Titre">
                                            </div>
                                        </div>
                                        <a href="javascript:void(0);" class="mt-4 remove_button"><i class="fa fa-minus" style="color:red;font-size:27px;"></i></a>
                                    </div>
                                        @endforeach
                                    @else
                                        <div class="row col-md-8">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label for="exampleInputName1">Taille du produit</label>
                                                    <input type="text" value="" class="form-control" name="size[]" placeholder="Taille du produit">
                                                </div>
                                            </div>
                                            <a href="javascript:void(0);" class=" mt-4 add_button"><i class="fa fa-plus" style="color:dodgerblue;font-size:27px;" aria-hidden="true"></i></a>
                                        </div>
                                    @endif
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

        function changeProductSection(elem){
            let type = $(elem).val();
            if(type == "Click Pro"){
                $(".pro_category").show()
                $(".pro-attr").prop('required',true);
                $(".click_concept").hide()
                $(".click_concept").prop('required',false);
            }else if(type == "Click Concept"){
                $(".click_concept").show()
                $(".click_concept").prop('required',true);
                $(".pro_category").hide()
                $(".pro-attr").prop('required',false);
            }else {
                $(".pro_category").hide()
                $(".pro-attr").prop('required',false);
                $(".click_concept").hide()
                $(".click_concept").prop('required',false);
            }
        }


        $(document).ready(function () {
            var maxField = 10;
            var addButton = $('.add_button');
            var wrapper = $('.field_wrapper');
            var fieldHTML = '<div class="row col-md-8"><div class="col-md-8"><div class="form-group"><label for="exampleInputName1">Taille du produit</label><input type="text" class="form-control" name="size[]" placeholder="Taille du produit"></div></div><a href="javascript:void(0);" class="mt-4 remove_button"><i class="fa fa-minus" style="color:red;font-size:27px;"></i></a> </div>';
            var x = 1;
            $(addButton).click(function () {
                if (x < maxField) {
                    x++;
                    $(wrapper).append(fieldHTML);
                }
            });
            $(wrapper).on('click', '.remove_button', function (e) {
                e.preventDefault();
                $(this).parent('div').remove();
                x--;
            });
        });
    </script>
@endsection
