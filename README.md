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
php artisan strongstub:model Models/StrongadminUser --table=strongadmin_user --force
```

创建一个 CURD（增删改查）controller class
```
php artisan strongstub:curd StrongAdmin/AdminUserController --model=App\\Models\\StrongadminUser --force
```

创建 api 接口 markdown 文档
```
php artisan strongstub:wiki StrongAdmin/AdminUserController --model=App\\Models\\StrongadminUser --force
```

创建 laravel-strongadmin 视图文件
```
php artisan strongstub:view strongadmin/adminUser --table=strongadmin_user --force
```
