<?php
/**
 * Created by PhpStorm.
 * User: Коля
 * Date: 17.02.2016
 * Time: 16:16
 */
$strings = file($argv[1]);
foreach ($strings as $str) {
    $str = trim($str);
    if($str <10) {
        echo "True\n";
    }else{
        $ar = array_map("intval",preg_split('//', $str, -1, PREG_SPLIT_NO_EMPTY));
        $count = count($ar);
        for($i = 0; $i < $count; $i++) {
            $ar[$i] = pow($ar[$i],$count);
        }
        $sum = array_sum($ar);
        if($sum == $str){
            echo "True\n";
        }else{
            echo "False\n";
        }
    }
}