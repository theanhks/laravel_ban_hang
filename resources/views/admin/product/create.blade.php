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
                        <div class="live-preview flex-column">
                            <div class="col-xxl-6 col-md-6 mx-auto">
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
                            <div class="col-xxl-6 col-md-6 mx-auto">
                                <label for="name" class="form-label">Product Name</label>
                                <input type="text" class="form-control mb-3" id="name" name="name">
                            </div>
                            <div class="col-xxl-6 col-md-6 mx-auto">
                                <label for="product_code" class="form-label">Product Code</label>
                                <input type="text" class="form-control mb-3" id="product_code" name="product_code">
                            </div>
                            <div class="col-xxl-6 col-md-6 mx-auto">
                                <label for="price" class="form-label">Price</label>
                                <input type="text" class="form-control mb-3" id="price" name="price">
                            </div>
                            <div class="col-xxl-6 col-md-6 mx-auto">
                                <div>
                                    <label for="quantity" class="form-label">Quantity</label>
                                    <input type="text" class="form-control mb-3" id="quantity" name="quantity">
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
                                        <input type="text" class="form-control mb-3" id="description" name="description">
                                    </div>
                                </div>

                                <div>
                                    <div>
                                        <label for="content" class="form-label">Content</label>
                                        <input type="text" class="form-control" id="content" name="content">
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

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0">Ckeditor Classic Editor</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <p class="text-muted">Use <code>ckeditor-classic</code> class to set ckeditor classic editor.</p>
                    <div class="ckeditor-classic"></div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

    <div class="row mt-2">
        <div class="col-lg-12">

            <div class="justify-content-between d-flex align-items-center mb-3">
                <h5 class="mb-0 pb-1 text-decoration-underline">Quilljs Editor</h5>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Snow Editor</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <p class="text-muted">Use <code>snow-editor</code> class to set snow editor.</p>
                    <div class="snow-editor" style="height: 300px;">
                        <h3><span class="ql-size-large">Hello World!</span></h3>
                        <p><br></p>
                        <h3>This is an simple editable area.</h3>
                        <p><br></p>
                        <ul>
                            <li>
                                Select a text to reveal the toolbar.
                            </li>
                            <li>
                                Edit rich document on-the-fly, so elastic!
                            </li>
                        </ul>
                        <p><br></p>
                        <p>
                            End of simple area
                        </p>

                    </div> <!-- end Snow-editor-->
                </div><!-- end card-body -->
            </div><!-- end card -->

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Bubble Editor</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <p class="text-muted">Use <code>bubble-editor</code> class to set bubble editor.</p>
                    <div class ="bubble-editor" style="height: 300px;">
                        <h3><span class="ql-size-large">Hello World!</span></h3>
                        <p><br></p>
                        <h3>This is an simple editable area.</h3>
                        <p><br></p>
                        <ul>
                            <li>
                                Select a text to reveal the toolbar.
                            </li>
                            <li>
                                Edit rich document on-the-fly, so elastic!
                            </li>
                        </ul>
                        <p><br></p>
                        <p>
                            End of simple area
                        </p>

                    </div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!-- end col -->
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
@section('css')
<link href="{{ URL::asset('assets/libs/quill/quill.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
