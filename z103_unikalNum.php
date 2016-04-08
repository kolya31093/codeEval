<?php
/**
 * Created by PhpStorm.
 * User: Коля
 * Date: 12.02.2016
 * Time: 15:06
 */
//$file = fopen("E:\MY_study\PHP\TXT\z103_unikalNum.txt", "r");
$file = fopen($argv[1], "r");
while (! feof($file)) {
    $str = fgets($file);
   //echo $str;
    $num = explode(' ', trim($str, "\n\t"));

    $num1 = array_count_values($num);//  возвращает массив, ключами которого являются значения массива array, а значениями - частота повторения значений array.array_values ключи массива по дефалту
    //var_dump($num1);
    asort($num1,SORT_NUMERIC);
    $resultNum1 = '';
    foreach ($num1 as $value) {
        $resultNum1 = $resultNum1.$value." ";

    }
    $resultNum1 = preg_replace ("/ +/"," ",$resultNum1);
    $num1 = explode(" ", $resultNum1);
    //var_dump($num1);
    //$num1[0] = intval($num1[0]);
    $num_count_values = array_count_values($num1);
    //var_dump($num_count_values);
     asort($num_count_values, SORT_NUMERIC);
    $resultNum_count = '';
    foreach ($num_count_values as $value) {
        $resultNum_count = $resultNum_count.$value." ";

    }
    $resultNum_count = preg_replace ("/ +/"," ",$resultNum_count);
    $num_count_values = explode(" ", $resultNum_count);
   // var_dump($num_count_values);
    $numflip = array_keys($num1);//цыфры
   $min = min($num_count_values);
    //$num1[0] = intval($num1[0]);
    if($min == 1) {


        //echo $numflip[0]."\n";
$pos = strrpos($str, $numflip[0]);
        $winer =substr($str,$pos,1);
        echo $winer;
    }
    else {
        echo "0";
    }
    //$keyDef = array_values($num1);
echo "\n";
}