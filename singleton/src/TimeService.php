<?php

namespace App;

use Exception;
use PDO;

class TimeService
{
  private $pdo;
  private const TODAY_ALIAS = 'today';
  private static $instances = 0;

  public function __construct()
  {
    echo nl2br("TimeService " . ++self::$instances . " getting DB Instance...\n");
    $this->pdo = Db::getInstance();
  }

  public function getCurrentTimestamp()
  {
    $stmt = $this->pdo->query("SELECT strftime('%s','now') AS " . self::TODAY_ALIAS);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$row) {
      throw new Exception('Unable to get Unix timestamp from DB');
    }

    return $row[self::TODAY_ALIAS];
  }
}
