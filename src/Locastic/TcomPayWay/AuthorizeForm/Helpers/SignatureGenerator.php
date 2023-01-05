<?php

namespace Locastic\TcomPayWay\AuthorizeForm\Helpers;

use Locastic\TcomPayWay\AuthorizeForm\Model\Payment;

/**
 * Used for generating signature for payment request
 *
 * Class SignatureGenerator
 *
 * @package Locastic\TcomPayWay\AuthorizeForm\Helpers
 */
class SignatureGenerator
{
    /**
     * Based on payment model generates signature
     *
     * @param Payment $payment
     *
     * @return string
     */
    public static function generateSignature(Payment $payment)
    {
        $secretKey = $payment->getSecretKey();

        $string = $payment->getPgwShopId() . $secretKey;
        $string .= $payment->getPgwOrderId() . $secretKey;
        $string .= $payment->getPgwAmount() . $secretKey;

        return hash('sha512', $string);
    }

    /**
     * @param string $secretKey
     * @param array  $data
     * @return string
     * @deprecated
     */
    public static function generateSignatureFromArray($secretKey, $data)
    {
        $string = '';

        foreach ($data as $key => $value) {
            if ('pgw_signature' == $key) {
                continue;
            }

            $string .= $value . $secretKey;
        }

        return hash('sha512', $string);
    }

    /**
     * @param string $secretKey
     * @param array  $data
     * @return string
     */
    public static function generateOrderedSignatureFromArray($secretKey, $shopId, $data)
    {
        $string = $shopId . $secretKey;
        $string .= $data['ShoppingCartID'] . $secretKey;
        $string .= $data['Success'] . $secretKey;
        $string .= $data['ApprovalCode'] . $secretKey;

        return hash('sha512', $string);
    }
}
