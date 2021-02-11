<?php

namespace App\Observer;

class LogErrorObserver implements IObserver
{
  public function run()
  {
    echo nl2br("Et moi je vais logger dans un fichier, ou ailleurs\n");
  }
}
