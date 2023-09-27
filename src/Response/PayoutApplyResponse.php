<?php

namespace Llgp\LlgpSdkPhp\Response;

class PayoutApplyResponse
{
    public $merchant_id;
    public $merchant_order_id;
    public $order_id;
    public $confirm_code;

    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['merchant_id'])){
            $model->merchant_id = $map['merchant_id'];
        }
        if(isset($map['merchant_order_id'])){
            $model->merchant_order_id = $map['merchant_order_id'];
        }
        if(isset($map['order_id'])){
            $model->order_id = $map['order_id'];
        }
        if(isset($map['confirm_code'])){
            $model->confirm_code = $map['confirm_code'];
        }
        return $model;
    }
}