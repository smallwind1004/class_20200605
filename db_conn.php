<?php
header("Access-Control-Allow-Origin: *");
$link = mysqli_connect(
    "localhost",
    "s108021004",
    "ohf3Aem-",
    "s108021004"
);

if(!$link){
    # code...
    echo "Error: unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno:" . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging errno:" . mysqli_connect_error() . PHP_EOL;
    exit;
}

$link -> set_charset("utf8");