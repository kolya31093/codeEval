<?php
/**
 * Created by PhpStorm.
 * User: Коля
 * Date: 11.02.2016
 * Time: 11:55
 */
$strings = file("E:\MY_study\PHP\TXT\z113_multiplicaationNumb.txt");
// $strings = file($argv[1]);
//var_dump($strings);
foreach ($strings as $str) {
    $str = preg_replace ("/\\|/"," ",$str);
    $str = preg_replace ("/  +/"," ",$str);
    //echo $str."**";
    $str1 = explode(" ", $str);
   // $str1 = array_filter($str1);
   // var_dump($str1);
    $str1 = array_values($str1);//возвращает все значения массива
    //$str1 = array_keys($str1);возвращяет все ключи массива
    //var_dump($str1);
    $kol = count($str1);
    // echo $kol;
    $half = $kol/2;
    $half = intval($half);
    $last = $half;
    //echo"$half , $last";
    for($i = 0; $i < $kol; $i++ ) {
        $strl[$i] = intval($str1[$i]);
    }
    for($key = 0; $key < $half; $key++, $last++ ) {
        $mult = $str1[$key] * $str1[$last];
        // print_r($mult);
        echo $mult." ";//."|||\n";
    }
    echo"\n";
}

