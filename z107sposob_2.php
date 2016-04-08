<?php
/**
 * Created by PhpStorm.
 * User: Коля
 * Date: 08.02.2016
 * Time: 16:00
 */

$file = fopen("D:\MY_study\PHP\z107.txt", "r");
//$file = fopen($argv[1], "r");
while (!feof($file)) {
    $str = fgets($file);
    if (mb_strlen($str) > 0) {
        // $str = rtrim($str, "\n");
        $str = rtrim($str, "\r\n");
        $exp = preg_split('//', $str, -1, PREG_SPLIT_NO_EMPTY);
        //var_dump($exp);
        $exp = array_unique($exp);
        $exp1 = array_filter($exp);
        $count = count($exp1);
        // echo $count;
        echo"$count";
        //var_dump($exp1);

    }
    else {
        continue;
    }
    echo"\n";
}