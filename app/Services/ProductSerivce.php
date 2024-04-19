<?php

namespace App\Services;

use App\Repositories\ProductRepository;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class ProductSerivce
{
    protected $productRepository;

    /**
     * DiaryService constructor.
     * @param TrnDiaryRepository $trnDiaryRepository
     */
    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
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

    public function insert($data)
    {
        try {
            return $this->productRepository->insert($data);
        } catch (\Exception $ex) {
            return false;
        }

    }

}
