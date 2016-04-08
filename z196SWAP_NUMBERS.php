<?php
/**
 * Created by PhpStorm.
 * User: Коля
 * Date: 16.02.2016
 * Time: 21:42
 */
$file = fopen($argv[1], "r");
while (! feof($file)) {
    $str = fgets($file);
    $str = trim($str);
$words = explode(" " , $str);
        $all = array();
    foreach($words as $word){
       $letter = preg_split('//', $word, -1, PREG_SPLIT_NO_EMPTY);
        $first = array_shift($letter);
       $last =  array_pop($letter);
        array_unshift($letter,$last);
        array_push($letter,$first);
        $wor = implode("", $letter);
        $all[] = $wor;
    }
    $lineAll = implode(" ", $all);
    echo $lineAll."\n";
}