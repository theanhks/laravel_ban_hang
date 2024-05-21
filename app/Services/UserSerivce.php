<?php

namespace App\Services;

use App\Repositories\UserRepository;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class UserSerivce
{
    protected $userRepository;

    /**
     * DiaryService constructor.
     * @param TrnDiaryRepository $trnDiaryRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * @param array $filter
     * @param bool $paginate
     * @return mixed
     */
    // public function getAll(array $filter = [], bool $paginate = true)
    // {
    //     return $this->productRepository->getAll($filter, $paginate);
    // }

    public function insert($data)
    {
        try {
            return $this->userRepository->insert($data);
        } catch (\Exception $ex) {
            return false;
        }

    }

    public function update($id = 0, $data = [])
    {
        try {
            return $this->userRepository->update($id, $data);
        } catch (\Exception $ex) {
            return false;
        }
    }

}
