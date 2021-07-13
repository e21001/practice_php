<?php
// クロージャー
$addFunction = function($a, $b) {
  return $a + $b;
};
$total = $addFunction(10, 20);
echo "計算結果：" . $total;

// useキーワードでクロージャーに変数を引き継ぐ
$greeting = 'Good';

$greetingMaker = function ($time) use ($greeting) {
  echo $greeting . ' ' . $time . '<br>';
};

$greetingMaker('Morning');
$greetingMaker('Evening');

?>
