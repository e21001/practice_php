<?php
declare(strict_types=1);
session_start();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>確認画面</title>
</head>
<body>
  <h2>お問い合せ確認</h2>

  <h4>●メールアドレス：</h4>
  <p><?php echo $_SESSION['data']['email'] ?></p>

  <h4>●お問い合わせ内容：</h4>
  <p><?php echo $_SESSION['data']['message'] ?></p>

  <a href="session-thankyou.php">送信する</a>
  <a href="session-input.php">入力画面へ戻る</a>
</body>
</html>
