<?php

$services = [
    "Name" => "Elvis", 
    "Country" => "Ghana", 
    "Role" => "Plumber"
    ];
foreach ($services as $key => $value) {
    echo $key . ": " . $value;
    echo "<br>";
}