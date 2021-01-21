<?php

namespace App;

class HtmlLogger implements ILogger
{
  public function log(string $message): void
  {
    echo nl2br($message);
  }
}
