<?php

namespace App\Repositories;

use App\Repositories\Models\User;

class UserRepository extends AbstractRepository
{
    /**
     * UserRepository constructor.
     */
    public function __construct()
    {
        $this->model = new User();
    }
}

