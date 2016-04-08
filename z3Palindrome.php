<?php
/**
 * Created by PhpStorm.
 * User: Коля
 * Date: 16.02.2016
 * Time: 19:22
 */
function numb($num)
{
    for($i =2; $i <= $num/2;$i++ ) {
        if($num % $i == 0) {
            return false;
        }

    }
    return true;

}

for ($num = 1000  ;  ;$num--  ) {
    if (numb($num)) {
        $n = preg_split('//', $num, -1, PREG_SPLIT_NO_EMPTY);
        if($n[0] == $n[2] ) {
            echo $num;
            return;
        }
    }
}

