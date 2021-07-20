<?php declare(strict_types=1) ?>
<body>
  <?php
  // 何もしていないので、メモリの消費量は小さい
  echo '現在のメモリ使用量(1回目)：', memory_get_usage(), '<br>';

  // $listに10000要素入れる。少しメモリ使用量が増える
  $list = [];
  for ($i = 0; $i < 10000; $i += 1) {
    $list[] = $i;
  }
  echo '現在のメモリ使用量(2回目)：', memory_get_usage(), '<br>';

  // $listを空にする。
  $list = null;
  echo '現在のメモリ使用量(3回目)：', memory_get_usage(), '<br>';

  // $listに2000要素を入れる
  // 2回目の出力よりは小さくなる
  $list = [];
  for ($i = 0; $i < 2000; $i += 1) {
    $list[] = $i;
  }
  echo '現在のメモリ使用量(4回目)：', memory_get_usage(), '<br>';

  // 最大メモリ使用量は、$listに10000要素入っていた2回目の出力くらいになるはず。
  echo 'メモリの最大使用量：', memory_get_peak_usage(), '<br>';
  
  ?>
</body>
