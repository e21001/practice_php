<?php
declare(strict_types=1);
require_once dirname(__FILE__) . '/cookie-EventData.php';
require_once dirname(__FILE__) . '/cookie-functions.php';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h2>イベント一覧</h2>
  <ul>
    <?php foreach ($eventData as $eventId => $eventTitle): ?>
      <li>
        <a href="./cookie-event-detail.php?eventId=<?php echo escape(strval($eventId)) ?>">
          <?php echo escape($eventTitle) ?>
        </a>
      </li>
    <?php endforeach ?>
  </ul>

  <h2>最近アクセスしたページ</h2>
  <?php if (isset($_COOKIE['recentItems'])): ?>
    <ul>
      <?php foreach ($_COOKIE['recentItems'] as $eventId => $accessed): ?>
        <li>
          <a href="./cookie-event-detail.php?eventId=<?php echo escape(strval($eventId)) ?>">
            <?php echo escape($eventData[$eventId]) ?>
          </a>
          (アクセス日時：<?php echo escape($accessed) ?>)
        </li>
      <?php endforeach ?>
    </ul>
  <?php endif ?>
</body>
</html>
