<?php
/**
 * Created by PhpStorm.
 * User: Коля
 * Date: 07.02.2016
 * Time: 12:02
 */

$strings = file($argv[1]);
foreach ($strings as $str) {
    list($haystack, $needle) = explode(',', rtrim($str, "\n"));
    $res = strrpos($haystack, $needle);
    echo ($res !== false) ? "$res\n": "-1\n";

}