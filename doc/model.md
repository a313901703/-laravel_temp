# Model
所有的数据模型文件，都 必须 存放在：app/Models/ 文件夹中

所有的 Eloquent 数据模型 都 必须 继承统一的基类 App\Models\Model

非Eloquent 可以不继承

### 命名规范
+ 数据模型类名 必须 为「单数」, 如：App\Models\Photo
+ 类文件名 必须 为「单数」，如：app/Models/Photo.php
+ 数据库表名字 必须 为「复数」，多个单词情况下使用「Snake Case」 如：photos, my_photos
+ 数据库表迁移名字 必须 为「复数」，如：2014_08_08_234417_create_photos_table.php
+ 数据填充文件名 必须 为「复数」，如：PhotosTableSeeder.php
+ 数据库表主键 必须 为「id」
+ 数据库表外键 必须 为「resource_id」，如：user_id, post_id
+ 数据模型变量 必须 为「resource_id」，如：$user_id, $post_id

### 利用 Trait 来扩展数据模型
参考 validateTrait.php


### 时间格式

```
protected $dateFormat = 'U';  //使用unix 时间戳
 
protected $dateFormat = 'Y-m-d H:i:s';  //使用datetime格式
```

### 软删除

使用框架自带软删除

```
//引入软删除
use Illuminate\Database\Eloquent\SoftDeletes;

class Kiosk extends BaseModel
{
    use SoftDeletes;
}

//执行delete方法即可软删除
Kiosk::where('id',1)->first()->delete();

```

另外在使用模型relations时 需要特别注意软删除是否生效


### 迁移
+ 使用 数据库迁移 去创建表结构，并提交版本控制器中
+ 所有修改都 必须 使用 数据库迁移 ，并提交版本控制器中
+ 所有数据填充需要使用seed



