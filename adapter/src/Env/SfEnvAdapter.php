<?php

namespace App\Env;

use Symfony\Component\Dotenv\Dotenv;

class SfEnvAdapter implements IEnvLoader
{
  private $sfDotEnv;

  public function __construct()
  {
    $this->sfDotEnv = new Dotenv();
  }

  /**
   * @inheritDoc
   */
  public function loadEnvFile(string $path)
  {
    $this->sfDotEnv->load($path);
  }
}
