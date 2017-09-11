<?php
return [
    'password' => env('SMS_ACCESSYOU_PWD', ''), //SMS网关登录密码
    'account' => env('SMS_ACCESSYOU_ACCESS', ''), //SMS网关登录账户
    'api_phone_number' => env('SMS_PHONE_NO', ''), //SMS网关来源电话号码
    'from' => env('SMS_SENDER_ID', ''), //SMS Sender ID
    'pretend' => env('SMS_PRETEND', true), //伪装模式
    'whitelist' => [], //发送白名单
];