<?php

namespace App\Repositories;

use App\Repositories\BaseRepository;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserRepository extends BaseRepository
{
    public function __construct(User $model)
    {
        parent::__construct($model);
    }

    // public function getAll(array $filter = [])
    // {
    //     return $this->model->all();
    // }

    public function insert($data = [])
    {
        $newUser = $this->model->create($data);
        return $newUser;
    }

    public function update($id, $data = [])
    {
        $updateUser = $this->model->where('id', $id)->update($data);
        return $updateUser;
    }
}
