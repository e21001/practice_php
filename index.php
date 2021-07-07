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

  // isset関数またはis_null関数の使用
  if (isset($a)) {
    // ここに処理
  }
  if (is_null($a)) {
    // ここに処理
  }

  // is_null関数と厳密な比較演算子の組み合わせ
  if (is_null($a) || $a === '') {
    // ここに処理
  }

  // switch構文
  $message = '';
  $extension = 'svg';
  switch ($extension) {
    case 'jpg':
      $message = 'jpg画像です';
      break;
    case 'png':
      $message = 'png画像です';
      break;
    case 'gif':
      $message = 'gif画像です';
      break;
    case 'bmp':
    case 'svg':
      $message = 'bmpまたはsvg画像です';
      break;
    default:
      $message = 'その他の形式です';
  }
  echo $message;

  // exit命令とdie命令
  $score = 100;
  if ($score < 0) {
    echo 'スコアは正の数でなければなりません。';
    exit(1);
  }
  echo `スコアは：', $score, '点です。`;

  $score = 100;
  if ($score < 0) {
    die('スコアは正の数でなければなりませ。');
  }
  echo 'スコアは：', $score, '点です。';
?>

<?php
  // foreach構文　用途(配列・連想配列)
  $colors = ['赤','青','黄'];
  foreach ($colors as $color) {
    echo $color;
    echo '<br>';
  }

  $fruits = [
    'りんご' => 'apple',
    'ぶどう' => 'grape',
    'みかん' => 'orange'
  ];
  foreach ($fruits as $japanese => $english) {
    echo "日本語名：{$japanese} 英語名：{$english}";
    echo '<br>';
  }

  // リファレンス私によるforeach
  $numbers = [3, 5, -1, 2];
  foreach ($numbers as &$number) {
    if ($number < 0) {
      $number = 0;
    }
  }
  unset($number);

  print_r($numbers);

  // for構文を配列のループ処理に使う
  $lines = [
    'いろはにほへと',
    'ちりぬるを',
    'わかよたれそ'
  ];
  for ($i = 0; $i < count($lines); $i += 1) {
    echo $i + 1, '行目：', $lines[$i], PHP_EOL;
  }

  // while構文
  $num = 100;
  while ($num < 200) {
    echo $num, PHP_EOL;
    $num += 30;
  }
  echo '$numが200を超えたためループを抜けました。';
?>
