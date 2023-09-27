<?php

namespace Llgp\LlgpSdkPhp\Request;

use Llgp\LlgpSdkPhp\Constants\LLPayConstant;

class MobileBankingPayRequest implements LLPayRequest
{
    public $version;
    public $service;
    public $merchant_id;
    public $merchant_order_id;
    public $order_amount;
    public $order_currency;
    public $order_desc;

    public $payment_method;
    public $customer;
    public $products;
    public $notify_url;

    public $app_callback_url;
    public $mobile_number;
    
    public function httpMethod(): string
    {
        return LLPayConstant::HTTP_METHOD_POST;
    }
}