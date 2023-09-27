<?php

namespace Llgp\LlgpSdkPhp\Request;

use Llgp\LlgpSdkPhp\Config\LLPayConfig;
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

    public function validate()
    {
        if (is_null($this->service)) {
            return "parameter [service] blank";
        }
        if (empty($this->merchant_id) ||
            !preg_match(LLPayConfig::$MERCHANT_ID, $this->merchant_id)) {
            return "parameter [merchant_id] invalid";
        }
        if (empty($this->merchant_order_id) ||
            strlen($this->merchant_order_id) > 64) {
            return "parameter [merchant_order_id] invalid";
        }
        if (empty($this->order_amount) ||
            !preg_match(LLPayConfig::$AMOUNT_GT_ONE, $this->order_amount)) {
            return "parameter [order_amount] invalid";
        }
        if (!in_array($this->order_currency, LLPayConfig::$CURRENCY)) {
            return "parameter [order_currency] invalid";
        }
        if (empty($this->order_desc) ||
            strlen($this->order_desc) > 256) {
            return "parameter [order_desc] invalid";
        }
        if (!empty($this->interest_absorb) && ($this->interest_absorb != 'MERCHANT')
            && ($this->interest_absorb != 'USER')) {
            return "parameter [interest_absorb] invalid";
        }
        $isValid = !empty($this->payment_method) && (strlen($this->payment_method) > 64
                || !preg_match('', $this->payment_method));
        if ($isValid) {
            return "parameter [payment_method] invalid";
        }
        if (is_null($this->customer) || empty($this->customer->merchant_user_id)
            || empty($this->customer->full_name)) {
            return "parameter [customer] invalid";
        }
        if (strlen(json_encode($this->customer, JSON_PRETTY_PRINT)) > 1024) {
            return "parameter [customer] info too long";
        }
        if (!is_null($this->products) && sizeof($this->products) > 0
            && strlen(json_encode($this->products, JSON_PRETTY_PRINT)) > 4000) {
            return "parameter [products] info too long";
        }
        if (empty($this->notify_url) || strlen($this->notify_url) > 256) {
            return "parameter [notify_url] invalid";
        }
        if (empty($this->redirect_url) || strlen($this->redirect_url) > 256) {
            return "parameter [redirect_url] invalid";
        }
        return null;
    }
}