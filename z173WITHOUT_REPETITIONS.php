<?php
/**
 * Created by PhpStorm.
 * User: Коля
 * Date: 16.02.2016
 * Time: 22:54
 */
$file = fopen($argv[1], "r");
while (! feof($file)) {
    $str = fgets($file);
    $pat = '/(.{1})\1*/i';
    $out = preg_replace($pat,'$1',$str);
//$st = preg_replace('~(.)\1+~i', '\\1', $str);
   $out = trim($out);
    $out = preg_replace ("/  +/","_",$out);
    echo $out;
}
 

