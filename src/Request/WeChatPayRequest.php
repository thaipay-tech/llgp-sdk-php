<?php

namespace Llgp\LlgpSdkPhp\Request;

use Llgp\LlgpSdkPhp\Constants\LLPayConstant;

class WeChatPayRequest implements LLPayRequest
{
    public $version;
    public $service;
    public $merchant_id;
    public $merchant_order_id;
    public $order_amount;
    public $order_currency;
    public $order_info;

    public $store_id;
    public $payment_method;
    public $customer;
    public $products;
    public $notify_url;
    public $auth_code;
    public $appid;
    public $openid;
    
    public function httpMethod(): string
    {
        return LLPayConstant::HTTP_METHOD_POST;
    }
}