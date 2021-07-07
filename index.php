<?php
  // 三項演算子
  $greeting = null;
  $message = $greeting === null ? 'Hello' : $greeting;
  echo $message;

  // null合体演算子
  $hello = null;
  $msg = $hello ?? 'Hello';
  echo $msg;

  $score = 89;
  $messageg = '';
  if ($score >= 90) {
    $message = 'すごい！';
  } else {
    $message = 'くたばれ！';
  }
  echo $message;

  // 条件分岐による空欄チェック処理

  // 論理演算子で否定
  if (!$a) {
    // ここに処理
  }

  // 緩やかな比較演算子の使用
  if ($a == '') {
    // ここに処理
  }

  // empty関数を使用
  if (empty($a)) {
    // ここに処理
  }
  
?>
