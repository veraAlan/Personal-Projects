<?php
include 'Market.php';
include 'Cryptocoin.php';
include 'Wallet.php';

$btc = new Cryptocoin('Bitcoin', 'BTC', 38772);
$eth = new Cryptocoin('Ethereum', 'ETH', 2902);

$walletBTC = new Wallet($btc, 0.0003, 10);
$walletETH = new Wallet($eth, 0.003, 10);

$market = new Market(50, [$btc, $eth], [$walletBTC, $walletETH]);

echo $market;