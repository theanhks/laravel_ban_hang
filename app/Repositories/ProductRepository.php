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
        $date = $filter['date'];
        return $this->model->when(!empty($date), function ($query) use ($date) {
            return $query->where(DB::raw('DATE_FORMAT(date,"%Y-%m")'), $date);
        })->get()->keyBy('date');
    }

    public function insert($data = [])
    {
        $newProduct = $this->model->create($data);
        return $newProduct;
    }
}
