<?php
/**
 * Created by PhpStorm.
 * User: Коля
 * Date: 08.02.2016
 * Time: 15:24
 */
//$f_array = file($argv[1]);
//$f_array = file("E:\MY_study\PHP\z92.txt");
//print_r($fn_array);
foreach ($f_array as $str) {
    if (mb_strlen($str) > 0) {
        // $str = rtrim($str, "\n");
        $exp = explode(' ', $str);
        //var_dump($exp);
        $exp1 = array_pop($exp);
        //var_dump($exp1);
        print_r(end($exp));
    }
    else {
        continue;
    }
echo"\n";
}
