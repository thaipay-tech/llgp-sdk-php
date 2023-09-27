<?php

namespace Llgp\LlgpSdkPhp\Request;

use Llgp\LlgpSdkPhp\Constants\LLPayConstant;

class RefundApplyRequest implements LLPayRequest
{
    public $version;
    public $service;
    public $merchant_id;
    public $merchant_refund_id;
    public $merchant_order_id;
    public $refund_amount;
    public $refund_currency;
    public $refund_reason;
    public $notify_url;

    /**
     * for payment types that channel not supported refund,
     * these parameters required. Such as: QR_PROMPT, MOBILE_BANKING, COUNTER_PAY
     */
    public $bank_code;
    public $account_no;
    public $account_name;
    
    public function httpMethod(): string
    {
        return LLPayConstant::HTTP_METHOD_POST;
    }
}