<?php
/**
 * Created by PhpStorm.
 * User: Коля
 * Date: 15.02.2016
 * Time: 16:24
 */
$strings = file($argv[1]);
$strings = file("D:\MY_study\PHP\TXT\z156_ROLLER COASTER.txt");
foreach ($strings as $str) {
    list($text, $word) = explode('|', trim($str));
    $regexp = '/$word/';

    $wArr = explode(" ", $text);
    foreach ($wArr as $oneW) {
        if (preg_match($regexp, $oneW)) {
            echo $oneW . " ";
        }
    }
    echo "\n";
}

 /**   $allWords = array();

    $count = preg_match_all($regexp, $text, $allWords);
    print_r($allWords);
    $wor = implode(" ", $allWords);
    echo $wor."\n";*/
