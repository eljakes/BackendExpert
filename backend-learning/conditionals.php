<?php

$user = "admin";
$isLoggedIn = true;
$isVerified = true;
$serviceAvailable = true;

if ($isLoggedIn && $isVerified && $serviceAvailable == true && $user == "admin") {
    echo "Booking Confirmed";
} else {
    echo "Booking Failed";
}