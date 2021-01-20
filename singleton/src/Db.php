<?php

namespace App;

use PDO;

class Db
{
  private static $pdo;

  private function __construct()
  {
    // Singleton : private constructor
  }

  public static function getInstance(): PDO
  {
    if (self::$pdo === null) {
      echo nl2br("DB building PDO instance...\n");
      self::$pdo = new PDO('sqlite:' . dirname(__FILE__) . '/../var/db.sqlite');
    }
    return self::$pdo;
  }
}
