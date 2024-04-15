<?php

namespace App\Repositories;

use App\Repositories\BaseRepository;
use App\Models\ProductCategory;
use Illuminate\Support\Facades\DB;

class ProductCategoryRepository extends BaseRepository
{
    public function __construct(ProductCategory $model)
    {
        parent::__construct($model);
    }


    public function getById(int $id = 0)
    {
        return $this->model->where('id', $id)->get()->first();
    }

    public function getAll(array $filter = [])
    {
        return $this->model->all();
    }

    public function getLastDataLitmit($limit = 7)
    {
        return $this->model->orderBy('date','DESC')->limit($limit)->get()->keyBy('date');
    }
}
