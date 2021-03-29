<?php

namespace App\Services;

use App\Models\User;

class UserService extends BaseService
{
    public function list()
    {
        return User::all();
    }
}
