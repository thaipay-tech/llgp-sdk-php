<?php

namespace Llgp\LlgpSdkPhp\Request;

use Llgp\LlgpSdkPhp\Constants\LLPayConstant;

class PaymentQueryRequest implements LLPayRequest
{
    public $version;
    public $service;
    public $merchant_id;
    public $merchant_order_id;

    public function httpMethod(): string
    {
        return LLPayConstant::HTTP_METHOD_GET;
    }
}