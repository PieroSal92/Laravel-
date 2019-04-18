<?php


require_once('vendor/autoload.php');

use PDO;

$dns = ":host=" . getenv('DB_HOST') . "; dbname=" . getenv('DB_DATABASE');

echo new PDO($dns, getenv('DB_USER'), getenv('DB_PASSWORD'));