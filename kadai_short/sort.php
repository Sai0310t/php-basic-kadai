<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        /**
         * 配列を昇順または降順にソートし、結果を表示する関数
         *
         * @param array $array ソート対象の配列
         * @param bool $order ソート方向 (TRUE: 昇順, FALSE: 降順)
         */
        function sort_2way($array, $order) {
            if ($order) {
                echo "昇順にソートします。<br>";
                sort($array);
            } else {
                echo "降順にソートします。<br>";
                rsort($array);
            }

            foreach ($array as $value) {
                echo $value . '<br>';
            }
        }
        $nums = [15, 4, 18, 23, 10];

        sort_2way($nums, TRUE);
        sort_2way($nums, FALSE);
        ?>
    </p>
</body>

</html>