<?php

namespace Llgp\LlgpSdkPhp\Response;

class LLPayResponse
{
    protected $_name = [
        'code' => 'code',
        'data' => 'data',
        'message' => 'message',
        'traceId' => 'trace_id',
    ];

    public function toMap() {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->data) {
            $res['data'] = $this->data;
        }
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }
        if (null !== $this->traceId) {
            $res['trace_id'] = $this->traceId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return LLPayResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['code'])){
            $model->code = $map['code'];
        }
        if(isset($map['data'])){
            $model->data = $map['data'];
        }
        if(isset($map['message'])){
            $model->message = $map['message'];
        }
        if(isset($map['trace_id'])){
            $model->traceId = $map['trace_id'];
        }
        return $model;
    }

    public $code;

    public $data;

    public $message;

    public $traceId;
}