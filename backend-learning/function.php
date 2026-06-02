<?php

function welcomeUser($name) {
    echo "Welcome to FixAm, " . $name . "!<br>";
}

function calculatePayment($amount, $charge) {
    return $amount + $charge;
}

function isEligibleForBooking($isVerified, $walletBalance) {
    return $isVerified && $walletBalance >= 100;
}

function createResponse($success, $message) {
    return [
        "success" => $success,
        "message" => $message
    ];
}

$userName = "Elvis";
$bookingAmount = 250;
$serviceCharge = 20;
$walletBalance = 500;
$isVerified = true;

welcomeUser($userName);

$totalPayment = calculatePayment($bookingAmount, $serviceCharge);
echo "Total Payment: $" . $totalPayment . "<br>";

$eligibleForBooking = isEligibleForBooking($isVerified, $walletBalance);
echo "Eligible for Booking: " . ($eligibleForBooking ? "Yes" : "No") . "<br>";

$response = createResponse(
    $eligibleForBooking,
    $eligibleForBooking ? "Booking Successful" : "Booking Failed"
);

echo "<pre>";
print_r($response);
echo "</pre>";
