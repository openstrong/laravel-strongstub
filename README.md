<h1 align="center">Larevel-StrongStub</h1>
<h3 align="center">在十秒内创建完成 CURD 增删改查的逻辑。</h3>

安装
-------

```
composer require --prefer-dist openstrong/laravel-strongstub
```
使用示例
-------

创建一个包含验证规则的 Eloquent Model 模型
```
php artisan strongstub:model Models/StrongadminUser -t strongadmin_user -c mysql

参数说明：
-t          表名称
-c          数据库连接名称，默认为 mysql，（config/database.php）
--force     是否强制覆盖
```

创建一个 CURD（增删改查）controller class
```
php artisan strongstub:curd Strongadmin/TestAdminUserController -m App\\Models\\StrongadminUser -e App\\Http\\Controllers\\Controller

参数说明：
-m          Eloquent Model 模型
-e          要继承的 controller 控制器，默认缺省值："App\Http\Controllers\Controller"
--force     是否强制覆盖
--view      是否创建 laravel-strongadmin 视图文件,如果是，则 -e 参数值被强制设置为 OpenStrong\StrongAdmin\Http\Controllers\BaseController
```

创建 api 接口 markdown 文档
```
php artisan strongstub:wiki Strongadmin/TestAdminUserController -m App\\Models\\StrongadminUser --force

参数说明：
-m          Eloquent Model 模型
--force     是否强制覆盖
```

创建 laravel-strongadmin 视图文件，这里推荐 使用 https://gitee.com/openstrong/laravel-strongstub 扩展应用：在1分钟内构建一个功能齐全的管理后台。
```
php artisan strongstub:view strongadmin/testAdminUser -t strongadmin_user

参数说明：
-t          表名称
--force     是否强制覆盖
```
