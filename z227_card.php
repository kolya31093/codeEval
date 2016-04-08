<?php
/**
 * Created by PhpStorm.
 * User: Коля
 * Date: 10.02.2016
 * Time: 14:37
 */
$f_arr = file($argv[1]);
foreach ($f_arr as $str) {
    $str =  str_replace(' ','',$str);//удаляет все пробелы
    $card = preg_split('//', $str, -1, PREG_SPLIT_NO_EMPTY);//разбивает строку по регулярному выражению
    $count_ar =  count($card);
    $mult = 0;
    $sumI = 0;
    $mn = 2;
    for($i = 2; $i <= $count_ar; $i+=3) {
        $mult = $mult + ($card [$i])* $mn;
        $sumI = $sumI + ($card[$i]);

    }
    $sum_ar = array_sum($card) - $sumI;
    $sum_card = $sum_ar + $mult;
    if ($sum_card % 10 == 0) {
        echo true."\n";
    }else {
        echo false."\n";
    }
}
