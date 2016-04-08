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
//print_r($fn_array);
foreach ($fn_array as $str) {
     list($a, $b) = explode(',', trim($str));
    $a = intval($a);
    $b = intval ($b);
    if($a%$b == 0){
        $x = $a/$b;
        echo"integer$x\n";
    }
    else {
        $x = $a/$b;
        echo"float$x\n";
    }
//    $a = $a - $b;
//    $b = $b + $a;
//    $a = $b - $a;
//
//echo"$a,$b\n";
}