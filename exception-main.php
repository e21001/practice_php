<?php declare(strict_types=1) ?>
<body>
  <?php
  require_once dirname(__FILE__) . '/exception.php';
  $calculator = new TaxCalculator();
  try {
    $priceWithTax = $calculator->calculate(100, -0.08);
    echo '計算結果は', $priceWithTax, '円です。';
  } catch (Exception $exception) {
    echo '税込金額が計算できませんでした。理由：', $exception->getMessage(), '<br>';
  } finally {
    $calculator->reset();
  }
  echo 'プログラム処理を終了します。';
  ?>
</body>
