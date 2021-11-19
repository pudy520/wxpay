<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2021/11/19
 * Time: 9:56
 * YY: 294963672@qq.com
 */

namespace Vvv\WeixinPay;


class WxPay
{

    use Wxpayandroid;

    public $config;

    public function __construct($appid, $mch_id, $api_key)
    {
        $this->config = [
            'appid' => $appid, /*微信开放平台上的应用id*/
            'mch_id' => $mch_id, /*微信申请成功之后邮件中的商户id*/
            'api_key' => $api_key, /*在微信商户平台上自己设定的api密钥 32位*/
        ];
    }

    /**
     * @param array $param
     * 调用统一下单接口生成预支付订单并把数据返回给APP
     */
    public function wxpayandroid(array $param)
    {
        $params = [
            'total_fee' => $param['total_fee'],
            'out_trade_no' => $param['out_trade_no'],
            'body' => $param['body'],
            'notify_url' => $param['notify_url'],
        ];
        return $this->Weixinpayandroid($params);
    }

    //异步通知接口
    public function notify()
    {
        return $this->verifyNotify();
    }
}