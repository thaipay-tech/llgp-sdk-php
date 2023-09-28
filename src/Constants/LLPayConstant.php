<?php

namespace Llgp\LlgpSdkPhp\Constants;

class LLPayConstant
{
    /**
     * http header constants
     */
    const CONTENT_TYPE = "application/json";
    const SIGN_TYPE = "RSA";

    /**
     * http method constants
     */
    const HTTP_METHOD_GET = "GET";
    const HTTP_METHOD_POST = "POST";

    /**
     * service constants
     */
    // service version
    const SERVICE_VERSION = "v1";

    // payment service code
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

    // refund service code
    const REFUND_APPLY_SERVICE = "llpth.refund.apply";
    const REFUND_QUERY_SERVICE = "llpth.refund.query";

    // payout service code
    const PAYOUT_APPLY_SERVICE = "llpth.disbursal.instant.apply";
    const PAYOUT_TRUE_MONEY_SERVICE = "llpth.disbursal.instant.apply.truemoney";
    const PAYOUT_CONFIRM_SERVICE = "llpth.disbursal.instant.confirm";
    const PAYOUT_QUERY_SERVICE = "llpth.disbursal.instant.query";
    const PAYOUT_ACCOUNT_QUERY_SERVICE = "llpth.disbursal.instant.query.balance";

    /**
     * payment method constants
     */
    // used for `BANKCARD_PAY_SERVICE`
    const CARD = "CARD";
    const CREDIT_CARD = "CREDIT_CARD";
    const DEBIT_CARD = "DEBIT_CARD";

    // used for `QR_PROMPT_SERVICE`
    const THAI_QR = "THAI_QR";

    // used for `MOBILE_BANKING_SERVICE`
    const KPLUS_NOTIFICATION = "KPLUS_NOTIFICATION";
    const EASY_APP_BILL = "EASY_APP_BILL";
    const EASY_APP_CREDIT = "EASY_APP_CREDIT";
    const EASY_APP_ALL = "EASY_APP_ALL";
    const KMA_NOTIFICATION = "KMA_NOTIFICATION";
    const KMA_DEEPLINK = "KMA_DEEPLINK";

    // used for `ALIPAY_ONLINE_SERVICE` & `ALIPAY_OFFLINE_SERVICE` & WECHAT_PAY_SERVICE
    const WEB_PAYMENT = "WEB_PAYMENT";
    const WAP_PAYMENT = "WAP_PAYMENT";
    const APP_PAYMENT = "APP_PAYMENT";
    const MERCHANT_CODE = "MERCHANT_CODE";
    const DYNAMIC_CODE = "DYNAMIC_CODE";
    const MERCHANT_SCAN = "MERCHANT_SCAN";
    const INAPP_PAYMENT = "INAPP_PAYMENT";
    const H5_PAYMENT = "H5_PAYMENT";

    // used for `TRUE_MONEY_SERVICE`
    const NORMAL_ALL_TM = "NORMAL_ALL_TM";
    const NORMAL_BALANCE_TM = "NORMAL_BALANCE_TM";
    const NORMAL_CREDIT_TM = "NORMAL_CREDIT_TM";
    const DIGITAL_GAME_ALL_TM = "DIGITAL_GAME_ALL_TM";
    const DIGITAL_GAME_BALANCE_TM = "DIGITAL_GAME_BALANCE_TM";
    const DIGITAL_GAME_CREDIT_TM = "DIGITAL_GAME_CREDIT_TM";
    const DIGITAL_LIVE_ALL_TM = "DIGITAL_LIVE_ALL_TM";
    const DIGITAL_LIVE_BALANCE_TM = "DIGITAL_LIVE_BALANCE_TM";
    const DIGITAL_LIVE_CREDIT_TM = "DIGITAL_LIVE_CREDIT_TM";
    const DIGITAL_DEVICE_ALL_TM = "DIGITAL_DEVICE_ALL_TM";
    const DIGITAL_DEVICE_BALANCE_TM = "DIGITAL_DEVICE_BALANCE_TM";
    const DIGITAL_DEVICE_CREDIT_TM = "DIGITAL_DEVICE_CREDIT_TM";
    const DIGITAL_EBOOK_ALL_TM = "DIGITAL_EBOOK_ALL_TM";
    const DIGITAL_EBOOK_BALANCE_TM = "DIGITAL_EBOOK_BALANCE_TM";
    const DIGITAL_EBOOK_CREDIT_TM = "DIGITAL_EBOOK_CREDIT_TM";
    const DIGITAL_ENTERTAINMENT_ALL_TM = "DIGITAL_ENTERTAINMENT_ALL_TM";
    const DIGITAL_ENTERTAINMENT_BALANCE_TM = "DIGITAL_ENTERTAINMENT_BALANCE_TM";
    const DIGITAL_ENTERTAINMENT_CREDIT_TM = "DIGITAL_ENTERTAINMENT_CREDIT_TM";
    const DIGITAL_ONLINEEDU_ALL_TM = "DIGITAL_ONLINEEDU_ALL_TM";
    const DIGITAL_ONLINEEDU_BALANCE_TM = "DIGITAL_ONLINEEDU_BALANCE_TM";
    const DIGITAL_ONLINEEDU_CREDIT_TM = "DIGITAL_ONLINEEDU_CREDIT_TM";

    // used for `LINE_PAY_SERVICE`
    const DIGITAL_ALL = "DIGITAL_ALL";
    const DIGITAL_BALANCE = "DIGITAL_BALANCE";
    const DIGITAL_CREDIT = "DIGITAL_CREDIT";
    const NORMAL_ALL = "NORMAL_ALL";
    const NORMAL_BALANCE = "NORMAL_BALANCE";
    const NORMAL_CREDIT = "NORMAL_CREDIT";

    // used for `SHOPEE_PAY_SERVICE`
    const NORMAL_ALL_SP = "NORMAL_ALL_SP";
    const NORMAL_BALANCE_SP = "NORMAL_BALANCE_SP";
    const NORMAL_CREDIT_SP = "NORMAL_CREDIT_SP";

    // used for `COUNTER_PAY_SERVICE`
    const COUNTER_UNION = "COUNTER_UNION";
}