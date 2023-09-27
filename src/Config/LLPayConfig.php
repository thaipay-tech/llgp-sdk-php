<?php

namespace Llgp\LlgpSdkPhp\Config;

class LLPayConfig
{
    public static $sandboxServerUrl = 'https://sandbox-th.lianlianpay-inc.com/gateway';

    public static $prodServerUrl = 'https://api.lianlianpay.co.th/gateway';

    public static $CURRENCY = ['THB', 'USD'];

    public static $MERCHANT_ID = "/^14\\d{16}$/";

    /**
     * amount greater than 1
     */
    public static $AMOUNT_GT_ONE = "/^[1-9](\\d{1,8})?(\\.(\\d{1,2}))?$/";

    public static $BANK_ACCOUNT_NO = "/^\\d{10,18}$/";

    public static $BANK_CODE = "/^\\d{3}$/";

    public static $MOBILE_NO = "/^\\d{10,12}$/";

    public static $PAYMENT_TYPE = "/^[A-Z_]+$/";
}