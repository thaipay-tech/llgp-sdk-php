<?php

namespace Llgp\LlgpSdkPhp\Request;

use Llgp\LlgpSdkPhp\Constants\LLPayConstant;

class AliOfflinePayRequest implements LLPayRequest
{
    public $version;
    public $service;
    public $merchant_id;
    public $merchant_order_id;
    public $order_amount;
    public $order_currency;
    public $order_info;
    public $store_id;
    public $payment_type;
    public $buyer_identity_code;
    public $notify_url;

    public function httpMethod(): string
    {
        return LLPayConstant::HTTP_METHOD_POST;
    }
}