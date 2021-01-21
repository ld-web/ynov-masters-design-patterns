<?php

namespace App;

class LoggerDateTimeDecorator implements ILogger
{
  private $logger;

  public function __construct(ILogger $logger)
  {
    $this->logger = $logger;
  }

  public function log(string $message): void
  {
    $this->logger->log($message);
    $this->displayDate();
  }

  private function displayDate(): void
  {
    echo date("Y-m-d H:i:s - ");
  }
}
