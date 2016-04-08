<?php
/**
 * Created by PhpStorm.
 * User: Коля
 * Date: 12.02.2016
 * Time: 14:53
 */
$file = fopen($argv[1], "r");
while (! feof($file)) {
    $str = fgets($file);
    $dec = hexdec($str);
    echo $dec."\n";
}