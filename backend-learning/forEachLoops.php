<?php

$Artisans = [
    [
        "name" => "John Doe",
        "profession" => "Plumber",
        "location" => "Dansoman",
        "rating" => 4.5
    ],
    [
        "name" => "Jane Smith",
        "profession" => "Electrician",
        "location" => "Osu",
        "rating" => 4.0
    ],
    [
        "name" => "Michael Johnson",
        "profession" => "Carpenter",
        "location" => "Madina",
        "rating" => 4.8
    ]
];

foreach ($Artisans as $artisan) {
    if ($artisan["location"] == "Dansoman" && $artisan["profession"] == "Plumber" && $artisan["rating"] >= 4.5) {
        echo "Artisan Found:<br>"; 
        echo "Name: " . $artisan["name"] . "<br>";
        echo "Profession: " . $artisan["profession"] . "<br>";
        echo "Location: " . $artisan["location"] . "<br>";
        echo "Rating: " . $artisan["rating"] . "<br><br>";
    }
};