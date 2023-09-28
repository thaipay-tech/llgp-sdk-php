<?php

namespace Llgp\LlgpSdkPhp\Request;

use Llgp\LlgpSdkPhp\Constants\LLPayConstant;

class CheckoutPayRequest implements LLPayRequest
{
    public $merchant_id;

    public $store_id;

    public $biz_type;

    public $biz_code;

    public $service;

    public $version;

    public $merchant_order_id;

    public $payment_method;

    public $payment_type;

    public $order_currency;

    public $order_amount;

    public $order_info;

    public $order_desc;

    public $due_date;

    public $notify_url;

    public $redirect_url;

    public $customer;

    public $products;

    public $client_type;

    public function httpMethod(): string
    {
        return LLPayConstant::HTTP_METHOD_POST;
    }
}