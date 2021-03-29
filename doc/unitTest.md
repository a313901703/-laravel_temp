# phpUnit

### laravel已自带 无需安装

### 配置
+ phpunit配置文件为./phpunit.xml

添加测试套件
```
<testsuites>
    <testsuite name="Unit">
        <directory suffix="Test.php">./tests/Unit</directory>
    </testsuite>
    <testsuite name="Feature">
        <directory suffix="Test.php">./tests/Feature</directory>
    </testsuite>

</testsuites>
```

+ 新建testing数据库  并复制.env文件为.env.testing ,修改数据库信息为testing数据库

### 编写测试文件

测试代码存放在tests目录下
```
tests
    Feature             //通用功能测试目录
    Unit                //通用单元测试目录
```

代码量少且独立的代码使用单元测试，业务为主且逻辑复杂的代码使用功能测试

Feature test 示例

```
namespace Tests\Coffee\Feature\Admin;

use Tests\Laundry\TestRestCase;
use App\Models\User;

class UserTest extends TestRestCase     // RestCase 简单封装了常用的restful的请求格式
{

    public $source = '/api/admin/users';   // restful 资源定义

    public function setUp() :void
    {
        parent::setUp();                    
        $this->generateToken();                 // 生成请求token
    }

    /**
     * @return void
     */
    public function testIndex() :void
    {
        factory(User::class,20)->create();            // 使用factory生成测试数据
        $response = $this->withToken($this->token)->json('GET', $this->source);
        $response->assertStatus(200);                    // 验证数据格式
        $response->assertJsonPath('status_code', 200);
        $response->assertJsonStructure([
            'message',
            'status_code',
            'data' => [

            ]
        ]);
    }

    //TODO  其他测试
}
```

### 使用setUp 和 factory建造基境

每一个测试类的测试方法都会执行setUp方法，因此可以使用setUp方法为当前测试建立基境

使用factory可以为数据库提供模拟数据，以此模拟真正的数据环境

```
public function setUp() :void
{
    parent::setUp();                    
    $this->generateToken();                 // 生成请求token
}
```

##### 创建factory模型工厂
```
php artisan make:factory AdminUserFactory --model=AdminUser
```

##### 编写factory
```
$factory->define(AdminUser::class, function (Faker $faker) {
    return [
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => bcrypt("123456"), // password
        'first_name' => $faker->name,
        'remember_token' => Str::random(10),
        'mobile_number' => rand(100000,999999),
        'role' => 1,
        'invite_code' => Str::random(6),
    ];
});
```

##### 使用factory

factory建好后laravel会自动和对应的model建立联系

```
//创建1个admin
$user = factory(\App\Models\AdminUser::class)->create();

//创建100个admin
$user = factory(\App\Models\AdminUser::class,100)->create();
```

### 每次测试后重置数据库
```
use Illuminate\Foundation\Testing\RefreshDatabase;
class ExampleTest extends TestCase
{
    use RefreshDatabase;
}
```

### 执行测试

```
php .\artisan test  //测试全部功能

php .\artisan test .\tests\Unit 测试通用单元

php .\artisan test .\tests\Laundry 测试laundry功能
```


### 生成测试报告
```
./vendor/bin/phpunit

```

测试报告存放在 ./test-result/report目录下

直接打开index.html可查看

