<?php
/**
 * Created by PhpStorm.
 * User: Коля
 * Date: 08.02.2016
 * Time: 16:00
 */
//$f_array = file($argv[1]);
$f_array = file("E:\MY_study\PHP\z107.txt");
//print_r($fn_array);
foreach ($f_array as $str) {
    if (mb_strlen($str) > 0) {
        // $str = rtrim($str, "\n");
        $exp = preg_split('//', $str, -1, PREG_SPLIT_NO_EMPTY);
        //var_dump($exp);
       $exp = array_unique($exp);
       $count = count($exp);
        $count = $count +1;
        //var_dump($exp);
  echo"$count";
    }
    else {
        continue;
    }
    echo"\n";
}