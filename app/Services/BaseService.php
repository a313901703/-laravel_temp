<?php

namespace App\Services;


class BaseService
{
    public function __construct($params = [])
    {
        $this->loadParams($params);
    }

    private function loadParams($params)
    {
        foreach ($params as $key => $param) {
            if(!property_exists($this,$key)){
                throw new \Exception("Undefined property $key");
            }
            $this->$key = $param;
        }
    }
}
