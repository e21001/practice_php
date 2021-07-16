<?php declare(strict_types=1) ?>
<body>
  <?php
  require_once dirname(__FILE__) . '/Customer.php';
  require_once dirname(__FILE__) . '/Address.php';
  $customer1 = new Customer('安里龍哉', new Address('沖縄県', '中城村'));
  $customer2 = clone $customer1;
  $customer2->changeName('伊藤花子');
  $customer2->changeAddress('神奈川県', '横浜市');

  print_r($customer1);
  print_r($customer2);
  ?>
</body>
