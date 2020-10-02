<?php
error_reporting(0);
$amount = $_POST['amount'];
$from = $_POST['from'];
$to = $_POST['to'];
function convertCurrency($amount, $from_currency, $to_currency)
{
    $apikey = '2cd0488085dcbe6f3718';
    $from_Currency = urlencode($from_currency);
    $to_Currency = urlencode($to_currency);
    $query =  "{$from_Currency}_{$to_Currency}";
    $json = file_get_contents("https://free.currconv.com/api/v7/convert?q={$query}&compact=ultra&apiKey={$apikey}");
    $obj = json_decode($json, true);
    $val = floatval($obj["$query"]);
    if (!$json) {
        echo "Free Limit of API Reached use Fresh API Key or Try after some time";
        die;
    }
    if (!$amount) {
        echo "Please Enter the amount";
        die;
    }

    $total = $val * $amount;
    return number_format($total, 2, '.', '');
}

echo '<b>' . convertCurrency($amount, $from, $to) . " " . $to . '</b>';
