<?php

namespace Locastic\TcomPayWay\Helpers;

/**
 * Get code translated to human language
 *
 * Class MiscHelper
 *
 * @package Locastic\TcomPayWay\Helpers\ResponseCodeInterpreter
 */
class ResponseCodeInterpreter
{
    /**
     * @param int $pgwResultCode
     * @return string
     */
    public static function getPgwResultCode($pgwResultCode)
    {
        $pgwResultCodes = array(
            '0'    => 'Akcija uspješna',
            '1'    => 'Akcija neuspješna',
            '2'    => 'Greška prilikom obrade',
            '3'    => 'Akcija otkazana',
            '4'    => 'Akcija neuspješna (3D Secure MPI)',
            '1000' => 'Neispravan potpis (pgw_signature)',
            '1001' => 'Neispravan ID dućana (pgw_shop_id)',
            '1002' => 'Neispravan ID transakcija (pgw_transaction_id)',
            '1003' => 'Neispravan iznos (pgw_amount)',
            '1004' => 'Neispravan tip autorizacije (pgw_authorization_type)',
            '1005' => 'Neispravno trajanje najave autorizacije (pgw_announcement_duration)',
            '1006' => 'Neispravan broj rata (pgw_installments)',
            '1007' => 'Neispravan jezik (pgw_language)',
            '1008' => 'Neispravan autorizacijski token (pgw_authorization_token)',
            '1100' => 'Neispravan broj kartice (pgw_card_number)',
            '1101' => 'Neispravan datum isteka kartice (pgw_card_expiration_date)',
            '1102' => 'Neispravan verifikacijski broj kartice (pgw_card_verification_data)',
            '1200' => 'Neispravan ID narudžbe (pgw_order_id)',
            '1201' => 'Neispravan info narudžbe (pgw_order_info)',
            '1202' => 'Neispravne stavke narudžbe (pgw_order_items)',
            '1300' => 'Neispravan način povrata na dućan (pgw_return_method)',
            '1301' => 'Neispravan povratni url na dućan (pgw_success_url)',
            '1302' => 'Neispravan povratni url na dućan (pgw_failure_url)',
            '1304' => 'Neispravni podaci trgovca (pgw_merchant_data)',
            '1400' => 'Neispravno ime kupca (pgw_first_name)',
            '1401' => 'Neispravno prezime kupca (pgw_last_name)',
            '1402' => 'Neispravna adresa (pgw_street)',
            '1403' => 'Neispravni grad (pgw_city)',
            '1404' => 'Neispravni poštanski broj (pgw_post_code)',
            '1405' => 'Neispravna država (pgw_country)',
            '1406' => 'Neispravan kontakt telefon (pgw_telephone)',
            '1407' => 'Neispravna kontakt e-mail adresa (pgw_email)',
        );

        return $pgwResultCodes[$pgwResultCode];
    }

    /**
     * @param int $pgwResultCode
     * @return string
     */
    public static function getPgwResultCodeWithoutFields($pgwResultCode)
    {
        $pgwResultCodes = array(
            '0'    => 'Akcija uspješna',
            '1'    => 'Akcija neuspješna',
            '2'    => 'Greška prilikom obrade',
            '3'    => 'Akcija otkazana',
            '4'    => 'Akcija neuspješna (3D Secure MPI)',
            '1000' => 'Neispravan potpis',
            '1001' => 'Neispravan ID dućana',
            '1002' => 'Neispravan ID transakcija',
            '1003' => 'Neispravan iznos',
            '1004' => 'Neispravan tip autorizacije',
            '1005' => 'Neispravno trajanje najave autorizacije',
            '1006' => 'Neispravan broj rata',
            '1007' => 'Neispravan jezik',
            '1008' => 'Neispravan autorizacijski token',
            '1100' => 'Neispravan broj kartice',
            '1101' => 'Neispravan datum isteka kartice',
            '1102' => 'Neispravan verifikacijski broj kartice',
            '1200' => 'Neispravan ID narudžbe',
            '1201' => 'Neispravan info narudžbe',
            '1202' => 'Neispravne stavke narudžbe',
            '1300' => 'Neispravan način povrata na dućan',
            '1301' => 'Neispravan povratni url na dućan',
            '1302' => 'Neispravan povratni url na dućan',
            '1304' => 'Neispravni podaci trgovca',
            '1400' => 'Neispravno ime kupca',
            '1401' => 'Neispravno prezime kupca',
            '1402' => 'Neispravna adresa',
            '1403' => 'Neispravni grad',
            '1404' => 'Neispravni poštanski broj',
            '1405' => 'Neispravna država',
            '1406' => 'Neispravan kontakt telefon',
            '1407' => 'Neispravna kontakt e-mail adresa',
        );

        return $pgwResultCodes[$pgwResultCode];
    }

