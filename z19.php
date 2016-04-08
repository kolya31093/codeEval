<?php
/**
 * Created by PhpStorm.
 * User: Коля
 * Date: 07.02.2016
 * Time: 18:12
 */

//$str_array = file($argv[1]);
$str_array = file("D:\MY_study\PHP\TXT\z19.txt");
foreach ($str_array as $str) {
    list($n, $p1, $p2) = explode(',', $str);
    $n = intval($n);
    $p1 = intval($p1);
    $p2 = intval($p2);
    $n1 = decbin($n);
   // echo "$n1\n";
    $p1 = $p1 - 1;
    $p2 = $p2 - 1;
    $binur = preg_split('//', $n1, -1, PREG_SPLIT_NO_EMPTY);
    //var_dump($binur);
    $binur = array_reverse($binur);
    //var_dump($binur);
    //print_r($binur[$p1]); "\n";
    if ($binur[$p1] == $binur[$p2]) {
        echo"true\n";
        }
    else {
        echo"false\n";
    }
}