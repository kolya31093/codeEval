<?php
/**
 * Created by PhpStorm.
 * User: Коля
 * Date: 08.02.2016
 * Time: 20:55
 */
$file = fopen("E:\MY_study\PHP\z107.txt", "r");
//$file = fopen($argv[1], "r");
while (!feof($file)) {
    $str = fgets($file);

        // $str = rtrim($str, "\n");
        $str = ucwords($str);



    echo"$str\n";
}