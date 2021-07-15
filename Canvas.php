<?php
declare(strict_types=1);

require_once dirname(__FILE__) . '/abstract.php';

class Canvas {
  public $backgroundColor;

  public function drawClock(Clock $clock): void {
    echo $clock->show(), '<br>';
  }
}
