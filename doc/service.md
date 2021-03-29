## 将service做成服务

app\providers\AppServiceProvider.php

```
public function register()
{
    $this->app->singleton('service',Service::class);
}
```

## 编写service业务代码
1.必须继承 App\Services\BaseService

2.service写在App\Services目录下


## 在控制器中使用service

```
class TestController extends BaseController
{
    public function createUser()
    {
        // 方式1
        app('service')->get('user')->create();

        // 方式2
        app('service')->user->create();
    }
}
```
