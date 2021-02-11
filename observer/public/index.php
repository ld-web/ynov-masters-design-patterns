<?php

require_once '../vendor/autoload.php';

use App\Subject\MailSubject;
use App\Observer\InvalidMailObserver;
use App\Observer\LogErrorObserver;

if (empty($_GET['email'])) {
  throw new InvalidArgumentException('Email non fourni');
}
$email = $_GET['email'];

$subject = new MailSubject();
$invalidMailObserver = new InvalidMailObserver();
$logErrorObserver = new LogErrorObserver();

$subject->addObserver($invalidMailObserver);
$subject->addObserver($logErrorObserver);

var_dump($subject->getObservers());

// Comment this line to get this observer automatically executed when an email is invalid
$subject->removeObserver($logErrorObserver);

var_dump($subject->getObservers());

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $subject->notifyObservers();
}
