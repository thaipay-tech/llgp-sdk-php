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
    public $notify_url;
    public $redirect_url;
    public $auth_code;
    public $appid;
    public $openid;
    public $customer;
    public $client;
    public $products;
    
    public function httpMethod(): string
    {
        return LLPayConstant::HTTP_METHOD_POST;
    }
}