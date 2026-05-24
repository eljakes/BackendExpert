<?php

$wallet_Balance = 1000.00;
$payment_Amount = 250.00;
$isVerified = true;

echo "sufficient balance: " . ($payment_Amount <= $wallet_Balance) . "<br>";
var_dump($isVerified); 
echo "<br>";
echo "Payment Approved: " . ($wallet_Balance >= 1000.00 && $payment_Amount <= $wallet_Balance && $isVerified) . "<br>";