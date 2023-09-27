<?php

namespace Llgp\LlgpSdkPhp\Response;

class PayoutQueryResponse
{
    public $merchant_id;
    public $merchant_order_id;
    public $order_id;
    public $order_status;
    public $order_amount;
    public $order_currency;

    public $order_info;
    public $confirm_code;
    public $complete_time;

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
        if(isset($map['order_status'])){
            $model->order_status = $map['order_status'];
        }
        if(isset($map['order_amount'])){
            $model->order_amount = $map['order_amount'];
        }
        if(isset($map['order_currency'])){
            $model->order_currency = $map['order_currency'];
        }
        if(isset($map['order_info'])){
            $model->order_info = $map['order_info'];
        }
        if(isset($map['confirm_code'])){
            $model->confirm_code = $map['confirm_code'];
        }
        if(isset($map['complete_time'])){
            $model->complete_time = $map['complete_time'];
        }
        return $model;
    }
}