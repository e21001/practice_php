<body>
  <?php
  require_once dirname(__FILE__) . '/instanceof-TaskSheet.php';
  require_once dirname(__FILE__) . '/instanceof-Task.php';
  require_once dirname(__FILE__) . '/instanceof-Schedule.php';

  $taskSheet = new TaskSheet();

  $task = new Task();
  $task->name = 'パスポートの更新';
  $taskSheet->addTask($task);

  $schedule = new Schedule();
  $schedule->name = '今週の金曜日14:00に打ち合わせ';
  $taskSheet->addTask($schedule);
  ?>
</body>
