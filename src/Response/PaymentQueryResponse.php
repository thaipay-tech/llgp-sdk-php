<?php

namespace Llgp\LlgpSdkPhp\Response;

class PaymentQueryResponse
{
    public $merchant_id;
    public $merchant_order_id;
    public $order_id;
    public $order_status;
    public $order_amount;
    public $order_currency;
    public $order_desc;
    public $product_code;
    public $payment_method;
    public $customer;
    public $products;
    public $create_time;
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
        if(isset($map['order_desc'])){
            $model->order_desc = $map['order_desc'];
        }
        if(isset($map['product_code'])){
            $model->product_code = $map['product_code'];
        }
        if(isset($map['payment_method'])){
            $model->payment_method = $map['payment_method'];
        }
        if(isset($map['customer'])){
            $model->customer = $map['customer'];
        }
        if(isset($map['products'])){
            $model->products = $map['products'];
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