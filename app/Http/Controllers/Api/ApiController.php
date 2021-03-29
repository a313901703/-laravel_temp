<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller as BaseController;


class ApiController extends BaseController
{
    use MiddleWareTrait;

    public function __construct()
    {
        $this->registerMiddles();
    }
}
