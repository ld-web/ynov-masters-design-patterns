<?php

namespace App\Env;

use Dotenv\Dotenv;

class VLucasEnvAdapter implements IEnvLoader
{
  /**
   * @inheritDoc
   */
  public function loadEnvFile(string $path)
  {
    list('dirname' => $dir, 'basename' => $file) = pathinfo($path);
    $dotenv = Dotenv::createImmutable($dir, $file);
    $dotenv->load();
  }
}
