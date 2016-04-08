<?php
/**
 * Created by PhpStorm.
 * User: Коля
 * Date: 07.02.2016
 * Time: 22:49
 */




$fn_array = file($argv[1]);
//$f_array = file("E:\MY_study\PHP\z18.txt");
//print_r($fn_array);
foreach ($fn_array as $str) {
       if (mb_strlen($str) == 0) {
        continue;
    }
    $str = rtrim($str, "\n");
    $exp  = explode(' ', $str);

    $exp = array_reverse($exp);
    $imp = implode(" ", $exp);
       echo "$imp \n";
}