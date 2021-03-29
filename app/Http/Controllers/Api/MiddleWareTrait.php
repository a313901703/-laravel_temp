<?php
namespace App\Http\Controllers\Api;

use Illuminate\Support\Arr;

Trait MiddleWareTrait
{
    protected $rules = [

    ];

    protected $authType = 'api';

    protected $except = 'login';

    public function registerMiddles()
    {
        $this->registerAuthMiddleware();

    }

    protected function registerAuthMiddleware()
    {
        if ($this->except !== '*') {
            $authType = $this->authType;
            $this->middleware("auth:{$authType}",['except'=>$this->except]);
        }
    }
}

?>
