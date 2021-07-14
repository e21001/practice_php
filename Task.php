<?php
declare(strict_types=1);

class Task {
  // プロパティの定義
  public $name;
  public $priority;
  public $progress;

  // メソッドの定義
  public function isCompleted(): bool {
    return $this->progress >= 100;
  }
}
