<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <title>PHP基礎課題011</title>
</head>
<body>
    <p>
        <?php
        $product = ['name' => '玉ねぎ', 'price' => 200, 'origin' => '北海道'];

        foreach ($product as $key => $value) {
            echo "{$key} : {$value}<br>";
        }
        ?>
    </p>
</body>
</html>