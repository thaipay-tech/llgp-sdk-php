<?php

namespace Llgp\LlgpSdkPhp\Response;

class RefundQueryResponse
{
    public $merchant_id;
    public $merchant_refund_id;
    public $merchant_order_id;
    public $order_id;
    public $refund_order_id;
    public $refund_status;
    public $refund_amount;
    public $refund_currency;
    public $refund_reason;
    public $notify_url;
    public $create_time;
    public $complete_time;

    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['merchant_id'])){
            $model->merchant_id = $map['merchant_id'];
        }
        if(isset($map['merchant_refund_id'])){
            $model->merchant_refund_id = $map['merchant_refund_id'];
        }
        if(isset($map['merchant_order_id'])){
            $model->merchant_order_id = $map['merchant_order_id'];
        }
        if(isset($map['order_id'])){
            $model->order_id = $map['order_id'];
        }
        if(isset($map['refund_order_id'])){
            $model->refund_order_id = $map['refund_order_id'];
        }
        if(isset($map['refund_status'])){
            $model->refund_status = $map['refund_status'];
        }
        if(isset($map['refund_amount'])){
            $model->refund_amount = $map['refund_amount'];
        }
        if(isset($map['refund_currency'])){
            $model->refund_currency = $map['refund_currency'];
        }
        if(isset($map['refund_reason'])){
            $model->refund_reason = $map['refund_reason'];
        }
        if(isset($map['notify_url'])){
            $model->notify_url = $map['notify_url'];
        }
        if(isset($map['create_time'])){
            $model->create_time = $map['create_time'];
        }
        if(isset($map['complete_time'])){
            $model->complete_time = $map['complete_time'];
        }
        return $model;
    }
}