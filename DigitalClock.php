<?php
declare(strict_types=1);

require_once dirname(__FILE__) . '/abstract.php';
class DigitalClock extends Clock {
  public function show(): string {
    return date('H:i', $this->time);
  }
}
