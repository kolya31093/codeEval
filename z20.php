<?php
/**
 * Created by PhpStorm.
 * User: Коля
 * Date: 10.02.2016
 * Time: 14:15
 */

$strings = file($argv[1]);
foreach ($strings as $str) {
    $str = strtolower($str);
    echo $str."\n";
}