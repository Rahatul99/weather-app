<?php

use App\Weather\FakeWeatherFetcher;
use App\Weather\RemoteWeatherFetcher;

require __DIR__ . '/inc/all.inc.php';

$fetcher = new RemoteWeatherFetcher();
$info = $fetcher->fetch('Dhaka');
// var_dump($info);

require __DIR__ . '/views/index.view.php';
