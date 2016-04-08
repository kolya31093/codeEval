<?php
/**
 * Created by PhpStorm.
 * User: Коля
 * Date: 16.02.2016
 * Time: 14:49
 */
$file = fopen($argv[1], "r");
while (! feof($file)) {
    $str = fgets($file);
$kol = 0;
    list($zero, $count) = explode(' ', trim($str));
    $z = "";
    $zer = 0;
    for($b = 0; $b < $zero; $b++){
        $z = $z.$zer;
    }
    $regexp = "/".$z."/";


    for($i = 1; $i <= $count; $i++){
    $binary = decbin($i);//переводим из десятеричной в двуичную

    if (preg_match($regexp, $binary)) {
        $kol++;
    }
}
echo $kol."\n";
}


