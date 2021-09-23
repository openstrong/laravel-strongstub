# laravel-strongstub
在十秒内创建完成 CURD 增删改查的逻辑。

安装
-------

```
composer require --prefer-dist openstrong/laravel-strongstub
```
使用示例
-------

创建一个包含验证规则的 Eloquent Model 模型
```
php artisan strongstub:model Models/StrongadminUser -t strongadmin_user
-t          表名称
--force     是否强制覆盖
```

创建一个 CURD（增删改查）controller class
```
php artisan strongstub:curd StrongAdmin/AdminUserController -m App\\Models\\StrongadminUser
-m          Eloquent Model 模型
--force     是否强制覆盖
--view      是否创建 laravel-strongadmin 视图文件
```

创建 api 接口 markdown 文档
```
php artisan strongstub:wiki StrongAdmin/AdminUserController -m App\\Models\\StrongadminUser --force
-m          模型
--force     是否强制覆盖
```

创建 laravel-strongadmin 视图文件，这里推荐 使用 `composer require openstrong/laravel-strongadmin` 扩展应用：在一分钟内构建完成功能完善的后台管理
```
php artisan strongstub:view strongadmin/adminUser -t strongadmin_user
-t          表名称
--force     是否强制覆盖
```
