@extends('admin.layouts.master')
@section('title')
    @lang('Product')
@endsection
@section('content')
    @component('admin.components.breadcrumb')
        @slot('li_1')
            Forms
        @endslot
        @slot('title')
           Product Create
        @endslot
    @endcomponent

    <div class="row">
        <form action="" method="POST" enctype="multipart/form-data" id="form-product">
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">Input Example</h4>
                        <div class="flex-shrink-0">
                            <div class="form-check form-switch form-switch-right form-switch-md">
                                <label for="form-grid-showcode" class="form-label text-muted">Show
                                    Code</label>
                                <input class="form-check-input code-switcher" type="checkbox" id="form-grid-showcode">
                            </div>
                        </div>
                    </div><!-- end card header -->
                    <div class="card-body">
                        <div class="live-preview flex-column">
                            <div class="col-xxl-6 col-md-6 mx-auto">
                                <label for="formSizeSmall" class="form-label">Category</label>
                                <select class="form-select js-ajax-select2 mb-3" aria-label="Default select example"
                                        name="category_id">
                                    <option selected>Category</option>
                                    @foreach($productCategoryData as $productCategory)
                                        <option {{old('parent') == $productCategory['category_id'] ? 'selected' : ''}}
                                            value="{{$productCategory['category_id']}}">{{$productCategory['category_name']}}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="col-xxl-6 col-md-6 mx-auto">
                                <label for="name" class="form-label">Product Name</label>
                                <input type="text" class="form-control mb-3" id="name" name="name" value="{{old('name')}}">
                            </div>
                            <div class="col-xxl-6 col-md-6 mx-auto">
                                <label for="product_code" class="form-label">Product Code</label>
                                <input type="text" class="form-control mb-3" id="product_code" name="product_code" value="{{old('product_code')}}">
                            </div>
                            <div class="col-xxl-6 col-md-6 mx-auto">
                                <label for="price" class="form-label">Price</label>
                                <input type="text" class="form-control mb-3" id="price" name="price" value="{{old('price') ?? 0}}">
                            </div>

                            <div class="col-xxl-6 col-md-6 mx-auto mt-3 mb-3">
                                <div class="form-check form-switch">
                                    <input class="form-check-input mb-3" type="checkbox" role="switch" value="1"
                                           id="is_show" checked name="is_show">
                                    <label class="form-check-label" for="is_show">Is Show Product</label>
                                </div>
                            </div>

                            <div class="col-xxl-6 col-md-6 mx-auto mt-3 mb-3">
                                <div class="form-check form-switch">
                                    <input class="form-check-input mb-3" type="checkbox" role="switch" value="1"
                                           id="is_show_left_menu" name="is_show_left_menu">
                                    <label class="form-check-label" for="is_show">Is Show Left Menu</label>
                                </div>
                            </div>

                            <div class="col-xxl-6 col-md-6 mx-auto mt-3 mb-3">
                                <div class="form-check form-switch">
                                    <input class="form-check-input mb-3" type="checkbox" role="switch" value="1"
                                           id="is_featured" name="is_featured">
                                    <label class="form-check-label" for="is_show">Is Show Featured</label>
                                </div>
                            </div>

                            <div class="col-xxl-6 col-md-6 mx-auto">
                                <div>
                                    <label for="quantity" class="form-label">Quantity</label>
                                    <input type="text" class="form-control mb-3" id="quantity" name="quantity" value="{{old('quantity') ?? 0}}">
                                </div>

                                <div>
                                    <label for="position" class="form-label">Position</label>
                                    <input type="text" class="form-control mb-3" id="position" name="position" value="{{old('position') ?? 0}}">
                                </div>

                                <div>
                                    <div>
                                        <label for="image" class="form-label">Image Upload</label>
                                        <input class="form-control form-control-sm mb-3" id="image" type="file"
                                               name="image">
                                    </div>
                                </div>

                                <div>
                                    <div>
                                        <label for="description" class="form-label">Description</label>
                                        <input type="hidden" name="description" id="description">
                                        <div class="snow-editor mb-3" style="height: 300px;" id="for_description">
                                        </div>
                                        <!-- end Snow-editor-->
                                        {{-- <label class="form-label" for="des-info-description-input">Description</label>
                                        <textarea name="description" class="form-control" placeholder="Enter Description" id="des-info-description-input" rows="3"></textarea> --}}
                                    </div>
                                </div>

                                <div>
                                    <div>
                                        <label for="content" class="form-label">Content</label>
                                        <input type="hidden" name="content" id="content">
                                        <div class="snow-editor mb-3" style="height: 300px;" id="for_content">
                                        </div>
                                        <!-- end Snow-editor-->
                                        {{-- <label class="form-label" for="des-info-content-input">Content</label>
                                        <textarea name="content" class="form-control" placeholder="Enter Description" id="des-info-content-input" rows="3"></textarea> --}}
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <button type="submit" class="btn btn-secondary">submit</button>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </form>
    </div>

@endsection
@section('script')
    <script src="{{ asset('/admin/assets/libs/prismjs/prismjs.min.js') }}"></script>
    <script src="{{ asset('/admin/assets/js/app.min.js') }}"></script>
    <script src="{{ asset('/admin/assets/libs/@ckeditor/@ckeditor.min.js') }}"></script>
    <script src="{{ asset('/admin/assets/libs/quill/quill.min.js') }}"></script>
    <script src="{{ asset('/admin/assets/js/pages/form-editor.init.js') }}"></script>
    <script src="{{ asset('/admin/assets/js/app.min.js') }}"></script>
    <script src="{{ asset('/admin/assets/js/product.js') }}"></script>
    <script>
        var dataProCat = {!! json_encode($productCategoryData) !!};
        var convertDataProCat = $.map(dataProCat, function (item) {
          return {
            id: item.category_id,
            text: item.category_name
          };
        });
        $('.js-ajax-select2').select2({
          data: convertDataProCat
        });
    </script>
@endsection
@section('css')
<link href="{{ URL::asset('assets/libs/quill/quill.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
