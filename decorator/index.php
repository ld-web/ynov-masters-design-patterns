<?php

use App\HtmlLogger;
use App\LoggerDateTimeDecorator;
use App\UppercaseLogger;

require_once 'vendor/autoload.php';

$logger = new HtmlLogger();
$upLogger = new UppercaseLogger();
$loggerWithDate = new LoggerDateTimeDecorator($logger);
$uppercaseLoggerWithDate = new LoggerDateTimeDecorator($upLogger);

$logger->log("Hello world\n");
$logger->log("This is me\n");

$upLogger->log("Hello upper");

echo "<br />";

$loggerWithDate->log("Re Hello world\n");
$uppercaseLoggerWithDate->log("Upper log with date");
