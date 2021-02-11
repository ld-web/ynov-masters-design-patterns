<?php

namespace App\Env;

interface IEnvLoader
{
  /**
   * Loads given file into $_ENV var
   *
   * @param string $path file to load
   * @return void
   */
  public function loadEnvFile(string $path);
}
