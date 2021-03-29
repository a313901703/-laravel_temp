# 中间件
中间件存放在 App\Http\Middleware 中

中间件尽量在基类 App\Http\Controllers\Api\ApiController 或 App\Http\Controllers\Api\MiddleWareTrait 中使用

个别功能需要的特殊中间件可以根据业务逻辑单独使用

```
class ApiController extends BaseController
{
    use MiddleWareTrait;

    public function __construct()
    {
        $this->registerMiddles();  // 注册所有中间件
    }
}

Trait MiddleWareTrait
{
    public function registerMiddles()
    {
        $this->registerAuthMiddleware();  //注册auth 中间件 验证token
        //TODO 注册其他中间件  例如 permissionMiddle
    }
}
``` 
