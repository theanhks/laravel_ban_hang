<?php

namespace App\Services;

use App\Repositories\ProductCategoryRepository;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class ProductCategoryService
{
    protected $productCategoryRepository;

    /**
     * DiaryService constructor.
     * @param TrnDiaryRepository $trnDiaryRepository
     */
    public function __construct(ProductCategoryRepository $productCategoryRepository)
    {
        $this->productCategoryRepository = $productCategoryRepository;
    }

    /**
     * @param array $filter
     * @param bool $paginate
     * @return mixed
     */
    public function getAll(array $filter = [], bool $paginate = true)
    {
        return $this->productCategoryRepository->getAll($filter, $paginate);
    }

    public function getAllPaging(array $filter = [])
    {
        return $this->productCategoryRepository->getAllPaging($filter);
    }

    public function insert($data = [])
    {
        try {
            return $this->productCategoryRepository->insert($data);
        } catch (\Exception $ex) {
            return false;
        }
    }
}
