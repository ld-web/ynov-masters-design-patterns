<?php

namespace App\Observer;

class InvalidMailObserver implements IObserver
{
  public function run()
  {
    echo nl2br("Ce mail est invalide ! Je vais donc faire des trucs\n");
  }
}
