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

    public function getBySlug($slug = '')
    {
        return $this->model->where('slug', $slug)->get()->first();
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
        if (!empty($filter['category_name'])) {
            $name = trim($filter['category_name']);
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
        $model = ProductCategory::where('category_id', $id)->first();
        $model->fill($data);
        return  $model->save();
        //return $this->model->where('category_id', $id)->update($data);
    }

    public function destroy($id): bool
    {
        return $this->model->where('category_id',$id)->delete();
    }

    public function getByParentId($parent_id =0)
    {
        return $this->model->where('parent', $parent_id)->get();
    }
}
