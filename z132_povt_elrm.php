<?php
/**
 * Created by PhpStorm.
 * User: Коля
 * Date: 17.02.2016
 * Time: 8:50
 */
$strings = file($argv[1]);
foreach ($strings as $str) {
    $kol = explode(",", $str);//разбивает строку по регулярному выражению
    $kol1 = array_count_values($kol);
    $max = max($kol1);
    $all = array();
    $kol_all = array();

//    arsort($kol1, SORT_NUMERIC);
//    foreach ($kol1 as $value) {
//        $kol_all[] = $value;

//    }

    if ($max == 1) {
        echo "None";
    } else {
        arsort($kol, SORT_NUMERIC);
var_dump($kol);
        foreach ($kol as $value) {
            $all[] = $value;

        }


        }



    echo $all[0]."\n";
}

