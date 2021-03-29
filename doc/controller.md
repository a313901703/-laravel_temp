# 控制器


### 基类
controller需要尽量继承自App\Http\Controllers\Api\ApiController 或其子类

ApiController 注册了大部分业务所需要的中间件

```
class ApiController extends BaseController
{
    use MiddleWareTrait;

    public function __construct()
    {
        $this->registerMiddles();
    }
}
```


#### 简单的restful控制器
只需要简单的CURD方法  
可以继承 App\Http\Controllers\Api\RestController

```
<?php

namespace App\Http\Controllers\Ap;


use App\Http\Controllers\Api\RestController;

class TestController extends RestController
{
    public $modelClass = "App\Models\TestModel"; 
}

```


### 非restful控制器

不存在CURD方法，例如统计和报表

尽量继承App\Http\Controllers\Api\ApiController


