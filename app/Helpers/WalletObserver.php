<?php

namespace App\Helpers;

use Exception;

class WalletObserver
{
    private $base_url = [
        'ltc'  => 'https://explorer.litecoin.net/api/address/',
        'doge' => 'https://explorer.litecoin.net/api',
        'bch'  => 'https://explorer.litecoin.net/api',
    ];

    public $oktoken_base_url = 'https://www.oklink.com';
    private $address_url      = '';
    private $parameters       = [];
    private $api_key          = '';

    public function getAddressData($wallet_address, $currency, $show_debug=false)
    {
        $ch = curl_init();

        $endpoint = $this->oktoken_base_url .  "/api/v5/explorer/address/transaction-list?chainShortName=$currency&address=$wallet_address";
        if ($show_debug) echo "$endpoint";
        curl_setopt($ch, CURLOPT_URL, $endpoint);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

        $headers   = array();
        $headers[] = 'Ok-Access-Key: '. env('OKTOKEN_API_KEY');
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);

        return json_decode($result);
    }

    public function checkAmountInWallet($wallet_address, $currency)
    {
        $url = $this->base_url[$currency] . $wallet_address;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);
        return json_decode($response);
    }
}
