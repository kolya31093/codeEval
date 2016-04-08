<?php

$file = fopen($argv[1], "r");
while (! feof($file)) {
    $str = fgets($file);
    $str = trim($str);
    $str = str_replace(" ","1",$str);
$str = bindec($str);
//    $str = round($str);
//    $st = ceil($str);
    $st = number_format($str,0, '', '');
    echo $st."\n";
}