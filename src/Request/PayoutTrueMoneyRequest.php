<?php

namespace Llgp\LlgpSdkPhp\Request;

use Llgp\LlgpSdkPhp\Constants\LLPayConstant;

class PayoutTrueMoneyRequest implements LLPayRequest
{
    public $version;
    public $service;
    public $merchant_id;
    public $merchant_order_id;
    public $order_amount;
    public $order_currency;
    /**
     * TrueMoney account number
     */
    public $payee_account;
    public $order_info;
    public $notify_url;
    public $memo;
    
    public function httpMethod(): string
    {
        return LLPayConstant::HTTP_METHOD_POST;
    }
}