<?php

namespace App\Components;

use \Exception;

class Service
{
    public $_instance;

    protected $namespace = "App\Services";

    protected $service = [];

    public function __construct()
    {
        
    }

    public function __get($serviceName = null)
    {
        if ($serviceName) {
            $service = $this->get($serviceName);
            if ($service) {
                return $service;
            }
        }
        throw new \Exception("service not fund", 404);
    }

    public function get($name, $params = [])
    {
        $name = ucfirst($name);
        if (isset($this->service[$name])) {
            return $this->service[$name];
        }

        $reflection = $this->getReflectionClass($this->namespace . '\\' . $name . 'Service');
        if (!$reflection) {
            throw new Exception('Failed to instantiate component or class "' . $name . '".', 500);
        }
        $service = $reflection->newInstanceArgs([$params]);
        $this->service[$name] = $service;

        return $service;
    }

    protected function getReflectionClass($class)
    {
        try {
            $reflection = new \ReflectionClass($class);
        } catch (\ReflectionException $e) {
            $reflection = null;
        }
        return $reflection;
    }
}
