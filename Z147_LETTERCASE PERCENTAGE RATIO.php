<?php
/**
 * Created by PhpStorm.
 * User: Коля
 * Date: 13.02.2016
 * Time: 10:49
 */
$file = fopen($argv[1], "r");
while (! feof($file)) {
    $str = fgets($file);
    $str = trim($str);

    $count = strlen($str);
    $oneLet = 100 / $count;
        $arrWord = preg_split('//', $str, -1, PREG_SPLIT_NO_EMPTY);

    $count_b = 0;
    $count_s = 0;
    $reg_b = '/[A-Z]/';


    foreach($arrWord as $leetter) {
        if (preg_match($reg_b, $leetter)) {
            $count_b++;
        }else {
        $count_s++;
        }

    }

    $perB = $count_b * $oneLet;
    $perB = number_format($perB, 2, '.', '');
    //$perB = round($perB, 2);
    $perS = $count_s * $oneLet;
    $perS = number_format($perS, 2, '.', '');
    //$perS = round($perS, 2);

    echo "lowercase: ".$perS." uppercase: ".$perB."\n";

}

