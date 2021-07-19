<?php declare(strict_types=1) ?>
<body>
  <?php
  // 単純にランダムな数値を生成する
  echo 'ランダムな番号：', random_int(1, 99999), '<br>';
  // ランダムな顧客コードを生成する
  $code = 'customer-' . str_pad(strval(random_int(1, 9999)), 4, '0', STR_PAD_LEFT);
  echo '顧客コードは：', $code, '<br>';
  // ランダムな配列要素を選択する
  $colors = ['red', 'blue', 'green', 'yellow', 'black'];
  echo 'ラッキーカラーは：', $colors[random_int(0, 4)], '<br>';
  // ランダムなURLを生成する
  function generateRandom($minLength, $maxLength) {
    $length = random_int($minLength, $maxLength);
    $chars = array_merge(range('a', 'z'), range('A', 'Z'), range('0', '9'));
    $random = '';
    for ($i = 0; $i < $length; $i += 1) {
      $random .= $chars[random_int(0, count($chars) - 1)];
    }
    return $random;
  }

  echo 'このURLをクリックして、ユーザ登録を完了してください：http://example.com/user?key=', generateRandom(16, 32), '<br>';
  ?>
</body>
