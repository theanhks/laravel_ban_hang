<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\ProductCategoryService;
use App\Http\Requests\ProductCategoryRequest;

class ProductCategoryController extends Controller
{
    public $productCategoryService;

    public function __construct(ProductCategoryService $productCategoryService)
    {
        $this->productCategoryService = $productCategoryService;
    }

    public function index(Request $request)
    {
        $categoryData = $this->productCategoryService->getAllPaging($request->all())->paginate(10);
        return view('admin.product_category.index', [
            'categoryData' => $categoryData,

        ]);
    }

    public function create()
    {
        // $productCategoryData = $this->productCategoryService->getAll()->toArray();
         return view('admin.product_category.create',);
    }

    public function store(ProductCategoryRequest $request)
    {
         $data = $request->except('_token');
         $data['image'] = $this->upload($request);
         $data['is_show'] = !empty($data['is_show']) ? 1 : 0;
         unset($data['is_show']);
         $data = $this->productCategoryService->insert($data);
         if($data){
             return redirect()->route('admin.category')->with('success', __('Bạn đã thêm danh mục thành công'));
         }else{
             return redirect()->route('admin.category')->with('errors', __('Có lỗi hệ thống vui lòng nhập lại danh mục'));
         }
    }

    public function upload($request)
    {

        // Kiểm tra xem có tệp tin được tải lên không
        if ($request->hasFile('image')) {
            // Lưu trữ tệp tin trong thư mục public/images và lấy đường dẫn của nó
            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $path = $file->storeAs('images', $name, 'public');

            // Lấy URL của hình ảnh
            return asset('storage/' . $path);

            // Bây giờ bạn có thể lưu URL vào cơ sở dữ liệu hoặc thực hiện các thao tác khác với nó
        }
        return '';
    }

    public function edit($id)
    {
        // $product = $this->productService->getById($id);
        // if(!$product){
        //     return redirect()->route('admin.product')->with('errors', __('Không tìm thấy sản phẩm'));
        // }
        // $productCategoryData = $this->productCategoryService->getAll()->toArray();
        // return view('admin.product.edit',['product'=>$product,'productCategoryData' => $productCategoryData]);
    }

    public function update(ProductCategoryRequest $request, $id = 0)
    {
        // $data = $request->except('_token');
        // $data['image'] = $this->upload($request);
        // if(!$data['image']){
        //     unset($data['image']);
        // }
        // $data['is_show'] = !empty($data['is_show']) ? 1 : 0;
        // $data = $this->productService->update($id,$data);
        // if($data){
        //     return redirect()->route('admin.product')->with('success', __('Bạn đã thêm sản phẩm thành công'));
        // }else{
        //     return redirect()->route('admin.product')->with('errors', __('Có lỗi hệ thống vui lòng nhập lại sản phẩm'));
        // }
    }
}