    /**
     * @param $errorCode
     * @return string
     */
    public static function getPgwErrorCodes($errorCode)
    {
        $pgwErrorCodes = array(
            'E00001' => 'IPG code is not valid (internal error in the application).',
            'E00002' => 'Application is unable to parse original request data because the data is missing or invalid.',
            'E00003 - Payment form implementation version is missing.',
            'E00004 - Transaction creation date and time is not set by the application (internal error in the application).',
            'E00005' => 'Transaction previous status is not valid.',
            'E00006' => 'Transaction new status is not valid.',
            'E00007' => 'Transaction doesn\'t exist in the system.',
            'E00008' => 'Shop ID is mandatory.',
            'E00009' => 'Shop ID length is greater than maximum allowed (20 characters).',
            'E00010' => 'Shopping cart ID is mandatory.',
            'E00011' => 'Shopping cart ID length is greater than maximum allowed (255 characters).',
            'E00012' => 'Successfully completed transaction, with the same shopping cart ID, already exists in the system.',
            'E00013' => 'Total amount is mandatory.',
            'E00014' => 'Total amount must be greater than zero.',
            'E00015' => 'Signature is mandatory.',
            'E00016' => 'Signature is not valid.',
            'E00017 – ReturnURL is mandatory.',
            'E00018' => 'CancelURL is mandatory.',
            'E00019' => 'ReturnErrorURL is mandatory.',
            'E00020' => 'Language is not valid.',
            'E00021' => 'Payment plan length is not valid.',
            'E00022' => 'Payment plan contains non digits.',
            'E00023' => 'Payment plan number of installments is not valid.',
            'E00024' => 'Payment plan grace period is not valid.',
            'E00025' => 'Recurring cycle type is not valid.',
            'E00026' => 'Recurring cycle type is undefined, but other recurring values are present.',
            'E00027' => 'Recurring cycle type and payment plan are mutually exclusive. You can\'t specify both at the same time.',
            'E00028' => 'Recurring cycle type is not supported for the given credit card.',
            'E00029' => 'Recurring interval is mandatory.',
            'E00030' => 'Recurring interval must be greater than zero.',
            'E00031' => 'Recurring number of payments is mandatory.',
            'E00032' => 'Recurring number of payments must be greater than one.',
            'E00033' => 'Shop doesn\'t support recurring payments.',
            'E00034' => 'Shop configuration does not exist.',
            'E00035' => 'Shop configuration is temporarily unavailable.',
            'E00036' => 'Payment form session timeout is expired.',
            'E00037' => 'Shop doesn\'t support payment with given payment method.',
            'E00038' => 'Shop doesn\'t support payment with given credit card.',
            'E00039' => 'Current transaction doesn\'t support payment with given credit card.',
            'E00040' => 'Current transaction doesn\'t support payment with given payment method.',
            'E00041' => 'Shop doesn\'t support payment with given payment plan/credit card combination.',
            'E00042' => 'There are no applicable payment types for the current transaction.',
            'E00043' => 'Tokenized credit card information doesn\'t exist.',
            'E00044' => 'Credit card tokenization and payment with tokenized credit card are mutually exclusive.',
            'E00045' => 'Payment with predefined credit card type and payment with tokenized credit card are mutually exclusive.',
            'E00046' => 'Customer first name is mandatory.',
            'E00047' => 'Customer first name length is greater than maximum allowed (50 characters).',
            'E00048' => 'Customer last name is mandatory.',
            'E00049' => 'Customer last name length is greater than maximum allowed (50 characters).',
            'E00050' => 'Customer address is mandatory.',
            'E00051' => 'Customer street address length is greater than maximum allowed (100 characters).',
            'E00052' => 'Customer city is mandatory.',
            'E00053' => 'Customer city length is greater than maximum allowed (50 characters).',
            'E00054' => 'Customer zip code is mandatory.',
            'E00055' => 'Customer zip code length is greater than maximum allowed (20 characters).',
            'E00056' => 'Customer country is mandatory.',
            'E00057' => 'Customer country length is greater than maximum allowed (60 characters).',
            'E00058' => 'Customer phone is mandatory.',
            'E00059' => 'Customer phone length is greater than maximum allowed (20 characters).',
            'E00060' => 'Customer email is mandatory.',
            'E00061' => 'Customer email address length is greater than maximum allowed (254 characters).',
            'E00062' => 'Additional merchant data length is greater than maximum allowed (4000 characters).',
            'E00063' => 'Credit card number is not valid.',
            'E00064' => 'Credit card expiration date is not valid.',
            'E00065' => 'Credit card verification data is not valid.',
            'E00066' => 'There were some errors during credit card payment process. Please, try again.',
            'E00067' => 'PayPal transaction setup failed.',
            'E00068' => 'There were some errors during PayPal payment process. Please, try again.',
            'E00069' => 'Unsuccessful payment.',
            'E00070' => 'You\'ve already reached maximum number of payment attempts.',
            'E00071' => 'Successful payment is missing approval code.',
            'E00072' => 'Successful payment is missing valid communication signature.',
            'E00073' => 'Pay by link payment item doesn\'t exist.',
            'E00074' => 'Pay by link payment item is temporarily unavailable.',
            'E00075' => 'Pay by link payment item is expired.',
            'E00076' => 'IPS transaction setup failed.',
            'E00077' => 'IPS transaction status check is not possible, since it was not previously defined.',
            'E00078' => 'IPS payment is not supported.',
            'E00079' => 'Signature length is greater than maximum allowed (128 characters).',
            'E00080' => 'ReturnURL length is greater than maximum allowed (500 characters).',
            'E00081' => 'ReturnErrorURL length is greater than maximum allowed (500 characters).',
            'E00082' => 'CancelURL length is greater than maximum allowed (500 characters).',
            'E00083' => 'Aircash transaction setup failed.',
            'E00084' => 'Aircash transaction status check is not possible, since it was not previously defined.',
            'E00085' => 'Aircash payment is not supported.',
            'E00086' => 'Iframe response target is not valid.',
            'E00087' => 'Return success url is not valid.',
            'E00088' => 'Return error url is not valid.',
            'E00089' => 'Return cancel url is not valid.',
            'E00090' => 'VALÚ transaction setup failed.',
            'E00091' => 'VALÚ transaction status check is not possible, since it was not previously defined.',
            'E00092' => 'VALÚ payment is not supported.',
            'E00093' => 'Mobile device operating system is not valid.',
            'E00094' => 'Mobile device callback interface name is mandatory.',
            'E00095' => 'Mobile device callback interface name length is greater than maximum allowed (100 characters).',
            'E00096' => 'KEKS Pay transaction setup failed.',
            'E00097' => 'KEKS Pay transaction status check is not possible, since it was not previously defined.',
            'E00098' => 'KEKS Pay payment is not supported.',
            'E00099' => 'PayCek transaction setup failed.',
            'E00100' => 'PayCek transaction status check is not possible, since it was not previously defined.',
            'E00101' => 'PayCek payment is not supported.',
        );

        return $pgwErrorCodes[$errorCode];
    }
}
