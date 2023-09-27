<?php

namespace Llgp\LlgpSdkPhp\Response;

class PayoutAccountQueryResponse
{
    public $amount;
    public $frozen_amount;
    public $total_amount;
    public $merchant_id;

    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['amount'])){
            $model->amount = $map['amount'];
        }
        if(isset($map['frozen_amount'])){
            $model->frozen_amount = $map['frozen_amount'];
        }
        if(isset($map['total_amount'])){
            $model->total_amount = $map['total_amount'];
        }
        if(isset($map['merchant_id'])){
            $model->merchant_id = $map['merchant_id'];
        }
        return $model;
    }
}