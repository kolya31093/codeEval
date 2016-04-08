<?php
/**
 * Created by PhpStorm.
 * User: Коля
 * Date: 13.02.2016
 * Time: 10:07
 */
$file = fopen($argv[1], "r");
while (! feof($file)) {
    $str = fgets($file);
    @list($stLetter, $stNum) = explode('|', $str);
    //list($haystack, $needle) = explode(',', rtrim($str, "\n"));

    $star = "*";
    $stLetter = $star.$stLetter;
    $all = array();
    $ar_num = explode(" ",$stNum);
    foreach($ar_num as $strN) {
        $strN = intval($strN);
        $letter = mb_substr($stLetter, $strN, 1);
        $all[] = $letter;
    }
    unset($all[0]);
    $text = implode('', $all);
    echo $text."\n";
}

