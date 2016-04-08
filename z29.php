<?php
/**
 * Created by PhpStorm.
 * User: Коля
 * Date: 10.02.2016
 * Time: 21:02
 */
$strings = file($argv[1]);
foreach ($strings as $str) {
    $str = trim($str, "\t\n\r");
    $arr = explode(',', $str);
    $arr = array_unique($arr);
    $imp = implode(",", $arr);
    echo $imp."\n";
}