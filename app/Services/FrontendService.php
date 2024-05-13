<?php

namespace App\Services;

use App\Repositories\ProductRepository;
use App\Repositories\ProductCategoryRepository;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class FrontendService
{
    protected $productRepository;
    protected $categoryRepository;

    /**
     * DiaryService constructor.
     * @param TrnDiaryRepository $trnDiaryRepository
     */
    public function __construct(ProductRepository $productRepository, ProductCategoryRepository $categoryRepository)
    {
        $this->productRepository = $productRepository;
        $this->categoryRepository = $categoryRepository;
    }

    public function getCategory()
    {
        $categoryData = $this->categoryRepository->getAll();
        return $categoryData->where('is_show',1)->sortBy('position')->toArray();
    }

    public function getCategoryLeftMenu()
    {
        $categoryData = $this->categoryRepository->getAll();
        return $categoryData->where('is_show',1)->where('is_show_left_menu',1)->sortBy('position')->toArray();
    }

    public function getProduct()
    {
        $productData = $this->productRepository->getAll();
        return $productData->where('is_show',1)->sortBy('position')->toArray();
    }

    public function getProductGroupCategory()
    {
        $categoryData = $this->getCategory();
        $productData = $this->getProduct();
        $data = [];
        foreach ($categoryData as $category){
            foreach ($productData as $product){
                if($product['category_id'] == $category['category_id']){
                    $data[$category['category_id']][] = $product;
                }
            }
        }
        return $data;
    }

    public function getCategoryBySlug($slug = '')
    {
        return $this->categoryRepository->getBySlug($slug);
    }

    public function getProductBySlug($slug)
    {
        return $this->productRepository->getBySlug($slug);
    }
    public function getProductByCategoryId($category_id = 0)
    {
        $productData = $this->productRepository->getByCategoryId($category_id);
        return $productData->where('is_show',1);
    }

    public function getParentCategoryLeftMenu()
    {
        $categoryData = $this->categoryRepository->getAll();
        $parentId = [];
        foreach ($categoryData as $category){
            if($category->parent > 0){
                $parentId[] =  $category->parent;
            }
        }
        return $categoryData->where('is_show',1)->where('is_show_left_menu',1)->whereIn('category_id',$parentId)->sortBy('position')->toArray();
    }

    public function getCategoryByParentId($parent_id = -1)
    {
        $categoryData = $this->categoryRepository->getByParentId($parent_id);
        return $categoryData->where('is_show',1)->sortBy('position')->toArray();
    }


    public function getProductLeftMenu()
    {
        $productData = $this->productRepository->getAll();
        return $productData->where('is_show',1)->where('is_show_left_menu')->sortBy('position')->toArray();
    }
}
