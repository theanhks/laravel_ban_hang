@extends('admin.layouts.master')
@section('title')
    @lang('Category')
@endsection
@section('css')
    <link href="{{asset('/admin/assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />

@endsection
@section('content')
    @component('admin.components.breadcrumb')
        @slot('li_1')
            Tables
        @endslot
        @slot('title')
            Listjs
        @endslot
    @endcomponent
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Add& Remove</h4>
                </div><!-- end card header -->
                <div class="card-body border border-dashed border-end-0 border-start-0  mb-3">
                    <form method="GET" action="" id="formSearch">
                        <div class="row g-3">
                            <div class="col-xxl-2 col-sm-4">
                                <div class="search-box">
                                    <input type="text" class="form-control search" name="category_name"
                                           value="{{request('category_name')}}"
                                           placeholder="Category name">
                                </div>
                            </div>
                            <div class="col-xxl-2 col-sm-4">
                                <div>
                                    <button type="submit" class="btn btn-primary w-100" id="search"><i
                                            class="ri-equalizer-fill me-1 align-bottom"></i>
                                        Search
                                    </button>
                                </div>
                            </div>
                        </div>


                    </form>

                    <div class="card-body">
                    <div id="customerList">
                        <div class="row g-4 mb-3">
                            <div class="col-sm-auto">
                                <div>
                                    <button type="button" onclick=" window.location.href = '{{route('admin.category.create')}}';" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal"><i class="ri-add-line align-bottom me-1"></i> Add</button>
                                    <button class="btn btn-soft-danger" onClick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="d-flex justify-content-sm-end">
                                    <div class="search-box ms-2">
                                        <input type="text" class="form-control search" placeholder="Search...">
                                        <i class="ri-search-line search-icon"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive table-card mt-3 mb-1">
                            @include('admin.layouts.flag-message')
                            @if(count($categoryData) > 0)
                            <table class="table align-middle table-nowrap" id="customerTables">
                                <thead class="table-light">
                                <tr>
                                    <th scope="col" style="width: 50px;">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                        </div>
                                    </th>
                                    <th>Category</th>
                                    <th>Product Name</th>
{{--                                    <th>Price</th>--}}
{{--                                    <th>Quantity</th>--}}
                                    <th>Image</th>
                                    <th>Position</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody class="list form-check-all">

                                    @foreach($categoryData as $category)
                                        <tr>
                                            <th scope="row">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                </div>
                                            </th>
                                            <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                            <td class="customer_name">{{$category->category_id}}</td>
                                            <td class="email">{{$category->category_name}}</td>
                                            <td class="email">@if($category->image)<img src="{{$category->image}}" alt="" style="width: 100px; height: 100px">@endif</td>
                                            <td>{{$category->position}}</td>
                                            <td>
                                                <div class="d-flex gap-2">
                                                    <div class="edit">
                                                        <a class="btn btn-sm btn-success edit-item-btn" href="{{route('admin.category.edit',['id'=>$category->category_id])}}">Edit</a>
                                                    </div>
                                                    <div class="remove">
                                                        <form
                                                            action="{{route('admin.category.destroy',['id'=>$category->category_id])}}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-sm btn-danger remove-item-btn btn-delete"
                                                                    type="button"
                                                                    data-bs-toggle="modal"
                                                                    data-title="bạn có chắc chắn muốn xóa: {{$category->category_name}}"
                                                                    data-item-id="{{ $category->category_id }}"
                                                                    data-bs-target="#deleteRecordModal">Remove
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @else
                            <div class="noresult" >
                                <div class="text-center">
                                    <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop"
                                               colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px">
                                    </lord-icon>
                                    <h5 class="mt-2">Sorry! No Result Found</h5>
{{--                                    <p class="text-muted mb-0">We've searched more than 150+ Orders We did not find any--}}
{{--                                        orders for you search.</p>--}}
                                </div>
                            </div>
                            @endif
                        </div>
                        @if (count($categoryData) >0)
                            <div class="row g-0 text-center text-sm-start align-items-center mb-4">
                                <div class="col-sm-6">
                                    {!! $categoryData->appends(request()->query())->links('admin.pagination/infor'); !!}
                                </div>
                                <!-- end col -->
                                <div class="col-sm-6">
                                    {!! $categoryData->appends(request()->query())->links('admin.pagination/custom'); !!}
                                </div><!-- end col -->
                            </div>
                        @endif
{{--                        <div class="d-flex justify-content-end">--}}
{{--                            <div class="pagination-wrap hstack gap-2">--}}
{{--                                <a class="page-item pagination-prev disabled" href="#">--}}
{{--                                    Previous--}}
{{--                                </a>--}}
{{--                                <ul class="pagination listjs-pagination mb-0"></ul>--}}
{{--                                <a class="page-item pagination-next" href="#">--}}
{{--                                    Next--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div><!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

@endsection
@section('script')
    <script src="{{asset('/admin/assets/libs/prismjs/prismjs.min.js') }}"></script>
    <script src="{{asset('/admin/assets/libs/list.js/list.js.min.js') }}"></script>
    <script src="{{asset('/admin/assets/libs/list.pagination.js/list.pagination.js.min.js') }}"></script>

    <!-- listjs init -->

    {{-- <script src="{{asset('/admin/assets/js/pages/listjs.init.js') }}"></script> --}}

    <script src="{{asset('/admin/assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="{{asset('/admin//assets/js/app.min.js') }}"></script>
    <script>
        $(".remove-item-btn").click(function() {
            // alert($(this).data('item-id'));
            // $.ajax({url: "demo_test.txt", success: function(result){
            //     $("#div1").html(result);
            // }});
        });
    </script>
@endsection
