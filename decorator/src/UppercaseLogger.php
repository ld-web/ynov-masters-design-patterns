<?php

namespace App;

class UppercaseLogger implements ILogger
{
  public function log(string $message): void
  {
    echo strtoupper($message);
  }
}
