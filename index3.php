<?php declare(strict_types=1) ?>
<body>
  <?php
    // あるユーザーの購入履歴を表示する関数
    function printPurchased(array $items, callable $extraDataFunc): void {
      echo '<table border = "1">';
      echo '<tr>';
      echo '<th>購入日</th>';
      echo '<th>商品名</th>';
      echo '<th>価格</th>';
      echo '<th>その他</th>';
      echo '</tr>';
      foreach ($items as $item) {
        echo '<tr>';
        echo '<td>', $item['date'], '</td>';
        echo '<td>', $item['name'], '</td>';
        echo '<td>', $item['price'], '</td>';
        // 「その他」欄に印字するデータは呼び出し元が自由に設定できます
        echo '<td>', $extraDataFunc($item), '</td>';
        echo '</tr>';
      }
      echo '</table>';
    }

    // メインルーチン

    // あるユーザが購入した商品の配列
    $items = [
      [
        'user-id' => 'ryuya-0222',
        'date' => '2021-07-13',
        'name' => 'DELLモニター',
        'price' => 15200,
        'color' => 'black',
        'size' => 23.8,
        'item-number' => 91025,
        'serial' => 'DELL1414'
      ],
      [
        'user-id' => 'paon-0124',
        'date' => '2021-03-11',
        'name' => 'モニターアーム',
        'price' => 4300,
        'color' => 'black',
        'size' => 23.8,
        'item-number' => 8033,
        'serial' => 'DELLMNT1'
      ]
    ];

    echo '<h3>ユーザーのマイページ内の購入履歴</h3>';
    printPurchased($items, function($item) {
      return "色：{$item['color']} サイズ：{$item['size']}";
    });

    echo '<h3>販売事業者ページの購入履歴</h3>';
    printPurchased($items, function($item) {
      return "ユーザーID：{$item['user-id']} 商品No：{$item['item-number']}";
    });

  ?>
</body>
