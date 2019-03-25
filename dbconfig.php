<?php
$link = mysqli_connect("172.16.1.67", "a", "", "dbtuts");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Successful DB connection." . PHP_EOL;
?>