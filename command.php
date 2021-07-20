<?php declare(strict_types=1) ?>
<body>
  <?php
  $command = 'ls -la /tmp';

  $output = [];
  $returnVar = null;
  exec($command, $output, $returnVar);

  echo 'コマンドの出力結果は以下の通りです。', '<br>';
  mb_convert_variables('UTF-8', 'SJIS-win', $returnVar);
  foreach ($output as $line) {
    echo htmlspecialchars($line, ENT_QUOTES), '<br>';
  }

  echo 'コマンドの戻り値は以下の通りです。', '<br>';
  print_r($returnVar);
  
  ?>
</body>
