<?php

use App\TimeService;

require_once 'vendor/autoload.php';

$timeService = new TimeService();
$otherTimeService = new TimeService();

var_dump($timeService->getCurrentTimestamp());
var_dump($otherTimeService->getCurrentTimestamp());
