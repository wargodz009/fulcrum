<?php

if (! function_exists('to_money')) {
    function to_money($amount,$sign = '$') {
        if (!is_numeric($amount))
            return $amount;
        return $sign.number_format($amount);
    }
}