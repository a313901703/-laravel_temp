# 环境配置

### 添加配置
存储在 .env 和 config/app.php 文件中，然后使用 config() 函数来读取

### 配置缓存
配置信息缓存
生产环境中的 应该 使用『配置信息缓存』来加速 Laravel 配置信息的读取。

使用以下 Artisan 自带命令，把 config 文件夹里所有配置信息合并到一个文件里，减少运行时文件的载入数量：

```
php artisan config:cache
```

缓存文件存放在 bootstrap/cache/ 文件夹中。

可以使用以下命令来取消配置信息缓存：

```
php artisan config:clear
```

### 路由缓存
路由缓存
生产环境中的 应该 使用『路由缓存』来加速 Laravel 的路由注册。

路由缓存可以有效的提高路由器的注册效率，在大型应用程序中效果越加明显，可以使用以下命令

```
php artisan route:cache
```
缓存文件存放在 bootstrap/cache/ 文件夹中。另外，路由缓存不支持路由匿名函数编写逻辑

可以使用下面命令清除路由缓存：

```
php artisan route:clear
```
注意：路由缓存不会随着更新而自动重载，所以，开发时候建议关闭路由缓存，一般在生产环境中使用。可以配合 Envoy 任务运行器 使用，在每次上线代码时执行 route:clear 命令。


### 自动加载优化
此命令不止针对于 Laravel 程序，适用于所有使用 composer 来构建的程序。此命令会把 PSR-0 和 PSR-4 转换为一个类映射表，来提高类的加载速度。

```
composer dumpautoload 
```


