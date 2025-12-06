<?php
// 独自のソート関数
function sort_2way(array $array, bool $order): void {
    if ($order === true) {
        sort($array);   // 昇順
        echo "=== 昇順ソート結果 ===<br>";
    } else {
        rsort($array);  // 降順
        echo "=== 降順ソート結果 ===<br>";
    }

    foreach ($array as $value) {
        echo $value . "<br>";
    }
}

// Step4. ソート対象の配列を宣言
$nums = [15, 4, 18, 23, 10];

// Step5. 関数を呼び出し
sort_2way($nums, true);   // 昇順ソート
echo "<br>";
sort_2way($nums, false);  // 降順ソート
?>
