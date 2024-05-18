<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\ProductCategoryService;
use Illuminate\Http\Request;
use App\Services\ProductSerivce;
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

    public function index(Request $request)
    {
        $productCategoryData = $this->productCategoryService->getAll()->toArray();
        $productData = $this->productService->getAllPaging($request->all())->paginate(10);
        return view('admin.product.index',[
            'productCategoryData' => $productCategoryData,
            'productData' => $productData
        ]);
    }

    public function getProductCategory(Request $request)
    {
        $productCategoryData = $this->productCategoryService->searchByName($request->q);

        return response()->json($productCategoryData);
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
        $data['is_show'] = !empty($data['is_show']) ? 1 : 0;
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
            $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $path = $file->storeAs('images/product', $name, 'public');

            // Lấy URL của hình ảnh
            return ('/storage/' . $path);

            // Bây giờ bạn có thể lưu URL vào cơ sở dữ liệu hoặc thực hiện các thao tác khác với nó
        }
        return '';
    }

    public function edit($id)
    {
        $product = $this->productService->getById($id);
        if(!$product){
            return redirect()->route('admin.product')->with('errors', __('Không tìm thấy sản phẩm'));
        }
        $productCategoryData = $this->productCategoryService->getAll()->toArray();
        return view('admin.product.edit',['product'=>$product,'productCategoryData' => $productCategoryData]);
    }

    public function update(ProductRequest $request, $id =0)
    {
        $data = $request->except('_token');
        $data['image'] = $this->upload($request);
        if(!$data['image']){
            unset($data['image']);
        }
        $data['is_show'] = !empty($data['is_show']) ? 1 : 0;
        $data = $this->productService->update($id,$data);
        if($data){
            return redirect()->route('admin.product')->with('success', __('Bạn đã cập nhật sản phẩm thành công'));
        }else{
            return redirect()->route('admin.product')->with('errors', __('Có lỗi hệ thống vui lòng nhập lại sản phẩm'));
        }
    }

    public function destroy(int $id = 0)
    {
        $product = $this->productService->getById($id);
        if(!$product){
            return redirect()->route('admin.product')->with('errors', __('Không tìm thấy sản phẩm'));
        }
        $product = $this->productService->destroy($id);
        if ($product) {
            return redirect()->route('admin.product')->with('success', __('Xóa sản phẩm thành công'));
        }
        return redirect()->route('admin.product')->with('errors', __('Xóa sản phẩm thất bại'));
    }
}
