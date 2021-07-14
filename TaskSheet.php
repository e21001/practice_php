<?php
declare(strict_types=1);

require_once dirname(__FILE__) . '/Task.php';

class TaskSheet {
  // タスクの配列
  public $tasks = [];

  // タスクを追加するメソッド
  public function addTask(Task $task): void {
    $this->tasks[] = $task;
    echo $task->name, 'を追加しました。', '<br>';
  }

  // タスクリストを表示するメソッド
  public function show(): void {
    foreach ($this->tasks as $task) {
      // 完了済のタスクは、太字で表示します
      if ($task->isCompleted()) {
        echo '<b>', $task->name, '</b>', '<br>';
      } else {
        echo $task->name, '<br>';
      }
    }
  }
}
