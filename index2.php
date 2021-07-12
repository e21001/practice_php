<?php
// クロージャー
$addFunction = function($a, $b) {
  return $a + $b;
};
$total = $addFunction(10, 20);
echo "計算結果：" . $total;
?>
