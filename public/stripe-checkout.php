<?php
require_once('../resources/config.php');
require '../vendor/autoload.php';
\Stripe\Stripe::setApiKey('sk_test_51JIDOpFGanmcY1khThapV2V9zQqyeORfYxhlDD6dB5ab9hkxgCHvYwfEiSQ4NcR7kyPTBPmPgPKaQF7Ul9uRUDm2007B1SS8Hk');

header('Content-Type: application/json');

$YOUR_DOMAIN = 'http://localhost/dynamic-Ecommerce-Website/public';

$checkout_session = \Stripe\Checkout\Session::create([
    'payment_method_types' => ['card'],
    'line_items' => [[
        # TODO: replace this with the `price` of the product you want to sell
        'price_data' => [
            'product_data' =>[
                'name' => $_SESSION['product_name']
            ],
            'unit_amount' =>  $_SESSION['unit_amounts']*100,
             'currency' => 'pkr'
        ],
        'quantity' =>isset($_SESSION['quantity_total']) ? $_SESSION['quantity_total'] : $_SESSION['quantity_total'] = 1,
    ]],
    'mode' => 'payment',
    'success_url' =>  $YOUR_DOMAIN . '/thank_you.php?session_id={CHECKOUT_SESSION_ID}',
    'cancel_url' => $YOUR_DOMAIN . '/index.php',
]);


header("HTTP/1.1 303 See Other");
header("Location: " . $checkout_session->url);
