<?php

namespace App;

interface ILogger
{
  public function log(string $message): void;
}
