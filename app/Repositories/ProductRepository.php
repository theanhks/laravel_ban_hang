<?php

namespace App\Repositories;

use App\Repositories\BaseRepository;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductRepository extends BaseRepository
{
    public function __construct(Product $model)
    {
        parent::__construct($model);
    }

    public function getByDate(string $date = '')
    {
        return $this->model->where('date', $date)->get()->first();
    }

    public function getById(int $id = 0)
    {
        return $this->model->where('id', $id)->get()->first();
    }

    public function getAll(array $filter = [])
    {
        return $this->model->all();
    }

    public function getByCategoryId($category_id = 0)
    {
        return $this->model->where('category_id', $category_id)->get();
    }

    public function insert($data = [])
    {
        $newProduct = $this->model->create($data);
        return $newProduct;
    }

    public function getAllPaging($filter = [])
    {
        $product = $this->model->latest();
        if (!empty($filter['category_id'])) {
            $category_id = trim($filter['name']);
            $product->where('category_id', $category_id);

        }
        if (!empty($filter['name'])) {
            $name = trim($filter['name']);
            $product->where('name', 'like', '%' . $name . '%');

        }

        return $product;
    }

    public function getBySlug($slug = '')
    {
        return $this->model->where('slug', $slug)->get()->first();
    }

}
