<?php

namespace Llgp\LlgpSdkPhp\Request;

use Llgp\LlgpSdkPhp\Constants\LLPayConstant;

class PayoutConfirmRequest implements LLPayRequest
{
    public $version;
    public $service;
    public $merchant_id;
    public $merchant_order_id;

    public $confirm_code;
    public $notify_url;
    
    public function httpMethod(): string
    {
        return LLPayConstant::HTTP_METHOD_POST;
    }
}