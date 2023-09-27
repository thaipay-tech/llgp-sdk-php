<?php

namespace Llgp\LlgpSdkPhp\Response;

class AliOfflinePayResponse
{
    public $order_id;
    public $order_status;
    public $order_amount;
    public $order_currency;
    public $due_date;
    public $link_url;
    public $order_create_time;

    public static function fromMap($map = []) {
        $model = new self();
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
        if(isset($map['due_date'])){
            $model->due_date = $map['due_date'];
        }
        if(isset($map['link_url'])){
            $model->link_url = $map['link_url'];
        }
        if(isset($map['order_create_time'])){
            $model->order_create_time = $map['order_create_time'];
        }
        return $model;
    }
}