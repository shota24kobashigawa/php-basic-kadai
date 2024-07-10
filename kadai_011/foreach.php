<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編_kadai_011</title>
</head>

<body>
  <p>
    <?php
    $merchandise_deta = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];

    foreach ($merchandise_deta as $key => $value) {
      echo "{$key}:{$value}<br>";
    }
    ?>
  </p>
</body>

</html>