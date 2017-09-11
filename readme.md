# AccessYou 

Driver 使用的SMS网关接口 Laravel 插件


## 安装

- 使用`composer`引入
  ```
  composer require mmhk/accessyou
  ```
  

- 将 `providers` 添加到 `config/app.php`
  ```
   MMHK\AccessYou\AccessYouServiceProvider::class,
  ```
  
- 添加配置文件
  
  ```
  php artisan vendor:publish --provider="MMHK\AccessYou\AccessYouServiceProvider" --tag=config
  ```
  
  
## 配置

可用的`.env` 配置如下，其他配置请发布后修改 `config/sms.php`
```
# SMS网关登录密码
SMS_ACCESSYOU_PWD=
# SMS网关登录账户
SMS_ACCESSYOU_ACCESS=
# SMS网关来源电话号码
SMS_PHONE_NO=
# SMS Sender ID
SMS_SENDER_ID=
# 伪装模式 true | false
SMS_PRETEND=
```