<?php
declare(strict_types=1);

require_once dirname(__FILE__) . '/select-functions.php';

// メインルーチン
try {
  if (!isset($_GET['title']) || trim($_GET['title']) === '') {
    return;
  }
  $pdo = connect();
  $statement = $pdo->prepare('SELECT * FROM books WHERE title LIKE :title ORDER BY published DESC');
  $statement->bindValue(':title', '%' . $_GET['title'] . '%', PDO::PARAM_STR);
  $statement->execute();
} catch (PDOException $e) {
  echo '本の検索に失敗しました。';
  return;
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>検索結果</title>
</head>
<body>
  <h3>タイトルに「<?php echo escape($_GET['title']) ?>」を含む書籍の検索結果</h3>
  <table border="1">
    <tr>
      <th>タイトル</th>
      <th>価格</th>
      <th>発売日</th>
    </tr>
    <?php while ($row = $statement->fetch(PDO::FETCH_ASSOC)): ?>
      <tr>
        <td><?php echo escape($row['title']) ?></td>
        <td><?php echo escape(number_format($row['price'])) ?>円</td>
        <td><?php echo escape($row['published']) ?></td>
      </tr>
    <?php endwhile ?>
  </table>
</body>
</html>
