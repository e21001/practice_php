<?php declare(strict_types=1) ?>
<body>
  <?php
  // mb_internal_encoding関数
  echo '現在の文字コードは', mb_internal_encoding(), 'です。';

  // mb_strpos関数
  $sentence = '今日は、良い日です';
  var_dump(mb_strpos($sentence, '日'));
  var_dump(mb_strpos($sentence, '無'));
  var_dump(mb_strpos($sentence, '良い日'));
  // mb_strrpos関数
  var_dump(mb_strrpos($sentence, '日'));

  if (mb_strpos($sentence, '日')) {
    echo '引数$sentenceの中に「日」が見つかりました。', '<br>';
  } else {
    echo '引数$sentenceの中に「日」が見つかりませんでした。', '<br>';
  }

  // mb_substr関数
  var_dump(mb_substr($sentence, 4, 3));
  var_dump(mb_substr($sentence, 0, 8));
  // mb_strstr関数
  var_dump(mb_strstr($sentence, '日', true));
  var_dump(mb_strstr($sentence, '日', false));
  ?>
</body>
