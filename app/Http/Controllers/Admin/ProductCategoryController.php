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
        $productCategoryData = $this->productCategoryService->getAll()->toArray();
        return view('admin.product_category.create',compact('productCategoryData'));
    }

    public function store(ProductCategoryRequest $request)
    {
         $data = $request->except('_token');
         $data['image'] = $this->upload($request);
         $data['is_show'] = !empty($data['is_show']) ? 1 : 0;
         $data['is_show_left_menu'] = !empty($data['is_show_left_menu']) ? 1 : 0;
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
            $path = $file->storeAs('images/category', $name, 'public');

            // Lấy URL của hình ảnh
            return ('/storage/' . $path);

            // Bây giờ bạn có thể lưu URL vào cơ sở dữ liệu hoặc thực hiện các thao tác khác với nó
        }
        return '';
    }

    public function edit($id)
    {
         $category = $this->productCategoryService->getById($id);
         $productCategoryData = $this->productCategoryService->getAll()->toArray();
         if(!$category){
             return redirect()->route('admin.category')->with('errors', __('Không tìm thấy danh mục'));
         }
         return view('admin.product_category.edit',['category'=>$category,'productCategoryData'=>$productCategoryData]);
    }

    public function update(ProductCategoryRequest $request, $id = 0)
    {
         $data = $request->except('_token');
         $data['image'] = $this->upload($request);
         if(!$data['image']){
             unset($data['image']);
         }
         $data['is_show'] = !empty($data['is_show']) ? 1 : 0;
         $data['is_show_left_menu'] = !empty($data['is_show_left_menu']) ? 1 : 0;
         $data = $this->productCategoryService->update($id,$data);
         if($data){
             return redirect()->route('admin.category')->with('success', __('Bạn đã cập nhật danh mục thành công'));
         }else{
             return redirect()->route('admin.category')->with('errors', __('Có lỗi hệ thống vui lòng nhập lại danh mục'));
         }
    }

    public function destroy(int $id = 0)
    {
        $product = $this->productCategoryService->getById($id);
        if(!$product){
            return redirect()->route('admin.category')->with('errors', __('Không tìm thấy sản phẩm'));
        }
        $product = $this->productCategoryService->destroy($id);
        if ($product) {
            return redirect()->route('admin.category')->with('success', __('Xóa danh mục thành công'));
        }
        return redirect()->route('admin.category')->with('errors', __('Xóa danh mục thất bại'));
    }
}
