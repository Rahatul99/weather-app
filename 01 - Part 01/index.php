<?php

use App\Weather\FakeWeatherFetcher;
use App\Weather\RemoteWeatherFetcher;

require __DIR__ . '/inc/all.inc.php';

//set the default timezone to use
date_default_timezone_set('UTC');

$fetcher = new RemoteWeatherFetcher();
$info = $fetcher->fetch('Dhaka');
// var_dump($info);

if (empty($info)) {
    echo "Weather could not be fetched";
    die();
}

require __DIR__ . '/views/index.view.php';
