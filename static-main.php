<?php declare(strict_types=1) ?>
<body>
  <?php
  require_once dirname(__FILE__) . '/static.php';

  echo ExcelColumnConverter::calcAlphabetColumnName(3), '<br>';
  echo ExcelColumnConverter::calcNumberColumnName('F'), '<br>';
  ?>
</body>
