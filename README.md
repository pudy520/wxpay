

微信App支付
## 运行环境

- php >= 7.0
- composer

## 安装

```Shell
$ composer require vvv/weixin-pay
```
## 使用
```
  $wexin = new  WxPay($appid, $mch_id, $api_key);
   $params = [
              'total_fee' => 1, //单位分
              'out_trade_no' =>  time(),
              'body' => 'subject-测试',
              'notify_url' => '回调地址',
          ];
  return   $wexin->wxpayandroid($params);
  
  //异步回调
  
    return   $wexin->notify();

```

## License

MIT
