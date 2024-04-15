@extends('admin.layouts.master')
@section('title')
    @lang('translation.basic-elements')
@endsection
@section('content')
    @component('admin.components.breadcrumb')
        @slot('li_1')
            Forms
        @endslot
        @slot('title')
            Basic Elements
        @endslot
    @endcomponent

    <div class="row">
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
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
                        <div class="live-preview">
                            <div class="col-xxl-6 col-md-6">
                                <div>
                                    <label for="formSizeSmall" class="form-label">Category</label>
                                    <select class="form-select mb-3" aria-label="Default select example"
                                            name="category_id">
                                        <option selected>Category</option>
                                        @foreach($productCategoryData as $productCategory)
                                            <option
                                                value="{{$productCategory['category_id']}}">{{$productCategory['category_name']}}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="row gy-4">
                                <div class="col-xxl-6 col-md-6">
                                    <div class="col-xxl-6">
                                        <label for="name" class="form-label">Product Name</label>
                                        <input type="text" class="form-control" id="name" name="name">
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-xxl-6 col-md-6">
                                    <div class="col-xxl-6">
                                        <label for="product_code" class="form-label">Product Code</label>
                                        <input type="text" class="form-control" id="product_code" name="product_code">
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-md-6">
                                    <div class="col-xxl-6">
                                        <label for="price" class="form-label">Price</label>
                                        <input type="text" class="form-control" id="price" name="price">
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-md-6">
                                    <div class="col-xxl-6">
                                        <label for="quantity" class="form-label">Quantity</label>
                                        <input type="text" class="form-control" id="quantity" name="quantity">
                                    </div>

                                    <div class="col-xxl-6 col-md-6">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" role="switch"
                                                   id="is_show" checked name="is_show">
                                            <label class="form-check-label" for="is_show">Is Show Product
                                                input</label>
                                        </div>
                                    </div>
                                    <div class="col-xxl-6 col-md-6">
                                        <div>
                                            <label for="image" class="form-label">Image Upload</label>
                                            <input class="form-control form-control-sm" id="image" type="file"
                                                   name="image">
                                        </div>
                                    </div>

                                    <div class="col-xxl-6 col-md-6">
                                        <div class="col-xxl-6">
                                            <label for="description" class="form-label">Description</label>
                                            <input type="text" class="form-control" id="description" name="description">
                                        </div>
                                    </div>

                                    <div class="col-xxl-6 col-md-6">
                                        <div class="col-xxl-6">
                                            <label for="content" class="form-label">Content</label>
                                            <input type="text" class="form-control" id="content" name="content">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
            <button type="submit">submit</button>
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
@endsection
