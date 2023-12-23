<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>foreach課題</title>
    </head>

    <body>
        <?php
        $onion = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];

        foreach ($onion as $key => $value) {
            echo "{$key}：{$value}<br>";
        }
        ?>
    </body>
</html>