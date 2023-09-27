<?php

namespace Llgp\LlgpSdkPhp\Response;

class RefundApplyResponse
{
    public $merchant_id;
    public $refund_order_id;
    public $merchant_refund_id;
    public $refund_amount;
    public $refund_currency;
    public $refund_status;
    public $create_time;

    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['merchant_id'])){
            $model->merchant_id = $map['merchant_id'];
        }
        if(isset($map['refund_order_id'])){
            $model->refund_order_id = $map['refund_order_id'];
        }
        if(isset($map['merchant_refund_id'])){
            $model->merchant_refund_id = $map['merchant_refund_id'];
        }
        if(isset($map['refund_amount'])){
            $model->refund_amount = $map['refund_amount'];
        }
        if(isset($map['refund_currency'])){
            $model->refund_currency = $map['refund_currency'];
        }
        if(isset($map['refund_status'])){
            $model->refund_status = $map['refund_status'];
        }
        if(isset($map['create_time'])){
            $model->create_time = $map['create_time'];
        }
        return $model;
    }
}