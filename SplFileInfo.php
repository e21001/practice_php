<?php declare(strict_types=1) ?>
<body>
  <?php
  $file = new SplFileObject('./index.php');
  echo '絶対パス(getRealPath)：', $file->getRealPath();
  ?>
</body>
