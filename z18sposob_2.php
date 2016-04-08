<?php
/**
 * Created by PhpStorm.
 * User: Коля
 * Date: 07.02.2016
 * Time: 9:42
 */
//$var = 1;
//echo is_int($var);
$fn_array = file($argv[1]);
//$f_array = file("E:\MY_study\PHP\z18.txt");
print_r($fn_array);
foreach ($fn_array as $str) {
    list($x, $n) = explode(',', $str );
    $x = intval($x);
    $n = intval($n);
    $i = 2;
    $test = 0;
    while($test < $x) {
    $test = $n*$i;
        $i++;
    }
    echo "$test\n";
}



