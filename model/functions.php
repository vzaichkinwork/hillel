<?php
    require_once './model/constants.php';

    function current_rate($currency_usd){
        $json = json_decode(file_get_contents(API_LINK . $currency_usd), true);
        $result = $json[$currency_usd]['avg'];

        return $result;
    }

    function add_purchase($new_purchase){
        $result = file_put_contents(PURCHASES, "\n" . implode("|", $new_purchase), FILE_APPEND);

        return $result;
    }

    function get_purchases(){
        $file = file_get_contents(PURCHASES);
        $purchases = explode("\n", $file);

        $result = [];
        $result_by_names = [];

        foreach ($purchases as $purchase){
            $currency = explode("|", $purchase);
            foreach ($currency as $item){
                $result['api_name'] = $currency[0];
                $result['name'] = $currency[1];
                $result['price'] = $currency[2];
                $result['amount'] = $currency[3];
                $result['date'] = $currency[4];
            }
            $result_by_names[] = $result;
        }

        return $result_by_names;
    }

    function current_earnings($currency){
        return $result;
    }

    function earnings_in_percentage($currency){
        return $result;
    }