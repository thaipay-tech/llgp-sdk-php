<?php

namespace Llgp\LlgpSdkPhp\Constants;

class LLPayConstant
{
    const LOG_FILE_NAME = "access_log.txt";

    /**
     * http header constants
     */
    const CONTENT_TYPE = "application/json";
    const SIGN_TYPE = "RSA";

    /**
     * service constants
     */
    const SERVICE_VERSION = "v1";

    // payment services
    const CHECKOUT_PAY_SERVICE = "llpth.checkout.apply";
    const QR_PROMPT_SERVICE = "llpth.thaiqr.pay";
    const ALIPAY_ONLINE_SERVICE = "llpth.alipay.pay";
    const ALIPAY_OFFLINE_SERVICE = "llpth.alipay.offline.pay";
    const WECHAT_PAY_SERVICE = "llpth.wechatpay.pay";
    const BANKCARD_PAY_SERVICE = "llpth.bankcard.pay";
    const MOBILE_BANKING_SERVICE = "llpth.mobile.banking.pay";
    const TRUE_MONEY_SERVICE = "llpth.truemoney.pay";
    const SHOPEE_PAY_SERVICE = "llpth.shopeepay.pay";
    const LINE_PAY_SERVICE = "llpth.linepay.pay";
    const COUNTER_PAY_SERVICE = "llpth.counter.pay";
    const PAYMENT_QUERY_SERVICE = "llpth.payment.query";

    // refund services
    const REFUND_APPLY_SERVICE = "llpth.refund.apply";
    const REFUND_QUERY_SERVICE = "llpth.refund.query";

    // payout services
    const PAYOUT_APPLY_SERVICE = "llpth.disbursal.instant.apply";
    const PAYOUT_TRUE_MONEY_SERVICE = "llpth.disbursal.instant.apply.truemoney";
    const PAYOUT_CONFIRM_SERVICE = "llpth.disbursal.instant.confirm";
    const PAYOUT_QUERY_SERVICE = "llpth.disbursal.instant.query";
    const PAYOUT_ACCOUNT_QUERY_SERVICE = "llpth.disbursal.instant.query.balance";

    const HTTP_METHOD_GET = "GET";
    const HTTP_METHOD_POST = "POST";
}