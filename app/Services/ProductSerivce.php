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

    public function getAllPaging(array $filter = [])
    {
        return $this->productRepository->getAllPaging($filter);
    }

    public function getById($id = 0)
    {
        return $this->productRepository->getById($id);
    }

    public function update($id = 0 , $data = [])
    {
        try {
            return $this->productRepository->update($id,$data);
        } catch (\Exception $ex) {
            return false;
        }
    }

    public function destroy($id =0)
    {
        return $this->productRepository->destroy($id);
    }
}
