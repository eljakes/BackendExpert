<?php

$user = "admin";
$user = "client";
$user = "artisan";
$isLoggedIn = true;
$isVerified = true;
$serviceAvailable = true;

if ($isLoggedIn && $isVerified && $serviceAvailable == true) {
    echo "Booking Confirmed";
} else {
    echo "Booking Failed";
}
echo "<br>";

if ($user == "admin") {
    echo "Welcome Admin";
} elseif ($user == "client") {
    echo "Welcome Client";
} elseif ($user == "artisan") {
    echo "Welcome Artisan";
} else {
    echo "Unknown User";
}