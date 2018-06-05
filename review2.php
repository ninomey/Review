
<?php
    // ５以外の数値を初期設定する
    // そもそも繰り返されないから
    $number = 5;
    
     // 5じゃない限り続ける

    while ($number != 5) {
        $number = mt_rand() % 10;
        print $number . PHP_EOL;
    }
?>