<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\ProductCategoryService;

;

use App\Services\ProductSerivce;

;

use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public $productCategoryService;
    public $productService;

    public function __construct(ProductCategoryService $productCategoryService, ProductSerivce $productService)
    {
        $this->productCategoryService = $productCategoryService;
        $this->productService = $productService;
    }

    public function create()
    {
        $productCategoryData = $this->productCategoryService->getAll()->toArray();
        return view('admin.product.create', compact('productCategoryData'));
    }

    public function store(ProductRequest $request)
    {
        $data = $request->except('_token');
        $data['image'] = $this->upload($request);
        $data = $this->productService->insert($data);
        if($data){
            return redirect()->route('admin.product')->with('success', __('Bạn đã thêm sản phẩm thành công'));
        }else{
            return redirect()->route('admin.product')->with('errors', __('Có lỗi hệ thống vui lòng nhập lại sản phẩm'));
        }
    }

    public function upload($request)
    {

        // Kiểm tra xem có tệp tin được tải lên không
        if ($request->hasFile('image')) {
            // Lưu trữ tệp tin trong thư mục public/images và lấy đường dẫn của nó
            $path = $request->file('image')->store('images', 'public');
            // Lấy URL của hình ảnh
            return asset('storage/' . $path);

            // Bây giờ bạn có thể lưu URL vào cơ sở dữ liệu hoặc thực hiện các thao tác khác với nó
        }
        return '';
    }
}
