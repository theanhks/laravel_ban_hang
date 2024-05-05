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
        return $categoryData->where('is_show',1)->toArray();
    }

    public function getProduct()
    {
        $productData = $this->productRepository->getAll();
        return $productData->where('is_show',1)->toArray();
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

}
