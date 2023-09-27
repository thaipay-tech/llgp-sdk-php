<?php

namespace Llgp\LlgpSdkPhp\Response;

class MobileBankingPayResponse
{
    public $order_id;
    public $order_status;
    public $order_amount;
    public $order_currency;
    public $link_url;
    public $create_time;

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
        if(isset($map['link_url'])){
            $model->link_url = $map['link_url'];
        }
        if(isset($map['create_time'])){
            $model->create_time = $map['create_time'];
        }
        return $model;
    }
}