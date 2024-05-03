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
        return $this->model->where('category_id', $id)->get()->first();
    }

    public function getAll(array $filter = [])
    {
        return $this->model->all();
    }

    public function getLastDataLitmit($limit = 7)
    {
        return $this->model->orderBy('date','DESC')->limit($limit)->get()->keyBy('date');
    }

    public function getAllPaging($filter = [])
    {
        $category = $this->model->latest();
        if (!empty($filter['name'])) {
            $name = trim($filter['name']);
            $category->where('category_name', 'like', '%' . $name . '%');

        }

        return $category;
    }

    public function insert($data = [])
    {
        $newCategory = $this->model->create($data);
        return $newCategory;
    }

    public function update($id,$data = [])
    {
        return $this->model->where('category_id', $id)->update($data);
    }
}
