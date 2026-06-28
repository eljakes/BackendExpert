<?php

$host = "localhost";
$port = "5433";
$dbname = "postgres";
$user = "postgres";
$password = "LYrical12345*";

$conn = pg_connect(
    "host=$host port=$port dbname=$dbname user=$user password=$password"
);

if ($conn) {
    echo "Database Connected Successfully!";
} else {
    echo "Connection Failed!";
}

?>