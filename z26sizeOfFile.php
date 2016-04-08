<?php
/**
 * Created by PhpStorm.
 * User: Коля
 * Date: 10.02.2016
 * Time: 20:46
 */
$count = 0;
$strings = file($argv[1]);
foreach ($strings as $str) {
    $string = preg_split('//', $str, -1, PREG_SPLIT_NO_EMPTY);//разбивает строку по регулярному выражению
    $kol = count($string);
    $count = $count + $kol;
}
echo $count;
