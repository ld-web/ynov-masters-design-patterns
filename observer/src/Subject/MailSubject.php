<?php

namespace App\Subject;

use App\Observer\IObserver;
use InvalidArgumentException;

class MailSubject
{
  /** @var IObserver[] */
  private $observers = [];

  /**
   * Adds an observer to the subject
   *
   * @param IObserver $observer Observer to add
   * @return void
   */
  public function addObserver(IObserver $observer): void
  {
    $this->observers[$this->getObserverKey($observer)] = $observer;
  }

  /**
   * Removes an observer from the subject
   *
   * @param IObserver $observer Observer to remove
   * @return void
   */
  public function removeObserver(IObserver $observer): void
  {
    if (isset($this->observers[$this->getObserverKey($observer)])) {
      unset($this->observers[$this->getObserverKey($observer)]);
    }
  }

  /**
   * Gets all the registered observers
   *
   * @return IObserver[]
   */
  public function getObservers(): array
  {
    return $this->observers;
  }

  /**
   * Notify all registered observers
   *
   * @return void
   */
  public function notifyObservers(): void
  {
    foreach ($this->observers as $observer) {
      $observer->run();
    }
  }

  /**
   * Gets the value of the observer key to reference it into the observers list
   *
   * @param IObserver $observer
   * @return string
   */
  private function getObserverKey(IObserver $observer): string
  {
    $key = get_class($observer);

    if (!$key) {
      throw new InvalidArgumentException('observer is not an object');
    }

    return $key;
  }
}
