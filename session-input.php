<?php
declare(strict_types=1);
function validate() {
  return ($_POST['email'] !== '' && $_POST['message'] !== '');
}
session_start();
// 条件1
if (isset($_POST['operation']) && $_POST['operation'] === 'inquiry') {
  // 条件1-A
  if (validate() === false) {
    $message = 'メールアドレス・お問合せ内容のいずれも必須入力です。';
    $data = [
      'email' => $_POST['email'],
      'message' => $_POST['message']
    ];
    // 条件1-B
  } else {
    $_SESSION['data'] = [
      'email' => $_POST['email'],
      'message' => $_POST['message']
    ];
    header('Location: session-confilm.php');
    return;
  }
  // 条件2
} elseif (isset($_SESSION['data'])) {
  $data = [
    'email' => $_SESSION['data']['email'],
    'message' => $_SESSION['data']['message']
  ];
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>入力画面</title>
</head>
<body>
  <h2>お問い合わせ入力</h2>
  <?php if (isset($message)): ?>
    <p style="color:red"><?php echo $message ?></p>
  <?php endif ?>
  <form name="inquiry-form" action="" method="POST">
    ●メールアドレス：<br>
    <input type="text" name="email" value="<?php echo isset($data['email']) ? $data['email'] : '' ?>"><br>
    ●お問い合わせ内容：<br>
    <textarea name="message" rows="4" cols="30"><?php echo isset($data['message']) ? $data['message'] : '' ?></textarea><br>
    <button type="submit" name="operation" value="inquiry">送信</button>
  </form>
</body>
</html>
