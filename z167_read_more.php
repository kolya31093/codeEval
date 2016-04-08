<?php
/**
 * Created by PhpStorm.
 * User: Коля
 * Date: 16.02.2016
 * Time: 17:13
 */
$file = fopen($argv[1], "r");
while (! feof($file)) {
    $str = fgets($file);
    $str = trim($str);
    $long = strlen($str);
    $more = '... <Read More>';
    if($long > 55) {
        $text = mb_substr($str,0,39) ;
        $text = trim($text);
        $text = $text.$more;
        echo $text;
    }else {
        echo $str;
    }

    echo"\n";
}