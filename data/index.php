<?php
require 'vendor/autoload.php';
spl_autoload_register();

use app\services\SumTwoService;

$sumTwo = new SumTwoService();
$sumTwoResult = $sumTwo->sumTwo([6,9,3,2], 11);

print_r($sumTwoResult);