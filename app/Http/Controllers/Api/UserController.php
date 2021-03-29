<?php

namespace App\Http\Controllers\Api;

class UserController extends ApiController
{
    public function index()
    {
        return response()->success(app('service')->user->list());
    }
}